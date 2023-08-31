<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\QueryException;
use SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;
use Carbon\Carbon;



class SolicitudController extends Controller
{
    public function inicio()
    {
        return view('solicitudes.inicio');
    }

    public function index()
    
    {
        $posts = DB::table('posts')
        ->select(
            'posts.description',
            'posts.title',
            'posts.created_at')->get();
            
        return view('solicitudes.inicio', ['posts' => $posts]);
    }
    
    // Mostrar formulario de inicio de sesión
    public function showLogin()
    {
        return view('solicitudes.login');
    }


    public function createPost(Request $request)
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Crear un nuevo post para el usuario actual
        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $user->posts()->save($post);

        return redirect()->route('solicitudes.showCreateForm'); // Redirigir a la página de creación
    }

    public function showCreateForm()
    {
        return view('solicitudes.nuevopost'); // Mostrar el formulario de creación de posts
    }


    public function registro()
{
    $user = Auth::user();

    $registros = $user->posts()
        ->select(
            'posts.title',
            'posts.description',
            'posts.created_at'
        )
        ->get();

    return view('solicitudes.registro', ['registros' => $registros]);
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
            
            'nombres' => 'required',
            'email' => 'required|email',
        ]);

        // Crear un nuevo usuario
        $user = new User();
        $user->nombres = $request->input('nombres');
        $user->apellidos = $request->input('apellidos');
        $user->password = bcrypt($request->input('password'));
       $user->telefonos = $request->input('telefonos');
        $user->fecha_nacimiento = $request->input('fecha_nacimiento');
        $user->email = $request->input('email');

        $fechaNacimiento = Carbon::parse($request->input('fecha_nacimiento'));
    $edad = $fechaNacimiento->diffInYears(Carbon::now());

    if ($edad < 18) {
        return back()->with('error_message', 'Debes ser mayor de 18 años para registrarte.');
    }
        
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
        
        $user = User::find($id); 
        return view('solicitudes.editar', ['user' => $user]);
    }

    public function update(Request $request, $id)
{
    $user = User::find($id);
    $user->nombres = $request->input('nombres');
        $user->apellidos = $request->input('apellidos');
        $user->password = bcrypt($request->input('password'));
        $user->telefonos = $request->input('telefonos');
        $user->fecha_nacimiento = $request->input('fecha_nacimiento');
        $user->email = $request->input('email');
    $user->save();

    return redirect()->route('solicitudes.registro')->with('success', 'Registro actualizado exitosamente.');
}


public function eliminarRegistro($id)
{
    $user = User::find($id);
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


    
    
    
    
}