@extends('layouts.app')

@section('content')
<div class="w-1/4 mx-auto">
    <h1 class="text-2xl">Companies</h1>
    <br>
    @foreach($companies as $company)
        <div>
            <a href="{{ route('companies.show', $company->id) }}" class="hover:bg-blue-500 text-blue-700 hover:text-white">{{ $company->name }}</a>
        </div>
    @endforeach
    <br>
    <a href="{{ route('companies.create') }}" class="hover:bg-blue-500 text-blue-700 hover:text-white">Add a new Company</a>
    <br>
    <p class="mssg">{{ session('mssg') }}</p>
    <br>
    <a href="{{ route('home') }}" class="hover:bg-blue-500 text-blue-700 hover:text-white"><---Back to Home</a>
</div>
@endsection