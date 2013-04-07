<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Sales extends CI_Controller {


public function index()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 集成销售 | 通信管理平台 ',
'aw_title2'   => '集成销售 -> 通信管理平台 ',
'left_title'   => '集成销售',

'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/sales" >通信管理平台</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/sales/vehicle" >车载集成系统</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/sales/lighting" >照明显示系统</a>

</span>
 
',
'right_body'   => '　&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;山东艾维通信依托国内三家电信运营商基础网络，借助科技通信手段，研发实现了“统一、融合、便捷、高效”的“综合管理平台”，突破了应急指挥调度跨平台、跨运营商、跨移动和固定网络的限制，建立了定位、图像、视频等数据统一融合的指挥调度管理平台。帮助政府部门、企事业单位、行业用户应急联动的管理，实现了综合信息的指挥调度。 <br>
1.技术架构<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 综合信息通信管理平台是以NGN（Next Generation Network）和3G技术为核心,有效融合了有线和无线、语音和数据、2G和3G、传统PSTN和NGN网络、电信网和互联网等，实现了电信全业务运营。同时，综合信息通信管理平台在设计中还充分考虑到了现有网络中的蜂窝电话、PSTN网关、PDA、集群等系统的特性，采用高性能DSP（Digital Signal Processing即数字信号处理）技术，完成了电路交换到数据交换的完美过渡。基于综合信息通信管理平台构建的通信平台能够最大限度的保护已有投资，挖掘沉淀资源潜力，并通过基于TCP/IP的IMS、NGN等最新技术实现非凡的系统性价比。<br><img src="../css/jishu.jpg" width="650" height="400"><br>



2.艾维综合信息通信管理平台企业版（MUC系统） <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 艾维综合信息通信管理平台企业版（简称MUC），是以艾维综合通信管理平台为基础，针对企业及行业级客户，提供的专业化通信指挥调度系统。<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 艾维综合信息通信管理平台企业版，可以完成MOTOROLA800MHZ数字交互集群的全部功能，是一种价格便宜，专业功能，可以为行业广为利用的专业化信息通信管理平台。 <br>
具体功能包括：<br><img src="../css/tongxin.jpg" width="650" height="400"><br>

（1）集中调度控制平台功能、状态显示<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  •专门设计的集中调度控制平台能够显示用户的各种状态，包括空闲、通话、振铃及挂机等。 <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  •让每个单位、每个部门设立独立的集中调度控制平台，可以管理本单位、部门的日常指挥调度。 <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  •在突发事件现场可设立多个临时指挥中心，统一指挥现场所有单位通信调度，还可与总指挥调度中心实时联网。 <br>
（2）单呼、组呼、群呼 <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •调度员直接点击群内用户所在键位即可将群内用户呼出。 <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •调度员通过逐个点击群内用户所在键位或直接点击事先编辑的小组即可将一组群内用户呼出。 <br>
（3）对讲呼叫（与各种“对讲机”的功能相似） <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 群内用户直接拨打组号，则类似对讲机一样把所有组内成员呼叫在一起。可单工/双工。可采用树逻辑手机小组模式，上级用户自动强插。 <br>（4）树逻辑强插及强拆、呼入及呼出 
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 调度员进行调度时，群内用户正在通话，可以通过插入调度提示音及直接话音插入的方法进行调度。也可以通过多级树逻辑方式，上级用户直接插到下级用户。 <br>
（5）呼叫中心/秘书台 <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 任何用户都可以通过接入号呼入调度平台由调度员进行相应操作，调度员可以通过调度平台呼叫任意电话，对其进行操作。<br> 
（6）一号通功能 <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 应急情况为保障通信指挥，发起“一号通”调度，可以随时联系到相关人员。<br> 
（7）短信文字调度 <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  通过集中调度控制平台实现短信发送、接收、转发、预置、管理等。 <br>
（8）移动图像监控调度 <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •通过无线网络和无线调度网络，把最新的突发事件现场图像实时传输到指挥中心及现场临时指挥中心，供决策用。指挥台可以把各种重要图像有选择的传输给相关领导和现场人员，实现完全动态的、所有信息可以掌控的立体指挥调度网络。 <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •通过3G网络实时传输现场图像，实现监控，保存、回放各种图像资料。 <br>
（9）车辆定位跟踪调度 <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •提供所有被调度者的定位信息，对人员、车辆实时锁定，通过指挥台GIS系统指挥调度所有人员，同时监控所有相关人员的具体位置，救援车辆的具体位置等，根据需要及时指挥调度。 <br>
（10）视频/电话会议<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  利用3G网络与运营商的IMS/NGN等网络连接，传输图像和视频资料，进行实时的视频电话会议。<br> 
（11）与OA、应急信息管理系统等融合 <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 根据国家和各地方的实际情况，与应急管理信息系统、政务OA办公网等连接，把各关联单位的应急预案设置在系统内，遇到突发情况，在几秒钟内就可以启动预案，实现从指挥中心到各关联单位到突发事件现场的完整的统一调度。 <br>
（12）定制研发系统接口 <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 系统具有强大的扩展性，预留了与指挥中心及其他系统的接口，可以定制开发与各种应用系统的接口。<br>

3.产品特点 <br><img src="../css/anli.jpg" width="650" height="400"><br>
（1）专业调度平台 <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  专业平台：可分级管理的专业平台，灵活的内部管理控制。 <br>
（2）融合通信，可靠稳定 <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  通信融合：一键式操作，跨网络、跨平台、跨运营商，多种类型应用终端，集通信融合之大成<br>。 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  可靠稳定：专业级服务，可靠稳定。2009年全运会，2010年世博会，均是该系统提供通信调度保障。 <br>
（3）应用灵活 <br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   便携：随时随地，使用计算机终端实现通信调度。 <br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   高效：功能强大，人性化设计，适用性强。 <br>
（4）性价比最高 <br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   性价比最高：艾维指挥调度平台（MUC企业版），是目前最具性价比的通信指挥调度平台，可完全替代MOTOROLA800MHZ数字交互集群的全部功能，是一种价格便宜，专业功能，可以为行业广为利用的专业化信息通信管理平台。',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');

}

public function vehicle()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 集成销售 | 车载集成系统 ',
'aw_title2'   => '集成销售 -> 车载集成系统 ',
'left_title'   => '集成销售',
'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/sales" >通信管理平台</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/sales/vehicle" >车载集成系统</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/sales/lighting" >照明显示系统</a>

</span>
 
',
'right_body'   => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 我司拥有无线宽带应急机动车载系统2项专利和无线宽带应急机动船载系统1项专利,是德国宾茨授权经销商，营销德国原装进口的移动通信指挥车、卫生救护车、及其它各种特许改装车辆和移动野战医院，并负责产品售后一条龙式的本地化服务。

  专利： 《无线宽带网络应急机动车载系统》  《宽带无线网络车载通信系统》  《船载无线网络系统》<br><img src="../css/16.jpg" width="650" height="400"><br>

德式通信指挥车<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  德式通信指挥车帮助用户解决在应急视频通信，抢险救灾通信保障以及卫星监测监控等社会公共安全、政府应急通信中对卫星通信应用要求。<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  应用领域：广泛应用于公安、交警、消防、边防、交通、人防、水利、卫生、无线电管理等政府部门及电信、广电、燃气、电力等企事业单位。<br><img src="../css/car.jpg" width="650" height="400"><img src="../css/15.jpg" width="650" height="400">



卫生救护车及移动战地医院 <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  奔驰重症监护车及移动战地医院秉承了德国奔驰品牌所代表的卓越品质和精湛技艺，更以其出色的安全性能赢得了全球业内认识的广泛青睐。<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  目前热销的三款德式救护车：奔驰VITO底盘的救护车，奔驰凌特324底盘的高顶救护车和箱式救护车。<br><img src="../css/bc1.jpg" width="220" height="163"><img src="../css/bc2.jpg" width="220" height="163" border="1"><img src="../css/bc3.jpg" width="200" height="165">
',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');
}

public function lighting()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 集成销售 | 照明显示系统 ',
'aw_title2'   => '集成销售 -> 照明显示系统 ',
'left_title'   => '集成销售',
'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/sales" >通信管理平台</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/sales/vehicle" >车载集成系统</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/sales/lighting" >照明显示系统</a>

</span>
 
',
'right_body'   => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我公司借鉴国内和国际上最新的城市照明控制和节能管理技术，根据城市照明效果与节能管理要求，采用最先进的无线数据传输技术、数据采集技术、计算机多媒体技术、计算机通讯技术、电力线通信技术、机电一体化技术结合城市地理信息GIS技术，研发了绿色照明智能管理系统。 <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;该系统能够自动控制城市照明的开灯、关灯、调光，并通过不同时段、不同的天气亮度及时准确地改变和控制城市照明的开灯、关灯、调光时段和时序，实现城市照明的节能。同时能够检测城市照明区域内灯具的工作状态，采集和统计电参数，并计算亮灯率和预测灯泡寿命。<br><img src="../css/zm1.jpg" width="650" height="400"><br>


无线远程路灯照明智能管理控制系统整体结构示意图<br>

LED显示屏 
适用范围：<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LED显示屏广泛应用于体育场馆、会展中心、城市广场、车站码头、交易厅、银行宾馆、医院、商务楼等场所。 <br>
案例展示：


照明产品的合作
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我司和良业照明是资源互补的战略合作伙伴，共同开拓城市高端照明节能产品研发推广、城市照明节能系统管理与服务，承接大型高端照明工程的咨询、设计和实施。"><br><img src="../css/zm2.jpg" width="650" height="400"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;良业照明的工程专业能力卓越，拥有国家一级照明施工承包资质和甲级照明工程设计资质，是2008年北京奥运会主会场国家体育场（鸟巢）的照明系统指定供应商，我们相信与良业照明公司的合作，必能实现客户高端照明的价值，带动照明行业进入新的天地。<img src="../css/zm4.jpg" width="650" height="400">',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');
}

 


}

