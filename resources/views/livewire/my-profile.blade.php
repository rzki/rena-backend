<div>    <div class="main py-4">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4">{{ __('My profile') }}</h2>
                    <form wire:submit.prevent="updateProfile">

                        <div class="row align-items-center">
                            <div class="col-md-6 mb-3">
                                <label for="name">{{ __('Nama') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-alt"></i>
                                    </span>
                                    <input id="name" class="form-control" type="text" name="name"
                                        placeholder="{{ __('Name') }}" wire:model='name'
                                        required>
                                </div>
                                @error('name') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email">{{ __('Email') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="{{ __('Email') }}" id="email" wire:model='email' required>
                                </div>
                                @error('email') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-3">
                                <label for="password">{{ __('Password Baru') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password" name="password" placeholder="{{ __('Password Baru') }}"
                                        class="form-control" id="password">
                                </div>
                                @error('password') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password_confirmation">{{ __('Konfirmasi Password Baru') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        id="password_confirmation" placeholder="{{ __('Konfirmasi Password Baru') }}"
                                        autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-rena text-white mt-2">{{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
