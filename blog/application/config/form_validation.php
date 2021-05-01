<?php
$config = [
    'add_article_rules' => [
        'field' => 'title',
        'label' => 'Article Title',
        'rules' => 'requires|alpha'
    ],
    [
        'field' => 'body',
        'label' => 'Article Body',
        'rules' => 'requires|alpha'
    ]
];
