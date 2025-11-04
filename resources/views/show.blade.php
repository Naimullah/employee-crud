<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

<main class="container mx-auto mt-10 px-6 text-center">
      <h2 class="text-2xl font-bold mb-6 text-center">Employee Details</h2>
        <div class="bg-white p-6 rounded-lg shadow-md max-w-lg mx-auto text-left">
            <p><strong>First Name:</strong> {{ $employee->first_name }}</p>
            <p><strong>Last Name:</strong> {{ $employee->last_name }}</p>
            <p><strong>Email:</strong> {{ $employee->email }}</p>
            <p><strong>Phone:</strong> {{ $employee->phone }}</p>
            <p><strong>Department:</strong> {{ $employee->department }}</p>
            <p><strong>Position:</strong> {{ $employee->position }}</p>
            <p><strong>Hire Date:</strong> {{ $employee->hire_date->format('Y-m-d') }}</p>
            <p><strong>Salary:</strong> ${{ number_format($employee->salary, 2) }}</p>
            <p><strong>Status:</strong> {{ $employee->status }}</p>
            <div class="mt-6">
                <a href="{{ route('employees.index') }}" class="text-blue-500 hover:underline">Back to Employee List</a>
            </div>  
    
    </main>
</body>
</html>