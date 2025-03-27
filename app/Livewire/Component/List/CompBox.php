<?php

namespace App\Livewire\Component\List;

use Livewire\Component;

class CompBox extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Component', 'url' => route('component-box')],
            ['name' => 'Box', 'url' => route('component-box')],
        ];

        return view('livewire.component.list.comp-box', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Component | Box',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
