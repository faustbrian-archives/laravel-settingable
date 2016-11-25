<?php

/*
 * This file is part of Laravel Settingable.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Settingable;

use Illuminate\Database\Eloquent\Relations\MorphMany;

trait Settingable
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function settingsCollection() : MorphMany
    {
        return $this->morphMany(Setting::class, 'settingable');
    }

    /**
     * [settings description].
     *
     * @return [type] [description]
     */
    public function settings() : SettingStore
    {
        return new SettingStore($this);
    }
}
