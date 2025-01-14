<div>
    <div class="main py-4">
        <div class="pagetitle ps-3 fw-bold">
            <h1 class="mb-3 h2"><strong>{{ __('Role') }}</strong></h1>
        </div>
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="col-12 px-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="mb-3 row">
                                <div class="pb-3 col d-flex justify-content-end">
                                    <a href="{{ route('roles.create') }}" class="ml-3 text-white btn btn-success"><i
                                            class="me-1 fas fa-plus-circle"
                                            aria-hidden="true"></i>{{ __(' New User') }}</a>
                                </div>
                                <div class="table-wrapper table-responsive-md">
                                    <table class="table text-center text-black striped-table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Role') }}</th>
                                                <th>{{ __('Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roles as $role)
                                                <tr>
                                                    <td>{{ $role->name }}</td>
                                                    <td>
                                                        <a href="{{ route('roles.edit', $role->id) }}"
                                                            class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                        <button class="btn btn-danger"
                                                            wire:click.prevent="deleteConfirm('{{ $role->id }}')"><i
                                                                class="fas fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="mt-4 row">
                                        <div class="col-lg-6 d-flex align-items-center">
                                            <label
                                                class="mb-0 font-bold text-black form-label me-2">{{ __('Show ') }}</label>
                                            <select wire:model.live='perPage' class="text-black form-control per-page"
                                                style="width: 7%">
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                            <label
                                                class="mb-0 font-bold text-black form-label ms-2">{{ __('Data ') }}</label>
                                        </div>
                                        <div class="col-lg-6 d-flex align-items-center justify-content-end">
                                            {{ $roles->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@script
    <script>
        window.addEventListener('delete-confirmation', event => {
            Swal.fire({
                title: "Are you sure?",
                text: "Role will be deleted permanently!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes"
            }).then((result) => {
                if (result.isConfirmed) {
                    $wire.dispatch('deleteConfirmed');
                }
            });
        })
    </script>
@endscript
@if (session()->has('alert'))
    @script
        <script>
            const alerts = @json(session()->get('alert'));
            const title = alerts.title;
            const icon = alerts.type;
            const toast = alerts.toast;
            const position = alerts.position;
            const timer = alerts.timer;
            const confirm = alerts.showConfirmButton;

            Swal.fire({
                title: title,
                icon: icon,
                toast: toast,
                position: position,
                timer: timer,
                showConfirmButton: confirm
            });
        </script>
    @endscript
@endif
