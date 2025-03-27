<?php

namespace App\Livewire\Dashboard\Media;

use Livewire\Component;

class Gallery extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Dashboard', 'url' => route('dashboard')],
            ['name' => 'Media', 'url' => route('media-news')],
            ['name' => 'Gallery', 'url' => route('media-gallery')],
        ];

        return view('livewire.dashboard.media.gallery', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Dashboard | Home',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
