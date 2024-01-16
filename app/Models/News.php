<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class News extends Model
{
    use HasFactory, AsSource, Attachable, Filterable, Chartable;

    protected $fillable = [
        'name',
        'text',
        'image',
        'tag_id',
        'active',
        'sort',
    ];

    protected $allowedFilters = [
        'name',
        'active',
        'id'
    ];

    protected $allowedSorts = [
        'name',
        'sort',
    ];

    public function tags(){
        return $this->hasOne(Tag::class, 'id', 'tag_id');
    }

}
