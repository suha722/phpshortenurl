<?php

namespace App\Http\Controllers;
use App\Models\ShortLink;
use Illuminate\Support\Facades\View;


use Illuminate\Http\Request;

class ShortLinkController extends Controller
{
    public function index(){
    
    $shortLinks =  ShortLink::paginate(10);
    return view('short_links',compact('shortLinks'));
    }
    public function store(Request $request ){
        $request->validate([
            'link' =>'required | url | unique:short_links:link'
        ]);
        $data['link'] = $request->link;
        $data['code'] =\Illuminate\Support\Str::random(6);
        ShortLink::create($data); 
        return redirect('/')->with('success','لقد تم اختصار الرابط بنجاح');  
   
        }
        public function show($code){
           
            $row = ShortLink::where('code' , $code)->firstOrFail();
            $row->visits_count+=1;
            $row->save();
            return redirect($row->link);
            }
    
        


}
