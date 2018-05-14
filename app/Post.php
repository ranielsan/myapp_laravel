<?php

namespace App;

use Carbon\Carbon;
class Post extends Model
{
   public function comments()
   {
   	return $this->hasMany(Comment::class);
   	//return $this->hasMany(App\Comment);
   }
   public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function files()
    {
      return $this->hasMany(file::class);
    }
    public function addComment($body)
    {
    	//$this->comments()->create(compact('body'));
    	Comment::create([
     	'body' => request('body'),
      'post_name' => request('name'),
     	'post_id' => $this->id,
      'user_id' => request('user_id')
     	]);
    }
    public function scopeFilter($query, $filters)
    {
        if (isset($filters['month'])) {
        $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
        }

        if (isset($filters['year'])) {
        $query->whereYear('created_at', $filters['year']);
        }
    }
    public function archives()
    {
      return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
      ->groupBy('year', 'month')
      ->orderByRaw('min(created_at) desc')
      ->get()
      ->toArray(); 
    }
}
