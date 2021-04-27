<?php

defined('TYPO3_MODE') or die('Access denied.');

(static function (string $extKey) {
    // Require 3rd-party libraries, in case TYPO3 does not run in composer mode
    if (!\TYPO3\CMS\Core\Core\Environment::isComposerMode()) {
        $pharFileName = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($extKey)
                        . 'Libraries/phpoffice-phpspreadsheet.phar';
        if (is_file($pharFileName)) {
            @include 'phar://' . $pharFileName . '/vendor/autoload.php';
        }
    }
})('base_excel');
