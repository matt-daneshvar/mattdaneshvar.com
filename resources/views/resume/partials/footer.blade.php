@section('footer')
    @parent
    <footer class="border-t text-center py-6 text-gray-500 hidden print:block">
        This resume is available <a href="{{ url('/resume') }}">online</a> together with <a
                href="{{ url('/resume?long') }}">more details</a>.
    </footer>
@stop
