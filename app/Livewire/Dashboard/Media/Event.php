<?php

namespace App\Livewire\Dashboard\Media;

use Livewire\Component;

class Event extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Dashboard', 'url' => route('dashboard')],
            ['name' => 'Media', 'url' => route('media-news')],
            ['name' => 'Event', 'url' => route('media-event')],
        ];

        return view('livewire.dashboard.media.event', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Dashboard | Home',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
