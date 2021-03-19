<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\PaymentMethod;
use App\Providers\HttpServiceProvider;
use Faker\Provider\Payment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PaymentMethodController extends Controller
{
    public function validatePaymentMethod($request)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:payment_methods',
            'description' => 'required|string',
            'status' => 'required|boolean',
        ]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $paymentMethods = PaymentMethod::query();

        if ($request->input('id')){
            $paymentMethods = $paymentMethods->where('id', $request->input('id'));
        }


        return response()->toJson($paymentMethods, HttpServiceProvider::RESPONSE_OK);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $this->validatePaymentMethod($request);

        $paymentMethod = PaymentMethod::create([
            'name' => $request->post('name'),
            'description' => $request->post('description'),
            'status' => $request->post('status'),
        ]);

        return response()->json($paymentMethod, HttpServiceProvider::RESPONSE_OK);
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $paymentMethod = PaymentMethod::where('id',$id)->first();

        return response()->json($paymentMethod, $paymentMethod ? HttpServiceProvider::RESPONSE_OK : HttpServiceProvider::NOT_FOUND);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentMethod  $paymentMethod
     * @return Response
     */
    public function edit($id, Request $request)
    {
        $paymentMethod = PaymentMethod::where('id',$id)->first();

        if ($paymentMethod) {
            $paymentMethod->update([
                'name' => $request->post('name'),
                'description' => $request->post('description'),
                'status' => $request->post('status')
            ]);

            $paymentMethod->save();
        }

        return response()->json($paymentMethod, $paymentMethod ? HttpServiceProvider::RESPONSE_OK : HttpServiceProvider::NOT_FOUND);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentMethod  $paymentMethod
     * @return Response
     */
    public function update(Request $request, PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentMethod  $paymentMethod
     * @return Response
     */
    public function destroy(PaymentMethod $paymentMethod)
    {
        //
    }
}
