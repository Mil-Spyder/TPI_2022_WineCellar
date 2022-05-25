<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class RatingController extends Controller
{
    //

    public function create(Request $request)
    {

        $bottle_id = $request->bottle_id;

        $result = Rating::create([
            'user_id' => Auth::id(),
            'label' => $request->rating,
            'bottle_id' => $bottle_id
        ]);

        if ($result) {
            return redirect::to(url()->previous())->with('status', 'rating added');
        }
    }

    public function edit(Request $request, $id)
    {
        if (request()->isMethod('POST')) {
            $rating = Rating::findorFail($id);
            $query = $rating->update([
                'id' => $rating->id,
                'label' => $request->rating,
            ]);

            if ($query) {
                return redirect::to(url()->previous())->with('status', 'rating updated');
            }
        }
    }
}
