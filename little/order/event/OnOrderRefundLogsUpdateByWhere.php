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

namespace little\order\event;

use little\order\model\OrderRefundLogs;
use littler\annotation\Inject;

class OnOrderRefundLogsUpdateByWhere
{
	/**
	 * @Inject()
	 * @var little\order\model\OrderRefundLogs
	 */
	protected $model;


	/**
	 * 订单退款操作记录 条件更新数据
	 * @param array $args 事件参数
	 * @param int $args->condition 更新条件
	 * @param array $args->values 更新的值
	 * @return mixed
	 */
	public function handle(array $args, OrderRefundLogs $model)
	{
		// Todo: 订单退款操作记录 条件 更新数据
		return $model->where($args['condition'])->save($args['values']);
	}
}
