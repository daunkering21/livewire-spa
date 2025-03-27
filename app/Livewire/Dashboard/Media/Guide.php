<?php

namespace App\Livewire\Dashboard\Media;

use Livewire\Component;

class Guide extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Dashboard', 'url' => route('dashboard')],
            ['name' => 'Media', 'url' => route('media-news')],
            ['name' => 'Guide', 'url' => route('media-guide')],
        ];

        return view('livewire.dashboard.media.guide', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Dashboard | Home',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
