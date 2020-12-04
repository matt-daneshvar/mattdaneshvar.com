@extends('layouts.master')

@section('title', 'Resume')

@section('content')
    <div class="container max-w-2xl mx-auto py-8 p-6 print:p-0">
        @include('resume.partials.controls')
        <div class="flex flex-wrap mb-10">
            <div class="w-full md:w-10/12 order-2 lg:order-1">
                @include('resume.partials.experience.' . (request()->has('long') ? 'long' : 'short'))
                @include('resume.partials.education')
                @include('resume.partials.other-details')
                @include('resume.partials.contact')
            </div>
            <div class="w-full order-1 md:order-2 md:w-1/12 md:ml-10">
                @include('resume.partials.links')
                @include('resume.partials.stack')
            </div>
        </div>
        @include('resume.partials.controls')
    </div>
@stop

@include('resume.partials.footer')
