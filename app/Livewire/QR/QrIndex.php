<?php

namespace App\Livewire\QR;

use App\Models\QrCode;
use Livewire\Component;
use Livewire\Attributes\Title;

class QrIndex extends Component
{
    public $qr, $qrId;
    public $perPage = 5;
    public $listeners = ['deleteConfirmed' => 'delete'];
    public function deleteConfirm($qrId)
    {
        $this->qrId = $qrId;
        $this->dispatch('delete-confirmation');
    }
    public function delete()
    {
        $this->qr = QrCode::where('deviceId', $this->qrId)->first();
        $this->qr->delete();
        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Data QR berhasil dihapus!',
            'toast' => false,
            'position' => 'center',
            'timer' => 1500,
            'showConfirmButton' => false,
        ]);
        return $this->redirectRoute('qrcode.index', navigate: true);
    }
    #[Title('Kode QR')]
    public function render()
    {
        return view('livewire.q-r.qr-index',[
            'qrs' => QrCode::paginate($this->perPage),
        ]);
    }
}
