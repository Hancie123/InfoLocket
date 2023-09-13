<?php

namespace App\Livewire;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\User;
use Session;

class Registeraccount extends Component
{
    #[Rule('required')]
    public $name;

    #[Rule('required|unique:users,username')]
    public $username;

    #[Rule('required|unique:users,email|email')]
    public $email;

    #[Rule('required')]
    public $password;

    public function save(){

        $validated=$this->validate();
        $user=User::create([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        return redirect('/register')->with('success', 'Account is created successfully!');
    }

    public function render()
    {

        return view('livewire.registeraccount');
    }
}
