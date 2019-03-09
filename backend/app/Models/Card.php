<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'cards';

    /**
     * @var array $fillable
     */
    public $fillable = [
        'title', 'description', 'estimation',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
