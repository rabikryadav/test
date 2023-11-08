<h1>Content : Page</h1>

<p>content came from main file</p>


@foreach ($couple as $key => $value)
    <p>{{$key}} - {{$value}}</p>
@endforeach
