<?php

namespace App\Http\Controllers;

use App\Models\Queries;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    // answer query
    public function answerQuery(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'query_id' => 'required',
                'query_status' => 'required',
                'query_response' => 'required',
            ]);

            $query = Queries::where('query_id', $validatedData['query_id'])->first();

            $query->query_status = $validatedData['query_status'];
            $query->query_response = $validatedData['query_response'];

            $query->save();

            return response()->json(['success' => true, 'message' => 'Query Answered'], 200);

        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }
    // answer query

    // get queries
    public function getQueries()
    {
        $queries = Queries::get();

        return view('queries', ['queries' => $queries]);

    }
    // get queries
}
