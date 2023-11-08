<h1>Header : Page</h1>

<p>This value comes from main page</p>
<ol>
@forelse ($fruits as $item)
    <li>{{$item}}</li>
@empty
    <li>No Item Found.</li>
@endforelse
</ol>