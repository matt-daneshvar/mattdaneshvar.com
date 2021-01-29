@extends('letter.layout')

@section('header.subtitle')
    <div class="text-gray-700 text-sm hidden print:block">To: <em>Acme Inc.</em></div>
@stop

@section('content')
    <div class="container max-w-2xl mx-auto py-8 p-6 print:px-0">
        <div class="flex flex-wrap mb-10">
            <div class="w-full md:w-10/12 order-2 lg:order-1">
                @include('letter.partials.opening', [
                    'position' => 'Web Developer',
                    'organization' => 'Acme Inc.',
                    'platform' => 'Linkedin',
                    'link' => 'https://example.com/jobs/1'
                ])

                @include('letter.partials.why')

                @include('letter.partials.why-organization')

                @include('letter.partials.closing', ['organization' => 'Acme Inc.'])
            </div>
        </div>
    </div>
@stop
