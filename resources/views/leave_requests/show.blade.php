<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Leave Request</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

<main class="container mx-auto mt-10 px-6">
    <h2 class="text-3xl font-bold mb-6 text-center">Leave Request Details</h2>

    <div class="bg-white p-6 rounded-lg shadow-md max-w-xl mx-auto">

        <div class="mb-4">
            <h3 class="font-semibold">Employee:</h3>
            <p>{{ $leaveRequest->employee->first_name }} {{ $leaveRequest->employee->last_name }}</p>
        </div>

        <div class="mb-4">
            <h3 class="font-semibold">Type:</h3>
            <p>{{ $leaveRequest->type }}</p>
        </div>

        <div class="mb-4">
            <h3 class="font-semibold">Start Date:</h3>
            <p>{{ $leaveRequest->start_date }}</p>
        </div>

        <div class="mb-4">
            <h3 class="font-semibold">End Date:</h3>
            <p>{{ $leaveRequest->end_date }}</p>
        </div>

        <div class="mb-4">
            <h3 class="font-semibold">Status:</h3>
            <p class="capitalize">{{ $leaveRequest->status }}</p>
        </div>

        <div class="mb-4">
            <h3 class="font-semibold">Reason:</h3>
            <p>{{ $leaveRequest->reason ?? 'No reason provided' }}</p>
        </div>

        <div class="flex justify-between mt-6">
            <a href="{{ route('leave_requests.index') }}" 
               class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
               Back
            </a>

            <a href="{{ route('leave_requests.edit', $leaveRequest->id) }}" 
               class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
               Edit
            </a>
        </div>

    </div>
</main>

</body>
</html>
