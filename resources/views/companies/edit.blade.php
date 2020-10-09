@extends('layouts.app')

@section('content')
<div>
    <form class="w-1/4 mx-auto" action="{{ route('companies.update', $companies->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="text-2xl">Update this Company's details</h1>
        <br>
        <label for="name">Company Name:</label>
        <input  class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 text-gray-900 appearance-none inline-block w-full border rounded py-3 px-4 focus:outline-none" type="text" id="name" name="name" value="{{ $companies->name }}"><br>
        <label for="email">Company Email:</label>
        <input  class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 text-gray-900 appearance-none inline-block w-full border rounded py-3 px-4 focus:outline-none" type="text" id="email" name="email" value="{{ $companies->email }}"><br>
        <label for="website">Company Website:</label>
        <input  class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 text-gray-900 appearance-none inline-block w-full border rounded py-3 px-4 focus:outline-none" type="text" id="website" name="website" value="{{ $companies->website }}"><br>
        <label for="logo">Company Logo:</label>
        <input  class="bg-gray-200 focus:bg-white border-transparent focus:border-blue-400 text-gray-900 appearance-none inline-block w-full border rounded py-3 px-4 focus:outline-none" type="file" id="logo" name="logo" value="{{ $companies->logo }}"><br>
        <input class="hover:bg-blue-500 text-blue-700 hover:text-white" type="submit" value="Update Company">
        <br>
        <a href="{{ route('companies.index') }}" class="hover:bg-blue-500 text-blue-700 hover:text-white"><---Back to Companies</a>
    </form>
</div>

@endsection