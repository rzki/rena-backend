<div>
    <div class="main py-4">
        <div class="pagetitle ps-3 fw-bold">
            <h1 class="mb-3 h2"><strong>{{ __('Edit Role') }}</strong></h1>
        </div>
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="col-12 px-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col">
                                    <a href="{{ route('roles.index') }}" class="btn btn-primary text-white"><i
                                            class="fas fa-arrow-left"></i> {{ __('Back') }}</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <form wire:submit='update'>
                                        <div class="row">
                                            <div class="form-group mb-3">
                                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    wire:model='name'>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                        <div class="d-grid">
                                            <button type="submit"
                                                class="btn btn-success text-white">{{ __('Submit') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
