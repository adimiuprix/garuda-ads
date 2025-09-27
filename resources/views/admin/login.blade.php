<x-layouts.auth_form  title="{{ 'admin login' }}">
<div class="card-body mt-1">
    <h4 class="mb-1">Admin Panel</h4>
    <p class="mb-5">Silahkan masukkan kredensial anda.</p>

    <form id="formAuthentication" class="mb-5" action="{{ route('admin.login.authorize') }}" method="POST">
        @csrf
        <div class="mb-5">
          <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline mb-5">
                  <input type="username" class="form-control" id="username" name="username" placeholder="Masukkan username" autofocus />
                  <label for="username">Username</label>
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
            <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
        </div>
    </form>
</div>
</x-layouts.auth_form>