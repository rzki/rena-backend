<?php

namespace App\Livewire\QR;

use Livewire\Component;
use Livewire\Attributes\Title;

class QrIndex extends Component
{
    #[Title('Kode QR')]
    public function render()
    {
        return view('livewire.q-r.qr-index');
    }
}
