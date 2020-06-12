@extends('layouts.master')

@section('main.class', 'justify-center')

@section('content')
    <div class="max-w-6xl mx-auto flex flex-wrap items-center p-6">
        <div class="w-full md:w-2/5">
            <div class="frame">
                <picture class="w-full frame">
                    <source media="(min-width: 768px)" srcset="/img/me-square.jpg">
                    <img src="/img/me-horizontal.jpg" alt="Me">
                </picture>
                <div class="edge edge-t edge-l"></div>
                <div class="edge edge-b edge-l"></div>
                <div class="edge edge-t edge-r"></div>
                <div class="edge edge-b edge-r"></div>
            </div>
        </div>
        <div class="w-full md:w-3/5 py-6 md:p-8 lg:p-16">
            <h1 class="text-xl mb-2">
                Hi, my name is Matt!
            </h1>
            <p>
                I'm a web developer based in Malaysia.
                I specialize in building web products through multiple
                <em>minimum viable iterations</em>.
            </p>
            <p>
                When not smashing the keyboard,
                I run the trails and hike the mountains around me!
            </p>
            <p>
                Find me on
                <a href="https://github.com/matt-daneshvar" target="_blank">Github</a> or
                <a href="https://www.linkedin.com/in/matt-daneshvar/" target="_blank">Linkedin</a>,
                see my <a href="/resume">resume</a>,
                or just say hi at
                <a href="mailto:matt.daneshvar@gmail.com">matt.daneshvar@gmail.com</a><span>;
                I'd be happy to chat!</span>
            </p>
            <p class="mt-10">
                Other links:
                <a href="/projects">Projects</a>,
                <a href="/reads">Reads</a>
            </p>
        </div>
    </div>
@stop