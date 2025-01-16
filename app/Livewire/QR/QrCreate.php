<?php

namespace App\Livewire\QR;

use Carbon\Carbon;
use App\Models\Device;
use App\Models\QrCode;
use Livewire\Component;
use Milon\Barcode\DNS2D;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Storage;

class QrCreate extends Component
{
    public $name, $brand, $model, $serialNumber, $location, $last_calibrated_at, $next_calibrated_at, $result, $status, $qr_code;

    public function create()
    {
        $qrId = Str::orderedUuid();
        $qr = new DNS2D();
        $qr = base64_decode($qr->getBarcodePNG(route('qrcode.detail', $qrId), "QRCODE"));
        $path = 'assets/qr/' . $qrId . '.png';
        Storage::disk('public')->put($path, $qr);

        QrCode::create([
            'deviceId' => $qrId,
            'name' => $this->name,
            'brand' => $this->brand,
            'model' => $this->model,
            'serialNumber' => $this->serialNumber,
            'location' => $this->location,
            'last_calibrated_at' => $this->last_calibrated_at,
            'next_calibrated_at' => Carbon::parse($this->last_calibrated_at)->addYear(),
            'result' => $this->result,
            'status' => $this->status,
            'qr_code' => $path,
        ]);
        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Data QR berhasil dibuat!',
            'toast' => false,
            'position' => 'center',
            'timer' => 1500,
            'showConfirmButton' => false,
        ]);
        return $this->redirectRoute('qrcode.index', navigate:true);
    }
    #[Title('Tambah QR')]
    public function render()
    {
        return view('livewire.q-r.qr-create');
    }
}
