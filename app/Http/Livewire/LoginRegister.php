<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class LoginRegister extends Component
{
    public $users, $email, $password, $name,$contactno,$agree;
public $default='1';
    public $registerForm = false;


    public function render()

    {

        return view('livewire.login-register');

    }


    private function resetInputFields(){

        $this->name = '';

        $this->email = '';

        $this->password = '';
        $this->contactno = '';

    }


    public function login()

    {

        $validatedDate = $this->validate([

            'email' => 'required|email',

            'password' => 'required',

        ]);

        

        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){

            return redirect(route('home'));

        }else{

            session()->flash('error', 'email and password are wrong.');

        }

    }


    public function register()

    {

        $this->registerForm = !$this->registerForm;

    }


    public function registerStore()

    {

        $validatedDate = $this->validate([

            'name' => 'required',

            'email' => 'required|unique:users',
            'contactno' => 'required|unique:users',

            'password' => 'required',
            'agree' => 'required',

        ]);

        //dd($this->default);

        $this->password = $this->password; 


        User::create(['name' => $this->name, 'contactno'=> $this->contactno,'agree'=> $this->agree,
        'email' => $this->email,'payid' => $this->default,
        'password' => $this->password]);


        session()->flash('message', 'Your register successfully Go to the login page.');


        $this->resetInputFields();


    }


  
}
