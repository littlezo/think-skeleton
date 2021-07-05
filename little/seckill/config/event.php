<?php

return [
	'bind' => [],
	'listen' => [
		'OnSeckillGoodsReadAfter' => ['little\seckill\event\OnSeckillGoodsReadAfter'],
		'OnSeckillGoodsSetIncByField' => ['little\seckill\event\OnSeckillGoodsSetIncByField'],
		'OnSeckillGoodsSetDecByField' => ['little\seckill\event\OnSeckillGoodsSetDecByField'],
		'OnSeckillGoodsQueryById' => ['little\seckill\event\OnSeckillGoodsQueryById'],
		'OnSeckillGoodsQueryByField' => ['little\seckill\event\OnSeckillGoodsQueryByField'],
		'OnSeckillGoodsQueryByFind' => ['little\seckill\event\OnSeckillGoodsQueryByFind'],
		'OnSeckillGoodsQueryByList' => ['little\seckill\event\OnSeckillGoodsQueryByList'],
		'OnSeckillGoodsDeleteById' => ['little\seckill\event\OnSeckillGoodsDeleteById'],
		'OnSeckillGoodsDeleteByWhere' => ['little\seckill\event\OnSeckillGoodsDeleteByWhere'],
		'OnSeckillGoodsUpdateById' => ['little\seckill\event\OnSeckillGoodsUpdateById'],
		'OnSeckillGoodsUpdateByWhere' => ['little\seckill\event\OnSeckillGoodsUpdateByWhere'],
		'OnSeckillGoodsSave' => ['little\seckill\event\OnSeckillGoodsSave'],
		'OnSeckillListReadAfter' => ['little\seckill\event\OnSeckillListReadAfter'],
		'OnSeckillListSetIncByField' => ['little\seckill\event\OnSeckillListSetIncByField'],
		'OnSeckillListSetDecByField' => ['little\seckill\event\OnSeckillListSetDecByField'],
		'OnSeckillListQueryById' => ['little\seckill\event\OnSeckillListQueryById'],
		'OnSeckillListQueryByField' => ['little\seckill\event\OnSeckillListQueryByField'],
		'OnSeckillListQueryByFind' => ['little\seckill\event\OnSeckillListQueryByFind'],
		'OnSeckillListQueryByList' => ['little\seckill\event\OnSeckillListQueryByList'],
		'OnSeckillListDeleteById' => ['little\seckill\event\OnSeckillListDeleteById'],
		'OnSeckillListDeleteByWhere' => ['little\seckill\event\OnSeckillListDeleteByWhere'],
		'OnSeckillListUpdateById' => ['little\seckill\event\OnSeckillListUpdateById'],
		'OnSeckillListUpdateByWhere' => ['little\seckill\event\OnSeckillListUpdateByWhere'],
		'OnSeckillListSave' => ['little\seckill\event\OnSeckillListSave'],
	],
	'subscribe' => [],
];