<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetadataTest extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['id','bestelling_id','product','keuze','aantal', 'totaal', 'autoOrderItem', 'textInfo', 'deleted_at', 'course', 'pid'];
}
