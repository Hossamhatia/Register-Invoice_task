<?php

namespace App\Http\Controllers;

use App\Models\pershased;
use Illuminate\Http\Request;



use App\Models\product;
use App\Models\ProductCat;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{

    public function prodfunct(){

        $prod=ProductCat::all();
        $prr = product::with('productcat')->get();
        return view('productlist',compact('prod','prr'));//sent data to view

    }

    public function findProductName(Request $request){






       $data=Product::select('NameInEnglish','id')->where('prod_cat_id',$request->id)->take(100)->get();

       // $data=product::select('NameInEnglish','id');
       return response()->json($data);
    }


    public function findPrice(Request $request){


        $dataa=Product::select('price')->where('id',"=",$request->id)->first();




        return response()->json($dataa);
    }
    public function addInvoice(Request $request)
    {


            $cstname = $request->input('cstname');
            $prod_name = $request->input('prod_name');
            $Qty = $request->input('Qty');
            $total = $request->input('total');
            $data=array("CustomerName"=>$cstname,"ProductName"=>$prod_name,"Quantity"=>$Qty,"Totalprice"=>$total);
            DB::table('pershaseds')->insert($data);
            echo "Records Insrted Successfuly";





    }


}
