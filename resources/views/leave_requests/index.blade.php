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
    <h2 class="text-3xl font-bold">List of Leaves</h2>
    </main>
    <table class="min-w-full bg-white mt-6 shadow-md rounded-lg overflow-hidden">
        <div>
            <a href="{{ route('leave_requests.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 m-4 inline-block">Create Leave Request</a>
        </div>
        <thead class="bg-gray-200">
            <tr>
              <th class="py-3 px-6 text-left">Employee</th>
                <th class="py-3 px-6 text-left">Type</th>
                <th class="py-3 px-6 text-left">Start</th>
                <th class="py-3 px-6 text-left">End</th>
                <th class="py-3 px-6 text-left">Status</th>
                <th class="py-3 px-6 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leaveRequests as $leaveRequest)
            <tr class="border-b">
                <td class="py-4 px-6 text-left">{{ $leaveRequest->employee->first_name }}</td>
                <td class="py-4 px-6 text-left">{{ $leaveRequest->type }}</td>
                <td class="py-4 px-6 text-left">{{ $leaveRequest->start_date }}</td>
                <td class="py-4 px-6 text-left">{{ $leaveRequest->end_date }}</td>
                <td class="py-4 px-6 text-left">{{ $leaveRequest->status }}</td>
                <td class="py-4 px-6 text-left">
                    <a href="" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{route('leave_requests.destroy',$leaveRequest->id)}}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline ml-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        
        </tbody>
    </table>
    
    <div class="mt-6">
       {{ $leaveRequests->links() }}
    </div>
</main> 
<footer class="mt-10 py-6 bg-white text-center shadow-md">
    <!-- <p class="text-gray-600">&copy; 2025 Brand. All rights reserved.</p> -->
</footer>
</body>
</html>