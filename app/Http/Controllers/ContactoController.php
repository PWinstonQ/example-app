<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
        // Muestra el formulario de contacto
        return view('my-views.contacto');
    }

    public function send(Request $request)
    {
        // Validar los campos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        // Datos del correo
        $nombre = $request->input('nombre');
        $email = $request->input('email');

        // Usar locales para traducir el mensaje
        $subject = __('CONTACTO ') . $nombre;
        $message = __('
            Hola, :nombre, te hemos contactado exitosamente.

            Estimado/a, nos complace informarte que hemos recibido tu solicitud y nuestro equipo está procesando tu información. Estaremos trabajando en proporcionarte una respuesta. Agradecemos tu interés y preferencia en nuestros productos.', ['nombre' => $nombre]);

        // Enviar correo electrónico
        Mail::raw($message, function ($msg) use ($email, $subject) {
            $msg->to($email)
                ->subject($subject);
        });

        // Redirigir a la página de confirmación
        return redirect()->route('contactado');
    }

    public function contacted()
    {
        // Muestra la página de "Gracias por contactar"
        return view('my-views.contactado');
    }
}
