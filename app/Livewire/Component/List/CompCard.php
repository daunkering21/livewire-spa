<?php

namespace App\Livewire\Component\List;

use Livewire\Component;

class CompCard extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Component', 'url' => route('component-box')],
            ['name' => 'Card', 'url' => route('component-card')],
        ];

        return view('livewire.component.list.comp-card', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Component | Card',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
