<?php

return [
    'components' => [
        'seo' => [
            'name' => 'SEO Data',
            'description' => 'Allows access to SEO information. Can be rendered for meta tags.'
        ]
    ],
    'fields' => [
        'seo_keywords' => 'SEO Keywords',
        'seo_canonical_url' => 'Canonical URL',
        'seo_redirect_url' => 'Redirect URL',
        'robots_index' => 'Robots index',
        'robots_follow' => 'Robots follow'
    ],
    'plugin' => [
        'name' => 'SEO Tweaker',
        'description' => 'SEO Extensions'
    ]
];
