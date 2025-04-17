<?php

namespace App\Livewire\Contacts;

use Livewire\Component;
use App\Models\Contacts;
use Livewire\WithPagination;


class Index extends Component
{

    use WithPagination;

    public $search;
    public $select = 10;


    public function delete($id)
    {
        Contacts::where('id', $id)->delete();


        $this->dispatch('del',message: __('share.message.delete') );


    }


    public function render()
    {
        if ($this->search) {
            $contacts = Contacts::with('marketer')
                ->search($this->search)
                ->paginate($this->select);
        } else {
            $contacts = Contacts::with('marketer') 
                ->paginate($this->select);
        }

        return view('livewire.contacts.index', [
            'contacts' => $contacts,
        ]);
    }

}
