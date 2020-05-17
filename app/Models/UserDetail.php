<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    //
    protected $fillable = [
        'user_id', 'account_type', 'name', 'dob', 'indentity_number', 'phone', 'representative', 'representative_phone', 'gender', 'national_id', 'province_id',
        'distric_id', 'ward_id', 'address', 'avata_url', 'facebook', 'zalo', 'outbound_national_ids', 'fields_ids', 'status'
    ];

}
