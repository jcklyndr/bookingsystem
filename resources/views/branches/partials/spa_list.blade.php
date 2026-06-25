@foreach ($roomspa as $sparooms)
    <div class="col-lg-6">
        <div class="card border-0 shadow-sm overflow-hidden h-100 spa-card">
            <div class="row g-0 h-100 align-items-stretch">
                <div class="col-md-6 position-relative spa-card-img" style="background-image: url('{{ asset('assets/images/'.$sparooms->image) }}');">
                    <a href="{{ route('branches.roomspaservices.details', $sparooms->id) }}" class="stretched-link"></a>
                </div>
                <div class="col-md-6 d-flex align-items-center bg-white">
                    <div class="card-body p-4 text-center w-100">
                        <p class="spa-stars mb-2 small">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </p>
                        <h4 class="card-title mb-3 fw-bold playfair-display fs-5">
                            <a href="{{ route('branches.roomspaservices.details', $sparooms->id) }}" class="text-decoration-none text-dark card-title-link">
                                {{ $sparooms->spaservice }}
                            </a>
                        </h4>
                        <ul class="list-unstyled text-muted small mb-4 spa-details-list">
                            <li class="mb-1"><span class="text-muted">Max:</span> {{ $sparooms->maxpeeps }} Persons</li>
                            <li class="mb-1"><span class="text-muted">Room Type:</span> {{ $sparooms->name }}</li>
                            <li class="mb-1"><span class="text-muted">View:</span> {{ $sparooms->view }}</li>
                            <li class="mb-1"><span class="text-muted">Bed:</span> {{ $sparooms->bed }}</li>
                            <li class="mt-2"><span class="text-muted">Price:</span> <span class="fw-bold text-dark">{{ number_format($sparooms->price, 2) }}</span></li>
                        </ul>
                        <p class="mb-0">
                            <a href="{{ route('branches.roomspaservices.details', $sparooms->id) }}" class="btn btn-outline-primary btn-sm px-4 spa-btn">
                                View Details <i class="fa-solid fa-arrow-right ms-1 spa-btn-icon"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

<div class="col-12 d-flex justify-content-center mt-5 ajax-pagination">
    {{ $roomspa->links('pagination::bootstrap-5') }}
</div>