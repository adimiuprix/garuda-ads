<x-layouts.admin_wrapper title="{{ 'Member' }}">
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Edit data member</h5>

        <div class="card-body">
            <form action="{{ route('admin.member.edit', $member->id) }}" method="post">
                @csrf
                <div class="form-floating form-floating-outline mb-6">
                    <input type="text" name="fullname" value="{{ $member->fullname }}" class="form-control" placeholder="Isi nama lengkap">
                    <label for="fullname">Nama lengkap</label>
                </div>
                <div class="form-floating form-floating-outline mb-6">
                    <input type="text" name="username" value="{{ $member->username }}" class="form-control" placeholder="Isi username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating form-floating-outline mb-6">
                    <input type="text" name="email" value="{{ $member->email }}" class="form-control" placeholder="Isi email ">
                    <label for="email ">Email</label>
                </div>
                <div class="form-floating form-floating-outline mb-6">
                    <input type="number" name="phone" value="{{ $member->phone }}" class="form-control" placeholder="Isi nomor telphone ">
                    <label for="phone ">Nomor telephone</label>
                </div>
                <div class="mb-6">
                    <label for="status" class="form-label">Status</label>
                    <select id="status" class="form-select" name="status">
                        <option value="">Silahkan pilih status</option>
                        <option value="0" {{ $member->is_active == 0 ? 'selected' : '' }}>Gak aktif</option>
                        <option value="1" {{ $member->is_active == 1 ? 'selected' : '' }}>Aktif</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="plan" class="form-label">Status</label>
                    <select id="plan" name="plan" class="form-select">
                        <option value="">Silahkan pilih plan</option>
                        @foreach ($plans as $plan)
                        <option value="{{ $plan->id }}" {{ $member->plan_id == $plan->id ? 'selected' : '' }}>{{ $plan->plan_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Perbarui</button>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- Content -->
</x-layouts.admin_wrapper>