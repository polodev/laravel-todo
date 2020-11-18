<?php

namespace App\Models;

use App\Scopes\UserScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailySession extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
      return $this->belongsTo(User::class);
    }
    protected $casts = [
        'date' => 'datetime',
    ];
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
      parent::boot();
      static::addGlobalScope(new UserScope);
    }

}
