<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Attachment\Models\Attachment;
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
        'sort',
        'new',
        'code',
        'url',
        'title',
        'desc',
        'keywords',
        'h1',
    ];

    protected $allowedSorts = [
        'is_folder',
        'price',
        'name',
        'sort',
    ];

    public function folders() {
        return $this->hasMany(Catalog::class, 'folder_id')->where('is_folder', 1)->select('id');
    }

    public function photos()
    {
        return $this->hasMany(Attachment::class)->where('group','catalog');
    }
}
