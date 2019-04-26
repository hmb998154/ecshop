<?php 

if (!defined('IN_ECTOUCH'))
{
    die('Hacking attempt!');
}
/**
 * 明珠小程序接口类
 */
class Minzhu
{
	/**
	 * $db
	 *
	 * @var [type]
	 */
	protected $db;

	/**
	 * 构造函数
	 * 
	 */
	public function __construct(){

		$this->db = $GLOBALS['db'];
	}

	/**
	 * 轮播图接口
	 *
	 * @return [type] [description]
	 */
	public function carousel(){

		$code = 'ws_carousel';
		$sql = 'SELECT * FROM ecs_ad  ORDER BY ad_id DESC';
		$admInfo = $this->db->getAll($sql);
		if(!$admInfo){
			return $this->_error('暂无轮播图，请前往后台设置');
		}
		return $this->_success($admInfo);
	}

	/**
	 * 分类接口
	 *
	 * @return [type] [description]
	 */
	public function getAllCategory(){
		$all_cat_filter_attr = wap_get_all_cat_filter_attr('all_cat_filter_attr');
		$sql = "SELECT cat_id,cat_name,grade_define,filter_attr,define_url FROM " .$GLOBALS['ecs']->table('category'). " WHERE parent_id=0 AND is_show=1";
		$all_cat_info = $this->db->getAll($sql);
		$all_cat_nav = array();
		/**
		 * 0  翡翠寓意
		 * 1  翡翠种水
		 * 3  价格选择
		 * 5  翡翠手镯
		 * 6  翡翠吊坠
		 * 7  翡翠镶嵌
		 * 8  金田黄
		 * 9  个性翡翠
		 * 10 笑佛
		 * 11 3D黄金
		 * 12 戒指戒面
		 * 13 翡翠戒指
		 * 14 翡翠饰品
		 * 15 翡翠项链
		 * 16 缤纷彩宝
		 * 17 翡翠颜色
		 * 18 璀璨钻石
		 * 19 翡翠裸石
		 * 20 鸣匠大师
		 * 21 翡翠手表
		 * 22 文玩收藏
		 * 23 珠宝库
		 * 24 金银饰品
		 * 25 私人定制
		 * 26 把玩/摆件
		 * 27 裸石/蛋面
		 * 28 翡翠手链
		 */
		foreach ($all_cat_info as $key => $cat) {
			$exclude_arr = array(0,1,3,7,8,10,12,17,19,21,23,24,26,27,28);
			// if(isset($all_cat_filter_attr[$cat['cat_id']])&&!in_array($key, $exclude_arr)){
			if(isset($all_cat_filter_attr[$cat['cat_id']])){
				$all_cat_nav[$key]['cat_id'] = $cat['cat_id'];
				$all_cat_nav[$key]['cat_name'] = $cat['cat_name'];
				$all_cat_nav[$key]['url'] = $cat['define_url'];
				$price_url_arr = array();
				if(!empty($cat['grade_define'])){
					$price_arr = explode(',', trim($cat['grade_define']));
					foreach ($price_arr as $k => $v) {
						$price_url_arr[$k]['name'] = $v;
						$price_url_arr[$k]['url'] = str_replace("以上", "-999999999", $v);
					}
				}
				$all_cat_nav[$key]['attr'] = $all_cat_filter_attr[$cat['cat_id']];
				$all_cat_nav[$key]['grade_define'] =  $price_url_arr;
			}
		}
		return  _success($all_cat_nav);
	}



	/**
	 * 输出json数据
	 *  
	 * @param  [type] $status [description]
	 * @param  [type] $msg    [description]
	 * @param  [type] $data   [description]
	 * @return [type]         [description]
	 */
	public function _json($status,$msg,$data){

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


}

