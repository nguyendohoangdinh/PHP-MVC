<?php

namespace App\Controllers;

use App\App\App;
use App\Models\Task;

class TaskController
{
    public static function index()
    {
        $tasks = App::get('db')->selectAll('tasks', Task::class);
        $title = 'Tasks';

        return view('tasks.index', compact('tasks', 'title'));
    }

    public static function store()
    {
        // dd($_REQUEST);
        // Save the task.
        try {
            App::get('db')->insert('tasks', $_REQUEST);
        } catch (Exception $e) {
            require "views/500.php";
        }

        // Redirect to tasks.
        return redirect('tasks');
    }

    public function delete()
    {
        try {
            App::get('db')->delete('tasks', $_GET['id']);
        } catch (Exception $e) {
            require 'views/500.php';
        }

        // Redirect to tasks.
        return redirect('tasks');
    }
}
