<?php

namespace App\Actions;

use App\Models\Company;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;

class StoreCompanyAction
{
    use DispatchesJobs;

    public function execute(Request $request, $logo): void
    {
        Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $logo
        ]);

    }
}
