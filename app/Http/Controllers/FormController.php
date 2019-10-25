<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FormController extends Controller
{
    public function showForm()
    {
    	return view('form.form');
    }

    public function succes()
    {
    	return view('form.succes');
    }

    public function index()
    {
    	$users = User::all();

    	return view('form.index', compact('users'));
    }

     public function store()
    {
    	$user = new User();
    	$user->name = request('name');
    	$user->age = request('age');
    	$user->mail = request('mail');
    	$user->save();

    	return redirect('/succes');
    }
}
