<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Mail\SeriesCreated as SeriesCreatedMailable; // lembre de importar com alias, se necessário
use App\Models\Series;
use App\Repositories\SeriesRepository;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $repository)
    {
        $this->middleware('auth')->except('index');
    }

    public function index(Request $request)
    {
        $series = Series::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        // Processa a imagem da capa (se houver)
        $coverPath = $request->hasFile('cover')
            ? $request->file('cover')->store('series_cover', 'public')
            : null;
        $request->coverPath = $coverPath;

        // Cria a série usando o repositório
        $serie = $this->repository->add($request);

        // Extrai os campos do request para disparar o evento.
        // Aqui usamos os valores dos inputs: seasonsQty e episodesPerSeason.
        $seasonsQty = $request->seasonsQty ?? 0;
        $episodesPerSeason = $request->episodesPerSeason ?? 0;

        // Dispara o evento passando os dados individualmente (não dentro de um array)
        \App\Events\SeriesCreated::dispatch(
            $serie->nome,
            $serie->id,
            $seasonsQty,
            $episodesPerSeason
        );

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso");
    }

    public function destroy(Series $series)
    {
        $series->delete();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso");
    }

    public function edit(Series $series)
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso");
    }
}
