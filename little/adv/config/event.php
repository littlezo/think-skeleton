<?php

return [
	'bind' => [],
	'listen' => [
		'OnAdvAdvReadAfter' => ['little\adv\event\OnAdvAdvReadAfter'],
		'OnAdvAdvSetIncByField' => ['little\adv\event\OnAdvAdvSetIncByField'],
		'OnAdvAdvSetDecByField' => ['little\adv\event\OnAdvAdvSetDecByField'],
		'OnAdvAdvQueryById' => ['little\adv\event\OnAdvAdvQueryById'],
		'OnAdvAdvQueryByField' => ['little\adv\event\OnAdvAdvQueryByField'],
		'OnAdvAdvQueryByFind' => ['little\adv\event\OnAdvAdvQueryByFind'],
		'OnAdvAdvQueryByList' => ['little\adv\event\OnAdvAdvQueryByList'],
		'OnAdvAdvDeleteById' => ['little\adv\event\OnAdvAdvDeleteById'],
		'OnAdvAdvDeleteByWhere' => ['little\adv\event\OnAdvAdvDeleteByWhere'],
		'OnAdvAdvUpdateById' => ['little\adv\event\OnAdvAdvUpdateById'],
		'OnAdvAdvUpdateByWhere' => ['little\adv\event\OnAdvAdvUpdateByWhere'],
		'OnAdvAdvSave' => ['little\adv\event\OnAdvAdvSave'],
		'OnAdvPositionReadAfter' => ['little\adv\event\OnAdvPositionReadAfter'],
		'OnAdvPositionSetIncByField' => ['little\adv\event\OnAdvPositionSetIncByField'],
		'OnAdvPositionSetDecByField' => ['little\adv\event\OnAdvPositionSetDecByField'],
		'OnAdvPositionQueryById' => ['little\adv\event\OnAdvPositionQueryById'],
		'OnAdvPositionQueryByField' => ['little\adv\event\OnAdvPositionQueryByField'],
		'OnAdvPositionQueryByFind' => ['little\adv\event\OnAdvPositionQueryByFind'],
		'OnAdvPositionQueryByList' => ['little\adv\event\OnAdvPositionQueryByList'],
		'OnAdvPositionDeleteById' => ['little\adv\event\OnAdvPositionDeleteById'],
		'OnAdvPositionDeleteByWhere' => ['little\adv\event\OnAdvPositionDeleteByWhere'],
		'OnAdvPositionUpdateById' => ['little\adv\event\OnAdvPositionUpdateById'],
		'OnAdvPositionUpdateByWhere' => ['little\adv\event\OnAdvPositionUpdateByWhere'],
		'OnAdvPositionSave' => ['little\adv\event\OnAdvPositionSave'],
	],
	'subscribe' => [],
];