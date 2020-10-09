@extends('layouts.app')

@section('content')
<div class="container w-1/4 mx-auto">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-2xl">{{ __('Dashboard') }}</div>
                <br>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="wrapper w-1/4 mx-auto">
    <a href="{{ route('companies.index') }}" class="hover:bg-blue-500 text-blue-700 hover:text-white">Companies</a><br>
    <a href="{{ route('employees.index') }}" class="hover:bg-blue-500 text-blue-700 hover:text-white">Employees</a>
</div>
@endsection
