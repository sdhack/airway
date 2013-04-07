<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class About extends CI_Controller {


public function index()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 关于艾维 | 公司简介 ',
'aw_title2'   => '关于艾维 -> 公司简介 ',
'left_title'   => '关于艾维',

'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/about" >公司简介</a>
<br>
</span>

<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/about/achievements" >公司成就</a>

</span>

',
'right_body'   => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;山东艾维通信有限公司于2005年6月在济南创立，是山东省政府认定的“高新技术企业”，拥有1.8GHz专用无线频率资源、各类电信资质和相关电信资源。2007年，成为国家信息通信国际创新园（CIIIC）通信联盟发起单位和理事长单位；同年，艾维通信在青岛设立青岛艾维通信有限公司，形成艾维通信在山东投资建设的基本架构。2011年，成为现代港航物流信息服务产业创新联盟理事成员单位。艾维通信是政府和行业信息通信专业服务运营商。致力于建设并发展城市信息化专用的NGN网络及应用平台，结合公众资源来满足“数字城市”信息化应用需求，在电子政务、物流信息化、工业信息化、城市应急通信、平安工程、陆（铁）路交通运输、海空港等领域，为政府和行业用户提供包括应用平台承载、网络传输、数据处理、容灾备份、网络集成、终端应用、数据服务和专网建设等内容在内的全方位虚拟信息（网络）数据中心支撑。
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在国家体育总局、山东省政府的支持下，艾维通信参与了第十一届全运会赛事通信保障工作，圆满完成了第十一届全运会开幕式专业信息通信保障任务，打破了国外企业的长期垄断，成为第十一届全运会新技术应用的亮点，得到了各方面的高度评价。在国家体育总局的指导、支持下，艾维通信在国内建成了第一个高标准的、先进的省级体育信息数据中心， 是省级体育信息系统平台建设全面解决方案提供商。 
<br><img src="../css/zl1.jpg" width="218" height="280"><img src="../css/zl2.jpg" width="218" height="280"><img src="../css/zl3.jpg" width="218" height="280">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我公司积极倡导并营造一种“创新、诚信、坚毅、智慧”的文化作为公司的文化理念，诠释公司文化内涵。公司文化是一种非经济、非技术的特殊财产和竞争力，先进的公司文化能够为公司提供具有长远意义的、更广范围的发展方向，使公司更好更稳定地生存和发展，令员工目标明确步调一致，提高积极性和自我约束力。公司文化体现公司的价值观，无形却渗透在每个角落。<br>
<br><img src="../css/logo2.gif" width="650" height="180"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司发展中，团队的力量是公司进步的主流。在公司处处能感受到团队的温情与合作，感受到团队的力量，“团队”的概念已深入艾维人心里。团队是由少数有互补技能、愿意为了共同目的、业绩目标和方法而相互承担责任的人组成的群体。一个团队中应具备不同的团队角色，有实干者、协调者、推进者、创新者、信息者、监督者、凝聚者和完善者。协调者是团队中必不可少的，实干者在团队中也起着至关重要的作用。团队中，每一种角色都十分重要。团队角色恰恰是给成员以客观的评价，帮助他们正确地看待自己，有意识地发挥自己的长处。我们的团队有明确的目标，成员有不同的团队角色，成员间有良好的沟通方式、满满的归属感以及共同的价值观，是成熟且完善的团队。
',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');

}



public function achievements()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 关于艾维 | 公司成就 ',
'aw_title2'   => '关于艾维 -> 公司成就 ',
'left_title'   => '关于艾维',
'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/about" >公司简介</a>
<br>
</span>

<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/about/achievements" >公司成就</a>

</span>

',
'right_body'   => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2009年10月16日晚8时，第十一届全国运动会在山东济南开幕，浓郁的地方文化气息、深远的历史 内涵、唯美的意境表达，犹如一幅活动画卷，在我们眼前缓缓流淌。当大家沉浸在开幕式那令人叹为观止的表演时，山东艾维，却安静地隐于幕后，为央视主创团队当晚的现场通信指挥调度保驾护航。由此，山东不仅成就了一场全国体育盛事的视觉盛宴，更成就了一个民族的骄傲。做为民族企业，山东艾维第一次利用国际领先技术体系，打破了国外企业在国内大型体育赛事活动中信息通信保障方面的长期垄断，成为国内唯一大型赛事专业化信息通信保障方案提供商。
<br><img src="../css/20091.gif" width="650" height="200">
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;为了成功保障第十一届全运会开幕式及青岛赛区室外赛事的宽带无线多媒体通信系统，山东艾维先后完成了视频应用系统和指挥调度系统2个应用平台的开发建设，实现了对十一运会主场馆（省体育中心和奥体中心）、组委会信息中心、省政府办公区、济南高新区软件园及青岛沙滩排球赛场、OP帆船赛场、射箭赛场的全方位视频监控、图像采集、视频同传及宽带无线网络应用。在十一运会保障过程中，艾维团队以“更高的要求、更快的速度、更精的技术”完美地诠释“更高、更快、更强”的奥运精神，体现了艾维人“创新、诚信、坚毅、智慧”的理念。
<br><img src="../css/2009.jpg" width="650" height="350"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;十一运会保障网络： 无线备份网络链路   重点区域安保网络
参与赛事项目： 沙滩排球   射箭场   Op帆船
赛事应用服务： 宽带无线上网应用   远程视频同步回传   宽带无线应急通讯   车载卫星通信备份链路系统
<br><img src="../css/20092.jpg" width="650" height="320"> 
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;济南网络管理中心建在齐鲁软件园D座1楼，是十一运会宽带无线通信网络管理中心，也是未来山东艾维通信网络运维中心。网络管理中心配备核心路由交换设备、网元管理系统、指挥调度系统、AAA认证系统、数据库服务器、视频应用系统及各类应用服务器、防火墙、UPS供电系统等设备。济南网络中心用于宽带无线多媒体集群通信网的管理、维护与运营。 
<br><img src="../css/20093.jpg" width="650" height="150"> 
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;艾维展示中心建在组委会信息中心，主要进行赛事实况转播和艾维通信新技术展示，配备流媒体服务器、交换机、大屏幕、各类应用终端等设备。
<br><img src="../css/20094.jpg" width="650" height="150"> <br>
图1：山东省省委书记姜异康、省长姜大明、国家体育总局信息中心主任赵黎等领导参观省体育局艾维数据中心。
<br><img src="../css/20095.jpg" width="220" height="150"><img src="../css/7.jpg" width="200" height="150"> <img src="../css/5.jpg" width="220" height="150">  <br>
图2：10月28日，赵总代表公司接受山东省委书记　
姜异康（右一）等省领导的接见，表扬保障
有力，对十一运项目圆满完成表示祝贺。

图3：山东省委常委、 原宣传部李群部长
（右一）考察艾维保障工作。


下图：艾维公司十一运项目保障团队　　　
<img src="../css/banner02.jpg" width="650" height="200"> 
　　
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2009年第十一届全运会在山东成功举行，艾维作为民营通信运营企业的代表，成功提供了通信保障服务，是首家为国家级大型体育赛事活动开幕式提供通信指挥调度保障服务的民族企业。



',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');
}






}

