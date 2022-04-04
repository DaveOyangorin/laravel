<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use Inertia\Inertia;


class TopicController extends Controller
{
    public function index()
      {
        return Inertia::render('Topics/Index',[
            'topics' => Topic::all()
        ]);
    }

    public function create()
    {
        return Inertia:: render('Topics/Create');
    }

}
