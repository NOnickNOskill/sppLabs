<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserService\UserService;
use Illuminate\Http\JsonResponse;
use Exception;

class UserController extends Controller
{
    /**
     * @param UserService $userService
     * @param int $id
     * @return JsonResponse
     */
    public function index(UserService $userService, int $id): JsonResponse
    {
        try {
            $user = $userService->find($id);
        } catch (Exception $e) {
            return response()->json(['data' => 'error: ' . $e->getMessage()], 500);
        }
        return response()->json(['data' => $user], 200);
    }

    /**
     * @param UserService $userService
     * @param UserRequest $request
     * @return JsonResponse
     */
    public function create(UserService $userService, UserRequest $request): JsonResponse
    {
        $attributes = $request->all();
        try {
            $user = $userService->store($attributes);
        } catch (Exception $e) {
            return response()->json(['data' => 'error: ' . $e->getMessage()], 500);
        }
        return response()->json(['data' => $user], 200);
    }
}
