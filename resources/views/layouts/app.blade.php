<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChipiChapa  @yield('title', '') </title>
</head>
<body>

    <style>
        html, body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        nav {
            background-color: #007bff;
            color: white;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-title h1 {
            margin: 0;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 0.5rem;
        }

        .nav-links a:hover {
            background-color:rgba(0, 68, 141, 0.25);
        }

        .nav-links {
            display: flex;
            gap: 1rem;
        }

        section {
            padding: 1rem;
        }

    </style>

    <nav >
        <div class="nav-title">
            <h1>BananaCat Employee Management System</h1>
        </div>
        <div class="nav-links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/employees') }}">Employees</a>
            <a href="{{ url('/employees/create') }}">Add Employee</a>
        </div>
    </nav>
    

    <section>
        @yield('content')
    </section>
</body>
</html>