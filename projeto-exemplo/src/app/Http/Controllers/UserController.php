<?php

namespace App\Http\Controllers;

// imports
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {
    // '$request' -> é isso que dá um NOME ('$request') a essa variável, que poderá ser usada dentro de 'postSignUp' e 'postSignIn'
    public function postSignUp(Request $request) {
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;

        $user->save(); //salva o user no banco de dados


        return redirect()->back(); //redireciona para a página anterior
    }

    public function postSignIn(Request $request) {

        $email = $request['email'];
        $password = $request['password'];

        // $password_is_valid = bcrypt($password)





        return redirect()->back();
    }

}
