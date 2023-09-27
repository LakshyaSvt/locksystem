<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Role;

class PurchaseLead extends Model
{
    use HasFactory;

    public function scopeCityId($query)
    {
        if (Auth::check()) {
            $user = Auth::user();
            //check if user has employee role
            if ($user->hasRole('employee')) {
                $city_ids = [];

                if(isset($user->cities) && count($user->cities) > 0){
                    foreach($user->cities as $city){
                        array_push($city_ids, $city->id);
                    }
                }
                return $query->whereIn('city_id', $city_ids);
            }
        }
    }
}
