<?php

namespace App\Repositories\CardRepository;

use App\Models\Card;
use phpDocumentor\Reflection\Types\Integer;

class CardRepository
{
    /**
     * @var Card $model
     */
    protected $model;

    /**
     * CardRepository constructor.
     * @param Card $model
     */
    public function __construct(Card $model)
    {
        $this->model = $model;
    }

    public function findCard(Integer $id)
    {

    }

    /**
     * @param Integer $userId
     * @return Card
     */
    public function findAllUserCards(Integer $userId): Card
    {
        return $this->model->where('user_id', $userId)->get();
    }

    /**
     * @param array $attributes
     * @return Card
     */
    public function store(array $attributes): Card
    {
        return $this->model->create($attributes);
    }

    /**
     * @param Integer $id
     * @param array $attributes
     * @return Card
     */
    public function update(Integer $id, array $attributes): Card
    {
        return $this->model->find($id)->update($attributes);
    }

    /**
     * @param Integer $id
     * @return Card
     */
    public function delete(Integer $id): Card
    {
        return $this->model->find($id)->delete();
    }
}
