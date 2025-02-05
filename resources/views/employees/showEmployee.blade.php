@extends('layouts.app')
@section('content')

    <h1>All Employees</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Phone Number</th>
        </tr>
        @foreach ($employees as $employee);
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->fullName}}</td>
            <td>{{$employee->age}}</td>
            <td>{{$employee->address}}</td>
            <td>{{$employee->phoneNumber}}</td>
        </tr>
        @endforeach
    </table>
@endsection