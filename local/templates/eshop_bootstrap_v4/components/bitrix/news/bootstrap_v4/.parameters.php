<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\ModuleManager;

if (!CModule::IncludeModule('iblock')) {
    return;
}

$mediaProperty  = [
    "" => GetMessage('MAIN_NO'),
];
$sliderProperty = [
    "" => GetMessage('MAIN_NO'),
];
$propertyList   = CIBlockProperty::GetList(
    ['sort' => 'asc', 'name' => 'asc'],
    ['ACTIVE' => 'Y', 'IBLOCK_ID' => $arCurrentValues['IBLOCK_ID']]
);
while ($property = $propertyList->Fetch()) {
    $arProperty[$arr["CODE"]] = "[" . $arr["CODE"] . "] " . $arr['NAME'];
    $id                       = $property["CODE"] ? $property["CODE"] : $property["ID"];
    if ($property["PROPERTY_TYPE"] == "S") {
        $mediaProperty[$id] = "[" . $id . "] " . $property["NAME"];
    }
    if ($property["PROPERTY_TYPE"] == "F") {
        $sliderProperty[$id] = "[" . $id . "] " . $property["NAME"];
    }
}

$arTemplateParameters = [
    "DISPLAY_DATE"         => [
        "NAME"    => GetMessage("T_IBLOCK_DESC_NEWS_DATE"),
        "TYPE"    => "CHECKBOX",
        "DEFAULT" => "Y",
    ],
    "DISPLAY_PICTURE"      => [
        "NAME"    => GetMessage("T_IBLOCK_DESC_NEWS_PICTURE"),
        "TYPE"    => "CHECKBOX",
        "DEFAULT" => "Y",
    ],
    "DISPLAY_PREVIEW_TEXT" => [
        "NAME"    => GetMessage("T_IBLOCK_DESC_NEWS_TEXT"),
        "TYPE"    => "CHECKBOX",
        "DEFAULT" => "Y",
    ],
    "USE_SHARE"            => [
        "NAME"     => GetMessage("T_IBLOCK_DESC_NEWS_USE_SHARE"),
        "TYPE"     => "CHECKBOX",
        "MULTIPLE" => "N",
        "VALUE"    => "Y",
        "DEFAULT"  => "N",
        "REFRESH"  => "Y",
    ],
    "MEDIA_PROPERTY"       => [
        "NAME"   => GetMessage("TP_BN_MEDIA_PROPERTY"),
        "TYPE"   => "LIST",
        "VALUES" => $mediaProperty,
    ],
    "SLIDER_PROPERTY"      => [
        "NAME"   => GetMessage("TP_BN_SLIDER_PROPERTY"),
        "TYPE"   => "LIST",
        "VALUES" => $sliderProperty,
    ],
];

if ($arCurrentValues["USE_SHARE"] == "Y") {
    $arTemplateParameters["LIST_USE_SHARE"] = [
        "NAME"    => GetMessage("TP_BN_LIST_USE_SHARE"),
        "TYPE"    => "CHECKBOX",
        "VALUE"   => "Y",
        "DEFAULT" => "N",
    ];

    $arTemplateParameters["SHARE_TEMPLATE"] = [
        "NAME"     => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_TEMPLATE"),
        "DEFAULT"  => "",
        "TYPE"     => "STRING",
        "MULTIPLE" => "N",
        "COLS"     => 25,
        "REFRESH"  => "Y",
    ];

    if (trim($arCurrentValues["SHARE_TEMPLATE"]) == '') {
        $shareComponentTemplate = false;
    } else {
        $shareComponentTemplate = trim($arCurrentValues["SHARE_TEMPLATE"]);
    }

    include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/components/bitrix/main.share/util.php");

    $arHandlers = __bx_share_get_handlers($shareComponentTemplate);

    $arTemplateParameters["SHARE_HANDLERS"] = [
        "NAME"     => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_SYSTEM"),
        "TYPE"     => "LIST",
        "MULTIPLE" => "Y",
        "VALUES"   => $arHandlers["HANDLERS"],
        "DEFAULT"  => $arHandlers["HANDLERS_DEFAULT"],
    ];

    $arTemplateParameters["SHARE_SHORTEN_URL_LOGIN"] = [
        "NAME"    => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_SHORTEN_URL_LOGIN"),
        "TYPE"    => "STRING",
        "DEFAULT" => "",
    ];

    $arTemplateParameters["SHARE_SHORTEN_URL_KEY"] = [
        "NAME"    => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_SHORTEN_URL_KEY"),
        "TYPE"    => "STRING",
        "DEFAULT" => "",
    ];
}

$arThemes           = [];
$arThemes['blue']   = GetMessage('TP_BN_THEME_BLUE');
$arThemes['green']  = GetMessage('TP_BN_THEME_GREEN');
$arThemes['red']    = GetMessage('TP_BN_THEME_RED');
$arThemes['yellow'] = GetMessage('TP_BN_THEME_YELLOW');

if (ModuleManager::isModuleInstalled('bitrix.eshop')) {
    $arThemes['site'] = GetMessage('TP_BN_THEME_SITE');
}

$arTemplateParameters['TEMPLATE_THEME'] = [
    'PARENT'            => 'VISUAL',
    'NAME'              => GetMessage("TP_BN_TEMPLATE_THEME"),
    'TYPE'              => 'LIST',
    'VALUES'            => $arThemes,
    'DEFAULT'           => 'blue',
    'ADDITIONAL_VALUES' => 'Y',
];
