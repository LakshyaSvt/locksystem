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
        return $query->whereName('employee');
    }
}
