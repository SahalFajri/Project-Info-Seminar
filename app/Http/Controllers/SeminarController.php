<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;

class SeminarController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            'seminars' => Seminar::latest()->filter(request('search'))->paginate(9)->withQueryString()
        ]);
    }

    public function show(Seminar $seminar)
    {
        return view('seminar', [
            'title' => "Detail Seminar",
            'seminar' => $seminar
        ]);
    }
}
