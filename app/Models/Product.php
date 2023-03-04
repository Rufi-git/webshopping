<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * @var array
     */

    protected $guarded = [];
    
    public function productable(){
        return $this->morphTo();
    }

    protected $table = 'products';
    protected $fillable = ['id', 'name', 'price','type','value'];

    public function NameAttribute($value)
    {
        set: $this->attributes['name'] = ucfirst($value);
        get: strtoupper($value);
    }
    public function PriceAttribute($value)
    {
        set: $this->attributes['price'] = ucfirst($value);
        get: strtoupper($value);
    }
    public function TypeAttribute($value)
    {
        set: $this->attributes['type'] = ucfirst($value);
        get: strtoupper($value);
    }
    public function ValueAttribute($value)
    {
        set: $this->attributes['value'] = ucfirst($value);
        get: strtoupper($value);
    }
}
