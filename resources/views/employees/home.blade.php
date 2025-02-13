@extends('layouts.app')
@section('content')

<style>
    .home-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        text-align: center;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .home-container h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: #007bff;
    }
    .home-container p {
        font-size: 1.2rem;
        color: #333;
    }
</style>

<div class="home-container">
    <h1>BananaCat Employee Management System</h1>
    <p>Welcome to BananaCat Employee Management System. This system allows you to manage employees in BananaCat Cooperation. You can add, edit, delete and view employees in the system. Click on the Employees link in the navigation bar to view the list of employees in the system. You can also add a new employee by clicking on the Add Employee link in the navigation bar.</p>
    <p>
        Server Time: <strong>{{ now()->setTimezone('Asia/Bangkok') }} (UTC +7)</strong>     
    </p>
</div>
@endsection