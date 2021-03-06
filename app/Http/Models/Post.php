<?php

namespace App\Models;

use Carbon\Carbon;

class Post extends Model
{
    // post has many comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // post belongs to one user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
        // $this->comments()->create(compact('body'));
      Comment::create([
        'body' => request('body'),
        'post_id' => $this->id,
        'user_id' => auth()->id()
      ]);
    }

    public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        if ($year = $filters['year']) {
            $query->whereYear('created_at', Carbon::parse($year)->year);
        }
    }


    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
    }



    public function tags()
    {
        // any post has many tags
        // any tag may applied to many Post

        return $this->belongsToMany(Tag::class);
    }
}
