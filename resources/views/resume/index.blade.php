@extends('layouts.master')

@section('title', 'Resume')

@section('content')
    <div class="container max-w-2xl mx-auto py-8 p-6 print:p-0">
        @include('resume.partials.controls')
        <div class="flex flex-wrap mb-10">
            <div class="w-full md:w-10/12 order-2 lg:order-1">
                @include('resume.partials.experience.' . (request()->has('long') ? 'long' : 'short'))
                @include('resume.partials.education')
                @include('resume.partials.stack-detailed')

                <div class="page-break-before print:-mb-56">
                    @section('resume.page2')
                        @include('resume.partials.other-details')
                        @include('resume.partials.contact')
                    @show
                </div>
            </div>
            <div class="flex-1 order-1 md:order-2 md:ml-4">
                @include('resume.partials.links')
                @include('resume.partials.stack')
            </div>
        </div>
        @include('resume.partials.controls')
    </div>
@stop

@include('resume.partials.footer')


@section('header.append')
    <div class="ml-auto text-gray-700 hidden text-sm text-right print:block">
        <div class="text-xs text-gray-700">Last updated on</div>
        <div>{{ now()->toFormattedDateString() }}</div>
    </div>
@stop
