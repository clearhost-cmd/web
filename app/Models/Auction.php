<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    protected $table = 'auctions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'image',
        'bid',
    ];

    /**
     * Get the comments for the blog post.
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('location');
    }      
}
