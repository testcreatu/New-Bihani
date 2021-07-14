<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BackendRepository\ContactRepository\SaveContactRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\Contact;

class ContactController extends Controller
{
	protected $saveContact = null;
    protected $deleteImage = null;

	public function __construct(SaveContactRepository $saveContact, DeleteImageRepository $deleteImage)
	{
        $this->saveContact = $saveContact;
		$this->deleteImage = $deleteImage;

	}

    public function create()
    {
    	return view('cd-admin.Contact.createContact');
    }

    public function save(Request $request)
    {
        if (strlen($request['number_eng'])==10 and strlen($request['number_nep'])==10) 
        {
        	$this->saveContact->saveContact($request);
        	return redirect('cd-admin/contact')->with('message','Contact Added Successfully');
        }
        else
        {
            return redirect()->back()->with('msg','Invalid number');
        }
    }

    public function view()
    {
    	$finalResponse = [];
    	$contacts = Contact::all();
    	$model = 'Contact';
    	$finalResponse['contacts'] = $contacts;
    	$finalResponse['model'] = $model;
    	return view('cd-admin.Contact.contact', compact('finalResponse'));
    }

    public function edit($uuid)
    {
        $contact = Contact::where('uuid', $uuid)->get()->first();
        return view('cd-admin.Contact.editContact', compact('contact'));
    }

    public function update(Request $request, $uuid)
    {
        if (strlen($request['number_eng'])==10 and strlen($request['number_nep'])==10) 
        {
            $this->saveContact->updateContact($request, $uuid);
            return redirect('cd-admin/contact')->with('message','Contact Updated Successfully');
        }
        else
        {
            return redirect()->back()->with('msg','Invalid number');
        }
    }

    public function delete($uuid)
    {
        $contact = Contact::where('uuid', $uuid)->get()->first();
        $this->deleteImage->deleteImage($contact);
        $contact->delete();
        return redirect('cd-admin/contact')->with('msg','Contact Deleted Successfully');

    }
}

