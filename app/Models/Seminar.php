<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Seminar extends Model
{
    use HasFactory;
    use Sluggable;

    // // yang boleh di isi
    // protected $fillable = ['title', 'excerpt', 'seminar_date', 'seminar_time', 'link', 'body'];

    // yang tidak boleh di isi
    protected $guarded = ['id'];

    protected $dates = ['seminar_time', 'seminar_date'];

    public function scopeFilter($query, $filters)
    {
        if ($filters ?? false) {
            return $query->where('title', 'like', '%' . $filters . '%')
                ->orWhere('body', 'like', '%' . $filters . '%');
        }
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
