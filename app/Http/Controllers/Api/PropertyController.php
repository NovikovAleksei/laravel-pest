<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequest;
use App\Models\Property;
use Illuminate\Http\JsonResponse;

class PropertyController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => Property::all()
        ]);
    }

    public function store(PropertyRequest $request): JsonResponse
    {
        return response()->json([
            'data' => Property::query()->create($request->all())
        ], 201);
    }
}
