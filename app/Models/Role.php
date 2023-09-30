<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Role extends \TCG\Voyager\Models\Role
{
    use HasFactory;

    public function scopeServicePartner($query)
    {
        // if(auth()->user()->role_id != 1)
            return $query->where('roles.name','employee');
    }
}
