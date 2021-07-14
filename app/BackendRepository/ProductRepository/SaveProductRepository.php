<?php

namespace App\BackendRepository\ProductRepository;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Str;
use App\BackendRepository\ImageRepository\SaveImageRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\BackendRepository\ValidateRepository\ValidationRepository;
use App\BackendRepository\UuidRepository\GenerateUuidRepository;

class SaveProductRepository extends Controller
{
	protected $saveImage = null;
    protected $deleteImage = null;
    protected $validation = null;
    protected $generateUuid = null;
    
    
    public function __construct(SaveImageRepository $saveImage, DeleteImageRepository $deleteImage, ValidationRepository $validation, GenerateUuidRepository $generateUuid)
    {
        $this->saveImage = $saveImage;
        $this->deleteImage = $deleteImage;
        $this->validation = $validation;
        $this->generateUuid = $generateUuid;

    }

    public function saveProduct($request)
	{

        $this->validation->validateNameEng($request);
        $this->validation->validateNameNep($request);
        $this->validation->validateDescriptionEng($request);
        $this->validation->validateDescriptionNep($request);
        $this->validation->validateImage($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateVendorNameEng($request);
        $this->validation->validateVendorNameNep($request);
        $this->validation->validatePriceEng($request);
        $this->validation->validatePriceNep($request);
        $this->validation->validateLink($request);
        $this->validation->validateStatus($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);


		$product = new Product;
		$product->uuid = $this->generateUuid->generateUuid('products');
		$product->name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']);
		$product->name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']);
		$product->description_eng = str_replace( array( '\'','&lt;'), '-',$request['description_eng']);
        $product->description_nep = str_replace( array( '\'','&lt;'), '-',$request['description_nep']);
        $product->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']));
        $product->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']));
		$product->vendor_name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['vendor_name_eng']);
		$product->vendor_name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['vendor_name_nep']);
		$product->price_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['price_eng']);
		$product->price_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['price_nep']);
		$product->link = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['link']);
        $product->image = $this->saveImage->saveImage($request);
        $product->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $product->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);

        $product->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $product->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $product->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $product->save();
	}

	public function updateProduct($request)
	{

		$this->validation->validateNameEng($request);
        $this->validation->validateNameNep($request);
        $this->validation->validateDescriptionEng($request);
        $this->validation->validateDescriptionNep($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateVendorNameEng($request);
        $this->validation->validateVendorNameNep($request);
        $this->validation->validatePriceEng($request);
        $this->validation->validatePriceNep($request);
        $this->validation->validateLink($request);
        $this->validation->validateStatus($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);

        $product = Product::where('uuid',$request['uuid'])->get()->first();
		$product->name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']);
		$product->name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']);
		$product->description_eng = str_replace( array( '\'','&lt;'), '-',$request['description_eng']);
        $product->description_nep = str_replace( array( '\'','&lt;'), '-',$request['description_nep']);
        $product->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']));
        $product->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']));
		$product->vendor_name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['vendor_name_eng']);
		$product->vendor_name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['vendor_name_nep']);
		$product->price_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['price_eng']);
		$product->price_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['price_nep']);
		$product->link = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['link']);
		if ($request->hasFile('image')) {
            $this->deleteImage->deleteImage($product);
            $product->image = $this->saveImage->saveImage($request);

        }
        
        $product->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $product->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);
        $product->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $product->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $product->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $product->save();

	}


}