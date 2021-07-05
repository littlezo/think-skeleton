<?php

return [
	'bind' => [],
	'listen' => [
		'OnAdvListReadAfter' => ['little\adv\event\OnAdvListReadAfter'],
		'OnAdvListSetIncByField' => ['little\adv\event\OnAdvListSetIncByField'],
		'OnAdvListSetDecByField' => ['little\adv\event\OnAdvListSetDecByField'],
		'OnAdvListQueryById' => ['little\adv\event\OnAdvListQueryById'],
		'OnAdvListQueryByField' => ['little\adv\event\OnAdvListQueryByField'],
		'OnAdvListQueryByFind' => ['little\adv\event\OnAdvListQueryByFind'],
		'OnAdvListQueryByList' => ['little\adv\event\OnAdvListQueryByList'],
		'OnAdvListDeleteById' => ['little\adv\event\OnAdvListDeleteById'],
		'OnAdvListDeleteByWhere' => ['little\adv\event\OnAdvListDeleteByWhere'],
		'OnAdvListUpdateById' => ['little\adv\event\OnAdvListUpdateById'],
		'OnAdvListUpdateByWhere' => ['little\adv\event\OnAdvListUpdateByWhere'],
		'OnAdvListSave' => ['little\adv\event\OnAdvListSave'],
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