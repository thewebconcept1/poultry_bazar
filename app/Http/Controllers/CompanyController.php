<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function addCompany(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'user_id' => 'required',
                'company_name' => 'required',
                'company_address' => 'required',
                'company_phone' => 'required',
                'company_logo' => 'nullable',
            ]);

            if ($request->hasFile('company_logo')) {
                $image = $request->file('company_logo');
                $imagePath = $image->store('company_logos', 'public');
                $imageFullPath = 'storage/' . $imagePath;
            } else {
                $imageFullPath = null;
            }
            Company::create([
                'user_id' => $validatedData['user_id'],
                'company_name' => $validatedData['company_name'],
                'company_address' => $validatedData['company_address'],
                'company_phone' => $validatedData['company_phone'],
                'company_logo' => $imageFullPath,
            ]);
            return response()->json(['success' => true, 'message' => 'Company Add Successfully'], 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
}
