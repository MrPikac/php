<?php
namespace App\Controllers;
use App\Core\App;

class StaffController {

    public function index()
    {
        $users = App::get('database')->getAll('staff');

        return view('staff-index', compact('staff'));
    }

    public function create()
    {
        return view('staff-create');
    }

    public function store()
    {
        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('staff', $_POST);

        return redirect('/staff');
    }

    public function show()
    {
        $staff = App::get('database')->getOne('staff', $_GET['id']);

        return view('staff-show', compact('staff'));
    }

    public function edit()
    {
        $staff = App::get('database')->getOne('staff', $_GET['id']);

        return view('staff-edit', compact('staff'));
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('staff', $_POST);

        return redirect('/staff');
    }

    public function destroy()
    {
        App::get('database')->delete('staff', $_GET['id']);

        return redirect('/staff');

    }

}