<?php

namespace App\Livewire\Dashboard\Media;

use Livewire\Component;

class News extends Component
{
    public function render()
    {
        $breadcrumb = [
            ['name' => 'Dashboard', 'url' => route('dashboard')],
            ['name' => 'Media', 'url' => route('media-news')],
            ['name' => 'News', 'url' => route('media-news')],
        ];

        return view('livewire.dashboard.media.news', [
            'data' => 'data',
        ])->layout('layouts.main', [
            'title' => 'Dashboard | Home',
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
