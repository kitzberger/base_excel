<?php

########################################################################
# Extension Manager/Repository config file for ext "base_excel".
########################################################################

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Excel Library',
    'description' => 'This provides the PhpSpreadsheet library, formerly phpExcel from phpOffice.',
    'category' => 'misc',
    'version' => '0.1.0',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'PhpSpreadsheet developers, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => array(
        'depends' => array(
            'php' => '7.2.0-7.3.99',
            'typo3' => '7.6.0-9.99.99'
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
            'base_cache' => '0.0.1-0.0.0'
        ),
    ),
);
