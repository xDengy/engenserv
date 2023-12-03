<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Catalog extends Model
{
    use HasFactory, AsSource, Attachable, Filterable, Chartable;

    protected $fillable = [
        'name',
        'price',
        'text',
        'chars',
        'scheme',
        'is_folder',
        'folder_id',
    ];

    protected $allowedSorts = [
        'is_folder',
        'price',
        'name',
    ];
}
