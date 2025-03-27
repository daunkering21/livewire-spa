<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Dashboard', 'url' => route('dashboard')],
            ['name' => 'Overview', 'url' => route('dashboard')],
        ];

        return view('livewire.dashboard.home', [
            'userCount' => User::count(),
        ])->layout('layouts.main', [
            'title' => 'Dashboard | Home',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
