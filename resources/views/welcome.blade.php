<h1>Home : Page</h1>

Addition of 5 + 4 = {{5+4}}
<br><br>

{{  "Hello from blade php "}}

<br><br>

@{{ <p>This method not work for other language</p> }}

<br><br><br>

@{!! <p>This is a method for use other language</p> !!}

<br>

@php
    $user = "admin";
@endphp

{{ $user }}

<br>

<a href="{{ route('about_us') }}">About Us</a>


@php
    $names = ['Ram', 'Laxman', 'Bharat', 'Satrudhan'];
@endphp

<ul>
    @foreach ($names as $name)
        <li>{{$loop->iteration}} - {{$name}}</li>
    @endforeach
</ul>


<table style="border: 1px solid">
    <thead>
        <th>Index</th>
        <th>Iteration</th>
        <th>Name</th>
        <th>Remaining</th>
        <th>First</th>
        <th>Last</th>
        <th>Even</th>
        <th>Odd</th>
    </thead>
    <tbody style="border: 1px solid">
        @foreach ($names as $name)
            <tr>
                <td>{{$loop->index}}</td>
                <td>{{$loop->iteration}}</td>
                <td>{{$name}}</td>
                <td>{{$loop->remaining}}</td>
                <td>
                    @if ($loop->first)
                        <p style="color: green">This is First Item</p>
                    @endif
                </td>
                <td>
                    @if ($loop->last)
                    <p style="color: red">This is Last Item</p>
                    @endif
                </td>
                <td>
                    @if ($loop->even)
                    <p style="color: aqua">This is Even Item</p>
                    @endif
                </td>
                <td>
                    @if ($loop->odd)
                    <p style="color: blueviolet">This is Odd Item</p>
                    @endif
                </td>
            </tr>
            
        @endforeach
    </tbody>
    <tfoot>
        @foreach ($names as $name)
        <th>Count {{$loop->count}}</th><br>
        <th>Depth {{$loop->depth}}</th>
        <th>Parent {{$loop->parent}}</th>
        @endforeach
    </tfoot>

</table>

<br><br>
<a href="{{ route('first_page')}}" style="background-color: aliceblue; float:inline-end">First Page</a>
<br><br>
