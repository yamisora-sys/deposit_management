<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\sotietkiem;

class UserPassbook extends Component
{
    public $personal;

    public function mount(){
        $user = Auth::user();
        $this->personal = $user->passBook;
    }
    const route = [
        'name' => "user-passbook",
        'component' => 'user-passbook',
        'route' => '/user-passbook',
    ];
    public function render()
    {
        return view('livewire.user-passbook');
    }
}
