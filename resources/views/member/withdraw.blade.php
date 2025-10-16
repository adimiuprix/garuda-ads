<x-layouts.member_wrapper title="{{ $title }}">
    <div class="container-xxl flex-grow-1 container-p-y"></div>
        <div class="text-center">
            <h4 class="mb-3 mx-2">Ajukan Penarikan Saldo Anda</h4>
        </div>
        <div class="row mb-12 g-6">
            <div class="col-md-12 col-lg-6 offset-lg-3">
                <div class="card text-center">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3 text-start">
                                <label for="amount" class="form-label">Jumlah Penarikan</label>
                                <input type="number" class="form-control" id="amount" name="amount" required>
                            </div>
                            <div class="mb-3 text-start">
                                <label for="method" class="form-label">Metode Penarikan</label>
                                <select class="form-select" id="method" name="method" required>
                                    <option value="" disabled selected>Pilih Metode</option>
                                    
                                    <option value="">{{ 'method' }}</option>
                                    
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Ajukan Penarikan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.member_wrapper>