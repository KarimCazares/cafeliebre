<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catagory;

use App\Models\Product;

class AdminController extends Controller
{
    public function view_catagory()
    {
        $data=catagory::all();

        return view('admin.catagory', compact('data'));
    }
    public function add_catagory(Request $request)
    {
        $data=new catagory;

        $data->catagory_name=$request->catagory;

        $data->save();

        return redirect()->back()->with('message','Categoria agregada exitosamente');
    }

    public function delete_catagory($id)
    {
        $data=catagory::find($id);

        $data->delete();

        return redirect()->back()->with('message','Categoria eliminada exitosamente');
    }

    public function view_product()
    {
        $catagory=catagory::all();
        return view('admin.product', compact('catagory'));
    }

    public function add_product(Request $request)
    {
 
        $product=new Product;

        $product->title=$request->title;

        $product->description=$request->description;

        $product->price=$request->price;

        $product->quantity=$request->quantity;

        $product->discount_price=$request->disc_price;

        $product->catagory=$request->catagory;


        $image=$request->file('image');

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product', $imagename);

        $product->image=$imagename;


        $product->save();

        return redirect()->back()->with('message','Producto agregado exitosamente');

    }

    public function show_product(Request $request)
    {
       
        $product=Product::all();
        return view('admin.show_product', compact('product'));
    }

    public function delete_product($id)
    {
        $product=Product::find($id);

        $product->delete();

        return redirect()->back()->with('message','Producto eliminado exitosamente');
    }

    public function update_product($id)
    {
        $product=Product::find($id);

        $catagory=catagory::all();

        return view('admin.update_product', compact('product', 'catagory'));
    }
    
    public function update_product_confirm(Request $request, $id)
    {
        $product=Product::find($id);

        $product->title=$request->title;

        $product->description=$request->description;

        $product->price=$request->price;

        $product->discount_price=$request->disc_price;

        $product->catagory=$request->catagory; 

        $product->quantity=$request->quantity;

        

         

       
        
            $image=$request->image;

            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('product', $imagename);


            $product->image=$imagename;

            $product->save();

            return redirect()->back()->with('message','Producto actualizado exitosamente');

        

       
    }
}
