@if (count($course) === 0)
... html showing no articles found
@elseif (count($course) >= 1)
... print out results
    @foreach($course as $courses)
    print courses
    @endforeach
@endif