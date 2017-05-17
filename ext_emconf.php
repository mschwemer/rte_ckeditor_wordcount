<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'CKEditor Word-Count Add-On',
    'description' => 'Adds the word-count add-on to the CKEditor in TYPO3.',
    'category' => 'be',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Marcus Schwemer',
    'author_email' => 'marcus@schwemer.de',
    'version' => '8.7.1',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'rte_ckeditor' => '8.7.0-8.7.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'setup' => '',
        ],
    ],
];
