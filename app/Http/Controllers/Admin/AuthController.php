<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        //Verifica se a sessão está ativa
        if (Auth::check() === true) {
            return redirect()->route('admin.home');
        }
        return view('admin.index');
    }

    public function home()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if(in_array('', $request->only('email', 'password'))){
            $json['message'] = $this->message->error('Ooops, informe todos os dados para efetuar o login')->render();
            return response()->json($json);
        };
        
        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            $json['message'] = $this->message->error('Ooops, informe um email válido')->render();
            return response()->json($json);
        }
        
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        
        //validando as credencias
        if(!Auth::attempt($credentials)){
            
            $json['message'] = $this->message->error('Ooops, usuário e senha não confere')->render();
            return response()->json($json);
        }
        //salvando o ip e data do login
        $this->authenticated($request->getClientIp());
        $json['redirect'] = route('admin.home');
        return response()->json($json);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    private function authenticated(string $ip)
    {
        $user = User::where('id', Auth::user()->id);
        $user->update([
            'last_login_at' => date('Y-m-d H:i:s'),
            'last_login_ip' => $ip
        ]);
    }
}
