<?php
return [
    'file_renderers' => [
        'invokables' => [
            'md_embed' => 'ReaderMarkdown\ReaderMD',
        ],
        'aliases' => [
            'text/markdown' => 'md_embed',
            'md' => 'md_embed',
        ],
    ],
];
