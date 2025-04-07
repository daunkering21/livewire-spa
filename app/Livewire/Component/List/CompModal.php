<?php

namespace App\Livewire\Component\List;

use Livewire\Component;

class CompModal extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Component', 'url' => route('component-box')],
            ['name' => 'Modal', 'url' => route('component-modal')],
        ];

        return view('livewire.component.list.comp-modal', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Component | Modal',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
