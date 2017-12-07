<?php

namespace humhub\modules\linkedin;

return [
    'id' => 'linkedin',
    'class' => 'humhub\modules\linkedin\Module',
    'namespace' => 'humhub\modules\linkedin',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::className(),
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\linkedin\Events',
                'addLinkedinFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::className(),
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\linkedin\Events',
                'addLinkedinFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\linkedin\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
