<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Leave Request</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
<main class="container mx-auto mt-10 px-6">
    <h2 class="text-3xl font-bold mb-6 text-center">Edit Leave Request</h2>

    <form action="{{ route('leave_requests.update', $leaveRequest->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md max-w-lg mx-auto">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="employee_id" class="block text-gray-700 font-semibold mb-2">Employee</label>
            <select name="employee_id" id="employee_id" class="w-full border border-gray-300 p-2 rounded-md">
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}" 
                        {{ $leaveRequest->employee_id == $employee->id ? 'selected' : '' }}>
                        {{ $employee->first_name }} {{ $employee->last_name }}
                    </option>
                @endforeach
            </select>
        </div>

         <div class="mb-4">
           <label for="type" class="block text-gray-700 font-semibold mb-2">Type</label>
           <select name="type" id="type" class="w-full border border-gray-300 p-2 rounded-md">
                <option value="vacation" {{ $leaveRequest->type == 'vacation' ? 'selected' : '' }}>Vacation</option>
                <option value="sick" {{ $leaveRequest->type == 'sick' ? 'selected' : '' }}>Sick</option>
                <option value="unpaid" {{ $leaveRequest->type == 'unpaid' ? 'selected' : '' }}>Unpaid</option>
                <option value="other" {{ $leaveRequest->type == 'other' ? 'selected' : '' }}>Other</option>
           </select>
        </div>

        <div class="mb-4">
            <label for="start_date" class="block text-gray-700 font-semibold mb-2">Start Date</label>
            <input type="date" name="start_date" id="start_date"
                   value="{{ $leaveRequest->start_date->format('Y-m-d') }}"
                   class="w-full border border-gray-300 p-2 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="end_date" class="block text-gray-700 font-semibold mb-2">End Date</label>
            <input type="date" name="end_date" id="end_date"
                   value="{{ $leaveRequest->end_date->format('Y-m-d') }}"
                   class="w-full border border-gray-300 p-2 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700 font-semibold mb-2">Status</label>
            <select name="status" id="status" class="w-full border border-gray-300 p-2 rounded-md">
                <option value="pending" {{ $leaveRequest->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="approved" {{ $leaveRequest->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                <option value="r   ejected" {{ $leaveRequest->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="reason" class="block text-gray-700 font-semibold mb-2">Reason</label>
            <textarea name="reason" id="reason" rows="4" class="w-full border border-gray-300 p-2 rounded-md">{{ $leaveRequest->reason }}</textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">Update Request</button>
        </div>
    </form>
</main>
</body>
</html>
