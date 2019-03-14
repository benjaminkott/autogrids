<?php

/*
 * This file is part of the package bk2k/autogrids.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Automatic Grids',
    'description' => 'Automatic Grids for Grid Elements',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'gridelements' => '9.0.0-9.0.99'
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'BK2K\\AutoGrids\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Benjamin Kott',
    'author_email' => 'info@bk2k.info',
    'author_company' => 'private',
    'version' => '1.0.2',
];
