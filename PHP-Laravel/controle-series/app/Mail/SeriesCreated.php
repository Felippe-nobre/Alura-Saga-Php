<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SeriesCreated extends Mailable
{
    use Queueable, SerializesModels;

    public string $nomeSerie;
    public int $idSerie;
    public int $qtdTemporadas;
    public int $episodiosPorTemporada;

    // Construtor
    public function __construct(
        string $nomeSerie,
        int $idSerie,
        int $qtdTemporadas,
        int $episodiosPorTemporada
    ) {
        $this->nomeSerie = $nomeSerie;
        $this->idSerie = $idSerie;
        $this->qtdTemporadas = $qtdTemporadas;
        $this->episodiosPorTemporada = $episodiosPorTemporada;
    }

    // Método build() para construir o e-mail
    public function build()
    {
        return $this->subject("Série {$this->nomeSerie} criada")
                    ->markdown('mail.series-created');
    }
}
