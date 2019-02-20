<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function allStudents()
    {
      // dd(config('students'));
      $students = config('db_students');
      return view('studenti.index', compact('students'));
    }

    public function oneStudent($slug)
    {
      $clickedstudent = [];

      foreach (config('db_students') as $student)
      {
        if ($slug == $student['slug'])
        {
          $clickedstudent = $student;
        }
      }

      return view('studenti.show', compact('clickedstudent'));
    }
}
