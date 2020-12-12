<?

use \Bitrix\Main\Localization\Loc;

if (!check_bitrix_sessid())
    return;

#работа с .settings.php сохраняет в переменную конфиг установок и удаления модуля
$install_count=\Bitrix\Main\Config\Configuration::getInstance()->get('viktor_module_districts');

$cache_type=\Bitrix\Main\Config\Configuration::getInstance()->get('cache');
#работа с .settings.php

if ($ex = $APPLICATION->GetException())
    echo CAdminMessage::ShowMessage(array(
        "TYPE" => "ERROR",
        "MESSAGE" => Loc::getMessage("MOD_INST_ERR"),
        "DETAILS" => $ex->GetString(),
        "HTML" => true,
    ));
else
    echo CAdminMessage::ShowNote(Loc::getMessage("MOD_INST_OK"));

#работа с .settings.php выводит данные по установкам
echo CAdminMessage::ShowMessage(array("MESSAGE"=>Loc::getMessage("VIKTOR_DISTRICTS_INSTALL_COUNT").$install_count['install'],"TYPE"=>"OK"));

if(!$cache_type['type'] || $cache_type['type']=='none')
    echo CAdminMessage::ShowMessage(array("MESSAGE"=>Loc::getMessage("VIKTOR_DISTRICTS_NO_CACHE"),"TYPE"=>"ERROR"));
#работа с .settings.php
?>
<form action="<?echo $APPLICATION->GetCurPage(); ?>">
    <input type="hidden" name="lang" value="<?echo LANGUAGE_ID ?>">
    <input type="submit" name="" value="<?echo Loc::getMessage("MOD_BACK"); ?>">
<form>
