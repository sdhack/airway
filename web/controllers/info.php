<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Info extends CI_Controller {


public function index()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 体育信息化 | 综合应用平台 ',
'aw_title2'   => '体育信息化 -> 综合应用平台 ',
'left_title'   => '体育信息化',

'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info" >综合应用平台</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info/datacenter" >信息数据中心</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info/intelligence" >智能场馆建设</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info/dispatch" >指挥调度系统</a>

</span>
',
'right_body'   => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;体育信息化是在体育领域利用现代信息技术，通过对信息资源的整合、开发和广泛利用，不断提升教学、训练、经营、服务、管理、决策等活动的效率和水平，进而推动体育产业的整体发展，全面提高体育的社会效益、经济效益和竞争力的过程。从体育信息化建设的内容来看，应包括体育信息处理的计算机化、体育信息传输的网络化、体育信息资源管理的数据化、体育信息服务的社会化、体育管理决策的科学化五个方面。大力推进体育信息化建设，是体育发展变革的必然趋势，也是山东提升体育管理水平，全面推进体育产业发展的内在要求。 在整个信息化框架中，整体上划分为基础层、数据层、应用层、展现层和接入层，此外，还包括信息安全保障和维护外包管理两大体系。<br><img src="../css/yingyong.gif" width="650" height="400"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在基础网络设施上，构建省体育局基础业务专网，实现省、地、县三级管理机构的全覆盖，以及机关、协会、中心、训练基地、场馆等全接入，为省体育管理业务战略集中部署、业务信息及时传递、业务指令及时传达提供基础通道；在网络部署手段上，与通信运营商紧密合作，面向不同的地域和应用特征，将固定网、移动网、物联网、互联网的有效融合，为体育业务/管理系统提供全方位立体的承载基础。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;整合各地体育基础信息资源，形成全省统一的体育信息资源数据库以及全民健身、竞技体育等专题数据库，实现省内体育资源信息的集中管理与交换共享，为数据挖掘、科学决策提供有效的数据支撑；同时，在信息中心实现省级业务系统的物理集中，并在此基础上不断完善信息中心基础设施，逐步引入云计算和云存储应用，有效降低各级信息管理资源投入，提升信息化管理的专业化水平。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;应用层建设整体划分为体育政务信息应用和体育业务信息应用两个部分。 体育政务信息应用聚焦体育局政务办公与内部管理，以国家电子政务建设要求相匹配，从综合办公和综合管理两个领域完善体育电子政务手段。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;综合办公：按照国家电子政务的总体要求，以体育局OA系统建设为核心，整合邮件、公文流转、业务协同等实际应用，实现体育内部管理与业务流程的全面支撑以及省、市、县的全面覆盖，同时，在智能终端中定制开发体育业务管理功能，通过3G等移动通信手段，实现移动办公、远程办公，全面提升办公效率。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;综合管理：在省、地、县三级体育管理机构、场馆、中心、训练基地之间部署视频会议系统，提升决策部署时效性与现场指挥调度能力；在体育局部署面向工作人员的融合终端，整合身份识别、门禁、消费、考勤等核心应用，辅助内部管理效率提升。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;体育业务信息应用聚焦体育事业和体育产业的发展，从群众体育、竞技体育、体育产业三个方面建设应用体系：<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;群众体育：建设省级公共体育资源数据库，将全省面向全民健身的基础设施信息、服务机构信息、健身辅导员信息等实现集中管理，并在此基础上逐步加载数据挖掘手段，为各级体育政务机构实现科学管理提供决策依据；建设 省级体育公共信息服务平台，以体育资源数据库为依托，以省级体育门户和体育热线为界面，为公众提供体育信息、健身指导、场馆查询/预定等全方位体育信息服务。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;竞技体育：建设赛事应急联动指挥调度系统，整合赛场各类监控信息，实现赛事过程的综合监控、突发事件及时预警、事件现场指挥调度等；建设赛事信息综合管理系统，实现赛事信息的集中管理与多维度统计分析；建立全省体育从业人员信息数据库，以此为基础实现对从业人员评级管理的信息化支撑；推动省内电子竞技工作，以体育局信息中心机房为依托，实现电子竞技平台的集中部署；以三网融合为契机，推进全方位赛事转播，并实现基于互联网的赛事互动与公众参与。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;体育产业：试点推进面向体育园区内企业的公共服务平台，将信息化基础设施纳入体育产业园区的建设标准，提升园区服务水平与招商引资能力；建设体育电子商务平台，推动体育用品/体育服务提供者与体育消费者之间的沟通与信息共享，运用融合支付手段创新消费模式，提升体育消费的便利性；建设体育行业管理平台并与相关政务部门对接，实现对省内园区、企业的综合信息管理与全方位评定管控；构建 省级体育科研协作平台，推动政府、科研机构、院校、企业、训练中心之间实现体育科研协作和产学研一体化。<br><img src="../css/saishi.jpg" width="650" height="400"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;通过体育门户网站和体育热线，整合后台信息、应用、服务资源。为体育相关方提供全方位的体育服务：基于现有 省级体育政务门户，建设全省集中的体育门户网站，整合各类政务服务、体育便民服务的业务系统与业务资源，实现体育政务公开、体育信息发布、体育在线办事以及体育在线服务的一网式、一站式；建设全省统一的体育热线，实现热线服务界面与后台服务流程的贯穿，提升体育服务整体水平 。',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');

}

public function datacenter()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 体育信息化 | 信息数据中心 ',
'aw_title2'   => '体育信息化 -> 信息数据中心 ',
'left_title'   => '体育信息化',
'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info" >综合应用平台</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info/datacenter" >信息数据中心</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info/intelligence" >智能场馆建设</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info/dispatch" >指挥调度系统</a>

</span>
',
'right_body'   => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;自2008年北京奥运以来，我国主办或承办的各项重大体育赛事活动日益增多，各种类型的体育场馆基础网络的建设显得尤为重要。基础网络的建设和相关的机房维护水平，从另一个方面体现了体育水平的领先程度，也能够提升和扩展体育场馆的功能。  <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;体育场馆在举行大型体育赛事的过程中，网络系统承载着赛事管理、日常办公、视频监控等多项应用，数据交换量尤其是瞬间数据流量十分巨大。可以想象，如果网络系统的性能不足，整个赛事信息的高效传递则无法得到充分保障。 <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;即使是单个场馆的网络来说，性能需求同样很高。就拿外部人员接入网来说，其顺畅应用对体育场馆网络性能也是一个不小的挑战。按惯例，赛事过程中场馆内都会专设媒体网络专区，供媒体发送现场报道。在多媒体信息为王的今天，媒体对外发送的报道有很大一部分都是高清图片、视频，甚至有媒体需要对现场进行网络直播，这种高度集中的操作方式短期内对网络性能带来的压力极大。  <br><img src="../css/w1.jpg" width="650" height="400"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;针对赛事场馆的特殊需求，我司承接的体育场馆网络系统建设项目，采用具有高可靠性技术保障，并且在国内网上有大量的应用，成熟稳定性已经经历了充分考验，具备在扩展性、多业务支持能力、大容量接入能力等方面，有着十分明显的优势的高端交换机作为网络核心设备，使体育场馆网络的高性能需求得到充分的满足，在实际应用中也得到了用户的普遍认可。  <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;由于体育场馆在不同的赛事活动期间，会出现大量临时的、突发性的网络带宽使用需求。例如临时在某个区域安排新闻发布会等活动，可能在短时间内造成局部区域面临大量的有线和无线接入需求。因此，我司在方案设计中充分考虑了系统的冗余和灵活性。借助网络设备强大的处理能力以及高密度的端口数，来应对随时可能出现的需求“波峰”，最大程度上提高核心网络的可靠性和性能，在有需要时，迅速平滑地扩展网络容量和端口密度；同时在无线应用方面，使用业界领先水平的无线控制器及无线AP，只在终端根据需要灵活增加AP终端，无需对网络做其他调整，随时保证整个场馆网络覆盖无死角。  <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;同时，我司针对场馆应用特点，提供了更完善的服务保障。在重大赛事举行期间，山东艾维的技术人员还会驻扎在现场，实时地响应用户应用需求，来对赛事活动的运行和效率提供更有力的保障。随着中国体育基础设施的进一步发展，山东艾维将在更多体育场馆为更广泛的客户服务。  <br><img src="../css/w2.jpg" width="650" height="400"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;所有这些，都充分显示出了艾维在体育场馆网络建设和维护方面的领先优势，也让艾维在体育场馆网络建设领域具备了更强大的“话语权”。 <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在无线网络建设方面，作为专业从事通信的公司，我司致力于国际上先进的高速无线网产品与技术在国内应用与发展，为用户提供技术和其他增值服务，如无线网络局域网，广域网等。公司的用户服务部门针对一些用户需求除了工程安装和培训外，还承担网络工程的承接建设。业绩案例有企业专用网、小型办公网、互联网接入、局域网、校园网、移动多媒体网、远程网（50公里左右）、城域网等等。我司拥有多名微软MCSE、linux（RHCE）、思科（CCNA/CCNP）、华为、H3C、软件开发等工程师，他们的多年资深经验和熟练的英语水平可以有效保证服务质量，可以进行企业事业单位机房整套设备的托管维护服务。',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');
}

public function intelligence()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 体育信息化 | 智能场馆建设 ',
'aw_title2'   => '体育信息化 -> 智能场馆建设 ',
'left_title'   => '体育信息化',
'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info" >综合应用平台</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info/datacenter" >信息数据中心</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info/intelligence" >智能场馆建设</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info/dispatch" >指挥调度系统</a>

</span>
',
'right_body'   => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;山东艾维结合自身多年的行业应用经验，在体育信息化的智能场馆建设方面，具有独特的思路和强大的设计与实施能力。采用领先的立体式模块化通信结构和信息共享技术，联合山东大学Emcstar5.0宜达智能化系统，展开体育场馆智能化推广应用。<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Emcstar5.0宜达智能化系统将体育场馆内不同功能的智能化子系统在物理上、逻辑上和功能上连接在一起，以实现信息汇总、资源共享。<br>
通过统一系统平台和操作界面，将各个具有完整功能的独立子系统整合成一个有机整体，为体育场馆的日常运营服务。
支持多种通信接口和协议，并具有协议开放和开发功能，可以直接集成各类系统和设备。
建立标准、统一的数据库，具有标准的开放接口，为分布于各地的多个体育场馆的综合管理与调度提供基础平台。
先进、通用的软件开发技术和系统架构，便于系统升级和先进技术的应用。
 在体育场馆的日常维护过程中，为安保指挥中心提供全面、综合的环境信息，并接受安保指挥中心的统一调度。<br><img src="../css/2.jpg" width="650" height="400"><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 在体育场馆智能化系统中使用三维虚拟现实技术来对楼宇场景进行三维虚拟监控，相对于基于二维平面图形化的监控系统实现技术突破和功能创新。体育场馆智能化系统随着计算机技术的飞速发展，在用户使用界面和实时数据表现方面有了很大进步，从简单的数据字符显示到漂亮的图形化显示，再到有立体感的动态图形化显示，越来越接近现场实际监视和控制画面。基于IP的视频监控系统已经成为监控系统的核心业务需求。除此之外，视频监控的应用已不仅仅只为安防服务，在运动员日常训练中，为教练员修正训练计划和为领导的决策提供及时有效的参考依据起到了非常重要的作用，另外，在场馆综合管理、场馆应急等领域，视频监控作为日常业务系统的一部分，和视频会议、语音通信、即时通信、视频信息发布等各种多媒体系统的融合需求也逐步增多，同时需要对大量的多媒体数据进行保存和按需检索，这种多媒体融合应用的发展趋势正是业务模式向着多媒体化方向发展的必然结果。而在应用融合的趋势下，系统势必要解决原来各种不同业务所采用的不同技术之间的相互融合问题，这样才能真正多媒体应用合而为一。<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 视频监控也是安防系统的重要组成部分，监控区域涉及出入口、回廊、看台、VIP通道、贵宾室、场馆外部道路以及停车场等。
 我司通过采用先进的通信、信息处理、存储和多媒体技术，基于开放的中间件平台，实现四大组件的特性融合和架构优化，带来全新的业务体验。<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 视频监控系统是覆盖全部比赛和训练场馆的大型基于IP的网络监控系统。系统分为三个组成部分：监控中心，监控资源，用户群。监控资源是信息的提供者，用户群是信息的服务对象，各级监控中心是信息的管理者，是信息共享平台。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（1）前端监控资源<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 前端监控资源按照赛场监控要求由摄像机和视频编码设备两种设备组成，视频信号的采集采用一体化高速球型摄像机。视频编码设备支持H.264 MP、MJPEG、MPEG4、MPEG-2图像压缩格式，音频支持G.711μ标准；图像分辨率最高可达PAL制720*576（Full D1）；支持64Kbps-8Mbps视频码流编码，传输码率可按实际需求调节；提供多种网络接口，以适应多种组网环境。<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 前端视频监控点按照统一的规划和设计的要求在场馆的长轴和短轴两个方向上的合适位置进行安装。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（2）监控中心<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  监控中心是视频监控系统的核心部分，汇接各种监控资源，将所需的视频、音频、数据信息进行切换、显示、管理、编码，并根据授权进行实时播放、和浏览，是实现互联、互通、互控和满足比赛和平时训练实时监控的共享平台，为组委会、业务部门和各级领导决策、指挥调度、取证提供及时、可靠的报警和监控信息。<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  总监控中心是整个系统的功能中心、设备中心，是保证整个系统正常运行的关键部分，数据交换量大，设备多，在监控中心内部各设备组成一个局域网，连接数据库服务器、流媒体服务器、巡检服务器、客户端等。 <br><img src="../css/cg4.jpg" width="650" height="400"><br>视频会议作为一种利用通信网络召开远程会议的通信方式，将中心会议室及各体育场馆会议室中的语音、图像乃至数据（如PPT、文件）等信息综合在一起，通过压缩编码后进行的远距离传输，使处于两地或多个不同地点的与会人，既可以听到对方的声音，看到对方的形象，同时还能看到对方会议的场景，以及在会议中展示的图片、表格、文件等，缩短了与会方之间的距离，使大家如同面对面一样地交流，省去舟车劳顿，方便随时开会交流。因此，在体育信息化建设中应用得越来越广泛。 <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  我司提供各种专业级视频会议系统的设计、建设、维护等一条龙式的服务。采用多点控制单元为核心，并通过其与视讯终端协同工作，各场馆会议室之间和中心会议室之间可以轻松进行双向音视频沟通及资料分享，极大的提高赛事中和平时日常办公工作会议交流的效率。 <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MCU是视频会议的核心，当参加会议的终端数量多于2个时，需要经过MCU来进行控制，实现图像和语音的混合与交换，以及所有会场的控制等相关功能。我司可以提供20多款不同型号的MCU，能满足各种规模的应用。 <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 视讯终端包括高清硬件视讯终端、桌面软件终端等。视讯终端系统将摄像头、麦克风采集到的模拟视音频信号，进行压缩编码、多路复用后经传输线路送到MCU；同时将从传输线路上接收到的音视频信号进行解码处理，还原成会场图像、语音，以满足各种使用需求。软件视讯终端直接安装在用户PC中，如安装到笔记本电脑中，配合无线网络，即可实现移动视频会议功能。随着LED显示屏应用技术的不断发展与完善，LED显示屏已成为现代化体育场馆必备的配套设施，并起着十分重要的作用：<br>
介绍选手资料，比赛实况转播，超大、清晰地比赛直播画面，打破了座位的限制，让远距离观看比赛更加容易。<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 链接裁判系统、计时计分系统，LED显示屏可以实时播放比赛时间和比分。
 慢动作回放更成为裁判做出正确裁决提供依据。维护了比赛的公平、公正，减少了不必要的冲突。
 精彩场面、慢动作回放、特写镜头，给观众带来完美的视觉盛宴。
  商业广告的播放给比赛现场锦上添花，完美的画质和音响效果，使现场更具比赛气氛和震撼力。<br><img src="../css/ai.jpg" width="650" height="400"><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  与此同时，由于智能场馆建设中涉及到的软、硬件系统种类繁多，系统庞杂，各系统采用的通信协议和控制方法不尽相同，资源及信息的共享和各系统之间的统一控制显得尤为重要。我们的体育场馆智能化系统专门开发了接口系统，从根本上解决了不同子系统之间的兼容的问题，各子系统之间可以无缝的进行资源信息共享，统一调度，为体育场馆的综合管理和提高效率提供强大的支持。<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 本系统能够实现体育场馆相关系统的远程集成监控，可以帮助管理人员及时掌握场馆的运行状况并做出正确决策，以期达到对场馆及时最优的综合管理目的。',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');
}

public function dispatch()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 体育信息化 | 指挥调度系统 ',
'aw_title2'   => '体育信息化 -> 指挥调度系统 ',
'left_title'   => '体育信息化',
'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info" >综合应用平台</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info/datacenter" >信息数据中心</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info/intelligence" >智能场馆建设</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/info/dispatch" >指挥调度系统</a>

</span>
',
'right_body'   => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 山东艾维结合多年的行业应用经验推出的指挥调度系统是一套完美的电话调度及汇接应用系统，是新一代的电话调度系统，在体育信息化建设中，起到了相当重要的作用。它是以NGN（Next Generation Network）和3G技术为核心。有效融合了有线和无线、语音和数据、2G和3G、传统PSTN和NGN网络、电信网和互联网等，实现了电信全业务运营。设计中还充分考虑到了现有网络中的蜂窝电话、PSTN网关、PDA、集群等系统的特性，采用高性能DSP（Digital Signal Processing即数字信号处理）技术，完成了电路交换到数据交换的完美过渡。<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 基于综合信息通信管理平台构建的通信平台能够最大限度的保护已有投资，挖掘沉淀资源潜力，并通过基于TCP/IP的IMS、NGN等最新技术实现非凡的系统性价比。<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 此系统支持多调度席位，用电脑坐席代替传统的调度键盘，更加突出了软件调度功能。系统集电话呼入接听，电话呼出调度，三方电话汇接，单呼、组呼、群呼下属电话等功能于一体，同时系统兼容传真的自动/手工发送、接收，短信息的接收、发送，是指挥调度的得力帮手。<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 系统基于计算机网络构架，一个服务器电脑，多个调度坐席电脑。采用 Windows操作系统，支持MDB，SQLserver，Oracle等主流数据库系统。<br><img src="../css/zhihui.gif" width="650" height="400"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 本系统具有以下特点：<br>
1、灵活投资<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 租赁使用：无软硬件设备投资；不需要更换终端及号码 <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; （现有手机、电话、小灵通），即可组建应急指挥调度；<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 自建系统：获取专业的大容量应急通信指挥调度平台<br>
2、专业调度平台<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 专业平台：分级管理的独立平台，灵活的内部管理控制；<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 通信融合：一键式操作，使操作变得更方便、更快捷；<br>
3、指挥调度灵活<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 自建平台：只要能上网，就能随时随地进行应急通信的指挥调度；<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 高效平台：通讯时能够随意进行分组、合并组、追加成员和移出成员等操作。',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');
}


}

