<?php

namespace App\Http\Controllers;

use App\Models\Portao;
use Illuminate\Support\Facades\File;
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

    public function delete($id)
    {
        $portao = Portao::findOrFail($id);
        $categorias = ['fotos_antes', 'fotos_producao', 'fotos_entrega'];
        
        foreach ($categorias as $categoria) {
            $fotos = $portao->$categoria ?? [];
            
            if (is_string($fotos)) {
                $fotos = json_decode($fotos, true) ?? [];
            }
            
            foreach ($fotos as $foto) {
                $pasta = str_replace('fotos_', '', $categoria);
                $caminho = public_path('uploads/' . $pasta . '/' . $foto);
                
                if (File::exists($caminho)) {
                    File::delete($caminho);
                }
            }
        }
        
        $portao->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $portao = Portao::findOrFail($id);
        return view('sections.modificar-portao', ['portao' => $portao]);
    }

    public function deleteImg(Request $request)
    {
        $portaoId = $request->portao_id;
        $categoria = $request->categoria;
        $nomeArquivo = $request->nome_arquivo;

        $portao = Portao::findOrFail($portaoId);
        $fotosArray = $portao->$categoria ?? [];

        if (is_string($fotosArray)) {
            $fotosArray = json_decode($fotosArray, true) ?? [];
        }

        $fotosArray = array_filter($fotosArray, function($foto) use ($nomeArquivo) {
            return $foto !== $nomeArquivo;
        });

        $fotosArray = array_values($fotosArray);

        $portao->update([
            $categoria => $fotosArray
        ]);

        $pasta = str_replace('fotos_', '', $categoria);
        $caminhoArquivo = public_path('uploads/' . $pasta . '/' . $nomeArquivo);
        if (File::exists($caminhoArquivo)) {
            File::delete($caminhoArquivo);
        }

        return back();
    }

    public function addFotos(Request $request)
    {
        $portao = Portao::findOrFail($request->portao_id);
        $categoria = $request->categoria;

        $fotosArray = $portao->$categoria ?? [];
        if (is_string($fotosArray)) {
            $fotosArray = json_decode($fotosArray, true) ?? [];
        }

        foreach ($request->file('fotos') as $foto) {
            $nomeArquivo = time() . '_' . uniqid() . '.' . $foto->getClientOriginalExtension();
            $pasta = str_replace('fotos_', '', $categoria);
            $foto->move(public_path('uploads/' . $pasta), $nomeArquivo);
            $fotosArray[] = $nomeArquivo;
        }

        $portao->update([$categoria => $fotosArray]);

        return back();
    }

    public function update(Request $request, $id)
    {
        $portao = Portao::findOrFail($id);
        
        $data = $request->validate([
            'tipo' => 'required|string|max:255',
            'material' => 'required|string|max:255',
            'descricao' => 'required|string',
        ]);

        $portao->update($data);

        return redirect('dashboard');
    }
}