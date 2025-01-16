<div>
    <div class="row vh-100 m-0">
        <div class="col d-flex flex-column justify-content-center align-items-center">
            <div class="card p-5 shadow-lg my-4 my-lg-0">
                <div class="title mb-5">
                    <div class="logo text-center">
                        <img src="{{ asset('images/brand/Rena.webp') }}" class="w-45 w-lg-15 mb-4 text-center" alt="">
                    </div>
                    <h1 class="fw-bold text-center fs-3">{{ __('Detail Kode QR') }}</h1>
                </div>
                <div class="row mb-5">
                    <div class="col d-flex justify-content-center">
                        <img src="{{ asset('storage/' . $qr->qr_code) }}" style="width:10em;" alt="">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6 text-center">
                        <div class="name mb-3">
                            <h4 class="fw-bold">{{ __('Nama') }}</h4>
                            <p class="fs-5">{{ $qr->name ?? '' }}</p>
                        </div>
                        <div class="brand mb-3">
                            <h4 class="fw-bold">{{ __('Merk') }}</h4>
                            <p class="fs-5">{{ $qr->brand ?? '' }}</p>
                        </div>
                        <div class="type mb-3">
                            <h4 class="fw-bold">{{ __('Tipe') }}</h4>
                            <p class="fs-5">{{ $qr->type ?? '' }}</p>
                        </div>
                        <div class="serial-number mb-3">
                            <h4 class="fw-bold">{{ __('Nomor Seri') }}</h4>
                            <p class="fs-5">{{ $qr->serial_number ?? '' }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="location mb-3">
                            <h4 class="fw-bold">{{ __('Lokasi') }}</h4>
                            <p class="fs-5">{{ $qr->location ?? '' }}</p>
                        </div>
                        <div class="last-calibration mb-3">
                            <h4 class="fw-bold">{{ __('Tanggal Kalibrasi') }}</h4>
                            @if ($qr->last_calibrated_at == null)
                                <p class="fs-5">{{ '' }}</p>
                            @else
                                <p class="fs-5">{{ date('j F Y', strtotime($qr->last_calibrated_at)) }}</p>
                            @endif
                        </div>
                        <div class="next-calibration mb-3">
                            <h4 class="fw-bold">{{ __('Kalibrasi Selanjutnya') }}</h4>
                            @if ($qr->next_calibrated_at == null)
                                <p class="fs-5">{{ '' }}</p>
                            @else
                                <p class="fs-5">{{ date('j F Y', strtotime($qr->next_calibrated_at)) }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col result">
                        <h4 class="fw-bold">{{ __('Hasil') }}</h4>
                        <p>{{ $qr->result ?? '' }}</p>

                    </div>
                    <div class="col status">
                        <h4 class="fw-bold">{{ __('Status') }}</h4>
                        <p>{{ $qr->status ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
