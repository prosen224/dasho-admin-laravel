<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voucher;

class VoucherController extends Controller
{
    public function create(){
        return view('backend.voucher.create');
    }

    public function GenerateVoucher($total_voucher){

        $last_id = Voucher::all()->last()->id;

		$voucher_no = mt_rand(100000, 999999);
		$voucher_no = $voucher_no.$last_id;

        $length = 12;
        $validity = '20221231';
        $string = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        $voucher_code = substr(str_shuffle($string), 0, $length);

        if($total_voucher > 0){
            
            $item =  new Voucher();
            $item->voucher_code = $voucher_code;
            $item->voucher_no = $voucher_no;
            $item->voucher_status = 0;
            $item->voucher_validity = $validity;
            $item->created_by_admin = 1;
            $item->save();
        }
        
        

    }

    public function store(Request $request){
        $voucherPer = 1;
        $total_voucher = $request->total_voucher_count;
        for($i=0; $i < $total_voucher; $i++ ){
            $this->GenerateVoucher($voucherPer);
        }
        return redirect()->route('home');
    }

}
