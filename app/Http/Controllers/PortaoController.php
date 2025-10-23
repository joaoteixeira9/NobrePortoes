<?php

namespace App\Http\Controllers;

use App\Models\Portao;
use Illuminate\Http\Request;

class PortaoController extends Controller
{
    public function create()
    {
        return view('sections.cadastrar-portao');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tipo' => 'required|string|max:255',
            'material' => 'required|string|max:255',
            'cor' => 'required|string|max:255',
            'largura' => 'required|numeric',
            'altura' => 'required|numeric',
            'descricao' => 'required|string',
        ]);

        $data['fotos_antes'] = $this->salvarNomesFotos($request->file('fotos_antes'), 'antes');
        $data['fotos_producao'] = $this->salvarNomesFotos($request->file('fotos_producao'), 'producao');
        $data['fotos_entrega'] = $this->salvarNomesFotos($request->file('fotos_entrega'), 'entrega');

        Portao::create($data);

        return redirect('/dashboard')->with('success', 'Portão cadastrado com sucesso!');
    }

    private function salvarNomesFotos($fotos, $pasta)
    {
        if (!$fotos) return null;

        $nomes = [];
        foreach ($fotos as $foto) {
            $timestamp = now()->timestamp;
            $random = bin2hex(random_bytes(4));
            $extensao = $foto->getClientOriginalExtension();
            
            $nomeCodificado = "{$timestamp}_{$random}.{$extensao}";
            
            $foto->move(public_path("uploads/{$pasta}"), $nomeCodificado);
            
            $nomes[] = $nomeCodificado;
        }
        
        return $nomes;
    }

    public function index()
    {
        $portoes = Portao::all();
        
        return view('dashboard', ['portoes' => $portoes]);
    }

    public function show($id)
    {
        $portao = Portao::findOrFail($id);
        return view('sections.visualizar-portao', ['portao' => $portao]);
    }
}