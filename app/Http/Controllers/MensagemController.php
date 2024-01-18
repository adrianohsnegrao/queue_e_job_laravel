<?php

namespace App\Http\Controllers;

use App\Models\Mensagem;
use Illuminate\Http\Request;

class MensagemController extends Controller
{
        public function index()
        {
            return response()->json(Mensagem::all());
        }

        public function show($id)
        {
            $mensagem = Mensagem::find($id);
            if($mensagem){
                return response()->json($mensagem);
            }else{
                return response()->json(['error' => 'Mensagem não encontrada'], 404);
            }
        }

        public function store(Request $request)
        {
            $mensagem = new Mensagem();
            $mensagem->fill($request->all());
            $mensagem->save();
            return response()->json($mensagem, 201);
        }

        public function update(Request $request, $id)
        {
            $mensagem = Mensagem::find($id);
            if($mensagem){
                $mensagem->fill($request->all());
                $mensagem->save();
                return response()->json($mensagem);
            }else{
                return response()->json(['error' => 'Mensagem não encontrada'], 404);
            }
        }

        public function destroy($id)
        {
            $mensagem = Mensagem::find($id);
            if($mensagem){
                $mensagem->delete();
                return response()->json(['sucess' => 'Mensagem deletada'], 200);
            }else{
                return response()->json(['error' => 'Mensagem não encontrada'], 404);
            }
        }
}
