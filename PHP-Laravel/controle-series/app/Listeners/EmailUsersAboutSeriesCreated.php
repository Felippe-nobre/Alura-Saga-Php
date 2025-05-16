<?php
namespace App\Listeners;

use App\Events\SeriesCreated as SeriesCreatedEvent;
use App\Mail\SeriesCreated as SeriesCreatedMail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class EmailUsersAboutSeriesCreated implements ShouldQueue
{
    public function handle(SeriesCreatedEvent $event)
    {
        $userList = User::all();
        
        foreach ($userList as $index => $user) {
            try {
                // Criando o e-mail para cada usuário
                $email = new SeriesCreatedMail(
                    nomeSerie: $event->seriesName,
                    idSerie: $event->seriesId,
                    qtdTemporadas: $event->seriesSeasonsQty,
                    episodiosPorTemporada: $event->episodiosPorTemporada
                );

                // Definindo quando o e-mail deve ser enviado (com atraso de 5 segundos entre cada um)
                $when = now()->addSeconds($index * 5);

                // Enviando o e-mail de forma assíncrona
                Mail::to($user)->later($when, $email);
            } catch (\Exception $e) {
                // Registrando qualquer erro no envio do e-mail
                Log::error("Erro ao enviar e-mail para {$user->email}: {$e->getMessage()}");
            }
        }
    }
}
