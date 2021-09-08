<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Todo;
use Illuminate\Http\Request;

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
        $companies = Company::all()->count();
        $employees = Employee::all()->count();
        $Todos = Todo::all();
        $completeTodos = $Todos->where('completed' === true)->count();
        $incompleteTodos = $Todos->where('completed' === true)->count();
        $newTodos = $Todos->where('completed' === true)->count();
        return view('home', compact('companies', 'employees', 'Todos', 'completeTodos', 'incompleteTodos', 'newTodos'));
    }
}
