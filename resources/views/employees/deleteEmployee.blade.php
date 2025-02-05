@extends( 'layouts.app') 
@section( 'content')
    <h1>Delete Employee</h1>
    <form method="POST" action="{{ route('employees.destroy', $employee->id) }}">
        @csrf
        @method('DELETE')
        <p>Are you sure you want to delete this employee?</p>
        <button type="submit">Delete</button>
    </form>
@endsection