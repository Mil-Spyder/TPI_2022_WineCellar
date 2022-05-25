<?php

namespace App\Http\Controllers;

use App\Models\Bottle;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
   

    public function create(Request $request)
    {
        
        $bottle_id=$request->bottle_id;

        $result=Comment::create([
            'user_id'=>Auth::id(),
            'label'=>$request->comment,
            'bottle_id'=>$bottle_id
        ]);

        if($result){
            return redirect::to(url()->previous())->with('status','comments added');
        }
    }
    public function show($id)
    {
        Comment::findorFail($id);
        return view('');
    }
}
