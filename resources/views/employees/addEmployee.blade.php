@extends('layouts.app')
@section('content')

    <h2>Add Employee</h2>
    <form method="POST" enctype="multipart/form-data" route="{{ route('employees.store') }}">

        @csrf
        <div>
            <label for="fullName">Name:</label>
            <input type="text" name="fullName" id="fullName" required>
        </div>

        <div>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" required>
        </div>

        <div>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required>
        </div>

        
        <div>
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" name="phoneNumber" id="phoneNumber" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


@endsection