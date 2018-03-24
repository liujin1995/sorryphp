根据li24361/sorryJava创作PHP版本

centOS下ffmpeg安装
[选择自己的版本](http://li.nux.ro/download/nux/dextop/)   
http://li.nux.ro/download/nux/dextop/el6/i386/nux-dextop-release-0-3.el6.nux.noarch.rpm
我服务器是centos6 32位，所以是上面这个

	yum install epel-release -y
	rpm --import http://li.nux.ro/download/nux/RPM-GPG-KEY-nux.ro
	rpm -Uvh 刚刚选择的版本网址
    yum install ffmpeg ffmpeg-devel -y

centOS安装字体,不安装这个，生成可能会报错

	yum groupinstall "fonts"


测试地址https://www.unique-liu.com/demo/sorry/create.php?str=%E5%A5%BD%E5%95%8A%3B%E5%88%AB%E8%AF%B4%E6%88%91%E6%98%AF%E4%B8%80%E7%AD%89%E8%89%AF%E6%B0%91%3B%E5%B0%B1%E7%AE%97%E4%BD%A0%E4%BB%AC%E7%9C%9F%E7%9A%84%E6%83%B3%E8%A6%81%E8%AF%AC%E5%91%8A%E6%88%91%3B%E6%88%91%E6%9C%89%E7%9A%84%E6%98%AF%E9%92%B1%E6%89%BE%E5%BE%8B%E5%B8%88%E5%B8%AE%E6%88%91%E6%89%93%E5%AE%98%E5%8F%B8%3B%E6%88%91%E6%83%B3%E6%88%91%E6%A0%B9%E6%9C%AC%E4%B8%8D%E7%94%A8%E5%9D%90%E7%89%A2%3B%E4%BD%A0%E5%88%AB%E4%BB%A5%E4%B8%BA%E6%9C%89%E9%92%B1%E4%BA%86%E4%B8%8D%E8%B5%B7%E5%95%8A%3Bsorry+%E6%9C%89%E9%92%B1%E6%98%AF%E7%9C%9F%E7%9A%84%E8%83%BD%E4%B8%BA%E6%89%80%E6%AC%B2%E4%B8%BA%E7%9A%84%3B%E4%B8%8D%E8%BF%87%E6%88%91%E7%9B%B8%E4%BF%A1%E4%BD%A0%E4%B8%8D%E4%BC%9A%E6%98%8E%E7%99%BD%E8%BF%99%E7%A7%8D%E6%84%9F%E8%A7%89%3B%E4%B8%8D%E6%98%8E%E7%99%BD+%E4%B8%8D%E6%98%8E%E7%99%BD
请求create.php?str=好啊%3B别说我是一等良民%3B就算你们真的想要诬告我%3B我有的是钱找律师帮我打官司%3B我想我根本不用坐牢%3B你别以为有钱了不起啊%3Bsorry+有钱是真的能为所欲为的%3B不过我相信你不会明白这种感觉%3B不明白+不明白
以;分割


时间对不上请修改t/template.ftl 中的start和end
Format: Layer, Start, End, Style, Name, MarginL, MarginR, MarginV, Effect, Text
Dialogue: 0,0:00:00.08,0:00:03.80,Default,,0,0,0,,{mx.sentences0}
Dialogue: 0,0:00:03.80,0:00:05.80,Default,,0,0,0,,{mx.sentences1}
Dialogue: 0,0:00:05.80,0:00:07.80,Default,,0,0,0,,{mx.sentences2}
Dialogue: 0,0:00:07.80,0:00:08.90,Default,,0,0,0,,{mx.sentences3}
Dialogue: 0,0:00:08.90,0:00:09.50,Default,,0,0,0,,{mx.sentences4}
Dialogue: 0,0:00:09.50,0:00:10.90,Default,,0,0,0,,{mx.sentences5}
Dialogue: 0,0:00:10.90,0:00:13.30,Default,,0,0,0,,{mx.sentences6}
Dialogue: 0,0:00:13.30,0:00:14.90,Default,,0,0,0,,{mx.sentences7}
Dialogue: 0,0:00:14.90,0:00:16.90,Default,,0,0,0,,{mx.sentences8}
