
@extends('layouts.main')

@section('title', 'Create Task')

@section('content')

    <div>
        <h1>Create</h1>

        @component('components.taskForm')
        @endcomponent

    </div>

@endsection