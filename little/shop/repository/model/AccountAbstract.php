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

namespace little\shop\repository\model;

use littler\BaseModel as Model;
use littler\annotation\Inject;
use littler\traits\BaseOptionsTrait;
use littler\traits\RewriteTrait;
use think\model\concern\SoftDelete;

/**
 * @property id $int
 * @property username $string 用户名
 * @property password $string 密码
 * @property email $string 邮箱
 * @property avatar $string 头像
 * @property real_name $string 真实姓名
 * @property mobile $string 手机号
 * @property roles_ids $int 角色ID
 * @property site_id $int 站点ID
 * @property remark $string 备注
 * @property status $int 用户状态 1 正常 2 禁用
 * @property last_login_ip $string 最后登陆IP
 * @property last_login_time $int 最后登陆时间
 * @property create_time $int 创建时间
 * @property update_time $int 更新时间
 * @property delete_time $int 删除状态，0未删除 >0 已删除
 */
abstract class AccountAbstract extends Model
{
	use BaseOptionsTrait;
	use RewriteTrait;
	use SoftDelete;

	/**
	 * @var string $name 表名
	 */
	protected $name = 'shop_account';

	/**
	 * @var string $pk 主键
	 */
	public $pk = 'id';

	/**
	 * @var array $schema 字段信息
	 */
	protected $schema = [
		'id' => 'int',
		'username' => 'string',
		'password' => 'string',
		'email' => 'string',
		'avatar' => 'string',
		'real_name' => 'string',
		'mobile' => 'string',
		'roles_ids' => 'int',
		'site_id' => 'int',
		'remark' => 'string',
		'status' => 'int',
		'last_login_ip' => 'string',
		'last_login_time' => 'int',
		'create_time' => 'int',
		'update_time' => 'int',
		'delete_time' => 'int',
	];

	/**
	 * @var array $json JSON类型字段
	 */
	protected $json = [];

	/**
	 * @var array $field 允许写入字段
	 */
	public $field = [
		'id',
		'username',
		'password',
		'email',
		'avatar',
		'real_name',
		'mobile',
		'roles_ids',
		'site_id',
		'remark',
		'status',
		'last_login_ip',
		'last_login_time',
		'create_time',
		'update_time',
		'delete_time',
	];
}
