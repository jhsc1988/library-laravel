<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'publisher',
        'language',
        'annotation',
        'isbn',
        'amount',
        'cover',
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('author', 'like', '%' . request('search') . '%')
                ->orWhere('annotation', 'like', '%' . request('search') . '%');
        }
    }

    public function reservations()
    {
        return $this->belongsToMany(User::class, 'reservations')->withTimestamps();
    }
    public function isReservedByCurrentUser()
    {
        $user = Auth::user();
        if (!$user) {
            return false; // If the user is not authenticated, return false
        }

        return $this->reservations()->where('user_id', $user->id)->exists();
    }
}
