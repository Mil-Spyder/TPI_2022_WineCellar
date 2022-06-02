<?php

namespace App\Http\Controllers;

use App\Models\Bottle;
use App\Models\Comment;
use App\Models\GrapeVariety;
use App\Models\Rating;
use App\Models\User;

use App\Notifications\DateAlertNotification;
use App\Mail\DangerMarkdownMail;
use App\Mail\ConsumableMarkdownMail;
use App\Mail\PeakMarkdownMail;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Symfony\Contracts\Service\Attribute\Required;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;

class BottleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = Comment::all();
        $ratings = Rating::all();
        $bottles = Bottle::all();
        $users = User::all();

        foreach ($bottles as $bottle) {
            foreach ($users as $user) {
                if ($bottle->consumable_date == Carbon::now()->format('Y')) {
                    Mail::to($user->email)->send(new ConsumableMarkdownMail($bottle));
                } elseif ($bottle->peak_date == Carbon::now()->format('Y')) {
                    Mail::to($user->email)->send(new PeakMarkdownMail($bottle));
                } elseif ($bottle->danger_date == Carbon::now()->format('Y')) {
                    Mail::to($user->email)->send(new DangerMarkdownMail($bottle));
                }
            }
        }
        return view('bottles.index', compact('bottles', 'comments', 'ratings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bottles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TO-DO Validation

        $request->validate([
            'appelation' => 'required',
            'cuvee_name'  => 'required',
            'region'  => 'required',
            'vintage' => 'required|integer|min:1940|max:2100',
            'capacity' => 'required|integer|min:0|max:100',
            'unit' => 'required|integer|min:0|max:999',
            'color' => 'required',
            'description' => 'required',

        ]);

        $result = Bottle::create([
            'appelation' => $request->appelation,
            'cuvee_name' => $request->cuvee_name,
            'region' => $request->region,
            'vintage' => $request->vintage,
            'unit' => $request->unit,
            'capacity' => $request->capacity,
            'color' => $request->color,
            'consumable_date' => $request->consumable,
            'peak_date' => $request->peak,
            'danger_date' => $request->danger,
            'description' => $request->description,
            'winemaker_id' => $request->winemaker,
            'culture_id' => $request->cultures,
            'grape_variety_id' => $request->grape_variety,


        ]);

        $dates = [
            'peak_date' => $request->peak,
            'consumable_date' => $request->consumable,
            'danger_date' => $request->danger
        ];



        if ($result) {
            return Redirect::to("/")->withSuccess("la bouteille a été crée avec succés");
        } else {
            return Redirect::to("/")->withFail("la bouteille n'a pas été crée");
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
        $bottles = Bottle::findOrFail($id);

        $grape_varieties = GrapeVariety::all();
        return view('bottles.show')->with('bottle', $bottles)->with('grape_variety', $grape_varieties);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $bottles = Bottle::findorFail($id);

        return view('bottles.edit')->with('bottle', $bottles);
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

        $request->validate([
            'appelation' => 'required',
            'cuvee_name'  => 'required',
            'region'  => 'required',
            'vintage' => 'required|integer|min:1940|max:2100',
            'capacity' => 'required|integer|min:0|max:100',
            'unit' => 'required|integer|min:0|max:575',
            'color' => 'required',
            'description' => 'required',

        ]);

        $bottle = Bottle::findorFail($id);
        $result = $bottle->update([
            'id' => $bottle->id,
            'appelation' => $request->appelation,
            'cuvee_name' => $request->cuvee_name,
            'region' => $request->region,
            'vintage' => $request->vintage,
            'unit' => $request->unit,
            'capacity' => $request->capacity,
            'color' => $request->color,
            'consumable_date' => $request->consumable,
            'peak_date' => $request->peak,
            'danger_date' => $request->danger,
            'description' => $request->description,
            'winemaker_id' => $request->winemaker,
            'culture_id' => $request->cultures,
            'grape_variety_id' => $request->grape_variety,


        ]);

        if ($result) {

            return Redirect::to("/")->withSuccess("la bouteille a été modifié");
        } else {
            return Redirect::to("/")->withFail("la bouteille n'a pas été modifiée");
        }
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
        $bottle = Bottle::findorFail($id);
        $result = $bottle->delete();

        // redirect
        if ($result) {
            return Redirect::to("/")->withSuccess("la bouteille a été supprimée");
        } else {
            return Redirect::to("/")->withFail("la bouteille n'a pas été supprimer");
        }
    }

    public function createPDF($id)
    {

        $data = Bottle::findorFail($id);
        view()->share('bottle', $data);

        $pdf = PDF::loadView('pdf.index', [
            'data' => $data
        ]);
        return $pdf->download('détails' . $id . '.pdf');
    }

    
}
