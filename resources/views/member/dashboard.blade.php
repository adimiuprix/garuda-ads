<x-layouts.member_wrapper title="{{ $title }}">
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex flex-row align-items-center justify-content-between">
        <h5 class="mb-3">Dashboard</h5>
        <a href="{{ route('upgrade') }}" class="btn btn-primary px-4">Upgrade</a>
    </div>
    @foreach($categories as $category)
    <h5 class="pb-1 mb-2">{{ $category->name }}</h5>
    <div class="row mb-12 g-6">
        @foreach($category->products as $product)
        <div class="col-sm-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('product.show', $product->slug) }}" class="text-decoration-none">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <div class="d-flex">
                            @foreach($product->plans as $plan)
                            <span class="badge rounded-pill bg-label-info me-2">{{ $plan->plan_name }}</span>
                            @endforeach
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</div>
<!-- / Content -->
</x-layouts.member_wrapper>