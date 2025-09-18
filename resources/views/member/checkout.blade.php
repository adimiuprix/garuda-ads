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
                                            <svg width="30" height="24" viewBox="0 0 250 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z" fill="currentColor"></path>
                                                <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black"></path>
                                                <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z" fill="currentColor"></path>
                                                <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black"></path>
                                                <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="currentColor"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="white" fill-opacity="0.15"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="currentColor"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="white" fill-opacity="0.3"></path>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="mb-0 app-brand-text fw-semibold">Garuda ads</span>
                                </div>
                                <p class="mb-1">Perumahan Taman Seruni, F28 Pekalongan Timur</p>
                                <p  class="mb-1">Kota Pekalongan, Jawa Tengah</p>
                            </div>
                            <div>
                                <h5 class="mb-6 text-nowrap">Invoice #{{ $code_invoice }}</h5>
                                <div class="mb-1">
                                    <span>Tanggal Terbit:</span>
                                    <span>April 25, 2021</span>
                                </div>
                                <div>
                                    <span>Tanggal Jatuh Tempo:</span>
                                    <span>May 25, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <div class="d-flex justify-content-between flex-wrap row-gap-2">
                            <div class="my-1">
                                <h6>Faktur Ke:</h6>
                                <p class="mb-1">{{ 'nama_orang' }}</p>
                                <p class="mb-1">{{ 'alamat_orang' }}</p>
                                <p class="mb-1">{{ 'detail_alamat_orang' }}</p>
                                <p class="mb-1">{{ 'nomor_telpon_orang' }}</p>
                                <p class="mb-0">{{ 'alamat_email_orang' }}</p>
                            </div>
                            <div class="my-1">
                                <h6>Tagihan Ke:</h6>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="pe-4">Total yang Harus Dibayar:</td>
                                            <td>Rp.550.000</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4">Nama bank:</td>
                                            <td>MANDIRI BANK</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4">Negara:</td>
                                            <td>Konoha</td>
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
                                    <td>Paket Ekonomi</td>
                                    <td>Rp.550.000</td>
                                    <td>1</td>
                                    <td>Rp.550.000</td>
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
                                            <span>{{ 'nama_penjual' }}</span>
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
                                        <p class="fw-medium text-heading mb-1">Rp.550.000</p>
                                        <p class="fw-medium text-heading mb-1">Rp.0.00</p>
                                        <p class="fw-medium text-heading mb-2 border-bottom pb-2">Rp.0.00</p>
                                        <p class="fw-medium text-heading mb-0">Rp.550.000</p>
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
            <!-- /Invoice -->
            <!-- Invoice Actions -->
            <div class="col-xl-3 col-md-4 col-12 invoice-actions">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary d-grid w-100 mb-4 waves-effect waves-light">
                        <span class="d-flex align-items-center justify-content-center text-nowrap">
                            <i class="icon-base ri ri-send-plane-line icon-16px scaleX-n1-rtl me-1_5"></i>Send Invoice
                        </span>
                        </button>
                        <button class="btn btn-outline-secondary d-grid w-100 mb-4 waves-effect">Download</button>
                        <div class="d-flex mb-4">
                            <a class="btn btn-outline-secondary d-grid w-100 me-4 waves-effect" target="_blank" href="./app-invoice-print.html"> Print </a>
                            <a href="" class="btn btn-outline-secondary d-grid w-100 waves-effect"> Edit </a>
                        </div>
                        <button class="btn btn-success d-grid w-100 waves-effect waves-light" data-bs-toggle="offcanvas" data-bs-target="#addPaymentOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="icon-base ri ri-money-dollar-circle-line icon-16px scaleX-n1-rtl me-1_5"></i>Add Payment</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- /Invoice Actions -->
        </div>

    </div>
</x-layouts.member_wrapper>