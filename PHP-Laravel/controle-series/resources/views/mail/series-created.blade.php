@component('mail::message')

# Série "{{ $nomeSerie }}" Criada

A série **{{ $nomeSerie }}** com **{{ $qtdTemporadas }}** temporadas e **{{ $episodiosPorTemporada }}** episódios por temporada foi criada com sucesso.

Acesse aqui:

@component('mail::button', ['url' => route('seasons.index', $idSerie)])
    Ver série
@endcomponent

Obrigado,  
{{ config('app.name') }}

@endcomponent
