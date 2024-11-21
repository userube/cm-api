<?php

namespace App\Http\Controllers;

use App\Models\AirtimeDataBundles;
use App\Models\UserBalance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Purchase data or airtime.
     */
    public function createTransaction(Request $request)
    {
        $request->validate([
            'bundle_id' => 'required|exists:airtime_data_bundles,id',
        ]);

        $user = $request->user();
        $bundle = AirtimeDataBundles::findOrFail($request->bundle_id);


        $userBalance = UserBalance::where('user_id', $user->id)->first();
        if (!$userBalance || $userBalance < $bundle->price) {
            return response()->json([
                'message' => 'Insufficient balance.',
            ], 400);
        }

        DB::transaction(function () use ($user, $bundle, $userBalance) {
            $userBalance->decrement('balance', $bundle->price);

            // Create a transaction
            $user->transactions()->create([
                'type' => 'debit',
                'service_id' => $bundle->id,
                'amount' => $bundle->price,
                'description' => "Purchased {$bundle->description}",
            ]);
        });

        return response()->json([
            'message' => 'Transaction successful!',
            'new_balance' => $userBalance->fresh()->balance,
        ]);
    }

    public function listTransactions(Request $request)
    {
        $user = $request->user();
        $transactions = $user->transactions()->latest()->get();

        return response()->json([
            'message' => 'Transactions retrieved successfully.',
            'transactions' => $transactions,
        ]);
    }
}
