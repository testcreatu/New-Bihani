<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BackendRepository\AboutUsRepository\SaveAboutUsRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\Aboutus;

class AboutusController extends Controller
{
    protected $saveAbout = null;
	protected $deleteImage = null;

	public function __construct(SaveAboutUsRepository $saveAbout, DeleteImageRepository $deleteImage)
	{
        $this->saveAbout = $saveAbout;
		$this->deleteImage = $deleteImage;
	}

    public function create()
    {
    	return view('cd-admin.AboutUs.createAbout');
    }

    public function save(Request $request)
    {
    	$this->saveAbout->saveAbout($request);
    	return redirect('cd-admin/about')->with('message','About Created Successfully');
    }

    public function view()
    {
        $abouts = Aboutus::all();
        return view('cd-admin.AboutUs.about', compact('abouts'));
    }

    public function edit($id)
    {
        $about = Aboutus::where('id', $id)->get()->first();
        return view('cd-admin.AboutUs.editAbout', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $this->saveAbout->updateAbout($request, $id);
        return redirect('cd-admin/about')->with('message','About Updated Successfully');

    }

    public function delete($id)
    {
        $about = Aboutus::where('id', $id)->get()->first();
        $this->deleteImage->deleteImage($about);
        $about->delete();
        return redirect('cd-admin/about')->with('msg','About Deleted Successfully');
    }
}
