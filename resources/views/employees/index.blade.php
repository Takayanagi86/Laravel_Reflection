@extends('layouts.app')

@section('content')
<div class="w-1/4 mx-auto"> 
    <h1 class="text-2xl">Employees</h1>
    <br>
    @foreach($employees as $employee)
        <div>
            <a href="{{ route('employees.show', $employee->id) }}" class="hover:bg-blue-500 text-blue-700 hover:text-white">{{ $employee->first_name }}</a>
        </div>
    @endforeach
    <br>
    <a href="{{ route('employees.create') }}" class="hover:bg-blue-500 text-blue-700 hover:text-white">Add a new Employee</a>
    <br>
    <p class="mssg">{{ session('mssg') }}</p>
    <br>
    <a href="{{ route('home') }}" class="hover:bg-blue-500 text-blue-700 hover:text-white"><---Back to Home</a>
</div>
@endsection