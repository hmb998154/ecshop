<?php 

if (!defined('IN_ECTOUCH'))
{
    die('Hacking attempt!');
}
/**
 * 预约数据集类
 */
class Service extends Base
{
	/**
	 * 短信appId
	 *
	 * @var string
	 */
	protected $appId = '30350';
	/**
	 * 短信密key
	 *
	 * @var string
	 */
	protected $signature = 'a7de29ff8d69ac6f6b451be7ac2cd658';
	/**
	 * 公司客服手机
	 *
	 * @var string
	 */
	protected $toMobile = '18459139617';
	// protected $toMobile = '18558728585';
	

	/**
	 * 写文件数据集
	 *
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function fileContents($data){
		$data = $data['create_time']."\t".'来源:'.$data['source']."\t".'用户名称:'.$data['user_name']."\t".'手机号:'.$data['mobile']."\t".'地址:'.$data['address']."\t".'需求:'.$data['remark']."\t"."\r\n";
		return $data;
	}

	/**
	 * 抢购写文件
	 *
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function writeFileRushToBuy($data){
		$data = $data['create_time']."\t" .'用户：'.$data['user_name']."\t".'手机号：'.$data['mobile']."\t".'货号：'.$data['goods_sn']."\t". "\r\n";
		return $data;
	}

	/**
	 * 判断来源
	 *
	 * @param  [type] $source [description]
	 * @return [type]         [description]
	 */
	public function checkSource($source){
		if($source=="mz"){
			$source="鸣珠";
		}elseif($source=="tc"){
			$source="淘翠";
		}elseif($source=="xcx"){
			$source ="小程序";
		}else{
			$source="其它";
		}
		return $source;
	}

	/**
	 * 预约短信数据集
	 *
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function smsMeetContents($data){
		$h=intval(date("H"));
		$datas = array(
			"appid"      => $this->appId,
			"to"         => $data['mobile'],
		);
		if($h>0 && $h<9){
			$datas['content'] = '【鸣世天下珠宝】尊贵的'.$data['user_name'].'(先生/女士)您好！您已成功预约“珠宝上门服务”，您的专属珠宝顾问将在12小时内与您取得联系。';
		}else{
			$datas['to'] = $this->toMobile;
			$datas['content'] = '【鸣世天下珠宝】来自'.$data['address'].',手机号为:'. $data['mobile'] .'的'.$data['user_name'].'(先生/女士)提交了预约珠宝预约上门服务，请及时回复。';
		}
		$datas['signature'] = $this->signature;
		return $datas;
	}

	/**
	 * 抢购短信数据集
	 *
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function smsRushToBuyContents($data){
		$h=intval(date("H"));
		$datas = array(
			"appid"      => $this->appId,
			"to"         => $data['mobile'],
		);
		if($h>0 && $h<9){
			$datas['content'] = '【鸣世天下珠宝】尊贵的'.$data['user_name'].'(先生/女士)您好！您已成功预约“抢购珠宝上门服务”，您的专属珠宝顾问将在12小时内与您取得联系。';
		}else{
			$datas['to'] = $this->toMobile;
			$datas['content'] = '【鸣世天下珠宝】来自'.$data['address'].',手机号为:'. $data['mobile'] .'的'.$data['user_name'].'(先生/女士)提交了预约抢购珠宝预约上门服务，请及时回复。';
		}
		$datas['signature'] = $this->signature;
		return $datas;
	}

}

