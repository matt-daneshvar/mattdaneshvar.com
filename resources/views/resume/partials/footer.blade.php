@section('footer')
    @parent
    <footer class="border-t text-center py-6 text-gray-500 hidden print:block">
        This resume is also available on <a href="{{ url('/resume') }}">the web</a> together with a <a
                href="{{ url('/resume?long') }}">more detailed version</a>.
    </footer>
@stop
