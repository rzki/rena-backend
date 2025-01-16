<?php

namespace App\Livewire\QR;

use App\Models\QrCode;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class QrDetail extends Component
{
    public $qrs, $qrId, $name, $brand, $model, $serialNumber, $location, $last_calibrated_at, $next_calibrated_at, $result, $status, $qr_code;

    public function mount($qrId)
    {
        $this->qrs = QrCode::where('deviceId', $qrId)->first();
        $this->qrId = $this->qrs->deviceId;
        $this->name = $this->qrs->name;
        $this->brand = $this->qrs->brand;
        $this->model = $this->qrs->model;
        $this->serialNumber = $this->qrs->serialNumber;
        $this->location = $this->qrs->location;
        $this->last_calibrated_at = $this->qrs->last_calibrated_at;
        $this->next_calibrated_at = $this->qrs->next_calibrated_at;
        $this->result = $this->qrs->result;
        $this->status = $this->qrs->status;
        $this->qr_code = $this->qrs->qr_code;
    }
    #[Title('Detail QR')]
    #[Layout('components.layouts.public')]
    public function render()
    {
        return view('livewire.q-r.qr-detail',[
            'qr' => $this->qrs
        ]);
    }
}
