<?php

namespace humhub\modules\linkedin;

return [
    'id' => 'linkedin',
    'class' => 'humhub\modules\linkedin\Module',
    'namespace' => 'humhub\modules\linkedin',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\linkedin\Events',
                'addLinkedinFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::class,
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\linkedin\Events',
                'addLinkedinFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::class,
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\linkedin\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
