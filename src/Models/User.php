<?php

namespace Madtechservices\MadAssets\Models;

use App\Models\User as BaseUser;

class User extends BaseUser
{
    public function campuses()
    {
        return $this->belongsToMany(Campus::class);
    }
}