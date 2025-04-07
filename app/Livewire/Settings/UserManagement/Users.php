<?php

namespace App\Livewire\Settings\UserManagement;

use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Settings', 'url' => route('preferences')],
            ['name' => 'User Management', 'url' => route('user-management-users')],
            ['name' => 'Users', 'url' => route('user-management-users')],
        ];

        return view('livewire.settings.user-management.users', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Dashboard | Home',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
