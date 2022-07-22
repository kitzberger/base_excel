<?php

########################################################################
# Extension Manager/Repository config file for ext "base_excel".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Excel Library',
    'description'      => 'This provides the PhpSpreadsheet library, formerly phpExcel from phpOffice. Version 1.24.1',
    'category'         => 'misc',
    'version'          => '0.3.0',
    'state'            => 'stable',
    'clearcacheonload' => 1,
    'author'           => 'PhpSpreadsheet developers, Franz Holzinger',
    'author_email'     => 'franz@ttproducts.de',
    'author_company'   => 'jambage.com',
    'constraints'      => [
        'depends'   => [
            'php'   => '7.3.0-8.1.99',
            'typo3' => '9.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
        'suggests'  => [
            'base_cache' => '0.0.3-0.0.0',
        ],
    ],
];
