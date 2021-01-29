@extends('resume.index')

@section('title', 'Cover Letter')

@section('content', '')

@section('header.append')
    <div class="ml-auto text-gray-700 hidden text-sm text-right print:block">
        <div>{{ now()->toFormattedDateString() }}</div>
    </div>
@stop

@section('footer')
    <footer class="border-t text-center py-6 text-gray-700 w-full bottom-0 left-0 flex items-center justify-center print:fixed">
        <div class="mx-5">
            Email:
            <a href="mailto:matt.daneshvar@gmail.com">matt.daneshvar@gmail.com</a>
        </div>

        <div class="mx-5">
            Online Profile:
            <a href="https://mattdaneshvar.com">mattdaneshvar.com</a>
        </div>
    </footer>
@stop
