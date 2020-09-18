<?php

namespace Zivlify\Zblog\Repository;

use Zivlify\Zblog\Events\CreateBlog;

class Zblogrepo 
{
 
    public function createBlogMain($payload)
    { 
        event(new CreateBlog($payload));
    }
    
    function indexBlog()
    { 
        //
    }

    function updateBlog()
    { 
        //
    }

    function showBlog()
    { 
        //
    }

}
