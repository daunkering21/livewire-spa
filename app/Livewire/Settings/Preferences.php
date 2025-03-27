<?php

namespace App\Livewire\Settings;

use Livewire\Component;

class Preferences extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Settings', 'url' => route('table-website')],
            ['name' => 'Preferences', 'url' => route('preferences')],
        ];

        return view('livewire.settings.preferences', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Dashboard | Home',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
