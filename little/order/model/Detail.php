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

namespace little\order\model;

use little\order\repository\model\DetailAbstract;

/**
 * 订单详情 模型
 */
class Detail extends DetailAbstract
{
	/**
	 * @var array 关联预载
	 */
	public $with = [];

	/**
	 * @var array 列表字段映射
	 */
	public $table_schema = [
		'columns' => [
			[
				'title' => 'ID',
				'dataIndex' => 'order_id',
				'width' => 80,
				'fixed' => 'left',
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '订单编号',
				'dataIndex' => 'order_no',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '商家id',
				'dataIndex' => 'site_id',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '订单内容',
				'dataIndex' => 'order_name',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '订单来源',
				'dataIndex' => 'order_from',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '订单类型 1. 线上订单  2. 线下订单  3. 抵扣卷订单 ',
				'dataIndex' => 'order_type',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '支付流水号',
				'dataIndex' => 'out_trade_no',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '支付流水号（多次支付）',
				'dataIndex' => 'out_trade_no_2',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '整体提货编码',
				'dataIndex' => 'delivery_code',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '配送状态',
				'dataIndex' => 'delivery_status',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '支付方式 1微信 2 支付宝 3 余额',
				'dataIndex' => 'pay_type',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '配送方式 1物流 2 到店',
				'dataIndex' => 'delivery_type',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '购买人uid',
				'dataIndex' => 'member_id',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '购买人姓名',
				'dataIndex' => 'name',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '购买人手机',
				'dataIndex' => 'mobile',
				'width' => 160,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '购买人省id',
				'dataIndex' => 'province_id',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '购买人市id',
				'dataIndex' => 'city_id',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '购买人区县id',
				'dataIndex' => 'district_id',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '购买人社区id',
				'dataIndex' => 'community_id',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '购买人地址',
				'dataIndex' => 'address',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '购买人详细地址',
				'dataIndex' => 'full_address',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '购买人地址经度',
				'dataIndex' => 'longitude',
				'width' => 160,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '购买人地址纬度',
				'dataIndex' => 'latitude',
				'width' => 160,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '购买人留言信息',
				'dataIndex' => 'buyer_message',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '发票公司名称',
				'dataIndex' => 'order_invoice_company',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '发票类型',
				'dataIndex' => 'order_invoice_type',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '发票类型名称',
				'dataIndex' => 'order_invoice_type_name',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '发票行业类型',
				'dataIndex' => 'order_invoice_trade_type',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '商品总金额',
				'dataIndex' => 'goods_money',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '订单合计金额',
				'dataIndex' => 'order_money',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '优惠抵扣金额',
				'dataIndex' => 'deduct_money',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '订单调整金额',
				'dataIndex' => 'adjust_money',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '余额支付金额',
				'dataIndex' => 'balance_money',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '配送费用',
				'dataIndex' => 'delivery_money',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '发票税率',
				'dataIndex' => 'order_invoice_rate',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '发票金额',
				'dataIndex' => 'invoice_money',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '实付金额',
				'dataIndex' => 'pay_money',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '创建时间',
				'dataIndex' => 'create_time',
				'width' => 120,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '订单状态',
				'dataIndex' => 'order_status',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '支付状态',
				'dataIndex' => 'pay_status',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '订单支付时间',
				'dataIndex' => 'pay_time',
				'width' => 120,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '订单配送时间',
				'dataIndex' => 'delivery_time',
				'width' => 120,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '订单签收时间',
				'dataIndex' => 'sign_time',
				'width' => 120,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '订单完成时间',
				'dataIndex' => 'finish_time',
				'width' => 120,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '订单关闭时间',
				'dataIndex' => 'close_time',
				'width' => 120,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '是否锁定订单（针对维权，锁定不可操作）',
				'dataIndex' => 'is_lock',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '是否允许订单评价',
				'dataIndex' => 'is_evaluate',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '删除时间',
				'dataIndex' => 'delete_time',
				'width' => 120,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '是否允许退款',
				'dataIndex' => 'is_enable_refund',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '卖家留言',
				'dataIndex' => 'remark',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '商品件数',
				'dataIndex' => 'goods_num',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '是否进行结算',
				'dataIndex' => 'is_settlement',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '营销活动id',
				'dataIndex' => 'promotion_id',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '营销类型',
				'dataIndex' => 'promotion_type',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '营销详情',
				'dataIndex' => 'promotion_details',
				'width' => 80,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => true,
			],
			[
				'title' => '评价状态，0：未评价，1：已评价，2：已追评',
				'dataIndex' => 'evaluate_status',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '店铺金额',
				'dataIndex' => 'shop_money',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '平台金额',
				'dataIndex' => 'platform_money',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '是否需要发票 0 无发票  1 有发票',
				'dataIndex' => 'is_invoice',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '发票类型  1 纸质发票 2 电子发票',
				'dataIndex' => 'invoice_type',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '发票抬头',
				'dataIndex' => 'invoice_title',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '纳税人识别号',
				'dataIndex' => 'taxpayer_number',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '发票税率',
				'dataIndex' => 'invoice_rate',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '发票内容',
				'dataIndex' => 'invoice_content',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '发票邮寄费用',
				'dataIndex' => 'invoice_delivery_money',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '发票邮寄地址',
				'dataIndex' => 'invoice_full_address',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '是否需要增值税专用发票',
				'dataIndex' => 'is_tax_invoice',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '发票发送邮件',
				'dataIndex' => 'invoice_email',
				'width' => 180,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '发票抬头类型  1 个人  2 企业',
				'dataIndex' => 'invoice_title_type',
				'width' => 100,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => false,
			],
			[
				'title' => '订单操作',
				'dataIndex' => 'order_status_action',
				'width' => 80,
				'fixed' => false,
				'align' => 'center',
				'defaultHidden' => true,
			],
		],
		'formConfig' => [],
		'pagination' => true,
		'striped' => true,
		'useSearchForm' => true,
		'showTableSetting' => true,
		'bordered' => true,
		'showIndexColumn' => false,
		'canResize' => true,
		'rowKey' => 'order_id',
		'searchInfo' => ['order' => 'asc'],
		'actionColumn' => [
			'width' => 100,
			'title' => '操作',
			'dataIndex' => 'action',
			'slots' => ['customRender' => 'action'],
			'fixed' => 'right',
		],
	];

	/**
	 * @var array 搜索表单字段映射  具体字段规则参见 快速搜索定义
	 */
	public $search_schema = [
		'labelWidth' => 100,
		'schemas' => [
			[
				'field' => 'order_id',
				'label' => 'ID',
				'component' => 'Input',

			],
		],
	];

	/**
	 * @var array 增加表单字段映射
	 */
	public $form_schema = [
		'labelWidth' => 120,
		'schemas' => [
			[
				'field' => 'order_no',
				'label' => '订单编号',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'site_id',
				'label' => '商家id',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'order_name',
				'label' => '订单内容',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'order_from',
				'label' => '订单来源',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'order_type',
				'label' => '订单类型 1. 线上订单  2. 线下订单  3. 抵扣卷订单 ',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'out_trade_no',
				'label' => '支付流水号',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'out_trade_no_2',
				'label' => '支付流水号（多次支付）',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'delivery_code',
				'label' => '整体提货编码',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'delivery_status',
				'label' => '配送状态',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'pay_type',
				'label' => '支付方式 1微信 2 支付宝 3 余额',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'delivery_type',
				'label' => '配送方式 1物流 2 到店',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'member_id',
				'label' => '购买人uid',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'name',
				'label' => '购买人姓名',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'mobile',
				'label' => '购买人手机',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'province_id',
				'label' => '购买人省id',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'city_id',
				'label' => '购买人市id',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'district_id',
				'label' => '购买人区县id',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'community_id',
				'label' => '购买人社区id',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'address',
				'label' => '购买人地址',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'full_address',
				'label' => '购买人详细地址',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'longitude',
				'label' => '购买人地址经度',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'latitude',
				'label' => '购买人地址纬度',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'buyer_message',
				'label' => '购买人留言信息',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'order_invoice_company',
				'label' => '发票公司名称',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'order_invoice_type',
				'label' => '发票类型',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'order_invoice_type_name',
				'label' => '发票类型名称',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'order_invoice_trade_type',
				'label' => '发票行业类型',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'goods_money',
				'label' => '商品总金额',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'order_money',
				'label' => '订单合计金额',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'deduct_money',
				'label' => '优惠抵扣金额',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'adjust_money',
				'label' => '订单调整金额',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'balance_money',
				'label' => '余额支付金额',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'delivery_money',
				'label' => '配送费用',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'order_invoice_rate',
				'label' => '发票税率',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'invoice_money',
				'label' => '发票金额',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'pay_money',
				'label' => '实付金额',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'create_time',
				'label' => '创建时间',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'order_status',
				'label' => '订单状态',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'pay_status',
				'label' => '支付状态',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'pay_time',
				'label' => '订单支付时间',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'delivery_time',
				'label' => '订单配送时间',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'sign_time',
				'label' => '订单签收时间',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'finish_time',
				'label' => '订单完成时间',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'close_time',
				'label' => '订单关闭时间',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'is_lock',
				'label' => '是否锁定订单（针对维权，锁定不可操作）',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'is_evaluate',
				'label' => '是否允许订单评价',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'delete_time',
				'label' => '删除时间',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'is_enable_refund',
				'label' => '是否允许退款',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'remark',
				'label' => '卖家留言',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'goods_num',
				'label' => '商品件数',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'is_settlement',
				'label' => '是否进行结算',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'promotion_id',
				'label' => '营销活动id',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'promotion_type',
				'label' => '营销类型',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'promotion_details',
				'label' => '营销详情',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'evaluate_status',
				'label' => '评价状态，0：未评价，1：已评价，2：已追评',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'shop_money',
				'label' => '店铺金额',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'platform_money',
				'label' => '平台金额',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'is_invoice',
				'label' => '是否需要发票 0 无发票  1 有发票',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'invoice_type',
				'label' => '发票类型  1 纸质发票 2 电子发票',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'invoice_title',
				'label' => '发票抬头',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'taxpayer_number',
				'label' => '纳税人识别号',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'invoice_rate',
				'label' => '发票税率',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'invoice_content',
				'label' => '发票内容',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'invoice_delivery_money',
				'label' => '发票邮寄费用',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'invoice_full_address',
				'label' => '发票邮寄地址',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'is_tax_invoice',
				'label' => '是否需要增值税专用发票',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'invoice_email',
				'label' => '发票发送邮件',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'invoice_title_type',
				'label' => '发票抬头类型  1 个人  2 企业',
				'component' => 'Input',
				'required' => true,

			],
			[
				'field' => 'order_status_action',
				'label' => '订单操作',
				'component' => 'Input',
				'required' => true,

			],
		],
	];

	/**
	 * @var array 排除展示字段
	 */
	public $without = ['password', 'passwd', 'pay_passwd', 'pay_password'];
}
