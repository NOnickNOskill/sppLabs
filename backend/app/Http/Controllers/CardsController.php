<?php

namespace App\Http\Controllers;

use App\Http\Requests\CardRequest;
use App\Services\CardService\CardService;
use Illuminate\Http\JsonResponse;
use Exception;

class CardsController extends Controller
{
    /**
     * @param CardService $cardService
     * @param int $id
     * @return JsonResponse
     */
    public function index(CardService $cardService, int $id): JsonResponse
    {
        try {
            $cards = $cardService->getUserCards($id);
        } catch (Exception $e) {
            return response()->json(['data' => 'error: ' . $e->getMessage()], 500);
        }
        return response()->json(['data' => $cards], 200);
    }

    /**
     * @param CardService $cardService
     * @param CardRequest $request
     * @return JsonResponse
     */
    public function store(CardService $cardService, CardRequest $request): JsonResponse
    {
        $attributes = $request->all();
        try {
            $card = $cardService->createCard($attributes);
        } catch (Exception $e) {
            return response()->json(['data' => 'error: ' . $e->getMessage()], 500);
        }
        return response()->json(['data' => $card], 200);
    }

    /**
     * @param CardService $cardService
     * @param CardRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(CardService $cardService, CardRequest $request, int $id): JsonResponse
    {
        $attributes = $request->all();
        try {
            $card = $cardService->updateCard($id, $attributes);
        } catch (Exception $e) {
            return response()->json(['data' => 'error: ' . $e->getMessage()], 500);
        }
        return response()->json(['data' => $card], 200);
    }

    /**
     * @param CardService $cardService
     * @param int $id
     * @return JsonResponse
     */
    public function delete(CardService $cardService, int $id): JsonResponse
    {
        try {
            $card = $cardService->deleteCard($id);
        } catch (Exception $e) {
            return response()->json(['data' => 'error: ' . $e->getMessage()], 500);
        }
        return response()->json(['data' => $card], 200);
    }
}
