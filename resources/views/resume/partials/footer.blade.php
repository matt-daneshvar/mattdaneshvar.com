@section('footer')
    @parent

    <footer class="border-t text-center py-6 text-gray-500 w-full bottom-0 left-0 hidden print:block print:fixed">
        The latest version of this resume is available <a href="{{ url('/resume') }}">online</a> together with <a
            href="{{ url('/resume?long') }}">more details</a>.
    </footer>
@stop
