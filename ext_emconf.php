<?php

########################################################################
# Extension Manager/Repository config file for ext "base_excel".
########################################################################

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Excel Library',
    'description' => 'This provides the PhpSpreadsheet library, formerly phpExcel from phpOffice.',
    'category' => 'misc',
    'version' => '0.0.1',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Maarten Balliauw, Mark Baker, Franck Lefevre, Erik Tilt, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => array(
        'depends' => array(
            'php' => '5.6.0-7.0.99',
            'typo3' => '6.2.0-9.99.99'
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
            'base_cache' => '0.0.1-0.0.0'
        ),
    ),
);
