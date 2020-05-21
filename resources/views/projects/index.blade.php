@extends('layouts.master')

@section('title', 'Projects')

@section('content')
    <div class="container max-w-2xl mx-auto py-8 p-6">

        <h2 class="text-3xl">Products</h2>
        @include('projects.partials.thumbnail', [
            'name' => 'Markers',
            'description' => 'A Google Chrome extension to add Mark As Seen buttons to popular websites.',
            'url' => 'www.markers.app'
        ])

        @include('projects.partials.thumbnail', [
            'name' => 'Specs Template',
            'url' => 'www.specstemplate.com'
        ])

        @include('projects.partials.thumbnail', [
            'name' => 'Scismic',
            'url' => 'www.scismic.com'
        ])

        @include('projects.partials.thumbnail', [
            'name' => 'Paywell',
            'url' => 'www.paywell.app'
        ])



        <h2 class="text-3xl  mt-10">Open Source</h2>
        @include('projects.partials.thumbnail', [
            'name' => 'Sail UI',
            'url' => 'www.github.com/sailui/ui'
        ])

        @include('projects.partials.thumbnail', [
            'name' => 'Laravel Survey',
            'url' => 'www.github.com/matt-daneshvar/laravel-survey'
        ])

        @include('projects.partials.thumbnail', [
            'name' => 'Eloquent Hashids',
            'url' => 'www.github.com/matt-daneshvar/eloquent-hashids'
        ])

        <div>Visit my <a href="https://github.com/matt-daneshvar" target="_blank">Github profile</a> to access all my public repositories.</div>
    </div>
@stop

