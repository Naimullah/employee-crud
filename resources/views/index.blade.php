<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
<!-- <header class="bg-white shadow-md py-4">
    <div class="container mx-auto flex justify-between items-center px-6">
        <a href="/"><h1 class="text-xl font-bold">Brand</h1></a>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="/about" class="hover:text-blue-500">About Us</a></li>
                <li><a href="/contact" class="hover:text-blue-500">Contact</a></li>
            </ul>
        </nav>
    </div>
</header> -->
<main class="container mx-auto mt-10 px-6 text-center">
    <h2 class="text-3xl font-bold">List of Employee</h2>
    <table class="min-w-full bg-white mt-6 shadow-md rounded-lg overflow-hidden">
        <div>
           
            <a href="{{ route('employees.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Add Employee</a>
        </div>
        <thead class="bg-gray-200">
            <tr>
                <th class="py-3 px-6 text-left">First Name</th>
                <th class="py-3 px-6 text-left">Last Name</th>
                <th class="py-3 px-6 text-left">Email</th>
                <th class="py-3 px-6 text-left">Phone</th>
                <th class="py-3 px-6 text-left">Department</th>
                <th class="py-3 px-6 text-left">Position</th>
                <th class="py-3 px-6 text-left">Hire Date</th>
                <th class="py-3 px-6 text-left">Salary</th>
                <th class="py-3 px-6 text-left">Status</th>
                <th class="py-3 px-6 text-left">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Employee rows will go here -->
              @forelse($employees as $employee)
            <tr class="border-b">
                <td class="py-3 px-6 text-left">{{ $employee->first_name }}</td>
                <td class="py-3 px-6 text-left">{{ $employee->last_name }}</td>
                <td class="py-3 px-6 text-left">{{ $employee->email }}</td>
                <td class="py-3 px-6 text-left">{{ $employee->phone }}</td>
                <td class="py-3 px-6 text-left">{{ $employee->department }}</td>
                <td class="py-3 px-6 text   -left">{{ $employee->position }}</td>
                <td class="py-3 px-6 text-left">{{ $employee->hire_date->format('Y-m-d') }}</td>
                <td class="py-3 px-6 text-left">${{ number_format($employee->salary, 2) }}</td>
                <td class="py-3 px-6 text-left">{{ $employee->status }}</td>
                <td class="py-3 px-6 text-left">
                    <a href="{{ route('employees.show', $employee->id) }}" class="text-blue-500 hover:underline">Show</a>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline ml-2" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                    </form>
                </td>

              
            </tr>
         @empty
            <tr>
                <td colspan="9" class="py-3 px-6 text-center">No employees found.</td>
            </tr>
         @endforelse
          

        </tbody>
    </table>    
    <div class="mt-6">
        {{ $employees->links() }}
    </div>
  
</main>
<footer class="mt-10 py-6 bg-white text-center shadow-md">
</footer>
</body>
</html>