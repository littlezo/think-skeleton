<?php

/**
 * #logic 做事不讲究逻辑，再努力也只是重复犯错
 * ## 何为相思：不删不聊不打扰，可否具体点：曾爱过。何为遗憾：你来我往皆过客，可否具体点：再无你。
 * ## 只要思想不滑稽，方法总比苦难多！
 * @version 1.0.0
 * @author @小小只^v^ <littlezov@qq.com>  littlezov@qq.com
 * @contact  littlezov@qq.com
 * @see     https://github.com/littlezo
 * @document https://github.com/littlezo/wiki
 * @license  https://github.com/littlezo/MozillaPublicLicense/blob/main/LICENSE
 */

declare(strict_types=1);

namespace little\user\model;

use little\user\repository\model\AccountAbstract;
use littler\annotation\model\relation\HasOne;
use littler\user\AuthorizeInterface;
use littler\user\Traits\User;

/**
 * 用户管理 模型.
 * @HasOne("roles", model="Roles", foreignKey="id", localKey="roles_ids")
 * @HasOne("dept", model="Dept", foreignKey="id", localKey="dept_ids")
 */
class Account extends AccountAbstract implements AuthorizeInterface
{
	use User;

	/**
	 * @var array 关联预载
	 */
	public $with = ['roles', 'dept'];

	/**
	 * @var array 排除展示字段
	 */
	public $without = ['password', 'passwd', 'pay_passwd', 'pay_password'];
}
