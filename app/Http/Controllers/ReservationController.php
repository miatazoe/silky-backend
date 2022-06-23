<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        $result = [];
        foreach($reservations as $reservation){
            $result[] = [
                'start' => $reservation->start_time,
                'end' => $reservation->end_time,
                'name' => $reservation->user->name
            ];
        }
        return response()->json($result, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->user();
        $reservation = new Reservation();
        $reservation->user_id = $user->id;
        $reservation->responder_id = 1;
        $product_id = $request->pid;
        $product = Product::find($product_id);
        if(!$product){
            return response(["message"=>"error"], 404);
        }
        $reservation->product_id = $product_id;

        $duration = Carbon::parse($request->date.' '.$product->duration);
        $start_time = Carbon::parse($request->date.' '.$request->time);
        $reservation->start_time = $start_time;
        $reservation->end_time = $start_time->copy()
                                ->addHours($duration->hour)
                                ->addSeconds(60 * $duration->minute);
        $reservation->remark = $request->remark==null? '': $request->remark;
        $reservation->save();
        return response()->json(['message'=>'success'], 200);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReservationModel  $reservationModel
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservationModel)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReservationModel  $reservationModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservationModel)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReservationModel  $reservationModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservationModel)
    {
        //
    }
}
