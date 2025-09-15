<x-layouts.auth_form  title="{{ $title }}">
<div class="card-body mt-1">
    <h4 class="mb-1">Form login</h4>
    <p class="mb-5">Silahkan masukkan kredensial anda.</p>

    <form id="formAuthentication" class="mb-5" action="{{ route('signin') }}" method="POST">
        @csrf
        <div class="mb-5">
          <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline mb-5">
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
        <div class="mb-5 pb-2 d-flex justify-content-between pt-2 align-items-center">
            <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox" id="remember-me" />
                <label class="form-check-label" for="remember-me"> Remember Me </label>
            </div>
            <a href="" class="float-end mb-1">
                <span>Lupa Password?</span>
            </a>
        </div>
        <div class="mb-5">
            <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
        </div>
    </form>

    <p class="text-center mb-5">
        <span>Belum punya akun?</span>
        <a href="{{ route('join-member') }}">
            <span>Daftar sekarang</span>
        </a>
    </p>
</div>
</x-layouts.auth_form>