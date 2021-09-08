<?php

namespace App\Actions;

use App\Models\Employee;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;

class StoreEmployeeAction
{
    use DispatchesJobs;

    public function execute(Request $request): void
    {
        Employee::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company_id' => $request->company_id,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

    }
}
