<?php

/*
 * This file is part of the package bk2k/autogrids.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die();

/***************
 * Add static typoscript
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'autogrids',
    'Configuration/TypoScript',
    'Automatic Grids'
);
