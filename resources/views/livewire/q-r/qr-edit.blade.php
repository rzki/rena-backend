<div>
    <div class="main py-4">
        <div class="pagetitle ps-3 fw-bold">
            <h1 class="mb-3 h2 text-capitalize"><strong>{{ __('Tambah kode QR baru') }}</strong></h1>
        </div>
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="col-12 px-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col">
                                    <a href="{{ route('qrcode.index') }}" class="btn btn-primary text-white"><i
                                            class="fas fa-arrow-left"></i> {{ __('Kembali') }}</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <form wire:submit='update'>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="name" class="form-label">{{ __('Nama') }}</label>
                                                    <input type="text" name="name" id="name" class="form-control"
                                                        wire:model='name'>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="serial_number"
                                                        class="form-label">{{ __('No. Seri') }}</label>
                                                    <input type="text" name="serialNumber" id="serialNumber"
                                                        class="form-control" wire:model='serialNumber'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">

                                                <div class="form-group mb-3">
                                                    <label for="brand" class="form-label">{{ __('Merk') }}</label>
                                                    <input type="text" name="brand" id="brand" class="form-control"
                                                        wire:model='brand'>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">

                                                <div class="form-group mb-3">
                                                    <label for="model" class="form-label">{{ __('Tipe') }}</label>
                                                    <input type="text" name="model" id="model" class="form-control"
                                                        wire:model='model'>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group mb-3">
                                                    <label for="location" class="form-label">{{ __('Lokasi') }}</label>
                                                    <input type="text" name="location" id="location"
                                                        class="form-control" wire:model='location'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group mb-3">
                                                    <label for="last_calibrated_at"
                                                        class="form-label">{{ __('Kalibrasi Terakhir') }}</label>
                                                    <input type="date" name="last_calibrated_at" id="last_calibrated_at"
                                                        class="form-control" wire:model='last_calibrated_at'>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group mb-3">
                                                    <label for="result" class="form-label">{{ __('Hasil') }}</label>
                                                    <select name="result" id="result" class="form-control"
                                                        wire:model='result'>
                                                        <option value="">{{ __('Pilih salah satu') }}</option>
                                                        <option value="Tidak Laik Pakai">{{ __('Tidak Laik Pakai') }}
                                                        </option>
                                                        <option value="Laik Pakai">{{ __('Laik Pakai') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group mb-3">
                                                    <label for="status" class="form-label">{{ __('Status') }}</label>
                                                    <select name="status" id="status" class="form-control"
                                                        wire:model='status'>
                                                        <option value="">{{ __('Pilih salah satu') }}</option>
                                                        <option value="Tidak Tersedia">{{ __('Tidak Tersedia') }}
                                                        </option>
                                                        <option value="Tersedia">{{ __('Tersedia') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!-- /.row -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success text-white">{{ __('Submit') }}</button>
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