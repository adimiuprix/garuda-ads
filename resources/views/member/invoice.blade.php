<x-layouts.member_wrapper title="{{ $title }}">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex flex-row align-items-center justify-content-between">
            <h5 class="mb-3">Invoice</h5>
        </div>

        <div class="row invoice-preview">
            <!-- Invoice -->
            <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-6">
                <div class="card invoice-preview-card p-sm-12 p-6">
                    <div class="card-body invoice-preview-header rounded p-6 text-heading">
                        <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column">
                            <div class="mb-xl-0 mb-6">
                                <div class="d-flex svg-illustration align-items-center gap-3 mb-6">
                                    <span class="app-brand-logo demo">
                                        <span class="text-primary">
                                            <img src="{{ asset('public/user/svg/logo.svg') }}" alt="logo">
                                        </span>
                                    </span>
                                    <span class="mb-0 app-brand-text fw-semibold">Garuda ads</span>
                                </div>
                                <p class="mb-1">Perumahan Taman Seruni, F28 Pekalongan Timur</p>
                                <p  class="mb-1">Kota Pekalongan, Jawa Tengah</p>
                            </div>
                            <div>
                                <h5 class="mb-6 text-nowrap">Invoice #{{ $invoice->invoice_number }}</h5>
                                <div class="mb-1">
                                    <span>Tanggal Terbit:</span>
                                    <span>{{ $invoice->issue_date->translatedFormat('d F Y') }}</span>
                                </div>
                                <div>
                                    <span>Tanggal Jatuh Tempo:</span>
                                    <span>{{ $invoice->due_date->translatedFormat('d F Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <div class="d-flex justify-content-between flex-wrap row-gap-2">
                            <div class="my-1">
                                <h6>Faktur Ke:</h6>
                                <p class="mb-1">{{ 'Redo Restu Pratama' }}</p>
                                <p class="mb-1">{{ 'Perumahan Taman Seruni, F28 Pekalongan Timur, Kota Pekalongan, Jawa Tengah' }}</p>
                                <p class="mb-1">{{ '+6285226483182' }}</p>
                            </div>
                            <div class="my-1">
                                <h6>Tagihan Ke:</h6>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="pe-4">Total yang Harus Dibayar:</td>
                                            <td>Rp {{ number_format($invoice->amount, 0, ',', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4">Nama bank:</td>
                                            <td>SEA BANK</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4">Nomor tujuan:</td>
                                            <td>901452724100</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4">Negara:</td>
                                            <td>Indonesia</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive border rounded border-bottom-0">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Langganan/Judul Produk</th>
                                    <th>Biaya</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $invoice->plan->plan_name }}</td>
                                    <td>Rp.{{ number_format($invoice->amount, 0, ',', '.') }}</td>
                                    <td>1</td>
                                    <td>Rp.{{ number_format($invoice->amount, 0, ',', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table m-0 table-borderless">
                            <tbody>
                                <tr>
                                    <td class="align-top pe-6 ps-0 py-6">
                                        <p class="mb-1">
                                            <span class="me-2 h6">Penjual:</span>
                                            <span>{{ 'Redo Restu Pratama' }}</span>
                                        </p>
                                        <span>Terima kasih atas bisnis Anda</span>
                                    </td>
                                    <td class="px-0 py-6 w-px-100">
                                        <p class="mb-1">Subtotal:</p>
                                        <p class="mb-1">Discount:</p>
                                        <p class="mb-2 border-bottom pb-2">Tax:</p>
                                        <p class="mb-0">Total:</p>
                                    </td>
                                    <td class="text-end px-0 py-6 w-px-100">
                                        <p class="fw-medium text-heading mb-1">Rp.{{ number_format($invoice->amount, 0, ',', '.') }}</p>
                                        <p class="fw-medium text-heading mb-1">Rp.0.00</p>
                                        <p class="fw-medium text-heading mb-2 border-bottom pb-2">Rp.0.00</p>
                                        <p class="fw-medium text-heading mb-0">Rp.{{ number_format($invoice->amount, 0, ',', '.') }}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr class="mt-0 mb-6">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12">
                                <span class="fw-medium text-heading">Perhatian:</span>
                                <span>Transfer pukul 06:00 - 21:00 akan divalidasi secara otomatis max 3 jam setelah transfer. Selepas jam tersebut akan divalidasi keesokan harinya. Jika setelah 24 jam akun belum aktif, silakan chat kami.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Invoice -->
            <!-- Invoice Actions -->
            <div class="col-xl-3 col-md-4 col-12 invoice-actions">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('send.invoice', $invoice->invoice_number) }}" method="post">
                            @csrf
                            <button class="btn btn-primary d-grid w-100 mb-4 waves-effect waves-light">
                                <span class="d-flex align-items-center justify-content-center text-nowrap">
                                    <i class="icon-base ri ri-send-plane-line icon-16px scaleX-n1-rtl me-1_5"></i>
                                    Kirim Invoice
                                </span>
                            </button>
                        </form>
                        <button class="btn btn-outline-secondary d-grid w-100 mb-4 waves-effect">
                            Unduh
                        </button>
                    </div>
                </div>
            </div>
            <!-- Invoice Actions -->
        </div>

    </div>
</x-layouts.member_wrapper>