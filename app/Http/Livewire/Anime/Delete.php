<?php

namespace App\Http\Livewire\Anime;

use Livewire\Component;
use App\Models\Anime;
class Delete extends Component
{
    public $animesId;
    public function getAnimeProperty() {
        return Anime::select('id','author','email','description')
            ->find($this->animesId);
    }

    public function delete() {
        $this->anime->delete();

        return redirect('/dashboard')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
    public function render()
    {
        return view('livewire.anime.delete');
    }
}
