<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Message;
use Carbon\Carbon;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /**
         * Prepare data for Student Home View:
         * Asignaturas (Nombre)
         * Tareas/Exámenes (CantidadxAsignatura y Fecha)
         * Mensajes (de quién y contenido) 
         */

        $messageData = DB::table('messages')
            ->join('users', 'users.id', '=', 'messages.from_id')
            ->select('messages.id', 'messages.from_id', 'messages.content', 'users.name', 'messages.time_sent')
            ->where('messages.to_id', auth()->user()->id)
            ->get()
            ->all();

            $messageNotRead = DB::table('messages')
            ->where('to_id',auth()->user()->id)
            ->where('time_read', null)
            ->count();

            //dd($messageNotRead);
            //select signatures.name, count(tasks.id) from tasks inner join signatures on signatures.id = tasks.signature_id where tasks.student_id = 1 group by signature_id;

        $tasksData = DB::table('notes')
            ->join('signatures', 'signatures.id', '=', 'notes.signature_id')
            ->join('tasks','tasks.id','=','notes.task_id')
            ->where('tasks.rol','work')
            ->select('signatures.name', DB::raw('count(*) as total'))
            ->where('notes.student_id', auth()->user()->id)
            ->where('notes.state','n')
            ->groupBy('signature_id')
            ->get()->all();

            $examsData = DB::table('notes')
            ->join('signatures', 'signatures.id', '=', 'notes.signature_id')
            ->join('tasks','tasks.id','=','notes.task_id')
            ->select('signatures.name as signature_name','tasks.name as task_name','tasks.finnished_at','tasks.id','tasks.description')
            ->where('tasks.rol','exam')
            ->where('notes.student_id', auth()->user()->id)
            ->whereBetween('tasks.finnished_at',[Carbon::now(), Carbon::now()->addDays(15)])
            ->where('notes.state','n')
            ->get()->all();

            //dd($examsData);

        $studentsData = DB::table('users')
            ->select('id', 'name', 'rol', 'signature_id')
            ->where('course_id', auth()->user()->course_id)
            ->get()->all();



        //dd(Carbon::today()->toDateString());

        return view('home')->with('form', $messageData)
            ->with('tasksData', $tasksData)
            ->with('studentsData', $studentsData)
            ->with('examsData',$examsData)
            ->with('messagesNotRead',$messageNotRead);
    }

    public function store(Request $request)
    {
        $data = request()->all();

        Message::create([
            'content' => $data['mensaje'],
            'from_id' => $data['from_id'],
            'to_id' => $data['destinatario'],
            'time_sent' => Carbon::now(),
        ]);

        Route::redirect('/home/create', '/home');
        
    }
}
