<?php

namespace App\Actions;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateEmployeeAction
{
    use DispatchesJobs;

    public function execute(Request $request, $id): void
    {
        $updateDetails = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company_id' => $request->company_id,
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        DB::table('employees')
        ->where('id', $id)
        ->update($updateDetails);

    }
}
