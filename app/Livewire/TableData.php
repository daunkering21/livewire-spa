<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Collection;

class TableData extends Component
{
    public Collection $rows;

    public bool $isLoading = true;

    public function load()
    {
        sleep(2);

        $this->rows = User::limit(10)->get();
        $this->isLoading = false;
    }

    public function render()
    {
        return view('livewire.table-data');
    }
}
