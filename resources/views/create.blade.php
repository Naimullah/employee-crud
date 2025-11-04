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
  <h2 class="text-3xl font-bold mb-6">Create New Employee</h2>
  <form action="{{ route('employees.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md max-w-lg mx-auto">
    @csrf
    <div class="mb-4">
      <label for="first_name" class="block text-gray-700 font-semibold mb-2">First Name</label>
      <input type="text" name="first_name" id="first_name" class="w-full px-3 py-2 border rounded-md" required>
    </div>      
    <div class="mb-4">
      <label for="last_name" class="block text-gray-700 font-semibold mb-2">Last Name</label>
      <input type="text" name="last_name" id="last_name" class="w-full px-3 py-2 border rounded-md" required>
    </div>      
    <div class="mb-4">
      <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
      <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded-md" required>
    </div>      
    <div class="mb-4">
      <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone</label>
      <input type="text" name="phone" id="phone" class="w-full px-3 py-2 border rounded-md" required>
    </div>      
    <div class="mb-4">
      <label for="department" class="block text-gray-700 font-semibold mb-2">Department</label>
      <input type="text" name="department" id="department" class="w-full px-3 py-2 border rounded-md" required>
    </div>      
    <div class="mb-4">
      <label for="position" class="block text-gray-700 font-semibold mb-2">Position</label>
      <input type="text" name="position" id="position" class="w-full px-3 py-2 border rounded-md" required> 
    </div>     
    <div class="mb-4">
      <label for="hire_date" class="block text-gray-700 font-semibold mb-2">Hire Date</label>
      <input type="date" name="hire_date" id="hire_date" class="w-full px-3 py-2 border rounded-md" required>   
    </div>     
    <div class="mb-4">
      <label for="salary" class="block text-gray-700 font-semibold mb-2">Salary</label>
      <input type="number" name="salary" id="salary" class="w-full px-3 py-2 border rounded-md" required>
    </div>      
    <div class="mb-4">
      <label for="status" class="block text-gray-700 font-semibold mb-2">Status</label>
      <select name="status" id="status" class="w-full px-3 py-2 border rounded-md" required>
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
      </select> 
    </div>     
    <div class="flex justify-between items-center">
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Create Employee</button>
      <a href="{{ route('employees.index') }}" class="text-gray-600 hover:underline">Back to List</a>
      </div>
    </form>
    
  
</main>
<footer class="mt-10 py-6 bg-white text-center shadow-md">
</footer>
</body>
</html>