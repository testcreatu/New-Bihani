<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BackendRepository\ResourceRepository\SaveResourceRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\Resource;

class ResourceController extends Controller
{
	protected $saveResource = null;

	public function __construct(SaveResourceRepository $saveResource, DeleteImageRepository $deleteImage)
	{
		$this->saveResource = $saveResource;
		$this->deleteImage = $deleteImage;
	}

    public function create()
    {
    	return view('cd-admin.Resource.createResource');
    }

    public function save(Request $request)
    {
    	if (strlen($request['number_eng'])==10 and strlen($request['number_nep'])==10) 
    	{
    		$this->saveResource->saveResource($request);
    		return redirect('cd-admin/resource')->with('message','Resource Added Successfully');
    	}
    	else
    	{
    		return redirect()->back()->with('msg','Invalid number');
    	}
    }

    public function view()
    {
    	$finalResponse = [];
    	$resources = Resource::all();
    	$model = 'Resource';
    	$finalResponse['resources'] = $resources;
    	$finalResponse['model'] = $model;
    	return view('cd-admin.Resource.resource', compact('finalResponse'));
    }

    public function edit(Request $request, $slug)
    {
    	$resource = Resource::where('uuid', $request['token'])->get()->first();
    	return view('cd-admin.Resource.editResource', compact('resource'));
    }

    public function update(Request $request, $slug)
    {
    	if (strlen($request['number_eng'])==10 and strlen($request['number_nep'])==10) 
    	{
    		$this->saveResource->updateResource($request);
    		return redirect('cd-admin/resource')->with('message','Resource Updated Successfully');
    	}
    	else
    	{
    		return redirect()->back()->with('msg','Invalid number');
    	}
    }

    public function delete(Request $request)
    {
    	$resource = Resource::where('uuid', $request['token'])->get()->first();
        $this->deleteImage->deleteImage($resource);
        $resource->delete();
        return redirect('cd-admin/resource')->with('msg','Resource Deleted Successfully');
    }
}
