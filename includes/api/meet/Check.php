<?php 

/**
 * 验证静态类
 */
class Check extends Base
{
	/**
	 * 预约验证
	 *
	 * @return [type] [description]
	 */
	public static function meetCheck($input){

	}

	/**
	 * 检测今天是否已经预约
	 *
	 * @param  [type] $addTime [description]
	 * @return [type]          [description]
	 */
	public static function dayCheck($addTime){
		//获取当天的时间搓
		$startToday =intval(strtotime("today"));
		$endToday = intval($startToday+3600*24);
		$addTime = intval($addTime);
		if($addTime>$startToday && $addTime<$endToday){
			return false;
		}else{
			return true;
		}
	}

}