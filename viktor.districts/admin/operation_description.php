<?

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

return array(
    "ORM_READ" => array(
        "title" => Loc::getMessage('OP_NAME_ORM_READ'),
        "description" => Loc::getMessage('OP_DESC_ORM_READ'),
    ),
    "ORM_SETTINGS" => array(
        "title" => Loc::getMessage('OP_NAME_ORM_SETTINGS'),
        "description" => Loc::getMessage('OP_DESC_ORM_SETTINGS'),
    ),
    "ORM_EDIT" => array(
        "title" => Loc::getMessage('OP_NAME_ORM_EDIT'),
        "description" => Loc::getMessage('OP_DESC_ORM_EDIT'),
    ),
);
