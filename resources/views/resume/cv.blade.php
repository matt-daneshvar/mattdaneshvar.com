@extends('layouts.master')

@section('title', 'Cover Letter')

@section('content')
    <div class="container max-w-2xl mx-auto py-8 p-6">
        <div class="flex flex-wrap mb-10">
            <div class="w-full md:w-10/12 order-2 lg:order-1">
                <p class="mb-5">
                    Dear Hiring Manager,
                </p>

                <p class="mb-5">
                    I am writing to express my interest in the
                    <strong>Web Developer</strong> opening at
                    <strong>Xyz Ltd.</strong> as advertised on
                    <a href="">Linkedin</a>.
                </p>

                <h2 class="font-bold text-red-800">Why Matt?</h2>

                <p class="mb-5">
                    I offer <strong>8 years</strong> of professional experience as a
                    <strong>PHP Developer</strong> and I am particularly proficient in
                    web application development using <strong>Laravel</strong> and <strong>the ecosystem</strong> around it.
                </p>

                <p class="mb-5 hidden">
                    Beyond being an engineer, I pride myself in being pragmatic and solution-oriented,
                    which makes me think that I would be a good fit for the requirements you have listed
                    for this position.
                </p>

                <!-- Yellow Pencil -->
                <h2 class="font-bold text-red-800">Why Matt At Yellow Pencil?</h2>

                <p class="mb-5">
                    Beyond enjoying the creativity in the role of an engineer, I value pragmatism and I deeply care
                    about how my work impacts others. This makes me think that I would be a good fit to join the mission
                    <em>to build trust between citizens and the government agencies that serve them</em>.
                </p>

                <p class="mb-5">
                    As you may be able to tell by my letter and resume, clarity and functional design are two important
                    traits I admire, and Yellow Pencil's messaging and designs
                    I have come across were nothing but joyful to look at.
                </p>

                <p class="mb-5">
                    It would be my pleasure to speak with you if you feel I would be a strong candidate
                    for this or any similar positions at Xyz Ltd.
                </p>

                <p class="mb-5">
                    Yours sincerely,
                    <br/>
                    Matt
                </p>
            </div>
        </div>
    </div>
@stop

