@extends('layouts.app')

@section('content')
<div>
    
    <form class="w-1/4 mx-auto" action="{{ route('employees.update', $employees->id) }}" method="POST">
        @csrf
        <h1 class="text-2xl">Update this Employee's details</h1>
        <br>
        <label for="first_name">First Name:</label>
        <input  class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 ..." type="text" id="first_name" name="first_name" value="{{ $employees->first_name }}"><br>
        <label for="last_name">Last Name:</label>
        <input  class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 ..." type="text" id="last_name" name="last_name" value="{{ $employees->last_name }}"><br>
        <label for="company">Company:</label>
        <input  class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 ..." type="text" id="company" name="company" value="{{ $employees->company }}"><br>
        <label for="email">Employee Email:</label>
        <input  class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 ..." type="text" id="email" name="email" value="{{ $employees->email }}"><br>
        <label for="phone_number">Phone Number:</label>
        <input  class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 ..." type="tel" id="phone_number" name="phone_number" value="{{ $employees->phone_number }}"><br>
        <input class="hover:bg-blue-500 text-blue-700 hover:text-white"  type="submit" value="Update Employee">
        <br>
        <a href="{{ route('employees.index') }}" class="hover:bg-blue-500 text-blue-700 hover:text-white"><---Back to Employees</a>
    </form>
</div>

@endsection