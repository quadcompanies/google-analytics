@if(config('google-analytics.enabled') && ($measurementId || config('google-analytics.measurement_id')))
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ $measurementId ?? config('google-analytics.measurement_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        @foreach($tagIds as $tagId)
            gtag('config', '{{ $tagId }}');
        @endforeach

        @if(!in_array($measurementId ?? config('google-analytics.measurement_id'), $tagIds))
            gtag('config', '{{ $measurementId ?? config('google-analytics.measurement_id') }}');
        @endif
    </script>
@endif
