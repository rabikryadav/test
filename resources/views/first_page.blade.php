<h1>First : Page</h1>
<h2>Learn some directives about</h2>
<ul>
    <li>@@include</li>
    <li>@@section</li>
    <li>@@extend</li>
    <li>@@yield</li>
</ul>

<hr>
<h3 style="text-decoration: underline">@@include :-</h3>

@php
    $fruits = ['Apple', 'Orange', 'Banana', 'Grapes'];

    $couple_name = ["Ram" => "Sita", "Laxman" => "urmila"];

@endphp

@include('pages.header', [ 'fruits' => $fruits])
@include('pages.content', [ 'couple' => $couple_name])
@include('pages.footer', ['name' => 'website.com', 'year' => 2023])

<hr>
<h3 style="text-decoration: underline">@@includeIf :-</h3>
<p>This will execute when page is available</p>

here is example
<br>
@@includeIf('pages.header')
<br>
@@includeIf('header')

@includeIf('pages.header')
@includeIf('header')


<hr>
<h3><span style="text-decoration: underline">@@includeWhen</span>($boolean, 'view.name', ['some' => 'data']) :-</h3>
<p>This will execute only when Conditon is true</p>
<p>Example</p>
$fruits = ['Apple', 'Orange', 'Banana', 'Grapes'];
<br>
@@includeWhen(!empty($fruits), 'pages.header', ['fruits' => $fruits])
<br>
@includeWhen(!empty($fruits), 'pages.header', ['fruits' => $fruits])

<hr>
<h3><span style="text-decoration: underline">@@includeUnless</span>($boolean, 'view.name', ['some' => 'data']) :-</h3>
<p>This will execute only when Conditon is false</p>
<p>Example</p>

$couple_name = ["Ram" => "Sita", "Laxman" => "urmila"];
<br>
$fruits = ['Apple', 'Orange', 'Banana', 'Grapes'];
<br>
@@includeUnless(!empty($couple_name), 'pages.content', ['couple' => $couple_name])
<br>
@includeUnless(!empty($couple_name), 'pages.content', ['couple' => $couple_name])
<br>
@includeWhen(!empty($fruits), 'pages.header', ['fruits' => $fruits])

<br><br>
<a href="{{ route('second_page')}}" style="background-color: aliceblue; float:inline-end">Second Page</a>
<br><br>