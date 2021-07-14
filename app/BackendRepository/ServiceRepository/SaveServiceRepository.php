<?php

namespace App\BackendRepository\ServiceRepository;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Support\Str;
use App\BackendRepository\ImageRepository\SaveImageRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\BackendRepository\ValidateRepository\ValidationRepository;
use App\BackendRepository\UuidRepository\GenerateUuidRepository;

class SaveServiceRepository extends Controller
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

    public function saveService($request)
    {
    	$this->validation->validateTitleEng($request);
    	$this->validation->validateTitleNep($request);
        $this->validation->validateDescriptionEng($request);
        $this->validation->validateDescriptionNep($request);
        $this->validation->validateImage($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateStatus($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);

        $service = new Service;
        $service->uuid = $this->generateUuid->generateUuid('services');
		$service->title_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_eng']);
		$service->title_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_nep']);
		$service->description_eng = str_replace( array( '\'','&lt;'), '-',$request['description_eng']);
        $service->description_nep = str_replace( array( '\'','&lt;'), '-',$request['description_nep']);
        $service->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_eng']));
        $service->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_nep']));
        $service->image = $this->saveImage->saveImage($request);
        $service->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $service->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);

        $service->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $service->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $service->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $service->save();
    }

    public function updateService($request)
    {
    	$this->validation->validateTitleEng($request);
    	$this->validation->validateTitleNep($request);
        $this->validation->validateDescriptionEng($request);
        $this->validation->validateDescriptionNep($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateStatus($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);

        $service = Service::where('uuid', $request['uuid'])->get()->first();
        $service->title_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_eng']);
		$service->title_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_nep']);
		$service->description_eng = str_replace( array( '\'','&lt;'), '-',$request['description_eng']);
        $service->description_nep = str_replace( array( '\'','&lt;'), '-',$request['description_nep']);
        $service->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_eng']));
        $service->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_nep']));
        if ($request->hasFile('image')) {
            $this->deleteImage->deleteImage($product);
            $product->image = $this->saveImage->saveImage($request);

        }
        $service->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $service->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);

        $service->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $service->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $service->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $service->save();
    }
}