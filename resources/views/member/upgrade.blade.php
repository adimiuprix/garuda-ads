<x-layouts.member_wrapper title="{{ $title }}">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex flex-row align-items-center justify-content-between">
            <h5 class="mb-3">Upgrade</h5>
        </div>
        <div class="text-center">
            <h4 class="mb-3 mx-2">Pilih Paket Sesuai Kebutuhan Anda</h4>
        </div>
        <div class="row mb-12 g-6">
            @foreach ($plans as $plan)
            <div class="col-md-12 col-lg-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">{{ $plan->plan_name }}</h5>
                        @foreach ($plan->benefits as $benefit)
                        <p class="card-text">{{ $benefit->name }}</p>
                        @endforeach
                        @if($active_plan == $plan->id)
                        <button class="btn btn-xs btn-primary waves-effect waves-light">Plan saat ini</button>
                        @else
                        <a href="{{ route('checkout', ['plan_id' => $plan->id]) }}" class="btn btn-xs btn-primary waves-effect waves-light">Upgrade sekarang</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layouts.member_wrapper>