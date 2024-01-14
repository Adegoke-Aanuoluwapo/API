<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payments;
use App\Models\Enrollment;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $payments = Payments::all();
        return view('payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $enrollments = Enrollment::pluck('enrol_no', 'id');
        return view('payments.create', compact('enrollments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
         Payments::create($input);
         return redirect('payments');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment = Payments::find($id);
        return view('payments.show',compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $payment = Payments::find($id);
        $enrollments = Enrollment::pluck('enrol_no', 'id');
        return view('payments.edit', compact('payment', 'enrollments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payment =Payments::find($id);
        // $input =$request->all();
        // $payment->update($input);
        $payment->update($request->all());
        return redirect('payments');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payment=Payments::find($id);
        $payment->delete();
        return redirect('payments');
    }
}
