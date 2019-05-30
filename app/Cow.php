<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cow extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * One to many relationship: Cow -> Milk Output
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function milkOutputs()
    {
        return $this->hasMany(MilkOutput::class);
    }
}
