<?php
 
namespace Zivlify\Zblog\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Zivlify\Zblog\Models\Zblog;

class CreateBlog
{
    use Dispatchable, SerializesModels;

    public $zblog;
    public $zblogPayload;

    public function __construct($zblogPayload)
    {
        $this->zblog = new Zblog;
        $this->zblogPayload = $zblogPayload;
    }
}