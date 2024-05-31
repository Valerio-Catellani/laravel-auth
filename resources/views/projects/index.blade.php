@extends('layouts.app')
@section('title', 'All Projects')
@section('content')
    <section class="container">
        <h1>All Projects</h1>
        @include('partials.table', ['elements' => $projects])
    </section>
@endsection
