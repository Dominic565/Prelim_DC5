<?php

namespace App\Http\Livewire\Anime;

use Livewire\Component;
use App\Models\Anime;

class Index extends Component
{

    public function loadAnimes() {
        $animes = Anime::orderBy('author')->get();

        return compact('animes');
    }

    public function render()
    {
        return view('livewire.anime.index', $this->loadAnimes());
    }
}
