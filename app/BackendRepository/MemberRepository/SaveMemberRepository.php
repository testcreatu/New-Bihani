<?php

namespace App\BackendRepository\MemberRepository;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Support\Str;
use App\BackendRepository\ImageRepository\SaveImageRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\BackendRepository\ValidateRepository\ValidationRepository;
use App\BackendRepository\UuidRepository\GenerateUuidRepository;

class SaveMemberRepository extends Controller
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

    public function saveMember($request)
	{

        $this->validation->validateNameEng($request);
        $this->validation->validateNameNep($request);
        $this->validation->validateAddressEng($request);
        $this->validation->validateAddressNep($request);
        $this->validation->validateDiscount($request);
        $this->validation->validateImage($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateStatus($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);


		$member = new Member;
		$member->uuid = $this->generateUuid->generateUuid('members');
		$member->name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']);
		$member->name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']);
		$member->address_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['address_eng']);
		$member->address_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['address_nep']);
        $member->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']));
        $member->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']));
        $member->discount = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['discount']);

        $member->image = $this->saveImage->saveImage($request);
        $member->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $member->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);

        $member->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $member->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $member->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $member->save();
	}

    public function updateMember($request)
    {

        $this->validation->validateNameEng($request);
        $this->validation->validateNameNep($request);
        $this->validation->validateAddressEng($request);
        $this->validation->validateAddressNep($request);
        $this->validation->validateDiscount($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateStatus($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);


        $member = Member::where('uuid', $request['uuid'])->get()->first();
        $member->name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']);
        $member->name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']);
        $member->address_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['address_eng']);
        $member->address_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['address_nep']);
        $member->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']));
        $member->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']));
        $member->discount = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['discount']);
        if ($request->hasFile('image')) {
            $this->deleteImage->deleteImage($member);
            $member->image = $this->saveImage->saveImage($request);

        }
        $member->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $member->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);

        $member->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $member->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $member->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $member->save();
    }

}