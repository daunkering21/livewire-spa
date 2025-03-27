<?php

namespace App\Livewire\Component\List;

use Livewire\Component;

class CompTable extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Component', 'url' => route('component-box')],
            ['name' => 'Table', 'url' => route('component-table')],
        ];

        return view('livewire.component.list.comp-table', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Component | Table',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
