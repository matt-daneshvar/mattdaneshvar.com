<?php

Route::view('/', 'home.index');
Route::view('/reads', 'reads.index');
Route::view('/resume', 'resume.index');
Route::get('/resume/pdf', 'ResumeDownloadController');
