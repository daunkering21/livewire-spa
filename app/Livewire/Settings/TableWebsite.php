<?php

namespace App\Livewire\Settings;

use Livewire\Component;

class TableWebsite extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Settings', 'url' => route('table-website')],
            ['name' => 'Table Website', 'url' => route('table-website')],
        ];

        return view('livewire.settings.table-website', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Dashboard | Home',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
