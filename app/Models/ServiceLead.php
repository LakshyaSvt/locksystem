<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ServiceLead extends Model
{
    use HasFactory;

    public function scopeCityId($query)
    {
        if (Auth::check()) {
            $user = Auth::user();
            //check if user has employee role
            if ($user->hasRole('employee')) {
                return $query->where('city_id', $user->city_id);
            }
        }
    }
}
