<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductController extends Controller
{
    public function add(Request $req )
    {
        $add= new product; 
        $add->productname=$req->productname;
        $add->price=$req->price;
        $add->qunatity=$req->qunatity;
        $result=$add->save();
        if($result)
        {
            return["Result"=>"data has been saved"];
        }
        else{
            return["Result"=>"data has not saved"];
        }
    }
    function update(Request $req)
    {
        $data=product::find($req->id);
        $data->productname=$req->productname;
        $data->price=$req->price;
        $data->qunatity=$req->qunatity;
        $result=$data->save();
        if($result)
        {
            return["Result"=>"Data is updated"];
        }
        else
        {
            return["Result"=>"Data is not Updated"];
        }

    }
    function delete($id)
    {
        $product=product::find($id);
        $result=$product->delete();
        if($result)
        {
            return["Result"=>"Record is deleted succesfully"];
        }
        else
        {
            return["Result"=>"Record is deleted succesfully"];
        }

    }

    function full()
    {
        return product::all();

    }
    function displaywithid($id)
    {
        return product::find($id);
    }

}





    




    //

