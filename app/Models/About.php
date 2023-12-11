<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class About extends Model
{
    use HasFactory, AsSource, Attachable, Filterable, Chartable;
    protected $table = 'about_blocks';
    protected $fillable = [
        'name',
        'text',
        'link',
        'use_advantages',
        'sort',
    ];

    protected $allowedSorts = [
        'name',
        'sort',
    ];
}
