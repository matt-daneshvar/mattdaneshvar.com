@extends('resume.index')

@section('resume.page2')
    @include('resume.partials.projects')
    @parent
@stop

@section('header.subtitle')
    <div class="text-gray-700 text-sm hidden print:block">Tailored for <em>FreshWorks Studio</em></div>
@stop

