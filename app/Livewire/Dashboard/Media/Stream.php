<?php

namespace App\Livewire\Dashboard\Media;

use Livewire\Component;

class Stream extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Dashboard', 'url' => route('dashboard')],
            ['name' => 'Media', 'url' => route('media-news')],
            ['name' => 'Stream', 'url' => route('media-stream')],
        ];

        return view('livewire.dashboard.media.stream', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Dashboard | Home',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
