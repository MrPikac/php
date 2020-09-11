<?php
namespace App\Controllers;
use App\Core\App;

class PostsController {

    public function index()
    {
        $posts = App::get('database')->getAll('buildings');

        return view('building-index', compact('building'));
    }

    public function create()
    {
        return view('building-create');
    }

    public function store()
    {
        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('building', $_POST);

        return redirect('/building');
    }

    public function show()
    {
        $post = App::get('database')->getOne('building', $_GET['id']);

        return view('building-show', compact('building'));
    }

    public function edit()
    {
        $post = App::get('database')->getOne('building', $_GET['id']);

        return view('building-edit', compact('building'));
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('building', $_POST);

        return redirect('/building');
    }

    public function destroy()
    {
        App::get('database')->delete('building', $_GET['id']);

        return redirect('/building');

    }

}