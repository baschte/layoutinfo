<?php
defined('TYPO3_MODE') || die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawHeaderHook']['layoutinfo'] =
    \Kiefer\LayoutInfo\Hook\PageLayoutHeader::class . '->render';
