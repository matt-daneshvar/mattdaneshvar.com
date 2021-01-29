@extends('layouts.master')

@section('title', 'Projects')

@section('content')
    <div class="container max-w-2xl mx-auto py-8 p-6">

        <p class="text-justify mb-10">
            These are the projects I'm currently most involved with.
        </p>

        <h2 class="text-3xl mb-2">Products</h2>

        <div class="">
            @include('projects.partials.thumbnail', [
                'name' => 'Race.my',
                'role' => 'Founder',
                'description' => 'Ticketing platform for sport events.',
                'url' => 'www.race.my',
            ])

            @include('projects.partials.thumbnail', [
                'name' => 'Scismic',
                'role' => 'Tech Lead',
                'description' => 'Skills-based job matching platform for scientists by scientists.',
                'url' => 'www.scismic.com',
            ])

            @include('projects.partials.thumbnail', [
                'name' => 'Specs Template',
                'role' => 'Co-creator',
                'description' => 'Template to help you write your web project specs in less than 10 minutes.',
                'url' => 'www.specstemplate.com'
            ])

            @include('projects.partials.thumbnail', [
                'name' => 'Form \'n Go',
                'role' => 'Co-creator',
                'description' => 'Lean and clean form builder built for agencies and freelancers.',
                'url' => 'www.formngo.app'
            ])

            @include('projects.partials.thumbnail', [
                'name' => 'Markers',
                'role' => 'Creator',
                'description' => 'Google Chrome extension to add Mark As Seen buttons to popular websites.',
                'url' => 'www.markers.app'
            ])

            @include('projects.partials.thumbnail', [
                'name' => 'Paywell',
                'role' => 'Co-creator',
                'description' => 'Web app to help businesses keep good track of everyone\'s salary.',
                'url' => 'www.paywell.app'
            ])

            @include('projects.partials.thumbnail', [
                'name' => 'Form Octo',
                'role' => 'Creator',
                'description' => 'Tool for setting up custom email notifications for Google Forms.',
                'url' => 'www.formocto.com'
            ])

            @include('projects.partials.thumbnail', [
                'name' => 'Certificate Maker',
                'role' => 'Creator',
                'description' => 'Tool for creating and sending professional certificates in batches.',
                'url' => 'www.certificatemaker.app'
            ])
        </div>

        <h2 class="text-3xl mt-10 mb-2 page-break-before">Open Source</h2>

        <div class="">

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

            @include('projects.partials.thumbnail', [
                'name' => 'Laravel Resource Controller',
                'description' => 'General implementation for Laravel resource controllers.',
                'url' => 'www.github.com/matt-daneshvar/laravel-resource-controller'
            ])

            @include('projects.partials.thumbnail', [
                'name' => 'Laravel Resource Actions',
                'description' => 'A shorter way to write basic CRUD controller actions in Laravel.',
                'url' => 'www.github.com/matt-daneshvar/laravel-resource-actions'
            ])
        </div>

        <div class="mt-5 mb-10"><a href="https://github.com/matt-daneshvar" target="_blank">My Github profile</a> hosts
            all things I do open source.
        </div>
    </div>
@stop

