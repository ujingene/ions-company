<?php

namespace App\Actions;

use App\Models\Company;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateCompanyAction
{
    use DispatchesJobs;

    public function execute(Request $request, $id, $logo): void
    {
        $updateDetails = [
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $logo
        ];

        DB::table('companies')
        ->where('id', $id)
        ->update($updateDetails);

    }
}
