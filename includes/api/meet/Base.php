<?php 

if (!defined('IN_ECTOUCH'))
{
    die('Hacking attempt!');
}
/**
 * 预约公用基类
 */
class Base
{
	/**
	 * $db类
	 *
	 * @var [type]
	 */
	protected $db;
	/**
	 * ecs类
	 *
	 * @var [type]
	 */
	protected $ecs;

	protected $config;

	protected $smsUrl = 'https://api.mysubmail.com/message/send.json';

	/**
	 * 构造函数
	 * 
	 */
	public function __construct(){

		$this->_config();

	}

	/**
	 * curl发送
	 *
	 * @return [type] [description]
	 */
	protected function _curl($url,$data){
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($curl, CURLOPT_POST, 1);                            //post方式提交 
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);//要提交的信息
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl, CURLOPT_HEADER, FALSE);
		$content = curl_exec($curl);
		curl_close($curl);
		return $content;
	}

	/**
	 * 数组拼接
	 *
	 * @param  [type] $arr [description]
	 * @return [type]      [description]
	 */
	protected function formatParam($arr){
		$str  ='';
		foreach ($arr as $key => $val) {
			$str .=$key . "=" .$val . "&";
		}
		return rtrim($str,"&");
	}


	/**
	 * 预约写文件
	 *
	 * @return [type] [description]
	 */
	protected function writeFile($content,$fileName){
		$contents=iconv('utf-8','gbk', $content);
		$fq=fopen($fileName,"a+");
		fwrite($fq, $contents);
		fclose($fq);
	}




	/**
	 * 输出json数据
	 *  
	 * @param  [type] $status [description]
	 * @param  [type] $msg    [description]
	 * @param  [type] $data   [description]
	 * @return [type]         [description]
	 */
	public function _json($status='200',$msg="请求成功",$data){

		$result = array(
			'status' =>$status,
			'data'   =>$data,
			'msg'    => $msg
		);
		return json_encode($result);
	}

	/**
	 * json成功输出
	 *
	 * @param  string $msg    [description]
	 * @param  string $status [description]
	 * @param  [type] $data   [description]
	 * @return [type]         [description]
	 */
	public function _success($data){

		$result =  array(
			'status' => 200,
			'data' =>$data,
			'msg' => "请求成功"
		);
		return json_encode($result);
	}

	/**
	 * json错误输出
	 *
	 * @return [type] [description]
	 */
	public function _error($msg="请求失败"){

		$result = array(
			'status' =>201,
			'data'   =>'',
			'msg'    => $msg
		);
		return json_encode($result);
	}

	/**
	 * 配置文件赋值
	 *
	 * @return [type] [description]
	 */
	public function _config(){
		$this->db = $GLOBALS['db'];
		$this->ecs = $GLOBALS['ecs'];
		$this->config = $GLOBALS['meet_lan'];
	}

	/**
	 * 取当前时间
	 *
	 * @return [type] [description]
	 */
	public function getTime(){
		return date('Y-m-d H:i:s');
	}


}

