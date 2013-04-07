<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Solution extends CI_Controller {


public function index()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 解决方案 | 数字医疗方案 ',
'aw_title2'   => '解决方案 -> 数字医疗方案 ',
'left_title'   => '解决方案',

'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution" >数字医疗方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/oilfield" >油田应用方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/government" >电子政务方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/landresources" >国土资源方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/stategrid" >电力行业方案</a>

</span>
',
'right_body'   => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;对于医院，采用无线网络的最大优势在于无线网络的及时性和移动性，采用艾维新一代宽带无线网络，集合医院的HIS(医疗信息管理系统)、PACS(影像存档与通讯)系统，可以使整个医院处于一种整体的计算机网络系统管理之下，网络信号的无隙覆盖，将加快对病人病况的认识和处理，无论是对医生、护士还是工作人员，整个工作的进程都将是可控的。无线网络方案解决了地域位置的限制面对不同的医疗应用区域。 例如典型的多媒体应用，它既包括划单、药物收费、库存等纯文字数据信息存储与传输，也包括B超照片、X光片、腔镜检查记录、血管造影等化验和检查数据的多媒体数据信息的快速的在不同的医疗应用区域间传递。<br>

<img src="../css/yl1.jpg" width="650" height="400"><br>
&nbsp;&nbsp;&nbsp;&nbsp; 用艾维新一代宽带无线网络所架构的网络能实现有线网络的一切功能，同时他解决了有线网络的部分局限性，可以让专家，医生，管理者在医院的任何地方都能方便的查找信息，使用笔记本电脑无线传输将不再受网线限制的灵活性，随着网络的无线化，您上网查资料，进行交流也将无线化。<br>
&nbsp;&nbsp;&nbsp;&nbsp; 利用艾维新一代宽带无线网络，医生和护士在病房，诊室，急救室，手术时可以不必带着沉重的病例资料，使用笔记本电脑就可以实时的记录、查询和传递信息。对于特级护理的病人，可通过无线网络随时查看患者监控数据和病情。 <br>
&nbsp;&nbsp;&nbsp;&nbsp;利用艾维新一代宽带无线网络，药剂师将适时的根据医生制定的药剂配方，正确的配置药品剂量。可以避免看不清楚或看错医生的处方而造成不必要的医疗差错。 <br>
&nbsp;&nbsp;&nbsp;&nbsp;对于在不同环境下的突发性情况，比如接到具有特殊情况的病人，专家可以不必寻找计算机去查帐资料来帮助诊断，当时就可上网查询，没有一分钟的延误。 <br>
&nbsp;&nbsp;&nbsp;&nbsp;在查房的过程中，医生或者护士可以通过笔记本电脑（ LAPTOP ）将患者的各项数据输入计算机，可以通过计算机随时查询患者的即往病史、过敏史等关键资料，可以通过计算机核对处方药品及处置方式是否正确等等。 <br>
&nbsp;&nbsp;&nbsp;&nbsp;针对临床教学过程中，专家或医生可以通过笔记本电脑的无线接入，调取特殊患者的相关医学案例，结合现场患者情况，为学生提供生动，多样的教学模式。<br>无线远程医疗系统<br>
&nbsp;&nbsp;&nbsp;&nbsp;远程医疗系统可以使不同位置的医疗团队通过网络连接实现远程医疗资源共享，医生按照病人实际症状和线上联合会诊结果，给病人提供实时、正确的医疗诊断。这不仅让病人享受到更加完善的医疗资源，同时也免去了病人长途奔波的不便。结合艾维新一代宽带无线网的远程医疗系统可以实现终端用户之间的点对点、点对多点的交流，可以召开大规模的远程医疗视频直播教学，把视频、音频、文档、图片等信息分到到每个终端。专家或医生可以通过笔记本电脑接入宽带无线网，调取特殊患者的相关医学案例，结合现场患者情况，为学生提供生动，多样的教学模式。120紧急医疗救护救援车系统结合艾维新一代宽带无线系统能建立指挥中心同120紧急医疗救护救援车之间的专用数据线路，实现指挥中心与救护车之间的移动通信。救护车的定位信息、工作状态信息可以上传到指挥中心、调度指令可以从指挥中心下达到救护车，并保证救护车与病家及指挥中心的电话联系。<img src="../css/yl2.jpg" width="650" height="400"><br>


视频监控系统<br>
&nbsp;&nbsp;&nbsp;&nbsp;通常医院下属部门科室较多，具有地域广、人员杂的特点，医院安保的工作人员需要应对防火、防盗、应急突发事件；医务人员需要实时查看危重病房患者的情况；医院财务部门需要对日常财务流程监控管理；医生重要手术实况视频录像等等，都需要监控有一套完备的监控系统。结合艾维新一代宽带无线网的视频监控方案具有灵活机动、高带宽的特点。系统可分为监控前端、传输网络、监控中心三个主要部分。<br>
监控前端：也即远程监控终端单元，由监控摄像机、视频压缩编码器、艾维新一代宽带无线终端CPE等组成，还可以增加告警探头，一旦发生了紧急情况，会立即发出报警信号给监控系统以及联动报警系统，同时监控摄像机会自动地抓拍图片或视频录像，还可增加云台设施对监控摄像机进行全方位俯仰、左右操作和镜头变焦、变倍控制。<br>
传输网络：基于艾维新一代宽带无线网的图像传输方式，给客户提供了高速稳定的网络系统，主要由艾维新一代宽带无线网、和有线专网组成。
监控中心：中心控制室完成对各个监控点的信息采集、储存、分析、诊断，可即时控制和监测所有各防控现场或区域，一般由视频解码器、电脑或电视墙等显示屏组成。
宽带无线接入互联网<br>
&nbsp;&nbsp;&nbsp;&nbsp;为了满足医院院区的医务工作人员、病患者的无线互联网接入需求，可采用无线CPE终端设备和PCMCIA终端卡的笔记本电脑，接入宽带无线网，实现真正的宽带无线移动接入互联网。只要是在无线网络覆盖区域内，用户不必局限在固定的地点使用。比如在病房内，在医护人员允许的身体情况下，在适当的时间内，应用艾维新一代宽带无线网可以为病患者提供上网服务，通过自己的手提式电脑通过无线网络进行工作事务的远程处理，也可通过 MSN 或 QQ 回复朋友的问候。真正达到住院办公两不误。艾维新一代宽带无线技术能提供高速稳定的网络带宽，还能很好的支持高速移动，另配多样化的终端也能为用户提供多种个性化的服务。',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');

}

public function oilfield()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 解决方案 | 油田应用方案 ',
'aw_title2'   => '解决方案 -> 油田应用方案 ',
'left_title'   => '解决方案',
'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution" >数字医疗方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/oilfield" >油田应用方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/government" >电子政务方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/landresources" >国土资源方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/stategrid" >电力行业方案</a>

</span>
',
'right_body'   => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在方圆几十平方公里的油田开采区域内，在各单井、计转站和联合站等生产现场，可以设置无线视频监控点，通过点对多点的无线连接方式，建立油田监控中心与各监控点间的无线传输链路，实现生产现场图像信息、生产数据、设备运转数据、原油储备和运输信息等的实时动态传输，为采油生产的指挥调度提供准确及时的第一手资料。同时，在很多无人职守的油田生产区域，原油及其生产设施的安全保卫工作，也是相关部门工作的重中之重。生产现场的无线远程视频监控网络能够为生产现场的安全保卫工作提供强有力的支持，保障油田保卫部门对不法犯罪活动的快速打击。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;艾维新一代宽带无线视频监控方案结构图如图1所示。系统可分为监控前端、传输网络、监控中心三个主要部分。<br>
监控前端：也即远程监控终端单元，由监控摄像机、视频压缩编码器、艾维新一代宽带无线终端CPE等组成，还可以增加告警探头，一旦发生了紧急情况，会立即发出报警信号给监控系统以及联动报警系统，同时监控摄像机会自动地抓拍图片或视频录像，还可增加云台设施对监控摄像机进行全方位俯仰、左右操作和镜头变焦、变倍控制。<br>
传输网络：基于艾维新一代宽带无线网的图像传输方式，给客户提供了高速稳定的网络系统，主要由艾维新一代宽带无线网、internet（和专网）组成。<br>
监控中心：中心控制室完成对各个监控点的信息采集、储存、分析、诊断，可即时控制和监测所有各防控现场或区域，一般由视频解码器、电脑或电视墙等显示屏组成。<br>

<img src="../css/yt1.jpg" width="650" height="400"><br>
 

艾维新一代宽带无线视频监控系统工作流程描述如下：<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;摄像头采集信号传给编码器，编码器主要完成模拟视频监视信号的数字采集、影像压缩、监控数据处理、报警信号的采集、网络的传输等功能。它可将前端的模拟信号通过数字视频压缩技术（H.264或MPEG-4）处理成可变码率、可变帧率的高清晰实时数字图像经过标准以太网接口连接终端接入设备（CPE）接入到艾维新一代宽带无线宽带视频监控网络，通过艾维新一代宽带无线网络把数据发送到监视中心。<br>
语音通信系统<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在缺乏有线语音网络的油田环境中，可以利用艾维新一代宽带无线接入系统在布置摄像头的地方配置电话机，电话机的数量视用户需求情况而定，用户可以使用个人手持PDA、VOIP话机和普通电话（功能实现由普通话机和IAD设备及无线CPE终端组成）进行语音通信。在这种网络结构下，用户不仅可以实现与网外用户的语音互通，还可以实现网内用户免通信费，大大地为企业节省了通信成本 。<br>
<img src="../css/yt2.jpg" width="650" height="400"><br>


固定语音用户可通过两种接入方式分别接入网络：<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1、普通电话：固定语音应用由普通话机和IAD设备及CPE终端组成，普通电话机连接在IAD设备上， IAD设备通过WAN口与无线CPE设备相连。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、个人手持PDA、VOIP话机：个人手持PDA可直接接入到宽带互联网，实现固定、移动的语音应用。VOIP话机的固定语音应用是通过VOIP话机与无线CPE设备相连实现的。<br>
数据采集系统<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;为提高勘探开发基础数据采集水平，监测抽油机载荷、电潜泵井及螺杆泵井电机电流、功率因数等设备运转数据，在油田实时采集与传输井口压力、井口温度、井底流压、井底温度等多项勘探基础数据是非常必要的。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;艾维新一代宽带无线数据采集方案结构图如图3所示。在需要进行数据采集的地方，布置油井数据采集终端，该终端可与艾维新一代宽带无线终端相连，通过无线终端将采集的数据上传到数据采集应用服务器，后台工作人员就可以对采集到的数据进行分析了。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 在艾维新一代宽带无线系统无线信号覆盖的区域内，无论是固定接收点还是车载移动接收点，都可以实时接收到钻探点采集的数据信息，保障检测控制中心可以迅速准确掌握辖区内各油井的工作状况，及时发现隐患，同时实现基础数据的及时采集入库，完善了油田基础信息采集系统。<img src="../css/yt3.jpg" width="650" height="400">',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');
}

public function government()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 解决方案 | 电子政务方案 ',
'aw_title2'   => '解决方案 -> 电子政务方案 ',
'left_title'   => '解决方案',
'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution" >数字医疗方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/oilfield" >油田应用方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/government" >电子政务方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/landresources" >国土资源方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/stategrid" >电力行业方案</a>

</span>
',
'right_body'   => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;艾维通信政务应急解决方案是针对政务应急需求提出的综合政务管理应用解决方案，是艾维通信在现有无线宽带技术积累的基础上，引入一系列先进的关键技术和设计理念（如OFDMA技术，信道跟踪和预测技术，先进的编码技术等）而研发的宽带综合无线接入网络，支持用户在视频、语音、数据业务下的移动、漫游、切换等功能，它可以为政务应急行业提供多种应用方案。<br>
无线视频会议系统<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;目前在政务办公中常会使用到视频会议系统，到目前为止，这些视频业务（如视频会议、现场转播等）都是通过有线的方式实现而有线方式的视频会议往往受到地点的限制，召开会议准备的时间周期较长，在特殊的场合和临时的事件现场，很难开展视频会议。利用艾维新一代宽带无线网召开大规模的视频会议，可以把视频、音频、文档、图片等信息分到每个会议终端，而这个会议终端有可能是大型的会议室也有可能是移动的会议终端，从而实现视频会议的移动化，且在这种网络环境下的视频会议能保证晰流畅的视频图像和高质量的语音。<br>
<img src="../css/dz1.jpg" width="650" height="400"><br>
 
电子政务信息发布系统<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;随着“效率型政府、服务型政府”方面的建设加快，政府行政部门需要传达的信息量也自然快速上升，如果按照传统的告示板的方式，把要传达的事件编排好，打印出来，再粘贴上去，可能会浪费很多的时间。信息的传达也会不畅，给工作带来失误和不便。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;艾维宽带无线网凭借自身的技术优势，通过便捷性的无线网络，可以把政府的信息、天气信息、居民购物信息、最新事件信息、居民生活指数信息等及时地滚动出现在一个指定的屏幕上，这样也就提升了政府发布信息的效率和效果。<br>
<img src="../css/dz2.jpg" width="650" height="400"><br>
 
城市网格化管理系统<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;城市网格化管理即在城市管理中运用网络地图的技术，以单位面积为基本单位，将区域所辖区域划分成若干个网络状单元，由城市管理监督员对所分管的网格实施全时段监控，同时明确各级地域责任人为辖区城市管理责任人，从而对管理空间实现分层、分级、全区域管理的方法。其工作流程概括为：信息收集、立案、任务派遣、任务处理、核查、结案等环节。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在目前的城市网格化管理系统中，用于现场监督员对有状况的现场信息（图片、文字）传递的通信平台主要采用的是GSM和CDMA 1X网络，而GSM和CDMA 1X网络系统固有的窄带缺点使得这种信息传输存在不及时和不清楚的弊端，如果采用艾维新一代宽带无线网络，不仅可以准确地将现场信息图片及时、清晰的传递给监督中心，甚至可以在现场拍摄视频传递回去，从而使得监督中心的工作人员更好地掌握现场状况，准确地进行任务派遣。这对于进一步提高城市管理水平，及时解决人民群众最关心、最直接、最现实的利益问题是切实有效的。',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');
}

public function landresources()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 解决方案 | 国土资源方案 ',
'aw_title2'   => '解决方案 -> 国土资源方案 ',
'left_title'   => '解决方案',
'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution" >数字医疗方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/oilfield" >油田应用方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/government" >电子政务方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/landresources" >国土资源方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/stategrid" >电力行业方案</a>

</span>
',
'right_body'   => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;艾维新一代宽带无线接入系统是艾维通信在现有无线宽带技术积累的基础上，引入一系列先进的关键技术和设计理念（如OFDMA技术，信道跟踪和预测技术，先进的编码技术等）而研发的宽带综合无线接入网络，支持用户在数据业务下的移动、漫游、切换等功能，它可以为环境保护与国土资源部门提供多种应用方案。<br>
视频监控应用系统<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;国土资源部门在地质灾害防治监测预警过程中往往要使用到视频监控系统，在地质灾害防治监控重点地区将现场的实时图像上传至地质环境监控中心，同时对区域范围内新产生的环境污染和生态破坏进行监控。环境保护部门也需要实时图像监督和跟踪污染企业完成环保治理任务，监督其稳定达标。由于视频监控点较分散，分布范围广，而且大多设置在环境较恶劣的地区，通过有线监控的方式往往难以实现。利用艾维新一代宽带无线技术实现的无线视频监控系统就能很好的满足这类视频监控应用。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;艾维新一代宽带无线视频监控方案结构系统可分为监控前端、传输网络、监控中心三个主要部分。<br>
 <img src="../css/gt1.jpg" width="650" height="400"><br>
1.监控前端：也即远程监控终端单元，由监控摄像机、视频压缩编码器、艾维新一代宽带无线终端CPE等组成，还可以增加告警探头，一旦发生了紧急情况，会立即发出报警信号给监控系统以及联动报警系统，同时监控摄像机会自动地抓拍图片或视频录像，还可增加云台设施对监控摄像机进行全方位俯仰、左右操作和镜头变焦、变倍控制。<br>
2.传输网络：基于艾维新一代宽带无线网的图像传输方式，给客户提供了高速稳定的网络系统，主要由艾维新一代宽带无线网、internet（和专网）组成。<br>
3.监控中心：中心控制室完成对各个监控点的信息采集、储存、分析、诊断，可即时控制和监测所有各防控现场或区域，一般由视频解码器、电脑或电视墙等显示屏组成。
艾维新一代宽带无线视频监控系统工作流程描述如下：<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;摄像头采集信号传给编码器，编码器主要完成模拟视频监视信号的数字采集、影像压缩、监控数据处理、报警信号的采集、网络的传输等功能。它可将前端的模拟信号通过数字视频压缩技术（H.264或MPEG-4）处理成可变码率、可变帧率的高清晰实时数字图像经过标准以太网接口连接终端接入设备（CPE）接入到艾维新一代宽带无线视频监控网络，通过艾维新一代宽带无线网络把数据发送到监视中心。<br>环保在线检测系统<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在环保系统中，常常需要对众多的污染排放点进行实时监测，大部分监测数据需要实时发送到管理中心的后端服务器进行处理。由于监测点分散，分布范围广，而且大多设置在环境较恶劣的地区，通过有线通信的方式传送数据往往难以实现。利用艾维新一代宽带网络进行无线数据传输，能成为环保部门环保在线检测通信选择的通信手段亮点。环保检测数据通过艾维新一代宽带网络及时发送到环保监察部门，使整个环保监察透明公开，有效的提高了工作的监督性和时效性，为环境保护提供崭新的管理方式。<br>
<img src="../css/gt2.jpg" width="650" height="400"><br>


GIS空间信息管理定位系统<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;利用艾维新一代宽带无线网可建立国土资源GIS的空间分析功能，进行数据增值服务。例如：通过以不同时期的地理空间基础数据和正射影像图为数据核心，结合土地利用详查图，可进行国土资源动态监测，为科学规划和管理提供决策依据；通过数字高程模型数字正射影像图、数字线划图为数据核心，结合人口经济、土地利用等专题数据，运用生态学理论和方法以及3S技术，可更好地分析耕地分布现状，提出社会经济与生态合理退耕还林规划方案，增强退耕还林规划的可操作性。结合艾维新一代宽带无线网的GIS空间信息管理平台具有提供与地质灾害有关的空间数据的采集、处 理、存储、显示、应用和管理的功能。国土资源管理部门的工作人员可以通过艾维无线便携终端实时查阅各类国土资源信息，比如可以通过艾维无线便携终端进行GIS空间信息管理定位，可以有效的对违规建筑、破坏湖泊、海洋、矿产等资源进行定位勘测，以实行科学管理，从而为国土资源行业提供高效的行政、执行管理。<br>
应急通信系统<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;应急通信调度是国土资源部门在处理地质灾害应急事件中，展开救灾工作的重要应用系统，在灾情监测、分析、预警与决策平台的支持帮助下，综合分析，形成决策，下达命令，调动资源，派遣队伍，指挥救灾应急工作。同时，通过联动快速反应系统，调度其他相关系统的资源，共同参与救灾工作中来，从而降低灾害损失。<br>


   

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;应急通信系统主要包含监视控制和数据收集，以及呼叫处理等。艾维新一代宽带无线接入系统对指挥调度具有良好的支持，其具体应用有：<br>
1、群组语音对讲（或者语信）<br>
2、群组即时信息发布（Push-to-ALL）<br>
3、在线状态显示<br>
4、控制中心对客户端的调度指挥<br>
5、动态群组管理<br>
6、连接办公邮件系统',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');
}

public function stategrid()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 解决方案 | 电力行业方案 ',
'aw_title2'   => '解决方案 -> 电力行业方案 ',
'left_title'   => '解决方案',
'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution" >数字医疗方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/oilfield" >油田应用方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/government" >电子政务方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/landresources" >国土资源方案</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/solution/stategrid" >电力行业方案</a>

</span>
',
'right_body'   => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在电力系统分布区域内，在各变电站、电力传输干线等现场，可以设置无线视频监控点，通过点对多点的无线连接方式，建立电力监控中心与各监控点间的无线传输链路，实现现场图像信息、运行数据的实时动态传输，为电力安全生产的提供准确及时的第一手资料。同时，在很多无人职守的电力生产区域，设施的安全保卫工作，也是相关部门工作的重中之重。现场的无线远程视频监控网络能够为安全保卫工作提供强有力的支持，保障电力保卫部门对不法犯罪活动的快速打击。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;艾维新一代宽带无线视频监控方案结构图如图1所示。系统可分为监控前端、传输网络、监控中心三个主要部分。<br>
监控前端：也即远程监控终端单元，由监控摄像机、视频压缩编码器、艾维新一代宽带无线终端CPE等组成，还可以增加告警探头，一旦发生了紧急情况，会立即发出报警信号给监控系统以及联动报警系统，同时监控摄像机会自动地抓拍图片或视频录像，还可增加云台设施对监控摄像机进行全方位俯仰、左右操作和镜头变焦、变倍控制。<br>
传输网络：基于艾维新一代宽带无线网的图像传输方式，给客户提供了高速稳定的网络系统，主要由艾维新一代宽带无线网、internet（和专网）组成。<br>
监控中心：中心控制室完成对各个监控点的信息采集、储存、分析、诊断，可即时控制和监测所有各防控现场或区域，一般由视频解码器、电脑或电视墙等显示屏组成。<br>

 <img src="../css/dl1.jpg" width="650" height="400"><br>

艾维新一代宽带无线视频监控系统工作流程描述如下：<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;摄像头采集信号传给编码器，编码器主要完成模拟视频监视信号的数字采集、影像压缩、监控数据处理、报警信号的采集、网络的传输等功能。它可将前端的模拟信号通过数字视频压缩技术（H.264或MPEG-4）处理成可变码率、可变帧率的高清晰实时数字图像，经过标准以太网接口连接终端接入设备（CPE）接入到艾维新一代宽带无线宽带视频监控网络，通过艾维新一代宽带无线网络把数据发送到监视中心。<br>
语音通信<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在缺乏有线语音网络的油田环境中，可以利用艾维新一代宽带无线接入系统在布置摄像头的地方配置电话机，电话机的数量视用户需求情况而定，用户可以使用个人手持PDA、VOIP话机和普通电话（功能实现由普通话机和IAD设备及无线CPE终端组成）进行语音通信。在这种网络结构下，用户不仅可以实现与网外用户的语音互通，还可以实现网内用户免通信费，大大地为企业节省了通信成本。<br>

 
<img src="../css/dl2.jpg" width="650" height="400"><br>

固定语音用户可通过两种接入方式分别接入网络：<br>
1、普通电话：固定语音应用由普通话机和IAD设备及CPE终端组成，普通电话机连接在IAD设备上， IAD设备通过WAN口与无线CPE设备相连。<br>
2、个人手持PDA、VOIP话机：个人手持PDA可直接接入到宽带互联网，实现固定、移动的语音应用。VOIP话机的固定语音应用是通过VOIP话机与无线CPE设备相连实现的。<img src="../css/dl3.jpg" width="650" height="400"><br><br>
电力远程抄表<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 对于电力部门来说，远程电力抄表一直是一件非常头疼的事情，需要投入大量的人力、物力和财力。因为数量众多，地理位置分散，给工作人员带来极大的不方便。应用远程自动抄表后，勿需人工上门，杜绝了人为因素在抄表收费中的失误，避免电费漏失，为电力部节约人力资源，从而有不可估量的经济效益，同时为电力部门提供了用户用电量及缴费情况的查询，从而避免“关系电、权利电、人情电”，对改善服务质量，提高电力部门形象，具有明显的社会效益。远程自动抄表在电力管理自动化中应用是非常适合我国国情的，充分利用现有资源和技术，结合艾维新一代宽带无线网的远程自动抄表系统必将在城乡电网中大量推广，为电力部门创造更高的生产效率。',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');
}


}

