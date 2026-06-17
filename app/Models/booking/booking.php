<?php
namespace App\Models\booking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $table = "booking";

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'checkin',
        'checkout',
        'checkin_time',
        'checkout_time',
        'days',
        'price',
        'user_id',
        'roomspaname',
        'branchname',
        'status',
        'roomspa_id',  // Add roomspa_id
        'branch_id'    // Add branch_id
    ];
    

    public $timestamps = true;

    // Relationship to Roomspa
    public function roomspa()
    {
        return $this->belongsTo(\App\Models\roomspa\Roomspa::class, 'roomspa_id'); // Make sure 'roomspa_id' exists in your bookings table
    }

    // Relationship to Branch
    public function branch()
    {
        return $this->belongsTo(\App\Models\branches\Branches::class, 'branch_id'); // Make sure 'branch_id' exists in your bookings table
    }
}

