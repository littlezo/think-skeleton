<?php

/**
 * #logic 做事不讲究逻辑，再努力也只是重复犯错
 * ## 何为相思：不删不聊不打扰，可否具体点：曾爱过。何为遗憾：你来我往皆过客，可否具体点：再无你。
 * ## 只要思想不滑稽，方法总比苦难多！
 * @version 1.0.0
 * @author @小小只^v^ <littlezov@qq.com>  littlezov@qq.com
 * @contact  littlezov@qq.com
 * @link     https://github.com/littlezo
 * @document https://github.com/littlezo/wiki
 * @license  https://github.com/littlezo/MozillaPublicLicense/blob/main/LICENSE
 */

declare(strict_types=1);

namespace little\promotion\repository\model;

use littler\BaseModel as Model;
use littler\annotation\Inject;
use littler\traits\BaseOptionsTrait;
use littler\traits\RewriteTrait;

/**
 * @property group_id $int 拼团分组id
 * @property site_id $int 店铺id
 * @property goods_id $int 商品id
 * @property is_virtual_goods $int 是否虚拟商品
 * @property pintuan_id $int 拼团活动id
 * @property head_id $int 团长id
 * @property pintuan_num $int 拼团数量
 * @property pintuan_count $int 当前数量
 * @property create_time $int 创建时间
 * @property end_time $int 拼团结束时间
 * @property status $int 当前状态 0未支付 1拼团失败 2.组团中3.拼团成功
 * @property is_virtual_buy $int 是否虚拟成团
 * @property is_single_buy $int 是否单独购买
 * @property is_promotion $int 是否团长优惠
 * @property buy_num $int 拼团限制购买
 * @property head_member_img $string 组长会员头像
 * @property head_nickname $string 组长会员昵称
 */
abstract class PintuanGroupAbstract extends Model
{
	use BaseOptionsTrait;
	use RewriteTrait;

	/**
	 * @var string $name 表名
	 */
	protected $name = 'promotion_pintuan_group';

	/**
	 * @var string $pk 主键
	 */
	public $pk = 'group_id';

	/**
	 * @var array $schema 字段信息
	 */
	protected $schema = [
		'group_id' => 'int',
		'site_id' => 'int',
		'goods_id' => 'int',
		'is_virtual_goods' => 'int',
		'pintuan_id' => 'int',
		'head_id' => 'int',
		'pintuan_num' => 'int',
		'pintuan_count' => 'int',
		'create_time' => 'int',
		'end_time' => 'int',
		'status' => 'int',
		'is_virtual_buy' => 'int',
		'is_single_buy' => 'int',
		'is_promotion' => 'int',
		'buy_num' => 'int',
		'head_member_img' => 'string',
		'head_nickname' => 'string',
	];

	/**
	 * @var array $json JSON类型字段
	 */
	protected $json = [];

	/**
	 * @var array $updateTime 关闭更新时间自动写入
	 */
	protected $updateTime = false;

	/**
	 * @var array $field 允许写入字段
	 */
	public $field = [
		'group_id',
		'site_id',
		'goods_id',
		'is_virtual_goods',
		'pintuan_id',
		'head_id',
		'pintuan_num',
		'pintuan_count',
		'create_time',
		'end_time',
		'status',
		'is_virtual_buy',
		'is_single_buy',
		'is_promotion',
		'buy_num',
		'head_member_img',
		'head_nickname',
	];
}
