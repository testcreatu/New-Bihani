<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BackendRepository\ServiceRepository\SaveServiceRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\Service;

class ServiceController extends Controller
{
	protected $saveService = null;
	protected $deleteImage = null;


	public function __construct(SaveServiceRepository $saveService, DeleteImageRepository $deleteImage)
	{
		$this->saveService = $saveService;
		$this->deleteImage = $deleteImage;
	}

    public function create()
    {
    	return view('cd-admin.Service.createService');
    }

    public function save(Request $request)
    {
    	$this->saveService->saveService($request);
    	return redirect('cd-admin/service')->with('message','Service Added Successfully');
    }

    public function view()
    {
    	$finalResponse = [];
    	$model = 'Service';
    	$services = Service::all();
    	$finalResponse['model'] = $model;
    	$finalResponse['services'] = $services;
    	return view('cd-admin.Service.service', compact('finalResponse'));

    }

    public function edit(Request $request, $slug)
    {
    	$service = Service::where('uuid', $request['token'])->get()->first();
    	return view('cd-admin.Service.editService', compact('service'));
    }

    public function update(Request $request, $slug)
    {
    	$this->saveService->updateService($request);
    	return redirect('cd-admin/service')->with('message','Service Updated Successfully');
    }

    public function delete(Request $request)
    {
    	$service = Service::where('uuid', $request['token'])->get()->first();
        $this->deleteImage->deleteImage($service);
        $service->delete();
        return redirect('cd-admin/service')->with('msg','Service Deleted Successfully');
    }
}
