<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    // protected $fillable = [
    //     'food',
    //     'calorie',
    //     'carbo',
    //     'fat',
    //     'protein',
    //     'weight',
    // ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function likes(): BelongsToMany 
    {
        return $this->belongsToMany('App\User', 'likes')->withTimestamps();
    }

    // あるユーザーがある記事をいいね済みであるかどうか判定
    public function isLikedBy(?User $user): bool
    {
        return $user ? (bool)$this->likes->where('id', $user->id)->count() : false;

    }

    // ある記事に紐付いたいいねの数を返す
    public function getCountLikesAttribute(): int
    {
        return $this->likes->count();
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
    
}
