<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
{
    $title = 'Welcome to the About Page';
    $subtitle = 'This is the about page content.';
    $greeting = 'Hello, my name is Efan';
    $description = 'I am a web developer.';

    $profile = [
        'Nama'          => 'Efan',
        'Sekolah'       => 'SMK RUS',
        'Tanggal Lahir' => '10-12-2010',
        'Akun'          => 'Efan',
        'Hobby'         => 'Reading, Writing, and Coding',
    ];

    return view('admin.about_admin', compact(
        'title', 'subtitle', 'greeting', 'description', 'profile'
    ));
}
}
