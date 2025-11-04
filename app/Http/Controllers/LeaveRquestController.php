<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveRequest;
use App\Models\Employee;
class LeaveRquestController extends Controller
{
    public function index()
    {
        $leaveRequests = LeaveRequest::with('employee')->latest()->paginate(10);
        // dd( $leaveRequests);
        
        return view('leave_requests.index', compact('leaveRequests'));
    }
    public function create()
    {
        $employees = \App\Models\Employee::all();
        return view('leave_requests.create', compact('employees'));
    }
    public function show($id)
    {
        // $leaveRequest=LeaveRequest::with('employee')->latest();
        $leaveRequest = LeaveRequest::with('employee')->findOrFail($id);
        // dd($leaveRequest);
        return view('leave_requests.show', compact('leaveRequest'));
    }
    public function store(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'employee_id' => 'required|exists:employees,id',
        //     'start_date' => 'required|date',
        //     'end_date' => 'required|date|after_or_equal:start_date',
        //     'reason' => 'required|string|max:500',
        // ]);

        // LeaveRequest::create($request->all());

        // return redirect()->route('leave_requests.index')
        //                  ->with('success', 'Leave request created successfully.');
        $leaveRequest = new LeaveRequest();
        $leaveRequest->employee_id = $request->input('employee_id');
        $leaveRequest->start_date = $request->input('start_date');



        $leaveRequest->end_date = $request->input('end_date');
        $leaveRequest->status=$request->input('status');
        $leaveRequest->type=$request->input('type');
        $leaveRequest->reason = $request->input('reason');
        // $leaveRequest->status = 'pending'; // Default status
        $leaveRequest->save();
        return redirect()->route('leave_requests.index')
                         ->with('success', 'Leave request created successfully.');
                         
    }   
    public function destroy($id)
    {
        $leaveRequest = LeaveRequest::findOrFail($id);
        $leaveRequest->delete();

        return redirect()->route('leave_requests.index')
                         ->with('success', 'Leave request deleted successfully.');
    }   
    public function edit($id)
    {
        $leaveRequest = LeaveRequest::findOrFail($id);
        $employees=Employee::all();
        return view('leave_requests.edit', compact('leaveRequest','employees'));
    }
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'employee_id' => 'required|exists:employees,id',
        //     'start_date' => 'required|date',
        //     'end_date' => 'required|date|after_or_equal:start_date',
        //     'reason' => 'required|string|max:500',
        //     'status' => 'required|in:pending,approved,rejected',
        // ]);

        // $leaveRequest = LeaveRequest::findOrFail($id);
        // $leaveRequest->update($request->all());

        // return redirect()->route('leave_requests.index')
        //                  ->with('success', 'Leave request updated successfully.');
        $leaveRequest=LeaveRequest::findOrFail($id);
        $leaveRequest->employee_id = $request->employee_id;
        $leaveRequest->type = $request->type;
        $leaveRequest->start_date = $request->start_date;
        $leaveRequest->end_date = $request->end_date;
        $leaveRequest->status = $request->status;
        $leaveRequest->reason = $request->reason;
        $leaveRequest->save();
          return redirect()->route('leave_requests.index')
                         ->with('success', 'Leave request updated successfully.');

    }

}
