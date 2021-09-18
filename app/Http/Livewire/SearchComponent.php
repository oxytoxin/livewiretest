<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    use WithPagination;
    public $query = "";

    public function render()
    {
        $users = User::where('name', 'like', "%{$this->query}%")->paginate(10);

        return view('livewire.search-component', [
            'users' => $users
        ]);
    }

    public function updating()
    {
        $this->resetPage();
    }
}
