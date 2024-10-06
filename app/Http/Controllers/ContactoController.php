<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactoController extends Controller
{
    // Función para mostrar el formulario de contacto
    public function index()
    {
        return view('my-views.contacto');  // Carga la vista del formulario de contacto
    }

    // Función para procesar el envío del formulario de contacto
    public function send(Request $request)
{
    // Validar los campos del formulario
    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|email',
        'mensaje' => 'required|string',  // El mensaje es obligatorio
    ]);

    // Guardar los datos del formulario en la base de datos
    $contact = Contact::create([
        'nombre' => $request->input('nombre'),
        'email' => $request->input('email'),
        'mensaje' => $request->input('mensaje'), // Almacenar el mensaje
        'publicidad' => $request->has('publicidad'),  // Almacenar si se solicitó publicidad
    ]);

    // Construir el cuerpo del correo electrónico
    $nombre = $request->input('nombre');
    $email = $request->input('email');
    $mensaje = $request->input('mensaje');
    $publicidad = $request->has('publicidad');

    $body = "Hola, $nombre, te hemos contactado exitosamente.\n\n";
    $body .= "Estimado/a $nombre, nos complace informarte que hemos recibido tu mensaje:\n";
    $body .= "\"$mensaje\"\n\n";  // Añadir el mensaje del usuario

    // Añadir nota de publicidad si está marcada
    if ($publicidad) {
        $body .= "Publicidad incluida.";
    }

    // Enviar el correo electrónico al email ingresado
    Mail::raw($body, function ($message) use ($email, $nombre) {
        $message->to($email)
                ->subject("Contacto: $nombre");
    });

    // Redirigir a la página de "Gracias por contactar"
    return redirect()->route('contactado');
}


    // Función para mostrar la página de confirmación
    public function contacted()
    {
        return view('my-views.contactado');  // Carga la vista de confirmación de contacto
    }

    // Función para mostrar los contactos en la tabla 'contact'
    public function verContactos()
    {
        // Obtener los contactos ordenados por fecha de creación (del más reciente al más antiguo)
        $contactos = Contact::orderBy('created_at', 'desc')->get();

        // Retornar la vista con los contactos
        return view('my-views.ver-contactos', ['contactos' => $contactos]);
    }
}
