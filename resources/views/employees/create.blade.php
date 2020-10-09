@extends('layouts.app')

@section('content')
<div> 
    <form class="w-1/4 mx-auto" action="{{ route('employees.store') }}" method="POST">
        <h1 class="text-2xl">Add a new Employee</h1><br>
        @csrf
        <label for="first_name">First Name:</label>
        <input  class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 text-gray-900 appearance-none inline-block w-full border rounded py-3 px-4 focus:outline-none" type="text" id="first_name" name="first_name"><br>
        <label for="last_name">Last Name:</label>
        <input  class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 text-gray-900 appearance-none inline-block w-full border rounded py-3 px-4 focus:outline-none" type="text" id="last_name" name="last_name"><br>
        <label for="company">Company:</label>
        <input  class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 text-gray-900 appearance-none inline-block w-full border rounded py-3 px-4 focus:outline-none" type="text" id="company" name="company"><br>
        <label for="email">Employee Email:</label>
        <input  class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 text-gray-900 appearance-none inline-block w-full border rounded py-3 px-4 focus:outline-none" type="text" id="email" name="email"><br>
        <label for="phone_number">Phone Number:</label>
        <input  class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 text-gray-900 appearance-none inline-block w-full border rounded py-3 px-4 focus:outline-none" type="text" id="email" name="email"><br>
        <input  type="tel" id="phone_number" name="phone_number"><br>
        <input class="hover:bg-blue-500 text-blue-700 hover:text-white" type="submit" value="Add Employee">
        <br>
        <a href="{{ route('employees.index') }}" class="hover:bg-blue-500 text-blue-700 hover:text-white"><---Back to Employees</a>
    </form>
</div>

@endsection