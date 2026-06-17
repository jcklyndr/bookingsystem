<?php
namespace App\Models\roomspa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomspa extends Model
{
    use HasFactory;

    protected $table = "roomspa";

    protected $fillable = [
        'name',
        'image',
        'maxpeeps',
        'spaservice',
        'view',
        'bed',
        'price',
        'currency_code',
        'branch_id',
    ];

    public $timestamps = true;

    public function branch()
    {
        return $this->belongsTo(\App\Models\branches\Branches::class, 'branch_id');
    }

    public function bookings()
    {
        return $this->hasMany(\App\Models\booking\Booking::class, 'roomspa_id');
    }

    protected static function booted()
    {
        static::deleting(function ($roomspa) {
            $roomspa->bookings()->delete(); // Delete associated bookings
        });
    }
}
