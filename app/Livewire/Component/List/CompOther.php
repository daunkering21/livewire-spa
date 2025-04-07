<?php

namespace App\Livewire\Component\List;

use Livewire\Component;

class CompOther extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Component', 'url' => route('component-box')],
            ['name' => 'Other', 'url' => route('component-other')],
        ];

        return view('livewire.component.list.comp-other', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Component | Other',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
