<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BackendRepository\ProductRepository\SaveProductRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\Product;

class ProductController extends Controller
{
	protected $saveProduct = null;
	protected $deleteImage = null;

	public function __construct(SaveProductRepository $saveProduct, DeleteImageRepository $deleteImage)
	{
		$this->saveProduct = $saveProduct;
		$this->deleteImage = $deleteImage;
	}

    public function create()
    {
    	return view('cd-admin.Product.createProduct');
    }

    public function save(Request $request)
    {
    	$this->saveProduct->saveProduct($request);
    	return redirect('cd-admin/product')->with('message','Product Added Successfully');
    }

    public function view()
    {
    	$finalResponse = [];
        $products = Product::all();
        $model = 'Product';
        $finalResponse['products']=$products;
        $finalResponse['model']=$model;
    	return view('cd-admin.Product.product', compact('finalResponse'));
    }

    public function edit(Request $request, $slug)
    {
    	$product = Product::where('uuid', $request['token'])->get()->first();
    	return view('cd-admin.Product.editProduct', compact('product'));
    }

    public function update(Request $request, $slug)
    {
    	$this->saveProduct->updateProduct($request);
    	return redirect('cd-admin/product')->with('message','Product Updated Successfully');
    }

    public function delete(Request $request)
    {
        $product = Product::where('uuid', $request['token'])->get()->first();
        $this->deleteImage->deleteImage($product);
        $product->delete();
        return redirect('cd-admin/product')->with('msg','Product Deleted Successfully');
    }

}
