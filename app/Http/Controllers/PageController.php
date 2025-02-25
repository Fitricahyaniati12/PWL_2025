<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Welcome!";
    }

    public function about()
    {
        return "Name: Fitri Cahyaniati, <br> NIM: 2341760198";
    }

    public function articles($id)
    {
        return "Article Page with Id " . $id;
    }
}
