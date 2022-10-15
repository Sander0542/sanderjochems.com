<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
    public function educations(): JsonResponse
    {
        return response()->json(config('personal.educations'));
    }

    public function experiences(): JsonResponse
    {
        return response()->json(config('personal.experiences'));
    }

    public function projects(): JsonResponse
    {
        return response()->json(config('personal.projects'));
    }
}
