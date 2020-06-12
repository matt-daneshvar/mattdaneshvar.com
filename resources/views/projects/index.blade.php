@extends('layouts.master')

@section('title', 'Projects')

@section('content')
    <div class="container max-w-2xl mx-auto py-8 p-6">

        <p class="text-justify mb-10">
            Listed below are some of the projects I'm currently most involved with in my day to day work in no particular order.
        </p>

        <h2 class="text-3xl mb-2">Products</h2>
        @include('projects.partials.thumbnail', [
            'name' => 'Markers',
            'role' => 'Creator',
            'description' => 'A Google Chrome extension to add Mark As Seen buttons to popular websites.',
            'url' => 'www.markers.app'
        ])

        @include('projects.partials.thumbnail', [
            'name' => 'Race.my',
            'role' => 'Founder',
            'description' => 'A ticketing platform for sport events.',
            'url' => 'www.race.my',
        ])

        @include('projects.partials.thumbnail', [
            'name' => 'Scismic',
            'role' => 'Tech Lead',
            'description' => 'A skills-based job matching platform for scientists by scientists.',
            'url' => 'www.scismic.com',
        ])

        @include('projects.partials.thumbnail', [
            'name' => 'Specs Template',
            'role' => 'Co-founder',
            'description' => 'A template to help you write your web project specs in less than 10 minutes.',
            'url' => 'www.specstemplate.com'
        ])

        @include('projects.partials.thumbnail', [
            'name' => 'Paywell',
            'role' => 'Co-founder',
            'description' => 'A web app to help smart business keep good track of everyone\'s salary.',
            'url' => 'www.paywell.app'
        ])



        <h2 class="text-3xl mt-10 mb-2">Open Source</h2>
        @include('projects.partials.thumbnail', [
            'name' => 'Sail UI',
            'description' => 'Basic UI components for Tailwind CSS.',
            'url' => 'www.github.com/sailui/ui'
        ])

        @include('projects.partials.thumbnail', [
            'name' => 'Laravel Survey',
            'description' => 'Create and manage surveys within your Laravel app.',
            'url' => 'www.github.com/matt-daneshvar/laravel-survey'
        ])

        @include('projects.partials.thumbnail', [
            'name' => 'Eloquent Hashids',
            'description' => 'Automatically generate and persist Hashids for newly created Eloquent models.',
            'url' => 'www.github.com/matt-daneshvar/eloquent-hashids'
        ])

        <div class="mt-5 mb-10"><a href="https://github.com/matt-daneshvar" target="_blank">My Github profile</a> hosts all things I do open source. </div>
    </div>
@stop

