@section('title', 'Admin Dashboard / Projects')
@extends('layouts.admin')


@section('content')
    <section class="container py-5">


        <div class="container rounded-2 hype-shadow-white p-5 background-gradient-color">
            <h1 class="text-center hype-text-shadow text-white fw-bolder mb-5">Project: {{ $project->title }} Details</h1>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{ asset('storage') . '/' . $project->image_url }}"
                            alt="{{ $project->title }}">
                    </div>
                    <div class="col-8 d-flex flex-column text-white">
                        <h4 class="mb-1">Title</h4>
                        <h6>{{ $project->title }}</h6>
                        <h4 class="mb-1">Description</h4>
                        <p>{{ $project->description }}</p>
                        <h4 class="mb-1">Created At</h4>
                        <h6>{{ $project->created }}</h6>
                        <h4 class="mb-1">Categories</h4>
                        <h6>{{ $project->categories }}</h6>
                        <h4 class="mb-1">Technologies</h4>
                        <h6>
                            {{ $project->technologies }}
                        </h6>
                        <div class="d-flex justify-content-center align-items-center gap-5 mt-auto">
                            <a href="{{ route('admin.projects.index') }}">
                                <i role="button" type="submit"
                                    class="fa-solid fa-arrow-left fs-1 text-white hype-text-shadow hype-hover-size"></i>
                            </a>
                            <a href="{{ route('admin.projects.edit', $project) }}">
                                <i role="button" type="submit"
                                    class="fa-solid fa-pen-to-square fs-1 text-active-tertiary hype-text-shadow hype-hover-size"></i>
                            </a>
                            <form id="delete-form" action="{{ route('admin.projects.destroy', $project->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="element-delete default-button text-active-primary hype-text-shadow fs-1"
                                    type="submit" data-element-id="{{ $project->id }}"
                                    data-element-title="{{ $project->title }}">
                                    <i class="fa-solid fa-trash-can "></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
