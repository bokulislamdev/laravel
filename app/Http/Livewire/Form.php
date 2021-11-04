<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Teacher;
class Form extends Component
{

    public $name,$email;

    public $modalid=true;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    public function updated($propertyName)
   {
        $this->validateOnly($propertyName);
    }

    public function addTeacher(){
        $this->dispatchBrowserEvent('addformmodel');
    }

    public function resetForm(){
        $this->name = '';
        $this->email = '';
    }
    public function submit(){
        $this->validate();
        $data = new Teacher();
        $data->name = $this->name;
        $data->email = $this->email;
        $data->save();
        $this->resetForm();
        session()->flash('message','Data submit successfully');
    }

    //DELETE
    // public function deleteId($id)
    // {
    //     $this->deleteId = $id;
    //     Teacher::find($this->deleteId)->delete();
    //     session()->flash('message','Teacher delete Successfully !!');
    // }


    public function render()
    {
        $this->data=Teacher::all();
        return view('livewire.form');
    }


}
