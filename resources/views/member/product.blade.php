<x-layouts.member_wrapper title="{{ $title }}">
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex flex-row align-items-center justify-content-between">
        <h5 class="mb-3">Product detail</h5>
    </div>
    <div class="col-12">
        <div class="card overflow-hidden">
            <h5 class="card-header">{{ $product_name }}</h5>
            <div class="card-body ps ps--active-x ps--active-y">
                <p class="card-text text-primary">{{ $description }}</p>
                <div class="d-flex mb-3">
                    <span class="badge rounded-pill bg-label-info me-2">Ekonomi</span>
                    <span class="badge rounded-pill bg-label-info me-2">Bisnis</span>
                </div>
                @if ($is_benefit === true)
                @else
                <div class="card">
                    <div class="card-body">
                        <div class="nav-align-top">
                            <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-2 gap-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active waves-effect waves-light">
                                        Sumber Daya
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card bg-warning text-white">
                            <div class="card-body">
                                <h5 class="card-title text-white">Upgrade Available</h5>
                                <p class="card-text">Please upgrade to get the latest features and fixes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
<!-- / Content -->
</x-layouts.member_wrapper>