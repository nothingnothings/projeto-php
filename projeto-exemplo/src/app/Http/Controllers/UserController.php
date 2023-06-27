<?php

namespace App\Http\Controllers;

// imports
use Illuminate\Http\Request;
use App\Models\User;

// FACADES, UMA PARTE ESSENCIAL DO LARAVEL
// precisamos da facade de ''auth'' para acessarmos methods essenciais de auth.. facades são acessadas com ''Facade::nomeDoMethod()''
use Illuminate\Support\Facades\Auth;




class UserController extends Controller
{
    // '$request' -> é isso que dá um NOME ('$request') a essa variável, que poderá ser usada dentro de 'postSignUp' e 'postSignIn'
    public function postSignUp(Request $request)
    {
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;

        $user->save(); //salva o user no banco de dados


        Auth::login($user); //isto faz o login do user no browser (deixa 1 session no browser do user)...
        return redirect()->route('dashboard'); //redireciona para a página de dashboard
    }

    public function postSignIn(Request $request)
    {

        $email = $request['email'];
        $password = $request['password'];

        $is_valid = Auth::attempt(['email' => $email, 'password' => $password]);


        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            print($is_valid);
            print("IS VALID DOS GURI");
            return redirect()->route('dashboard'); ///redirected to dashboard
        } else {
            print("IS NOT VALID DOS GURI");
            return redirect()->back(); ///else, we return to the starting view
        }
    }

    public function getDashboard()
    {
        return view('dashboard');
    }

}
