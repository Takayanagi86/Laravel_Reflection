@extends('layouts.app')

@section('content')
<div class="w-1/4 mx-auto">
    <h1 class="text-2xl">{{ $employees->first_name }} {{ $employees->last_name }}</h1>
    <p>Company: {{ $employees->company }}</p>
    <p>Email: {{ $employees->email }}</p>
    <p>Phone Number: {{ $employees->phone_number }}</p>
    <br>
    <form action="{{ route('employees.destroy', $employees->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="hover:bg-blue-500 text-blue-700 hover:text-white">Remove this Employee</button>
    </form>
    <br>
    <a href="{{ route('employees.edit', $employees->id) }}" class="hover:bg-blue-500 text-blue-700 hover:text-white">Update this Employee --></a>
    <br>
    <a href="{{ route('employees.index') }}" class="hover:bg-blue-500 text-blue-700 hover:text-white"><---Back to Employees</a>
    </div>
@endsection