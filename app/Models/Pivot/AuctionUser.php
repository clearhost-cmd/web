<?php

namespace App\Models\Pivot;

use App\Models\Auction;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AuctionUser extends Pivot
{
    use HasFactory;

    protected $table = 'auction_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'auction_id',
        'user_id',
    ]; 
    
    /**
     * Get the datasets for the user.
     */
    public function auction()
    {
        return $this->belongsTo(Auction::class);
    } 
    
    /**
     * Get the datasets for the user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }     
}
