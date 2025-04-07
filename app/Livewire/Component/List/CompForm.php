<?php

namespace App\Livewire\Component\List;

use Livewire\Component;

class CompForm extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Component', 'url' => route('component-box')],
            ['name' => 'Form', 'url' => route('component-form')],
        ];

        return view('livewire.component.list.comp-form', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Component | Form',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
