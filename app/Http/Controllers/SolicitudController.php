<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\QueryException;
use SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;


class SolicitudController extends Controller
{

    
    // Mostrar formulario de inicio de sesión
    public function showLogin()
    {
        return view('solicitudes.login');
    }

    // Procesar inicio de sesión
    public function logincheck (Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Usuario autenticado, redirigir a la página deseada
        return redirect()->intended('/solicitud/registro');
    } else {
        // Usuario no autenticado, mostrar mensaje de error
        return back()->withErrors(['email' => 'Credenciales incorrectas']);
    }
}


    // Mostrar formulario de registro
    public function showRegistrationForm()
    {
        return view('solicitudes.nuevousuario');
    }

    
    public function register(Request $request)
    {
        // Validar los datos
        $validatedData = $request->validate([
            'tipo_documento' => 'required',
            'numero_documento' => 'required|unique:users',
            'nombres' => 'required',
            'apellidos' => 'required',
            'estado' => 'required|in:0,1',
            'password' => 'required|min:8',
            'email' => 'required|email|unique:users',
            'genero' => 'required|in:Femenino,Masculino',
            
        ]);

        // Crear un nuevo usuario
        $user = new User();
        $user->tipo_documento = $request->input('tipo_documento');
        $user->numero_documento = $request->input('numero_documento');
        $user->nombres = $request->input('nombres');
        $user->apellidos = $request->input('apellidos');
        $user->estado = $request->input('estado');
        $user->password = bcrypt($request->input('password'));
        $user->observacion = $request->input('observacion');
        $user->direccion = $request->input('direccion');
        $user->telefonos = $request->input('telefonos');
        $user->fecha_nacimiento = $request->input('fecha_nacimiento');
        $user->email = $request->input('email');
        $user->genero = $request->input('genero');

        try {
            $user->save();
        
            // Mostrar mensaje de éxito
            return redirect()->route('solicitudes.showRegistrationForm')->with('success_message', __('Usuario registrado exitosamente.'));
        } catch (\Illuminate\Database\QueryException $e) {
            // Mostrar mensaje de error con detalles de la excepción
            return redirect()->route('solicitudes.showRegistrationForm')->with('error_message', __('No se pudo registrar el usuario. Detalles: ') . $e->getMessage());
        }
        
    }

    public function showEditForm($id)
    {
        
        $user = User::find($id); // Suponiendo que tu modelo se llama 'Registro'
        return view('solicitudes.editar', ['user' => $user]);
    }

    public function update(Request $request, $id)
{
    $user = User::find($id);
    // Validar y actualizar los datos, similar a como lo haces en el método 'register'
    $user->tipo_documento = $request->input('tipo_documento');
        $user->numero_documento = $request->input('numero_documento');
        $user->nombres = $request->input('nombres');
        $user->apellidos = $request->input('apellidos');
        $user->estado = $request->input('estado');
        $user->password = bcrypt($request->input('password'));
        $user->observacion = $request->input('observacion');
        $user->direccion = $request->input('direccion');
        $user->telefonos = $request->input('telefonos');
        $user->fecha_nacimiento = $request->input('fecha_nacimiento');
        $user->email = $request->input('email');
        $user->genero = $request->input('genero');
    $user->save();

    return redirect()->route('solicitudes.registro')->with('success', 'Registro actualizado exitosamente.');
}


public function eliminarRegistro($id)
{
    $user = User::find($id); // Suponiendo que tu modelo se llama 'Registro'
    if ($user) {
        $user->delete();
        return redirect()->route('solicitudes.registro')->with('success', 'Registro eliminado exitosamente.');
    }
    return redirect()->route('solicitudes.registro')->with('error', 'No se pudo encontrar el registro para eliminar.');
}




    // Mostrar formulario de recuperación de contraseña
    public function showPasswordResetForm()
    {
        return view('solicitudes.password');
    }


public function sendResetLinkEmail(Request $request)
{
    $this->validate($request, [
        'email' => 'required|email',
    ]);

    // Enviar correo de recuperación
    $response = $this->broker()->sendResetLink(
        $request->only('email')
    );

    if ($response == Password::RESET_LINK_SENT) {
        return back()->with('status', trans($response));
    }

    return back()->withErrors(['email' => trans($response)]);
}

protected function broker()
{
    return Password::broker('users'); // Cambia 'users' por el nombre del guard que uses en tu aplicación
}


    
    public function registro()
    {
        $registros = DB::table('users')
            ->select(
                'users.id',
                'users.tipo_documento',
                'users.numero_documento',
                'users.nombres',
                'users.apellidos',
                'users.estado',
                'users.password',
                'users.observacion',
                'users.direccion',
                'users.telefonos',
                'users.fecha_nacimiento',
                'users.email',
                'users.genero',
                'users.created_at',
                'users.updated_at'
            )->get();
    
        return view('solicitudes.registro', ['registros' => $registros]);
    }
    
    
}