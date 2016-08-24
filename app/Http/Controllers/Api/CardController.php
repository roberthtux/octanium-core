<?php

namespace App\Http\Controllers\Api;

use App\Models\Card;
use App\Models\Card_Transaction;
use App\Models\CardTransaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Validator;
use Auth;
use DB;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getCard(Request $request)
    {
        $validator = Validator::make($request->route()->parameters(), [
            'id' => 'integer|digits_between:4,10'
        ]);

        if ($validator->fails()) {
            return Response()
                ->json(['validation' => $validator->errors()], 404);
        }

        $monedero = Card::findOrFail($request->route('id'));
        return Response()
            ->json($monedero);
    }

    public function getTransactions(Request $request)
    {
        $validator = Validator::make($request->route()->parameters(), [
            'id' => 'integer|digits_between:4,10'
        ]);

        if ($validator->fails()) {
            return Response()
                ->json(['validation' => $validator->errors()], 404);
        }

        $monedero = CardTransaction::where('card_id', $request->route('id'))
            ->take(10);

        return Response()
            ->json($monedero->transacciones);
    }
    public function getReport($id)
    {
        $monedero = \DB::select('call monederos_estadocuenta_get(?)',array($id));
        return $monedero;
    }

    public function addWithdrawals(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'   => 'required|integer|digits_between:4,10',
            'description'   => 'required|max:255',
            'amount'         => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return Response()
                ->json(['validation' => $validator->errors()], 404);
        }

        DB::transaction(function ($request) use ($request) {

            $monedero = Card::findOrFail($request->get('id'));
            $monedero->balance = ($monedero->balance - $request->get('Withdrawals'));
            $monedero->save();

            $retiro = new Card_Transaction();
            $retiro->monedero_id = $request->get('id');
            $retiro->descripcion = $request->get('description');
            $retiro->retiro = $request->get('amount');
            $retiro->created_by = Auth::guard('api')->user()->id_user;
            $retiro->save();

        });

        return Response()
            ->json(['status'=>'success']);
    }
}
