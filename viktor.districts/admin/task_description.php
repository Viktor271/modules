<?

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

return array(
    "ORM_DENIED" => array(
        "title" => Loc::getMessage('TASK_NAME_ORM_DENIED'),
        "description" => Loc::getMessage('TASK_DESC_ORM_DENIED'),
    ),
    "ORM_READ" => array(
        "title" => Loc::getMessage('TASK_NAME_ORM_READ'),
        "description" => Loc::getMessage('TASK_DESC_ORM_READ'),
    ),
    "ORM_FULL_ACCESS" => array(
        "title" => Loc::getMessage('TASK_NAME_ORM_FULL_ACCESS'),
        "description" => Loc::getMessage('TASK_DESC_ORM_FULL_ACCESS'),
    ),
    "MODULE" => array(
        "title" => Loc::getMessage("TASK_BINDING_MODULE"),
    ),
);
