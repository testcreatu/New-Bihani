<?php

namespace App\BackendRepository\ValidateRepository;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ValidationRepository extends Controller
{
	public function validateTitleEng($request)
	{
		$request->validate([
			'title_eng' => 'required',
		]);
	}
	public function validateTitleNep($request)
	{
		$request->validate([
			'title_nep' => 'required',
		]);
	}

	public function validateNameEng($request)
	{
		$request->validate([
			'name_eng' => 'required',
		]);
	}

	public function validateWhyBihani($request)
	{
		$request->validate([
			'why_bihani' => 'required',
		]);
	}

	public function validateNameNep($request)
	{
		$request->validate([
			'name_nep' => 'required',
		]);
	}

	public function validateAddressEng($request)
	{
		$request->validate([
			'address_eng' => 'required',
		]);
	}

	public function validateAddressNep($request)
	{
		$request->validate([
			'address_nep' => 'required',
		]);
	}

	public function validateDiscount($request)
	{
		$request->validate([
			'discount' => 'required',
		]);
	}

	public function validateDescriptionEng($request)
	{
		$request->validate([
			'description_eng' => 'required',
		]);
	}
	public function validateDescriptionNep($request)
	{
		$request->validate([
			'description_nep' => 'required',
		]);
	}
	public function validateImage($request)
	{
		$request->validate([
			'image' => 'required',
		]);
	}
	public function validateAltImage($request)
	{
		$request->validate([
			'alt_image' => 'required',
		]);
	}
	public function validateSeoTitle($request)
	{
		$request->validate([
			'seo_title' => 'required',
		]);
	}
	public function validateSeoKeyword($request)
	{
		$request->validate([
			'seo_keyword' => 'required',
		]);
	}
	public function validateSeoDescription($request)
	{
		$request->validate([
			'seo_description' => 'required',
		]);
	}
	public function validateVendorNameEng($request)
	{
		$request->validate([
			'vendor_name_eng' => 'required',
		]);
	}
	public function validateVendorNameNep($request)
	{
		$request->validate([
			'vendor_name_nep' => 'required',
		]);
	}
	public function validatePriceEng($request)
	{
		$request->validate([
			'price_eng' => 'required',
		]);
	}
	public function validatePriceNep($request)
	{
		$request->validate([
			'price_nep' => 'required',
		]);
	}
	public function validateLink($request)
	{
		$request->validate([
			'link' => 'required',
		]);
	}
	public function validateDate($request)
	{
		$request->validate([
			'date' => 'required',
		]);
	}
	public function validateStatus($request)
	{
		$request->validate([
			'status' => 'required',
		]);
	}
	public function validateNumberEng($request)
	{
		$request->validate([
			'number_eng' => 'required',
		]);
	}
	public function validateNumberNep($request)
	{
		$request->validate([
			'number_nep' => 'required',
		]);
	}
	public function validateWebsite($request)
	{
		$request->validate([
			'website' => 'url',
		]);
	}
	public function validateFb($request)
	{
		$request->validate([
			'fb_link' => 'url',
		]);
	}
	public function validateTwitter($request)
	{
		$request->validate([
			'twitter_link' => 'url',
		]);
	}
	public function validateInsta($request)
	{
		$request->validate([
			'insta_link' => 'url',
		]);
	}
	public function validatePinterest($request)
	{
		$request->validate([
			'pinterest_link' => 'url',
		]);
	}
	public function validateGoogle($request)
	{
		$request->validate([
			'google_link' => 'url',
		]);
	}
	public function validateEmail($request)
	{
		$request->validate([
			'email' => 'required|email',
		]);
	}
	public function validateDesignationEng($request)
	{
		$request->validate([
			'designation_eng' => 'required',
		]);
	}
	public function validateDesignationNep($request)
	{
		$request->validate([
			'designation_nep' => 'required',
		]);
	}
	public function validateSkillEng($request)
	{
		$request->validate([
			'skill_eng' => 'required',
		]);
	}
	public function validateSkillNep($request)
	{
		$request->validate([
			'skill_nep' => 'required',
		]);
	}
	



}