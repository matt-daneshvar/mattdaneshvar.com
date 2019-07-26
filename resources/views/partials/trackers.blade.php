@if(config('services.google-analytics.id'))
    @include('partials.trackers.google-analytics', ['id' => config('services.google-analytics.id')])
@endif

@if(config('services.hotjar.id'))
    @include('partials.trackers.hotjar', ['id' => config('services.hotjar.id')])
@endif