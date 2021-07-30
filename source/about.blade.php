@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <p>We are {{ $page->owner->name }}</p>

    <h2>Links:</h2>

    <ul>
        <li><a href="https://instagram.com/{{ $page->owner->twitter }}" target="_blank">Twitter</a></li>
        <li><a href="https://facebook.com/{{ $page->owner->github }}" target="_blank">GitHub</a></li>
    </ul>
@endsection
