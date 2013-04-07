<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Hr extends CI_Controller {



public function index() //////////////////////////////////2
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 诚聘英才 | 销售部经理 ',
'aw_title2'   => '诚聘英才 -> 销售部经理 ',
'left_title'   => '诚聘英才',
'left_body'   => '
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/hr" >销售部经理</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/hr/adsystem" >高级系统集成师</a>
<br>
</span>

<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/hr/developers" >.net研发工程师</a>
</span>
',
'right_body'   => '岗位职责：<br>
1、在销售活动中，以行业知识和IT技能为基础，与客户进行有效沟通，正确了解和挖掘客户需求，进行项目可行性分析；<br>
2、 根据客户需求，快速设计解决方案，或根据客户招标要求编写投标方案书；<br>
3、 有效地向客户推介公司的相关业务经验、技术能力以及对客户的价值，行业推广材料撰写，成功案例整理；<br>
4、 根据需要参与项目咨询、开发、维护等活动，为交付解决方案提供业务和技术支持。<br><br>

岗位要求：<br>
1、具有2年以上的通信（企业）行业工作背景；相关工作经验3年以上；<br>
2、具有较强的外联公关能力，善于与人沟通，为人正直、诚信，有很强的事业心，对工作认真负责，能够承担较大工作压力；<br>
3、具有软件、解决方案型公司，服务产品等大客户销售经验，或相关售前支持经验；<br>
4、能够设计、组织解决方案，并与客户相关技术人员、商务人员进行交流，获取客户反馈并优化方案，具有优秀的方案讲解能力，熟悉市场调研方法和技巧；<br>
5、具备良好的学习能力，积极的工作态度，能够主动了解团队目标并将个人努力与实现团队目标结合起来；<br>
6、本科及以上学历； <br>
7、英语基本听说读写能力；<br>
8、具有项目经理证优先考虑。<br><br>
 
一经录用，享受一周两天休息日和国家法定节假日；单位按照劳动法规定统一交纳五险一金。',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');
}



public function adsystem() //////////////////////////////////1
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 诚聘英才 | 高级系统集成师 ',
'aw_title2'   => '诚聘英才 -> 高级系统集成师 ',
'left_title'   => '诚聘英才',

'left_body'   => '

<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/hr" >销售部经理</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/hr/adsystem" >高级系统集成师</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/hr/developers" >.net研发工程师</a>
</span>

',
'right_body'   => '职责定位：<br>
1.负责硬件网络系统集成方面的售前支持及技术咨询；<br>
2、负责硬件网络系统集成方面的产品方向与新业务研究/产品模型设计策划与包装/市场营销与产品推广策划/公关活动策划及公司培训/经营预测/市场信息和需求点的捕捉等策略性、创意性分析/开发成本与效益分析<br>
3.对所指定的项目的售前技术工作全面负责，了解客户需求分析，编制售前PPT，撰写解决方案、项目建议书等环节工作，与客户进行技术交流；参与各个售前项目投标活动，编写及讲解技术方案，用户现场答疑；<br>
4.硬件网络系统集成方面行业信息跟踪、汇总、分析、研究；<br>
5.完成上级交办的其它工作。<br><br>
任职资格：<br>
1.全日制专科以上学历，计算机/网络/电子/通信等相关专业，英语四级及以上；熟悉IBM、HP、浪潮的工作站/服务器及磁盘存贮设备；精通CISCO/3COM/华为等网络系列产品和解决方案，具有CCNP、CCDP、CCIE证书者优先。<br>
2.具有3年以上的通信（企业）行业工作背景及相关工作经验，有较强的外联及公关能力；<br>
3.3年以上IT及相关领域售前技术支持或项目实施工作经验，能够设计并实施各种规模的网络解决方案，有城市管理信息化、电子政务、系统集成等相关技术背景，对计算机网络、数据库等有深刻理解，能熟练制作技术方案或标书、讲解方案；<br>
4.具有较强的语言表达和沟通能力、项目运作能力、文档水平、信息收集及分析能力、有较强的客户服务观念；<br>
5.具有较强的工作主动性及团队合作精神，勤奋刻苦，爱岗敬业，能适应出差。<br>
6.具有项目经理证优先考虑。<br><br>
 
    一经录用，享受一周两天休息日和国家法定节假日；单位按照劳动法规定统一交纳五险一金。',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');

}

public function developers() //////////////////////////////////3
{
$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 诚聘英才 | .net研发工程师 ',
'aw_title2'   => '诚聘英才 -> .net研发工程师 ',
'left_title'   => '诚聘英才',
'left_body'   => '

<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/hr" >销售部经理</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/hr/adsystem" >高级系统集成师</a>
<br>
</span>
<span style=" background:url(../css/index_15.jpg) no-repeat  ;backgroud-position:0%;">
&nbsp; &nbsp;<a href="/hr/developers" >.net研发工程师</a>
</span>

',
'right_body'   => '1、全日制大学本科以上学历，计算机及相关专业，3年以上.NET软件开发经验；1年以上的项目管理经验。<br>
  2、精通C#、WPF、WCF等技术和框架，精通.NET Framework3.5；熟悉J2EE框架；<br>
  3、精通SqlServer、Oracle、DB2中一种以上数据库系统，能够熟练使用标准的SQL语言；<br>
  4、具备良好的沟通力、表达力、团队协作力以及责任心；独立解决技术问题，有较强的创新意识；<br>
  5、具备较强的责任心，能承担工作压力；<br>
6、能够编写技术文档，有良好的语言表达能力，具有良好的团队精神；<br>
7、为人正派、待人真诚、工作态度积极主动，有良好的职业素养；<br>
  8、参与OA系统、电子商务或大中型网站开发经验者优先。<br>
 <br>
 
      一经录用，享受一周两天休息日和国家法定节假日；单位按照劳动法规定统一交纳五险一金。',
);

$this->parser->parse('head', $data);
$this->parser->parse('info', $data);
$this->load->view('bottom');
}


}

