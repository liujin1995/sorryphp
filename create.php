<?php
error_reporting(0);
function upload($secr,$filename){
require('qcloud/cos-autoloader.php');

$cosClient = new Qcloud\Cos\Client($secr);


try {
    $result = $cosClient->upload(
        //bucket的命名规则为你的{bucketname}-{appid} ，此处填写的存储桶名称必须为此格式，APPID在https://console.cloud.tencent.com/cam/capi找
        $bucket='gifpublic-1251660866',
        $key =$filename,
        $body = fopen("tmp_t/".$filename, 'rb'));
	unlink("tmp_t/".$filename);
    return $result;
} catch (\Exception $e) {
    return "$e\n";
}
}
function getgif($arr,$fn){
$tx= file_get_contents('t/template.ftl');
for($i=0;$i<9;$i++){
$re_str="{mx.sentences".$i."}";
if($i>count($arr)){
$tx=str_replace($re_str,"",$tx);
}else{
$tx=str_replace($re_str,$arr[$i],$tx);
}
}

   $numbytes = file_put_contents("tmp_t/".$fn.".ftl", $tx); 
   if($numbytes){
$cmd_str="ffmpeg -i t/template.mp4 -r 5 -vf ass=tmp_t/".$fn.".ftl,scale=240:-1 -y tmp_t/".$fn.".gif ";
$res = shell_exec($cmd_str);
unlink("tmp_t/".$fn.".ftl");
return $fn.".gif";
   }else{
       echo 'error';
   }

}
$str=$_GET["str"];//每句话用;分割
$di_g_n=md5($str);
$str=explode(";",$str);

$di=getgif($str,$di_g_n);
if($di!="error"){
	//Region:https://cloud.tencent.com/document/product/436/6224  选择就近的
	//secretId、secretKey在https://console.cloud.tencent.com/cam/capi
$sec_arr=array('region' => 'ap-guangzhou',
    'credentials'=> array(
        'secretId'    => '',
        'secretKey' => ''));
	$arr=upload($sec_arr,$di);
	//$arr=$arr[structure];//data;

	echo $arr[Location];

}

