<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bikes;
use App\Accessories;
use App\Extras;
use Image;

class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //returns the admin-form view
        return view('admin_panel');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Bikes = new Bikes;
        $Extras = new Extras;
        $Accessories = new Accessories;

        //validating the data (to b e implemented later)


        //stroing in the data base

        switch ($request->product_type) {
            case 'bikes':
                $Bikes->product_name = $request->product_name;
                $Bikes->price = $request->price;
                $Bikes->product_type = $request->product_type;
                $Bikes->product_brand = $request->product_brand;
                $Bikes->quantity = $request->quantity;
                
                $Bikes->description = $request->description;
                if($request->hasFile('product_image_link')){
                    $image = $request->file('product_image_link');
                    $file_name = time() . '.' . $image->getClientOriginalExtension();
                    $location = public_path('images/'.$file_name);
                    Image::make($image)->save($location);
                    $Bikes->product_image_link= $file_name;
                }
                $Bikes->save();
                
                break;
            case 'extras':
                $Extras->product_name = $request->product_name;
                $Extras->price = $request->price;
                $Extras->product_type = $request->product_type;
                $Extras->product_brand = $request->product_brand;
                $Extras->quantity = $request->quantity;                
                $Extras->description = $request->description;
                if($request->hasFile('product_image_link')){
                    $image = $request->file('product_image_link');
                    $file_name = time().'.'.$image->getClientOriginalExtension();
                    $location = public_path('images/'.$file_name);
                    Image::make($image)->save($location);
                    $Extras->product_image_link= $file_name;
                }

                $Extras->save();
                break;
            case 'accessories':
                $Accessories->product_name = $request->product_name;
                $Accessories->price = $request->price;
                $Accessories->product_type = $request->product_type;
                $Accessories->product_brand = $request->product_brand;
                $Accessories->quantity = $request->quantity;
                
                $Accessories->description = $request->description;
                if($request->hasFile('product_image_link')){
                    $image = $request->file('product_image_link');
                    $file_name = time() . '.' . $image->getClientOriginalExtension();
                    $location = public_path('images/'.$file_name);
                    Image::make($image)->save($location);
                    $Accessories->product_image_link= $file_name;
                }
                $Accessories->save();
                break;          
            
        }
        //session success message
        $request->session()->flash('success','Product has been successfuly saved to the data base');

        //redirect to another view
        return redirect()->route('admin.create');

        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
