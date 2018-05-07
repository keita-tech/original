<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Review;

class ReviewsController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $reviews = $user->reviews()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'reviews' => $reviews,
            ];
            $data += $this->counts($user);
            return view('users.show', $data);
        }else {
            return view('welcome');
        }
    }
    
    
    public function show($id)
    {
        $review = Review::find($id);

        return view('reviews.show', [
            'review' => $review,
        ]);
    }
     public function create()
    {
        $review = new Review;

        return view('reviews.create', [
            'review' => $review,
        ]);
    }
    
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);
        $this->validate($request, [
            'comic_title' => 'required|max:255',
        ]);
        $this->validate($request, [
            'content' => 'required|max:255',
        ]);
        
        $request->user()->reviews()->create([
            'title' => $request->title,
            'comic_title' => $request->comic_title,
            'content' => $request->content,
        ]);
        
        
        return redirect('/');
    }
    
    public function edit($id)
    {
        $review = Review::find($id);

        return view('reviews.edit', [
            'review' => $review,
        ]);
    }
    
     public function update(Request $request, $id)
    {
    
    
        $review = \App\Review::find($id);
        
        if (\Auth::user()->id === $review->user_id) {
        
            $review->title = $request->title;
            $review->comic_title = $request->comic_title;
            $review->content = $request->content;
        
            $review->save();
        }
        
        return redirect('/');
    }
    
    public function destroy($id)
    {
        $review = \App\Review::find($id);

        if (\Auth::user()->id === $review->user_id) {
            $review->delete();
        }

        return redirect()->back();
    }
}
