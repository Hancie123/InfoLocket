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

    #[Rule('required')]
    public $username;

    #[Rule('required','email')]
    public $email;

    #[Rule('required')]
    public $password;

    public function save(){

        $this->validate();
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
