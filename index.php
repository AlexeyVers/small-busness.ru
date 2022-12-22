<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>
<br>
<? $APPLICATION->IncludeComponent(
    "bitrix:news",
    "slider",
    [
        "ADD_ELEMENT_CHAIN"               => "N",
        "ADD_SECTIONS_CHAIN"              => "Y",
        "AJAX_MODE"                       => "N",
        "AJAX_OPTION_ADDITIONAL"          => "",
        "AJAX_OPTION_HISTORY"             => "N",
        "AJAX_OPTION_JUMP"                => "N",
        "AJAX_OPTION_STYLE"               => "Y",
        "BROWSER_TITLE"                   => "-",
        "CACHE_FILTER"                    => "N",
        "CACHE_GROUPS"                    => "Y",
        "CACHE_TIME"                      => "36000000",
        "CACHE_TYPE"                      => "A",
        "CHECK_DATES"                     => "Y",
        "DETAIL_ACTIVE_DATE_FORMAT"       => "d.m.Y",
        "DETAIL_DISPLAY_BOTTOM_PAGER"     => "Y",
        "DETAIL_DISPLAY_TOP_PAGER"        => "N",
        "DETAIL_FIELD_CODE"               => [],
        "DETAIL_PAGER_SHOW_ALL"           => "Y",
        "DETAIL_PAGER_TEMPLATE"           => "",
        "DETAIL_PAGER_TITLE"              => "Страница",
        "DETAIL_PROPERTY_CODE"            => [],
        "DETAIL_SET_CANONICAL_URL"        => "N",
        "DISPLAY_BOTTOM_PAGER"            => "Y",
        "DISPLAY_DATE"                    => "Y",
        "DISPLAY_NAME"                    => "Y",
        "DISPLAY_PICTURE"                 => "Y",
        "DISPLAY_PREVIEW_TEXT"            => "Y",
        "DISPLAY_TOP_PAGER"               => "N",
        "HIDE_LINK_WHEN_NO_DETAIL"        => "N",
        "IBLOCK_ID"                       => "4",
        "IBLOCK_TYPE"                     => "catalog",
        "INCLUDE_IBLOCK_INTO_CHAIN"       => "Y",
        "LIST_ACTIVE_DATE_FORMAT"         => "d.m.Y",
        "LIST_FIELD_CODE"                 => [],
        "LIST_PROPERTY_CODE"              => ["VIDNO_NOWOST"],
        "MESSAGE_404"                     => "",
        "META_DESCRIPTION"                => "-",
        "META_KEYWORDS"                   => "-",
        "NEWS_COUNT"                      => "20",
        "PAGER_BASE_LINK_ENABLE"          => "N",
        "PAGER_DESC_NUMBERING"            => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL"                  => "N",
        "PAGER_SHOW_ALWAYS"               => "N",
        "PAGER_TEMPLATE"                  => ".default",
        "PAGER_TITLE"                     => "Новости",
        "PREVIEW_TRUNCATE_LEN"            => "",
        "SEF_MODE"                        => "N",
        "SET_LAST_MODIFIED"               => "N",
        "SET_STATUS_404"                  => "N",
        "SET_TITLE"                       => "Y",
        "SHOW_404"                        => "N",
        "SORT_BY1"                        => "ACTIVE_FROM",
        "SORT_BY2"                        => "SORT",
        "SORT_ORDER1"                     => "DESC",
        "SORT_ORDER2"                     => "ASC",
        "STRICT_SECTION_CHECK"            => "N",
        "USE_CATEGORIES"                  => "N",
        "USE_FILTER"                      => "N",
        "USE_PERMISSIONS"                 => "N",
        "USE_RATING"                      => "N",
        "USE_REVIEW"                      => "N",
        "USE_RSS"                         => "N",
        "USE_SEARCH"                      => "N",
        "USE_SHARE"                       => "N",
        "VARIABLE_ALIASES"                => ["ELEMENT_ID" => "ELEMENT_ID", "SECTION_ID" => "SECTION_ID"],
    ]
); ?><br>
<? $APPLICATION->IncludeComponent(
    "bitrix:form",
    "custom",
    [
        "AJAX_MODE"              => "Y",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY"    => "N",
        "AJAX_OPTION_JUMP"       => "N",
        "AJAX_OPTION_STYLE"      => "Y",
        "CACHE_TIME"             => "3600",
        "CACHE_TYPE"             => "A",
        "CHAIN_ITEM_LINK"        => "",
        "CHAIN_ITEM_TEXT"        => "",
        "COMPONENT_TEMPLATE"     => ".default",
        "EDIT_ADDITIONAL"        => "N",
        "EDIT_STATUS"            => "Y",
        "IGNORE_CUSTOM_TEMPLATE" => "N",
        "NAME_TEMPLATE"          => "",
        "NOT_SHOW_FILTER"        => [0 => "", 1 => "",],
        "NOT_SHOW_TABLE"         => [0 => "", 1 => "",],
        "RESULT_ID"              => $_REQUEST[RESULT_ID],
        "SEF_MODE"               => "N",
        "SHOW_ADDITIONAL"        => "N",
        "SHOW_ANSWER_VALUE"      => "N",
        "SHOW_EDIT_PAGE"         => "Y",
        "SHOW_LIST_PAGE"         => "Y",
        "SHOW_STATUS"            => "Y",
        "SHOW_VIEW_PAGE"         => "Y",
        "START_PAGE"             => "new",
        "SUCCESS_URL"            => "",
        "USE_EXTENDED_ERRORS"    => "N",
        "VARIABLE_ALIASES"       => ["action" => "action",],
        "WEB_FORM_ID"            => "2",
    ]
); ?><br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>