<?php

namespace humhub\modules\rockethub;

use humhub\modules\rockethub\Module;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\space\widgets\Sidebar as Spacebar;
use humhub\modules\dashboard\widgets\Sidebar as Dashbar;

return [
    'id' => 'rockethub',
    'class' => Module::class,
    'namespace' => 'humhub\modules\rockethub',
    'events' => [
        ['class' => Dashbar::class, 'event' => Dashbar::EVENT_INIT, 'callback' => [Events::class, 'addRockethubFrame']],
        ['class' => Spacebar::class, 'event' => Spacebar::EVENT_INIT, 'callback' => [Events::class, 'addRockethubFrame']],
        ['class' => AdminMenu::class, 'event' => AdminMenu::EVENT_INIT, 'callback' => [Events::class, 'onAdminMenuInit']]
    ]
];
?>
