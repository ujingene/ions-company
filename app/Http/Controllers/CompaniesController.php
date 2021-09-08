<?php

namespace App\Http\Controllers;

use App\Actions\StoreCompanyAction;
use App\Actions\UpdateCompanyAction;
use App\Http\Requests\StoreCompanyRequest;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CompanyCreated;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, StoreCompanyRequest $storerequest, StoreCompanyAction $storeCompanyAction) : RedirectResponse
    {
        $logo = $this->createCompanyLogo($request);

        $storeCompanyAction->execute($storerequest, $logo);

        $savedCompany = Company::latest()->take(1)->first();

        Notification::send($savedCompany, new CompanyCreated($savedCompany));

        return redirect()->route('company.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
        return view('companies.view', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoreCompanyRequest $storerequest, UpdateCompanyAction $updateCompanyAction, $id)
    {
        $logo = $this->createCompanyLogo($request);

        $updateCompanyAction->execute($storerequest, $id, $logo);

        return redirect()->route('company.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::destroy($id);
        return redirect()->route('company.index');
    }

    public function createCompanyLogo($request)
    {
        if ($request->image) {
            $ext = $request->image->getClientOriginalExtension();
            $imfile = date('YmdHis') . rand(1, 99999) . '.' . $ext;
            $request->image->StoreAs('public/logos', $imfile);
        } else {
            if (is_null($request->image))
                $imfile = '';
        }

        return $imfile;
    }
}
