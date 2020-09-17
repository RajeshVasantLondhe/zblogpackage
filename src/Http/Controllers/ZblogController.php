<?php

namespace Zivlify\Zblog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Zivlify\Zblog\Models\Zblog;

class ZblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zblogs = Zblog::all();  
        return response()->json([
            'code' => 200,
            'error' => false,
            'message' => 'Activity is successfully done.',
            'data' => $zblogs
        ], 200);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'title' => ['required', 'string'],
            'meta_keywords' => ['required', 'string'],
            'meta_description' => ['required', 'string'],
            'short_description' => ['required', 'string'],
            'title' => ['required', 'string'],
            'body' => ['required', 'string'],
            'published_date' => ['required', 'date_format:Y-m-d H:i:s'],
            'display_date' => ['required', 'date_format:Y-m-d H:i:s'],

        ]);

        $zblog = new Zblog();
        $zblog->title = $request->title;
        $zblog->meta_keywords = $request->meta_keywords;
        $zblog->meta_description = $request->meta_description;
        $zblog->short_description = $request->short_description;
        $zblog->body = $request->body;
        $zblog->published_date = $request->published_date;
        $zblog->display_date = $request->display_date;
        $zblog->image_url = $request->image_url;
        $zblog->image_alt = $request->image_alt;
        $zblog->banner_status = $request->banner_status;
        $zblog->slug = \Illuminate\Support\Str::slug($request->title, "-");
      
        $zblog->save();

        if($zblog) {
            $zblog->parcel = \Illuminate\Support\Str::uuid($zblog->title);
            return response()->json([
                'code' => 200,
                'error' => false,
                'message' => 'Activity is successfully done.',
                'data' => $zblog
            ], 200);
        }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
