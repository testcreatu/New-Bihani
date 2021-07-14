<?php

namespace App\BackendRepository\ImportantNumberRepository;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ImportantNumber;
use Illuminate\Support\Str;
use App\BackendRepository\ImageRepository\SaveImageRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\BackendRepository\ValidateRepository\ValidationRepository;
use App\BackendRepository\UuidRepository\GenerateUuidRepository;


class saveImportantNumberRepository extends Controller
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

    public function saveImportantNumber($request)
	{

        $this->validation->validateNameEng($request);
        $this->validation->validateNameNep($request);
        $this->validation->validateImage($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateNumberEng($request);
        $this->validation->validateNumberNep($request);
        $this->validation->validateStatus($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);
        
		$number = new ImportantNumber;
		$number->uuid = $this->generateUuid->generateUuid('important_numbers');
		$number->name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']);
		$number->name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']);
        $number->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']));
        $number->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']));
        $number->number_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['number_eng']);
        $number->number_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['number_nep']);
        $number->image = $this->saveImage->saveImage($request);
        $number->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $number->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);

        $number->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $number->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $number->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $number->save();
	}

	public function updateImportantNumber($request)
	{

        $this->validation->validateNameEng($request);
        $this->validation->validateNameNep($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateNumberEng($request);
        $this->validation->validateNumberNep($request);
        $this->validation->validateStatus($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);

        	
    	$number = ImportantNumber::where('uuid',$request['uuid'])->get()->first();
		$number->name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']);
		$number->name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']);
        $number->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']));
        $number->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']));
        $number->number_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['number_eng']);
        $number->number_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['number_nep']);
        if ($request->hasFile('image'))
        {
            $this->deleteImage->deleteImage($number);
            $number->image = $this->saveImage->saveImage($request);

        }
        $number->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $number->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);

        $number->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $number->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $number->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $number->save();
	}
}