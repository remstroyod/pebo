<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function service(): HasOne
    {
        return $this->hasOne(Service::class, 'id', 'service_id');
    }

    public function scopeNew($query)
    {
        return $query->where('status', OrderStatus::Await);
    }

    public function scopeNotNew($query)
    {
        return $query->where('status', '!=', OrderStatus::Await);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
