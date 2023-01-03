<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    //
    public function index()
    {
    $product = Product::paginate(20);
    return view('product',compact('product'));
    }
    public function getProductDetail($id)
    {
        $pro = Product::where('ProductId', $id)->first();
        return view('productdetail', compact('pro'));
    }
    public function addProduct()
    {
        $category = Category::all();
        return view('addproduct', compact('category'));
    }
    public function insertProduct(Request $request)
    {
        $messages = ['ProductName.required'=>'Bạn phải nhập tên sản phẩm!',
        'Price.required'=>'Bạn phải nhập giá sản phẩm', 'fileUpload.required'=>'Bạn phải thêm hình ảnh!'];
        $validator = Validator::make($request->all(), ['ProductName'=>'required', 'Price'=>'required',
        'fileUpload'=>'required'],
        $messages) -> validate();
        // $this->validate(request(), ['ProductName'=>'required', 'Price'=>'required']);
        $filename = "";
        if($request->file('fileUpload')->isValid())
        {
            $filename = $request->fileUpload->getClientOriginalName();
            $request->fileUpload->move('images/', $filename);
        }
        $product = Product::create([
            'ProductName'=>$request->ProductName,
            'Unit'=>$request->Unit,
            'Price'=>$request->Price,
            'CategoryId'=>$request->CategoryId,
            'Img'=>$filename
        ]);
        $product = Product::paginate(20);
        return view('product', compact('product'));
    }
    public function listProduct()
    {
        $product = Product::paginate(10);
        return view('productlist', compact('product'));
    }
    public function deleteProduct($id)
    {
        $dele = Product::where('ProductId', $id)->first();
        if(file_exists(public_path('images/'.$dele->Img)))
        {
            unlink(public_path('images/'.$dele->Img));
        }
        Product::where('ProductId', $id)->delete();
        $product = Product::paginate(10);
        return view('productlist', compact('product'));
    }
}
