<?php

namespace App\Livewire\Component\List;

use Livewire\Component;

class CompButton extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Component', 'url' => route('component-box')],
            ['name' => 'Button', 'url' => route('component-button')],
        ];

        return view('livewire.component.list.comp-button', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Component | Button',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
