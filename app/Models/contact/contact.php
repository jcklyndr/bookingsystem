<?php

namespace App\Models\contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table ="contactus";

    protected $fillable = [
        'name',
        'email',
        'contact',
        'subject',
        'message'

    ];

    public $timestamps = false;
}
