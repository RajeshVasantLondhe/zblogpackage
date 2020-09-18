<?php

namespace Zivlify\Zblog\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Zivlify\Zblog\Events\CreateBlog;

class ZblogListner
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CreateBlog $event)
    {
        $request = $event->zblogPayload;

        $zblog = $event->zblog;

        $zblog->title = $request->title;
        $zblog->meta_keywords = $request->meta_keywords;
        $zblog->meta_description = $request->meta_description;
        $zblog->short_description = $request->short_description;
        $zblog->body = $request->body;
        $zblog->published_date = $request->published_date;
        $zblog->display_date = $request->display_date;
        $zblog->image_url = $request->image_url;
        $zblog->image_alt = $request->image_alt;
        $zblog->slug = \Illuminate\Support\Str::slug($request->title, "-");
       
        $zblog->save();
        
        if($zblog) {
            $zblog->parcel = \Illuminate\Support\Str::uuid($zblog->title);
            return zivlify()->respond(zivlify()->success($zblog));
        }

        // $event->zblog->create($event->zblogPayload);
    }

}
