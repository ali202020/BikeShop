<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bikes;
use App\Accessories;
use App\Extras;

class Product extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bikesIndex()
    {
        //
        $Bikes = Bikes::paginate(9);
        return view('bikes')->with('Bikes',$Bikes);
    }

    public function accessoriesIndex()
    {
        //
        $Accessories = Accessories::paginate(9);
        return view('accessories')->with('$Accessories',$Accessories);
    }

    public function extrasIndex()
    {
        //
        $Extras = Extras::paginate(9);
        return view('extras')->with('$Extras',$Extras);
    }


    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bikeShow($id)
    {
        $Bike = Bikes::find($id);
        return view('single_item')->with('Bike',$Bike);

    }
    public function accessoryShow($id)
    {
        $accessory = Accessories::find($id);
        return view('single_item')->with('accessory',$accessory);
    }
    public function extraShow($id)
    {
        $extra = Extras::find($id);
        return view('single_item')->with('extra',$extra);
    }




    

    


}
