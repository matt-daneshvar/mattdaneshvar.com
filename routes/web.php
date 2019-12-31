<?php

Route::view('/', 'home.index');
Route::view('/reads', 'reads.index');
Route::view('/utopia', 'utopia.index');
Route::view('/utopia/organization', 'utopia.organization');
Route::view('/resume', 'resume.index');
Route::get('/resume/pdf', 'ResumeDownloadController');
