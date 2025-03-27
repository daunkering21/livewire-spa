<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Inbox extends Component
{
    public function render()
    {        
        $breadcrumb = [
            ['name' => 'Dashboard', 'url' => route('dashboard')],
            ['name' => 'Inbox', 'url' => route('inbox')],
        ];
        
        return view('livewire.dashboard.inbox', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Dashboard | Home',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
