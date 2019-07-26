<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class ResumeDownloadController extends Controller
{
    public function __invoke()
    {
        return Storage::download('resume.pdf', 'Resume - Matt Daneshvar.pdf');
    }
}
