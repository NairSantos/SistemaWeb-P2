<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Agendamento;

class AgendamentosController extends Controller
{
    public function index()
    {
        $agendamentos = Agendamento::all();

        return view('consultar', compact('agendamentos'));
    }

    public function create()
    {
        return view('cadastrar');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required|max:255',
            'telefone' => 'required|max:15',
            'origem' => 'required|max:255',
            'data_contato' => 'required|date',
            'observacao' => 'nullable|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->route('agendamentos.create')->withErrors($validator)->withInput();
        }

        $agendamento = new Agendamento;
        $agendamento->nome = $request->input('nome');
        $agendamento->telefone = $request->input('telefone');
        $agendamento->origem = $request->input('origem');
        $agendamento->data_contato = $request->input('data_contato');
        $agendamento->observacao = $request->input('observacao');
        $agendamento->save();

        return redirect()->route('agendamentos.index')->with('success', 'Agendamento criado com sucesso!');
    }

    public function edit($id)
    {
        $agendamento = Agendamento::find($id);

        return view('editar', compact('agendamento'));
    }

    public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'nome' => 'required|max:255',
        'telefone' => 'required|max:15',
        'origem' => 'required|max:255',
        'data_contato' => 'required|date',
        'observacao' => 'nullable|max:500',
    ]);

    if ($validator->fails()) {
        return redirect()->route('agendamentos.edit', $id)
            ->withErrors($validator)
            ->withInput();
    }

    $agendamento = Agendamento::find($id);
    $agendamento->nome = $request->input('nome');
    $agendamento->telefone = $request->input('telefone');
    $agendamento->origem = $request->input('origem');
    $agendamento->data_contato = $request->input('data_contato');
    $agendamento->observacao = $request->input('observacao');
    $agendamento->save();

    return redirect('/consultar')->with('success', 'Agendamento atualizado com sucesso!');
}


    public function destroy($id)
    {
        $agendamento = Agendamento::find($id);
        $agendamento->delete();

        return redirect()->route('agendamentos.index')->with('success', 'Agendamento excluído com sucesso!');
    }
}