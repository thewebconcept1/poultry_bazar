<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{

    // delete cities
    public function deleteCities(Request $request)
    {
        $validatedData = $request->validate([
            'city_id' => 'required',
        ]);

        $city = City::where('city_id', $validatedData['city_id'])->first();

        $city->city_status = 0;
        $city->save();

        return response()->json(['success' => true, 'message' => 'City deleted successfully'], 200);

    }
    // delete cities

    // add cities
    public function addCities(Request $request)
    {
        try {
            $cityId = $request->input('city_id');
            $validatedData = $request->validate([
                'city_name' => 'required',
                'city_province' => 'required'
            ]);

            if (isset($cityId) && $cityId != null) {
                $city = City::where('city_id', $cityId)->first();

                $city->city_name = $validatedData['city_name'];
                $city->city_province = $validatedData['city_province'];
                $city->save();

                return response()->json(['success' => true, 'message' => 'City updated successfully'], 200);

            }else{
                $city = City::create([
                    'city_name' => $validatedData['city_name'],
                    'city_province' => $validatedData['city_province'],
                ]);

                return response()->json(['success' => true, 'message' => 'City added successfully'], 200);

            }

        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }
    // add cities

    // get cities
    public function getCities()
    {
        $cities = City::where('city_status', 1)->get();

        return view('cities', ['cities' => $cities]);

    }
    // get cities
}