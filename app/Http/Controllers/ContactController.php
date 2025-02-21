<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Log; // Importa la clase Log
use Illuminate\Support\Facades\Mail;
use App\Mail\Contacto;
use Inertia\Inertia;

class ContactController extends Controller
{
    /**
     * Almacena un nuevo contacto en la base de datos.
     */
    public function store(Request $request)
    {
        // Log de entrada para depurar
        Log::info('Formulario de contacto recibido:', $request->all());

        // Validación de los datos del formulario
        $validatedData = $request->validate([
            'tipo_empresa' => 'required|string|max:255',
            'urgencia' => 'required|string|max:255',
            'servicio' => 'required|string|max:255',
            'empresa' => 'nullable|string|max:255',
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'provincia' => 'required|string|max:255',
            'localidad' => 'required|string|max:255',
            'privacidad' => 'required|boolean',
        ]);

        // Log de los datos validados para asegurarse de que son correctos
        Log::info('Datos validados para el contacto:', $validatedData);

        // Crear el registro en la base de datos
        $contact = ContactForm::create($validatedData);
        Mail::to(config('mail.from.address'))->send(new Contacto($contact));


        // Log de la creación exitosa
        Log::info('Formulario de contacto guardado con éxito:', ['contact' => $contact]);

        return redirect()->back()->with('success', 'Formulario enviado correctamente');
    }
}
