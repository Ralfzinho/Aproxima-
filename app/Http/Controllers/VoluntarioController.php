<?php
namespace   App\Http\Controllers;
use App\Models\causa;
use app\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class   VoluntarioController extends Controller
{
    public function create()
    {
        $causas = Causa::orderBy('nome')->get();
        return view('cadastro_voluntario', compact('causas'));
    }

    public function store(Request $request)
    {
        $validated = User::validateVoluntario($request->all());
        $user      = User::createVoluntario($validated);

        Auth::login($user);

        // redireciona para a tela de início (home '/')
        return redirect()->route('inicio');
    }
}