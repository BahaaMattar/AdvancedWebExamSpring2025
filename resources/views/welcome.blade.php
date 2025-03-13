@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-4">Welcome to My Laravel App</h1>
            <p class="my-4"> Manage Students and courses easily</p>
            <a href="{{ route('students.index') }}" class="btn btn-primary mb-3">Manage Students</a>
            <a href="{{ route('courses.index') }}" class="btn btn-primary mb-3">Manage Courses</a>
        </div>
    </div>
</div>
@endsection