@extends('layouts.app')

@section('title', '| Employees')

@if (session('success'))
    <div class="toast">{{ session('success')}}</div>
@endif

@section('content')

    <style>
        .toast {
            position: fixed;
            bottom: 10px;
            right: 10px;
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .employee-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        .employee-table th, .employee-table td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        .employee-table th {
            background-color: #f2f2f2;
        }
        .employee-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .employee-table tr:hover {
            background-color: #f1f1f1;
        }
        .employee-table h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .delete-button {
            padding: 10px 20px;
            background-color: #dc3545;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }
        .delete-button:hover {
            background-color: #c82333;
        }

        .update-button {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }

        .update-button:hover {
            background-color: #0056b3;
        }
    </style>

    <h1>All Employees</h1>
    <table class="employee-table">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Actions</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->fullName}}</td>
            <td>{{$employee->age}}</td>
            <td>{{$employee->address}}</td>
            <td>{{$employee->phoneNumber}}</td>
            <td>
                <div>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="update-button">Update</a>
                    <a href="{{ route('employees.delete', $employee->id) }}" class="delete-button">Delete</a>
                </div>

            </td>
        </tr>
        @endforeach
    </table>
@endsection