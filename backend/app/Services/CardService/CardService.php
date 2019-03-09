<?php

namespace App\Services\CardService;

use App\Models\Card;
use App\Repositories\CardRepository\CardRepository;

class CardService
{
    /**
     * @var CardRepository $cardRepository
     */
    protected $cardRepository;

    /**
     * CardService constructor.
     * @param CardRepository $cardRepository
     */
    public function __construct(CardRepository $cardRepository)
    {
        $this->cardRepository = $cardRepository;
    }

    /**
     * @param int $id
     * @return Card
     */
    public function getUserCards(int $id): Card
    {
        return $this->cardRepository->findAllUserCards($id);
    }

    /**
     * @param array $attributes
     * @return Card
     */
    public function createCard(array $attributes): Card
    {
        return $this->cardRepository->store($attributes);
    }

    /**
     * @param int $id
     * @param array $attributes
     * @return Card
     */
    public function updateCard(int $id, array $attributes): Card
    {
        return $this->cardRepository->update($id, $attributes);
    }

    /**
     * @param int $id
     * @return Card
     */
    public function deleteCard(int $id): Card
    {
        return $this->cardRepository->delete($id);
    }
}
