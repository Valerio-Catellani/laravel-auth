@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>All Projects</h1>
        @include('partials.table', ['elements' => $projects])
    </section>
@endsection
