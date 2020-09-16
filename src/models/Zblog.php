<?php

namespace Zivlify\Zblog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Zivlify\Zblog\database\factories\ZblogFactory;
 
class Zblog extends Model
{

    use HasFactory;
  
    protected $guarded = [];
 
    protected static function newFactory()
    { 
        return ZblogFactory::new();
    }
 

}
