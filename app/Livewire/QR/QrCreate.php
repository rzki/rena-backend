<?php

namespace App\Livewire\QR;

use Livewire\Component;
use Livewire\Attributes\Title;

class QrCreate extends Component
{
    #[Title('Tambah Kode QR')]
    public function render()
    {
        return view('livewire.q-r.qr-create');
    }
}
