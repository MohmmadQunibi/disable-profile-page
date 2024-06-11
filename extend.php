<?php

/*
 * This file is part of mohmmad/disable-profile-page.
 *
 * Copyright (c) 2024 Mohmmad Qunibi.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Mohmmad\DisableProfilePage;

use Flarum\Extend;
use Mohmmad\DisableProfilePage\Api\Controller\DisableProfilePageController;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        ->css(__DIR__.'/less/admin.less'),

    new Extend\Locales(__DIR__.'/locale')
];
