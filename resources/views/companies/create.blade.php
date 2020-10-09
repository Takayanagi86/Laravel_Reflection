@extends('layouts.app')

@section('content')
<div>
    <form class="w-1/4 mx-auto" action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
        <h1 class="text-2xl">Add a new Company</h1><br>
        @csrf
        <label for="name">Company Name:</label>
        <input class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 text-gray-900 appearance-none inline-block w-full border rounded py-3 px-4 focus:outline-none" type="text" id="name" name="name"><br>
        <label for="email">Company Email:</label>
        <input class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 text-gray-900 appearance-none inline-block w-full border rounded py-3 px-4 focus:outline-none" type="text" id="email" name="email"><br>
        <label for="website">Company Website:</label>
        <input class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 text-gray-900 appearance-none inline-block w-full border rounded py-3 px-4 focus:outline-none" type="text" id="website" name="website"><br>
        <label for="logo">Company Logo:</label>
        <input class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 text-gray-900 appearance-none inline-block w-full border rounded py-3 px-4 focus:outline-none" type="file" id="logo" name="logo">
        <br>
        <input class="hover:bg-blue-500 text-blue-700 hover:text-white" type="submit" value="Add Company">
        <br>
        <a href="{{ route('companies.index') }}" class="hover:bg-blue-500 text-blue-700 hover:text-white"><---Back to Companies</a>
    </form>
</div>

@endsection