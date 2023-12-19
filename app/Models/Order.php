<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Order extends Model
{
    use HasFactory, AsSource, Attachable, Filterable, Chartable;

    protected $fillable = [
        'email',
        'name',
        'message',
    ];

    public function catalog()
    {
        return $this->belongsToMany(
            Catalog::class,
            'order_catalogs',
            'order_id',
            'catalog_id'
        )->withPivot(['quantity', 'price']);
    }
}
