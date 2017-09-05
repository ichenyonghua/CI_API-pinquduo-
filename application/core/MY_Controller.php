<?php
class MY_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();

		// 统一入口控制代码 Donghu

		$this->setCORSHeader();
	}

	/**
	 * 跨域请求头（目前是为了微信商城访问）   
	 */
	public function setCORSHeader() {
		header("Access-Control-Allow-Origin:*");
	}

    /**
     * 客户端返回成功
     *
     * @param array $data
     */
	protected function success($msg='获取成功', Array $data=array())
    {
        echo json_encode(array('status'=>'1', 'msg'=>$msg,'result'=>$data));
        exit;
    }

    /**
     * 客户端返回失败
     */
    protected function failed($msg='获取失败')
    {
        echo json_encode(array('status'=>'-1', 'msg'=>$msg));
        exit;
    }
}