<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
   public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}
