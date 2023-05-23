<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bestelling_item_tests extends Model
{
    use HasFactory;

    protected $table = 'bestelling_item_tests';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['id','bestelling_id','product','keuze','aantal', 'totaal', 'autoOrderItem', 'textInfo', 'deleted_at', 'course', 'pid'];
}
