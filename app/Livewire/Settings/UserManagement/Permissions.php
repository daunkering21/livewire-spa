<?php

namespace App\Livewire\Settings\UserManagement;

use Livewire\Component;

class Permissions extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Settings', 'url' => route('preferences')],
            ['name' => 'User Management', 'url' => route('user-management-users')],
            ['name' => 'Permissions', 'url' => route('user-management-permissions')],
        ];

        return view('livewire.settings.user-management.permissions', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Dashboard | Home',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
