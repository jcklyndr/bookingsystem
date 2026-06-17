<?php
namespace App\Models\branches;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    use HasFactory;

    protected $table = "branches";

    protected $fillable = [
        'name',
        'image',
        'description',
        'location'
    ];

    public $timestamps = true;

    public function roomspa()
    {
        return $this->hasMany(\App\Models\roomspa\Roomspa::class, 'branch_id');
    }

    public function bookings()
    {
        return $this->hasMany(\App\Models\booking\Booking::class, 'branch_id');
    }

    protected static function booted()
    {
        static::deleting(function ($branch) {
            $branch->roomspa()->delete(); // Delete associated roomspa services
            $branch->bookings()->delete(); // Delete associated bookings
        });
    }
}
