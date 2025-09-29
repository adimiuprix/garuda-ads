<x-layouts.admin_wrapper title="{{ 'Member' }}">
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Table member</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Paket</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($members as $member)
                    <tr>
                        <td>{{ $member->username }}</td>
                        <td>{{ $member->plan->plan_name }}</td>
                        <td>
                            @php
                                $status = $member->is_active ? 'Aktif' : 'Gak aktif';
                                $badgeClass = $member->is_active ? 'primary' : 'danger';
                            @endphp
                            <span class="badge rounded-pill bg-label-{{ $badgeClass }} me-1">{{ $status }}</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{ route('admin.member.edit', $member->id) }}" class="dropdown-item waves-effect" href="javascript:void(0);"><i class="ri-pencil-line me-1"></i> Edit</a>
                                    <form action="{{ route('admin.member.destroy', $member->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item waves-effect">
                                            <i class="ri-delete-bin-6-line me-1"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Content -->
</x-layouts.admin_wrapper>