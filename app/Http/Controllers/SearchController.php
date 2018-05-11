<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Review;

class SearchController extends Controller
{
    public function refer(Request $request)
    {
        $user_search = $request->usersearch;
        
        if(isset($user_search)){
            $reviews = \DB::table('reviews')->where('comic_title', 'LIKE', "%$user_search%")->orderBy('created_at','updated_at')->paginate(10);
        
            return view('search.SearchKekka', [
                'reviews' =>$reviews,
            ]);
        }else{
            $reviews = \DB::table('reviews')->orderBy('created_at','updated_at')->paginate(10);
        
            return view('search.refer', [
                'reviews' =>$reviews,
            ]);
        }
    }
}