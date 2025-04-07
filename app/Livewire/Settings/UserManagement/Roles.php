<?php

namespace App\Livewire\Settings\UserManagement;

use Livewire\Component;

class Roles extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Settings', 'url' => route('preferences')],
            ['name' => 'User Management', 'url' => route('user-management-users')],
            ['name' => 'Roles', 'url' => route('user-management-roles')],
        ];

        return view('livewire.settings.user-management.roles', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Dashboard | Home',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
