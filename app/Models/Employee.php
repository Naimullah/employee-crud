<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;
    protected $table='employees';
    protected $fillable = [
        'first_name','last_name','email','phone',
        'department','position','hire_date','salary','status'
    ];

    protected $casts = [
        'hire_date' => 'date',
        'salary'    => 'decimal:2',
    ];
 
    public function leaveRequests(): HasMany
    {
        return $this->hasMany(LeaveRequest::class);
    }

}
