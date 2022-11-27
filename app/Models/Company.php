<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
//    use HasFactory;
    use SoftDeletes;

    protected $table = 'companies';

    protected $fillable = [
            'name',
            'email',
            'address'
    ];

//    protected $appends = [
//        'trans_status'
//    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
