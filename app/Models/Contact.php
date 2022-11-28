<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'contacts';

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'phone'
    ];

//    protected $appends = [
//        'trans_status'
//    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
