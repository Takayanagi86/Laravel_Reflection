@extends('layouts.app')

@section('content')
<div class="w-1/4 mx-auto">
    <h1 class="text-2xl">{{ $companies->name }}</h1>
    <p>Email: {{ $companies->email }}</p>
    <p>Website: {{ $companies->website }}</p>
    <img src="{{url('uploads/'.$companies->logo)}}" alt="{{ $companies->logo }}">
    <br>
    <form action="{{ route('companies.destroy', $companies->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="hover:bg-blue-500 text-blue-700 hover:text-white">Remove this Company</button>
    </form>
    <br>
    <a href="{{ route('companies.edit', $companies->id) }}" class="hover:bg-blue-500 text-blue-700 hover:text-white">Update this Company --></a>
    <br>
    <a href="{{ route('companies.index') }}" class="hover:bg-blue-500 text-blue-700 hover:text-white"><---Back to Companies</a>
</div>
@endsection