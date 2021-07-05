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

namespace little\coupon\event;

use little\coupon\model\CouponList;
use littler\annotation\Inject;

class OnCouponListQueryByFind
{
	/**
	 * @Inject()
	 * @var little\coupon\model\CouponList
	 */
	protected $model;


	/**
	 * 优惠券 条件查询数据
	 * @param array $args 查询条件
	 * @return mixed
	 */
	public function handle(array $args, CouponList $model)
	{
		// Todo: 优惠券 条件查询数据
		 return $model->where($args)->find();
	}
}
