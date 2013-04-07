<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Haven extends CI_Controller {


public function index()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 港航物流 | 港口集中监控系统 ',
'aw_title2'   => '港航物流 -> 港口集中监控系统 ',
'left_title'   => '港航物流',

'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/haven" >港口集中监控系统</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/haven/frontal" >港口前端应用系统</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/haven/distribution" >港口物流信息平台</a>

</span>
',
'right_body'   => '①物流运输实时监控系统 <br>
②集装箱视频识别及验残系统 <br>
③智能堆场通信及定位系统 <br>
④智能仓库定位及管理系统 <br>
⑤电子车牌电子驾照系统<br><img src="../css/gxt.jpg" width="650" height="400"><br>',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');

}

public function frontal()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 港航物流 | 港口前端应用系统 ',
'aw_title2'   => '港航物流 -> 港口前端应用系统 ',
'left_title'   => '港航物流',
'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/haven" >港口集中监控系统</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/haven/frontal" >港口前端应用系统</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/haven/distribution" >港口物流信息平台</a>

</span>
',
'right_body'   => ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RFID信息化港口物流管理系统就是针对目前我国大部分港口的现场作业管理、理货管理、车辆出入港管理等现状设计的由RFID电子车牌取代纸面单据和传统入港证，实现杂货码头生产系统的货物、车辆数据实时采集，生产、库场、出入港动态化管理。

<br><img src="../css/qian.gif" width="650" height="400"><br>',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');
}

public function distribution()
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 港航物流 | 港口物流信息平台 ',
'aw_title2'   => '港航物流 -> 港口物流信息平台 ',
'left_title'   => '港航物流',
'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/haven" >港口集中监控系统</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/haven/frontal" >港口前端应用系统</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/haven/distribution" >港口物流信息平台</a>

</span>

',
'right_body'   => ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;艾维通信基于综合信息通信管理平台研发的《港口物流信息公共服务平台》可以与现有系统实现无缝对接，该平台在进一步提升现有港口信息化水平的基础上，着力拓展与整合同物流产业上下游相关的服务功能，为客户提供更加贴切和周到的服务。可实现对港外物流公司和货物运输的有效监管。该平台的建设可以实现对物流公司和运输车辆的定位与指挥调度，减少空车等待率，以及货物运输的全程监管，进一步强化港口对物流的管理职能，提高港口的管理和运行效率。同时，不断完善港口物流信息公共服务平台的业务功能和资源共享利用水平，提供更多的增值服务，最终形成一个以港区及广泛辐射地域为服务对象的综合物流网络平台。<br><img src="../css/pingtai.jpg" width="650" height="400"><br>
①信息资源共享<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;《港口物流信息公共服务平台》可以为海关、国检、海事、铁路、货主、船公司、船代等重要口岸单位和物流企业建立信息交换与共享的途径，通过《港口物流信息公共服务平台》，物流企业可查询所有必要信息，特别是货物到港的时间、数量及配送目的地。同时港口也可以随时查询物流企业的车源信息，进行空车配送的调度调配。<br>
②统一信息标准<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;《港口物流信息公共服务平台》可与物流企业的原有信息终端，如GPS导航定位终端、车载摄像头、对讲机等相结合，统一数据和接口标准，建立基础框架，提供与物流公司、港口调度中心、应急联动指挥调度中心、货场站作业区、仓储区、财务结算中心、车船队、信息中心等部门的信息有限共享，建成高效的物流运输调度通信指挥网。具备网络化信息服务功能，便于货主通过信息平台查询相关货物配送信息，更为直观便捷。应用信息系统可对物流服务全过程进行状态查询和监控。',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');
}




}

