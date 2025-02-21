<?php

namespace App\Mail;

use App\Models\ContactForm;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contacto extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    /**
     * Crear una nueva instancia del mensaje.
     *
     * @param  \App\Models\Message  $message
     * @return void
     */
    public function __construct(ContactForm $message)
    {
        $this->message = $message;
    }
    /**
     * Construir el mensaje.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->message->email, $this->message->nombre)  // De: correo del usuario
            ->to('4b51fe0857-357f66+1@inbox.mailtrap.io')
            ->subject('Nuevo mensaje de contacto')
            ->markdown('email.contacto')
            ->with([
                'nombre' => $this->message->nombre,
                'empresa' => $this->message->empresa ?? 'No especificado',
                'tipo_empresa' => $this->message->tipo_empresa,
                'urgencia' => $this->message->urgencia,
                'servicio' => $this->message->servicio,
                'provincia' => $this->message->provincia,
                'localidad' => $this->message->localidad,
                'telefono' => $this->message->telefono,
                'email' => $this->message->email,
            ]);
    }
}
