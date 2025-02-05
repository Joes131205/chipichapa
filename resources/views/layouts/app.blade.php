<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChipiChapa</title>
</head>
<body>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/employees') }}">Employees</a>
        <a href="{{ url('/add') }}">Add Employee</a>
        <a href="{{ url('/update') }}">Update Employee</a>
        <a href="{{ url('/delete') }}">Delete Employee</a>
    </nav>
    

    <section>
        @yield('content')
    </section>
</body>
</html>