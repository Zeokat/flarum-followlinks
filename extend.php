<?php
/*
 * This file is part of Flarum.
 *
 * The creator of flarum-followlinks is a single soul.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[tooltip="{TEXT1}" placement="{TEXT2}"]{TEXT3}[/tooltip]',
                '<span class="bb-tooltip" data-tooltip="{TEXT1}" data-placement="{TEXT2}">{TEXT3}</span>'
            );
        })
];
