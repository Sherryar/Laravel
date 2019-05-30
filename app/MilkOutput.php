<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MilkOutput extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['cow_id', 'milk_output'];

    /**
     * Many to one relationship: Milk output -> Cow
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cow()
    {
        return $this->belongsTo(Cow::class);
    }
}
