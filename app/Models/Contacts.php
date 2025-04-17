<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contacts extends Model
{
    use HasFactory, Searchable;
    protected $primaryKey = 'id'; // If your primary key is not 'id', set it here
    protected $fillable = [
        'name',
        'phone',
        'email',
        'company',
        'position',
        'city',
        'message',
        'replays',
        'marketer_id',
        'redirect'
    ];


    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Only return specific fields for indexing
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->phone,
            'company' => $this->company,
            'position' => $this->position,
            'city' => $this->city,
            'message' => $this->message,
            'marketer_id' => $this->marketer_id,
        ];
    }

    public function marketer()
    {
        return $this->belongsTo(Marketer::class);
    }

}
