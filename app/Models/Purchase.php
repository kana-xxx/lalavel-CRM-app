<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Actionpp\Models\Customer;
use App\Models\Item;

class Purchase extends Model
{
    /** @use HasFactory<\Database\Factories\PurchaseFactory> */
    use HasFactory;

    protected  $fillable = [
        'customer_id',
        'status',
        ];

        public function customer()
            {
            return $this->belongsTo(Customer::class);
            }

            public function items()
            {
            return $this->belongsToMany(Item::class)
            ->withPivot('quantity');
            }
}
