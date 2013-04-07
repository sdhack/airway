<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {


public function index()
{

$this->load->library('parser');

$data = array(
'aw_title'   => '山东艾维通信有限公司 | 体育信息化 | 港航物流 | 集成销售 | 行业解决方案',
'blog_heading' => 'My Blog Heading',
);

$this->parser->parse('head', $data);

$this->load->view('middle'); 
$this->load->view('bottom'); 		
}


}

