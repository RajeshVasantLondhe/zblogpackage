<?php

namespace Zivlify\Zblog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Zivlify\Zblog\database\factories\ZblogFactory;
use Zivlify\Zblog\Repository\Zblogrepo;


class Zblog extends Model
{

    use HasFactory;
  
    protected $guarded = [];
 
    protected static function newFactory()
    { 
        return ZblogFactory::new();
    }
 
    public $zblogvalidate = [
            'title' => ['required', 'string'],
            'meta_keywords' => ['required', 'string'],
            'meta_description' => ['required', 'string'], 
            'short_description' => ['required', 'string'], 
            'body' => ['required', 'text'], 
    ];

    public function createBlog($request)
    { 
        $zblogrepo = new Zblogrepo();
        $zblogrepo->createBlogMain($request);
    }
 
}
