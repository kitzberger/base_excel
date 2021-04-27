<?php

########################################################################
# Extension Manager/Repository config file for ext "base_excel".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Excel Library',
    'description'      => 'This provides the PhpSpreadsheet library, formerly phpExcel from phpOffice.',
    'category'         => 'misc',
    'version'          => '0.1.0',
    'state'            => 'stable',
    'uploadfolder'     => 0,
    'createDirs'       => '',
    'clearcacheonload' => 1,
    'author'           => 'PhpSpreadsheet developers, Franz Holzinger',
    'author_email'     => 'franz@ttproducts.de',
    'author_company'   => 'jambage.com',
    'constraints'      => [
        'depends'   => [
            'php'   => '7.2.0-8.0.0',
            'typo3' => '9.5.0-10.4.99',
        ],
        'conflicts' => [
        ],
        'suggests'  => [
            'base_cache' => '0.0.3-0.0.0',
        ],
    ],
];
