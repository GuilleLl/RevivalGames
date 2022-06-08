<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaymentController extends Controller
{
    public function processPaypal(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('processSuccess'),
                "cancel_url" => route('processCancel'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "EUR",
                        "value" => "3.99"
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('premium')
                ->with('error', 'Algo ha salido mal.');
        } else {
            return redirect()
                ->route('premium')
                ->with('error', $response['message'] ?? 'Algo ha salido mal.');
        }
    }

    public function processSuccess(Request $request)
    {

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            Auth::user()->assignRole('premium');
            Auth::user()->removeRole('free');
            return redirect()
                ->route('premium')
                ->with('success', 'transaccion completa.');
        } else {
            return redirect()
                ->route('premium')
                ->with('error', $response['message'] ?? 'Algo ha salido mal.');
        }
    }

    public function processCancel(Request $request)
    {
        return redirect()
            ->route('premium')
            ->with('error', $response['message'] ?? 'Has cancelado la transaccion.');
    }
}

