@extends('layouts.app')

@section('title', '| Delete Employee')

@section('content')

    <style>
        .delete-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            text-align: center;
        }
        .delete-container h1 {
            margin-bottom: 20px;
        }
        .delete-container p {
            margin-bottom: 20px;
        }
        .delete-container button {
            padding: 10px 20px;
            background-color: #dc3545;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        .delete-container button:hover {
            background-color: #c82333;
        }
    </style>

    <div class="delete-container">
        <h1>Delete Employee</h1>
        <form method="POST" action="{{ route('employees.destroy', $employee->id) }}">
            @csrf
            @method('DELETE')
            
            <p>Are you sure you want to delete this employee?</p>
            
            <h2>The employee ID: {{ $employee->id }}</h2>

            <button type="submit">Delete</button>

        </form>
    </div>

@endsection