<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\Auth;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'district_id',
        'name',
        'email',
        'phone',
        'address',
        'due',
        'paid',
        'created_by',
        'updated_by',
    ];

    public static function boot(): void
    {
        parent::boot(); // TODO: Change the autogenerated stub

        static::creating(function (Agent $agent) {
            $agent->created_by = Auth::id() ?? 1;
            $agent->updated_by = Auth::id() ?? 1;
        });

        static::updating(function (Agent $agent) {
            $agent->updated_by = Auth::id();
        });
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function document(): MorphMany
    {
        return $this->morphMany(Document::class, 'documentable');
    }

    public function modifier(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'updated_by');
    }

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }
}
