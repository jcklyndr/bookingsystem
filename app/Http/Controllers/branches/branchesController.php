<?php

namespace App\Http\Controllers\branches;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\roomspa\roomspa;
use App\Models\booking\booking;
use App\Models\branches\branches;
use Auth;
use DateTime;
use Redirect;
use Session;

class branchesController extends Controller
{

    
    public function roomspaservices($id){ //function_name

        $getroomspaservices = roomspa::select()->orderBy('id','desc')->take(6)->where('branch_id', $id)->get();

        return view('branches.roomspaservices',compact ('getroomspaservices'));
    }

    public function servicedetails($id){ //function_name

        $getservicesdetails = roomspa::find($id);

        return view('branches.servicesdetails',compact ('getservicesdetails'));
    }

    public function servicebooking(Request $request, $roomspa_id)
{
    $roomspa = roomspa::find($roomspa_id);

    // Log room spa details
    Log::info("Room Spa ID: {$roomspa_id}");
    if (!$roomspa) {
        return Redirect::route('branches.roomspaservices.details', $roomspa_id)
            ->with(['error' => 'Room Spa not found']);
    }

    $branches = branches::find($roomspa->branch_id);
    if (!$branches) {
        return Redirect::route('branches.roomspaservices.details', $roomspa_id)
            ->with(['error' => 'Branch not found']);
    }

    // Validate input
    if (empty($request->checkin) || empty($request->checkout) || empty($request->checkin_time) || empty($request->checkout_time)) {
        return Redirect::route('branches.roomspaservices.details', $roomspa_id)
            ->with(['errornodate' => 'Please provide check-in and check-out dates and times']);
    }

    // Log input data
    Log::info("Checkin: {$request->checkin}, Checkin Time: {$request->checkin_time}");
    Log::info("Checkout: {$request->checkout}, Checkout Time: {$request->checkout_time}");

    // Convert checkin and checkout dates to YYYY-MM-DD format
    try {
        $checkinDate = DateTime::createFromFormat('m/d/Y', $request->checkin)->format('Y-m-d');
        $checkoutDate = DateTime::createFromFormat('m/d/Y', $request->checkout)->format('Y-m-d');
    } catch (Exception $e) {
        Log::error("Invalid date format: " . $e->getMessage());
        return Redirect::route('branches.roomspaservices.details', $roomspa_id)
            ->with(['error' => 'Invalid date format provided']);
    }

    // Log formatted dates
    Log::info("Formatted Checkin Date: {$checkinDate}");
    Log::info("Formatted Checkout Date: {$checkoutDate}");

    // Create DateTime objects for checkin and checkout with time
    try {
        $checkinDateTime = new DateTime($checkinDate . ' ' . $request->checkin_time);
        $checkoutDateTime = new DateTime($checkoutDate . ' ' . $request->checkout_time);
        $currentDateTime = new DateTime();
    } catch (Exception $e) {
        Log::error("Invalid DateTime format: " . $e->getMessage());
        return Redirect::route('branches.roomspaservices.details', $roomspa_id)
            ->with(['error' => 'Invalid date or time format provided']);
    }

    // Log DateTime objects
    Log::info("Checkin DateTime: " . $checkinDateTime->format('Y-m-d H:i:s'));
    Log::info("Checkout DateTime: " . $checkoutDateTime->format('Y-m-d H:i:s'));
    Log::info("Current DateTime: " . $currentDateTime->format('Y-m-d H:i:s'));

    // Ensure both check-in and check-out are in the future
    if ($checkinDateTime <= $currentDateTime || $checkoutDateTime <= $currentDateTime) {
        return Redirect::route('branches.roomspaservices.details', $roomspa_id)
            ->with(['error_dates' => 'Check-in and check-out must be in the future']);
    }

    // Validate check-out is after check-in
    if ($checkoutDateTime <= $checkinDateTime) {
        return Redirect::route('branches.roomspaservices.details', $roomspa_id)
            ->with(['error' => 'Check-out time must be after check-in time']);
    }

    // Calculate duration and price
    $interval = $checkinDateTime->diff($checkoutDateTime);
    $days = $interval->days;
    $hours = $interval->h;
    Log::info("Booking Duration - Days: {$days}, Hours: {$hours}");

    $totalPrice = $days * $roomspa->price;
    if ($days === 0) { // Handle same-day bookings
        $totalPrice = ($hours / 24) * $roomspa->price;
    }
    $totalPrice = round($totalPrice, 2);

    Log::info("Total Price Calculated: {$totalPrice}");

    // Prepare booking details
    $bookingDetails = [
        "name" => $request->name,
        "email" => $request->email,
        "phone_number" => $request->phone_number,
        "checkin" => $checkinDate, // Use the formatted checkin date
        "checkout" => $checkoutDate, // Use the formatted checkout date
        "checkin_time" => $checkinDateTime->format('H:i'), // Store in 24-hour format
        "checkout_time" => $checkoutDateTime->format('H:i'), // Store in 24-hour format
        "checkin_time_am_pm" => $checkinDateTime->format('h:i A'), // AM/PM format for display
        "checkout_time_am_pm" => $checkoutDateTime->format('h:i A'), // AM/PM format for display
        "days" => $days,
        "price" => $totalPrice,
        "currency_code" => 'PHP',
        "user_id" => Auth::user()->id,
        "roomspaname" => $roomspa->name,
        "branchname" => $branches->name,
        "roomspa_id" => $roomspa->id, // Add roomspa_id
        "branch_id" => $branches->id, // Add branch_id
    ];
    

    // Log booking details
    Log::info("Booking Details: ", $bookingDetails);

    // Store booking details in session
    session(['booking_details' => $bookingDetails]);

    // Save price in session for further use (if necessary)
    session(['price' => $totalPrice]);

    // Redirect to payment
    return Redirect::route('branches.payment');
}



    public function payWithPaypal()
{
    // Retrieve booking details from the session
    $bookingDetails = session('booking_details');

    // Display  on the payment page
    return view('branches.payment', ['bookingDetails' => $bookingDetails]);
}

    public function success()
    {
    // Retrieve booking details from the session
    $bookingDetails = session('booking_details');

    // Create the actual booking
    $bookspa = booking::create($bookingDetails);

    // Clear session
    session()->forget(['price', 'booking_details']);

    return view('branches.success');
}



}    

