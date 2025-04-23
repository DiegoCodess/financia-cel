<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Phone;
use App\Models\CreditApplication;
use App\Models\Instalment;
use Illuminate\Support\Facades\DB;

class CreditController extends Controller
{
    public function store(Request $request)
    {
        return response()->json([
            'message' => 'Petición recibida correctamente',
            'data' => $request->all()
        ]);
    }
    /* public function store(Request $request) {

        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'phone_id' => 'required|exists:phones,id',
            'term' => 'required|integer|min:1',
        ]);
        // Verifica si el cliente ya tiene un crédito activo
        $hasActiveCredit = CreditApplication::where('client_id', $validated['client_id'])
            ->whereIn('status', ['pending', 'approved'])
            ->exists();

        if ($hasActiveCredit) {
            return response()->json(['error' => 'Ya tienes un crédito activo.'], 422);
        }
        //Verifica si el teléfono está disponible
        $phone = Phone::findOrFail($validated['phone_id']);

        if ($phone->stock < 1) {
            return response()->json(['error' => 'El teléfono no está disponible.'], 422);
        }
        // Calcula el monto total con interés
        $interestRate = 0.015;
        $basePrice = $phone->price;
        $term = $validated['term'];
        $totalWithInterest = $basePrice * (1 + ($interestRate * $term));
        $instalmentAmount = round($totalWithInterest / $term, 2);

        try {
            DB::beginTransaction();

            $credit = CreditApplication::create([
                'client_id' => $validated['client_id'],
                'phone_id' => $validated['phone_id'],
                'amount' => $totalWithInterest,
                'term' => $term,
                'status' => 'approved',
            ]);
            // Descuenta el stock del teléfono
            $phone->decrement('stock');
            // Genera las Cuotas
            for ($i = 1; $i <= $term; $i++) {
                Instalment::create([
                    'credit_application_id' => $credit->id,
                    'number' => $i,
                    'amount' => $instalmentAmount,
                    'due_date' => now()->addMonths($i),
                ]);
            }

            DB::commit();

            return response()->json(['message' => 'Crédito aprobado.', 'credit' => $credit], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Error al procesar el crédito.'], 500);
        }
    } */
}
