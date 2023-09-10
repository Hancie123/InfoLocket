<?php

namespace App\Livewire;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login extends Component


{
    #[Rule('required')]
    public $username;

    #[Rule('required')]
    public $password;

    public function login(){
        $this->validate();

        $user = User::where('username', $this->username)->first();
        if(!$user){
            return redirect('/')->with('fail','User account not found!');
        }

        if ($user && Hash::check($this->password, $user->password)){

            Auth::login($user);
            Session::put('name',$user->name);
            Session::put('id',$user->id);
            return redirect('/admin/dashboard')->with('success','Welcome '. $this->username);
        } else {
            // Authentication failed
            return redirect('/')->with('fail','Incorrect username and password!');
        }




    }
    public function render()
    {
        return view('livewire.login');
    }
}
