<?php

namespace App\Livewire\QR;

use Carbon\Carbon;
use App\Models\Device;
use App\Models\QrCode;
use Livewire\Attributes\Title;
use Livewire\Component;

class QrEdit extends Component
{

    public $device, $qrId, $name, $brand, $model, $serialNumber, $location, $last_calibrated_at, $next_calibrated_at, $result, $status;

    public function mount($qrId){
        $this->device = QrCode::where('deviceId', $qrId)->first();
        $this->name = $this->device->name;
        $this->brand = $this->device->brand;
        $this->model = $this->device->model;
        $this->serialNumber = $this->device->serialNumber;
        $this->location = $this->device->location;
        $this->last_calibrated_at = $this->device->last_calibrated_at;
        $this->next_calibrated_at = $this->device->next_calibrated_at;
        $this->result = $this->device->result;
        $this->status = $this->device->status;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'serialNumber' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'last_calibrated_at' => 'required|date',
            'result' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        QrCode::where('deviceId','=',$this->qrId)->update([
            'name' => $this->name,
            'brand' => $this->brand,
            'model' => $this->model,
            'serialNumber' => $this->serialNumber,
            'location' => $this->location,
            'last_calibrated_at' => $this->last_calibrated_at,
            'next_calibrated_at' => Carbon::parse($this->last_calibrated_at)->addYear(),
            'result' => $this->result,
            'status' => $this->status,
        ]);
        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Data QR berhasil diubah!',
            'toast' => false,
            'position' => 'center',
            'timer' => 1500,
            'showConfirmButton' => false,
        ]);
        return $this->redirectRoute('qrcode.index', navigate:true);
    }
    #[Title('Edit QR')]
    public function render()
    {
        return view('livewire.q-r.qr-edit');
    }
}
