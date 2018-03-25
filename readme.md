根据li24361/sorryJava创作PHP版本

<p>centOS下ffmpeg安装</p>
<p>[选择自己的版本](http://li.nux.ro/download/nux/dextop/)</p>   
<p>http://li.nux.ro/download/nux/dextop/el6/i386/nux-dextop-release-0-3.el6.nux.noarch.rpm</p>
<p>我服务器是centos6 32位，所以是上面这个</p>

	yum install epel-release -y
	rpm --import http://li.nux.ro/download/nux/RPM-GPG-KEY-nux.ro
	rpm -Uvh 刚刚选择的版本网址
    yum install ffmpeg ffmpeg-devel -y

<p>centOS安装字体,不安装这个，生成可能会报错</p>

	yum groupinstall "fonts"

<p>tmp_t目录必须777权限！另外，必须开启shell_exec!!!</p>
	
	
<p>[测试地址](https://www.unique-liu.com/demo/sorry/)</p>
<p>请求</p>
<p>create.php?str=好啊%3B别说我是一等良民%3B就算你们真的想要诬告我%3B我有的是钱找律师帮我打官司%3B我想我根本不用坐牢%3B你别以为有钱了不起啊%3Bsorry+有钱是真的能为所欲为的%3B不过我相信你不会明白这种感觉%3B不明白+不明白</p>
<p>以;分割</p>


<p>时间对不上请修改t/template.ftl 中的start和end</p>
<p>Format: Layer, Start, End, Style, Name, MarginL, MarginR, MarginV, Effect, Text</p>
<p>Dialogue: 0,0:00:00.08,0:00:01.80,Default,,0,0,0,,{mx.sentences0}</p>
<p>Dialogue: 0,0:00:03.00,0:00:04.80,Default,,0,0,0,,{mx.sentences1}</p>
<p>Dialogue: 0,0:00:05.80,0:00:07.80,Default,,0,0,0,,{mx.sentences2}</p>
<p>Dialogue: 0,0:00:07.80,0:00:09.50,Default,,0,0,0,,{mx.sentences3}</p>
<p>Dialogue: 0,0:00:09.90,0:00:10.90,Default,,0,0,0,,{mx.sentences4}</p>
<p>Dialogue: 0,0:00:11.50,0:00:12.70,Default,,0,0,0,,{mx.sentences5}</p>
<p>Dialogue: 0,0:00:13.30,0:00:16.50,Default,,0,0,0,,{mx.sentences6}</p>
<p>Dialogue: 0,0:00:17.70,0:00:18.90,Default,,0,0,0,,{mx.sentences7}</p>
<p>Dialogue: 0,0:00:18.90,0:00:19.90,Default,,0,0,0,,{mx.sentences8}</p>
