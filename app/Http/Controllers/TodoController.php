<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $tasks = DB::table('todo')->get();
        return view('todo.index', ['tasks' => $tasks]);
    }
    public function create(Request $request)
    {
        $param = [
            'content' => $request->content,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('todo')->insert($param);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $param = [

            'content' => $request->content,
            'updated_at' => now()
        ];
        DB::table('todo')->where('id', $request->id)
            ->update($param);
        return redirect('/');
    }
}