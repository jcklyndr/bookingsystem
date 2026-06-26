@extends('layouts.app')

@section('content')

{{-- Main Container na may sapat na padding sa itaas at ibaba --}}
<section class="py-5 bg-light min-vh-100">
    <div class="container">
        
        {{-- Page Header --}}
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="fw-bold text-dark h2">My Bookings</h1>
                <p class="text-muted small">View and track your spa service reservations below.</p>
            </div>
        </div>

        {{-- Table Container Card --}}
        <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
            {{-- table-responsive wrapper --}}
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle mb-0 w-100">
                    <thead class="table-dark text-uppercase small">
                        <tr>
                            <th scope="col" class="py-3 px-4" style="min-width: 180px;">Service Name</th>
                            <th scope="col" class="py-3" style="min-width: 150px;">Branch</th>
                            <th scope="col" class="py-3" style="min-width: 130px;">Guest Name</th>
                            <th scope="col" class="py-3" style="min-width: 180px;">Contact</th>
                            <th scope="col" class="py-3" style="min-width: 120px;">Check-In</th>
                            <th scope="col" class="py-3" style="min-width: 120px;">Check-Out</th>
                            <th scope="col" class="py-3 text-center" style="min-width: 100px;">Duration</th>
                            <th scope="col" class="py-3" style="min-width: 120px;">Total Price</th>
                            <th scope="col" class="py-3 px-4 text-center" style="min-width: 120px;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bookings as $booking)
                            <tr>
                                <td class="px-4 fw-bold text-dark">{{ $booking->roomspaname }}</td>
                                <td class="text-wrap">{{ $booking->branchname }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>
                                    <span class="d-block fw-bold text-dark">{{ $booking->phone_number }}</span>
                                    <span class="text-muted small d-block text-break" style="max-width: 200px;">{{ $booking->email }}</span>
                                </td>
                                <td>
                                    <span class="d-block text-nowrap fw-semibold text-secondary">{{ $booking->checkin }}</span>
                                    <span class="badge bg-light text-dark border fw-normal mt-1">{{ $booking->checkin_time }}</span>
                                </td>
                                <td>
                                    <span class="d-block text-nowrap fw-semibold text-secondary">{{ $booking->checkout }}</span>
                                    <span class="badge bg-light text-dark border fw-normal mt-1">{{ $booking->checkout_time }}</span>
                                </td>
                                <td class="text-center text-muted small fw-bold">{{ $booking->days }} {{ Str::plural('Day', $booking->days) }}</td>
                                <td class="fw-bold text-success text-nowrap">PHP {{ number_format((float)$booking->price, 2) }}</td>
                                <td class="px-4 text-center">
                                    @php
                                        $status = strtolower($booking->status);
                                    @endphp
                                    @if($status == 'completed' || $status == 'approved' || $status == 'booked successfully')
                                        <span class="badge bg-success px-3 py-2 rounded-pill text-uppercase">Success</span>
                                    @elseif($status == 'pending' || $status == 'processing')
                                        <span class="badge bg-warning px-3 py-2 rounded-pill text-uppercase text-dark">Pending</span>
                                    @else
                                        <span class="badge bg-secondary px-3 py-2 rounded-pill text-uppercase">{{ $booking->status }}</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center py-5 text-muted">
                                    <i class="fas fa-calendar-times mb-3 display-4 d-block text-muted"></i>
                                    You don't have any bookings yet.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

@endsection