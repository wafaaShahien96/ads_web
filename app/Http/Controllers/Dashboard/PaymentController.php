<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $payments= Payment::paginate(10);
        return view('dashboard.payment.index',compact('payments'));
    }

    public function destroy($id)
    {
        $payment = payment::find($id); 
        $payment->delete();
            return redirect('admin/payment/')->with('success','payment deleted successfully ');
    }
}
