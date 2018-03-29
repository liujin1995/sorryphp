<?php
error_reporting(0);
function upload($secr,$filename){
require('qcloud/cos-autoloader.php');

$cosClient = new Qcloud\Cos\Client($secr);


try {
    $result = $cosClient->upload(
        //bucket的命名规则为你的{bucketname}-{appid} ，此处填写的存储桶名称必须为此格式，APPID在https://console.cloud.tencent.com/cam/capi找
        $bucket='gifpublic-1251660866',
        $key ="gif/".$filename,
        $body = fopen("tmp_t/".$filename, 'rb'));
	unlink("tmp_t/".$filename);
    return $result;
} catch (\Exception $e) {
    return "$e\n";
}
}
function getgif($arr,$fn,$name,$tp_i){
$tx= file_get_contents('t/'.$name.'.ftl');
for($i=0;$i<$tp_i;$i++){
$re_str="{mx.sentences".$i."}";
if($i>count($arr)){
$tx=str_replace($re_str,"",$tx);
}else{
$tx=str_replace($re_str,$arr[$i],$tx);
}
}

   $numbytes = file_put_contents("tmp_t/".$fn.".ftl", $tx); 
   if($numbytes){
$cmd_str="ffmpeg -i t/".$name.".mp4 -r 5 -vf ass=tmp_t/".$fn.".ftl,scale=240:-1 -y tmp_t/".$fn.".gif ";
$res = shell_exec($cmd_str);
unlink("tmp_t/".$fn.".ftl");
return $fn.".gif";
   }else{
       echo 'error';
   }

}
$str=$_GET["str"];//每句话用;分割
$type=$_GET["t"];//生成的类型，参数1,2,3,4，对应的1-sorry，2-乌蝇哥，3-梁非凡，4-王境泽
$di_g_n=md5($str);
$str=explode(";",$str);
$isqcloud=false;//是否开启腾讯云对象储存
switch ($type) {
    case "1": $template_name="template";$tp_i=9;break;
    case "2": $template_name="wyg";$tp_i=6;break;
    case "3": $template_name="lff";$tp_i=11;break;
    case "4": $template_name="wjz";$tp_i=4;break;    
    default: $template_name="template";$tp_i=9;
}

$di=getgif($str,$di_g_n,$template_name,$tp_i);
if($di!="error"){
	
	if($isqcloud){
	//上传到云储存后会删除本地的gif
	//Region:https://cloud.tencent.com/document/product/436/6224  选择就近的
	//secretId、secretKey在https://console.cloud.tencent.com/cam/capi
$sec_arr=array('region' => 'ap-guangzhou',
    'credentials'=> array(
        'secretId'    => '',
        'secretKey' => ''));
	$arr=upload($sec_arr,$di);
	//$arr=$arr[structure];//data;

	echo $arr[Location];
	}else{
		//保留本地的gif，直接抛出
		echo "tmp_t/".$di;
		
	}
}
//生产环境在PHP7.2，理论支撑PHP7
