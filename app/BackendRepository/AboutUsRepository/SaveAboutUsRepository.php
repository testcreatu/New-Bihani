<?php

namespace App\BackendRepository\AboutUsRepository;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Aboutus;
use Illuminate\Support\Str;
use App\BackendRepository\ImageRepository\SaveImageRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\BackendRepository\ValidateRepository\ValidationRepository;

class SaveAboutUsRepository extends Controller
{
	protected $saveImage = null;
    protected $deleteImage = null;
    protected $validation = null;
    
    
    public function __construct(SaveImageRepository $saveImage, DeleteImageRepository $deleteImage, ValidationRepository $validation)
    {
        $this->saveImage = $saveImage;
        $this->deleteImage = $deleteImage;
        $this->validation = $validation;
    }

	public function saveAbout($request)
	{

        $this->validation->validateTitleEng($request);
        $this->validation->validateTitleNep($request);
        $this->validation->validateDescriptionEng($request);
        $this->validation->validateDescriptionNep($request);
        $this->validation->validateWhyBihani($request);
        $this->validation->validateImage($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);


		$about = new Aboutus;
		$about->title_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_eng']);
		$about->title_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_nep']);
        $about->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_eng']));
        $about->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_nep']));
        $about->description_eng = str_replace( array( '\'','&lt;'), '-',$request['description_eng']);
        $about->description_nep = str_replace( array( '\'','&lt;'), '-',$request['description_nep']);
        $about->why_bihani = str_replace( array( '\'','&lt;'), '-',$request['why_bihani']);
        $about->image = $this->saveImage->saveImage($request);
        $about->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $about->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $about->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $about->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $about->save();
	}

    public function updateAbout($request, $id)
    {

        $this->validation->validateTitleEng($request);
        $this->validation->validateTitleNep($request);
        $this->validation->validateDescriptionEng($request);
        $this->validation->validateDescriptionNep($request);
        $this->validation->validateWhyBihani($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);


        $about = Aboutus::where('id', $id)->get()->first();
        $about->title_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_eng']);
        $about->title_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_nep']);
        $about->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_eng']));
        $about->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['title_nep']));
        $about->description_eng = str_replace( array( '\'','&lt;'), '-',$request['description_eng']);
        $about->description_nep = str_replace( array( '\'','&lt;'), '-',$request['description_nep']);
        $about->why_bihani = str_replace( array( '\'','&lt;'), '-',$request['why_bihani']);
        
        if ($request->hasFile('image')) {
            $this->deleteImage->deleteImage($about);
            $about->image = $this->saveImage->saveImage($request);

        }
        $about->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $about->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $about->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $about->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $about->save();
    }
}