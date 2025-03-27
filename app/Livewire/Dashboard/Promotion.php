<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Promotion extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Dashboard', 'url' => route('dashboard')],
            ['name' => 'Promotion', 'url' => route('promotion')],
        ];

        return view('livewire.dashboard.promotion',[
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Dashboard | Home',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
