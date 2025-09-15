<x-layouts.auth_form title="{{ $title }}">
<div class="card-body mt-1">
    <h4 class="mb-1">Selamat datang di Garuda ads!</h4>
    <p class="mb-5">Silahkan isi formulir pendaftaran dan jadilah member.</p>

    <form id="formAuthentication" class="mb-5" action="{{ route('join-member') }}" method="POST">
        @csrf
        <div class="mb-5">
          <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                  <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nama lengkap" autofocus />
                  <label for="fullname">Nama lengkap</label>
              </div>
          </div>
        </div>
        <div class="mb-5">
          <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                  <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" autofocus />
                  <label for="username">Username</label>
              </div>
          </div>
        </div>
        <div class="mb-5">
          <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" autofocus />
                  <label for="email">Email</label>
              </div>
          </div>
        </div>
        <div class="mb-5">
          <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <label for="password">Password</label>
              </div>
              <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line ri-20px"></i></span>
          </div>
        </div>
        <div class="mb-5">
          <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                  <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <label for="password_confirmation">Password Konfirmasi</label>
              </div>
              <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line ri-20px"></i></span>
          </div>
        </div>
        <div class="mb-5">
          <div class="input-group">
              <div class="form-floating form-floating-outline">
                  <input type="tel" class="form-control" id="phone" inputmode="numeric" pattern="^\+?[0-9]{7,15}$" maxlength="16" name="phone" placeholder="Nomor telphone" autofocus />
                  <label for="phone">Nomer handphone</label>
              </div>
          </div>
        </div>
        {{-- <div class="mb-5">
            <div class="input-group">
                <select class="form-select" id="plan" name="plan" aria-label="Pilih paket">
                    <option selected disabled>Pilih paket</option>
                    @foreach($plans as $plan)
                        <option  value="{{ $plan->id }}">
                            {{ $plan->plan_name }} - Rp{{ number_format($plan->price, 0, ',', '.') }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div> --}}
        <div class="mb-5">
            <button class="btn btn-primary d-grid w-100" type="submit">Daftar</button>
        </div>
    </form>

    <p class="text-center mb-5">
        <span>Sudah punya akun?</span>
        <a href="{{ route('signin') }}">
            <span>Login sekarang</span>
        </a>
    </p>
</div>
</x-layouts.auth_form>