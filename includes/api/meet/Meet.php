<?php 

if (!defined('IN_ECTOUCH'))
{
    die('Hacking attempt!');
}
/**
 * 预约接口类
 */
class Meet extends Service
{

	/**
	 * 预约接口
	 *
	 * @return [type] [description]
	 */
	public function reserve($input){
		//检测来源
		$source=$this->checkSource($input['source']);
		//检测字段
		// $check = Check::meetCheck($input);
		$data  = array(
			'user_name'     => $input['user_name'],
			'mobile'    	=> $input['mobile'],
			'address'   	=> $input['address'],
			'remark'    	=> $input['remark'],
			'create_time'   => $this->getTime(),
			'add_time'      => time(),
			'source'        => $source,
		);


		//取最后一条数据
		$sql =" SELECT meet_id,mobile,add_time  FROM ecs_meet WHERE mobile='" .$data['mobile']."' ORDER BY meet_id DESC ";
		$meetInfo = $this->db->getRow($sql);
		if($meetInfo){
			//检测今天是否预约
			if(Check::dayCheck($meetInfo['add_time'])==false){
				return $this->_error($this->config['meet_success']);
			}
		}
		//写入数据
		$insertId = $this->db->autoExecute($this->ecs->table('meet'), $data, 'INSERT');
		if($insertId){
			//写文件
			$this->writeFile($this->fileContents($data),"tg.txt");
			//发送短信
			$data = $this->smsRushToBuyContents($data);
			$data = $this->formatParam($data);
			$res = $this->_curl($this->smsUrl,$data);
			return $this->_json('200',$this->config['success'],$res);
		}
		return $this->_error($this->config['fail']);
	}


	/**
	 * 抢购接口
	 *
	 * @param  [type] $input [description]
	 * @return [type]        [description]
	 */
	public function rushToBuy($input){

		$goodsSn = $input['goods_sn'];
		$sql = " SELECT goods_id,goods_sn,goods_name FROM ecs_goods WHERE goods_sn='" .$goodsSn."'";
		$goodsInfo = $this->db->getRow($sql);
		/*if(!$goodsInfo){
			return $this->_error($this->config['goods_error']);
		}*/

		//数据集
		$data  = array(
			'user_name'     => $input['user_name'],
			'mobile'    	=> $input['mobile'],
			'goods_sn'   	=> $goodsSn,
			'create_time'   => $this->getTime(),
			'add_time'      => time(),
		);

		//取最后一条数据
		$sql =" SELECT id,mobile,add_time  FROM ecs_rush_to_buy WHERE mobile='" .$data['mobile']."' ORDER BY id DESC ";
		$meetInfo = $this->db->getRow($sql);

		if($meetInfo){
			//检测今天是否预约
			if(Check::dayCheck($meetInfo['add_time'])==false){
				return $this->_error($this->config['meet_success']);
			}
		}

		$insertId = $this->db->autoExecute($this->ecs->table('rush_to_buy'), $data, 'INSERT');
		if($insertId){
			//写文件
			$this->writeFile($this->writeFileRushToBuy($data),"rushToBuy.txt");
			//发送短信
			$data = $this->smsRushToBuyContents($data);
			$data = $this->formatParam($data);
			$res = $this->_curl($this->smsUrl,$data);
			return $this->_json('200',$this->config['success'],$res);
		}
		return $this->_error($this->config['fail']);
	}

	/**
	 * 短信发送接口
	 *
	 * @return [type] [description]
	 */
	public function sendSms($input){
		$contents = $input;
		unset($contents['act']);
		$data = $this->formatParam($contents);
		return $this->_curl($this->smsUrl,$data);
	}

	/**
	 * 测试接口
	 *
	 * @return [type] [description]
	 */
	public function test($input){
		return "test";
	}


}