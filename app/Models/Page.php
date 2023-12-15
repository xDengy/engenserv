<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Page extends Model
{
    use HasFactory, AsSource, Attachable, Filterable, Chartable;

    protected $fillable = [
        'title',
        'h1',
        'desc',
        'keywords',
        'url',
        'page_desc1',
        'page_desc2',
    ];

    public function photos1()
    {
        return $this->hasMany(Attachment::class)->where('group','page1');
    }

    public function photos2()
    {
        return $this->hasMany(Attachment::class)->where('group','page2');
    }
}
