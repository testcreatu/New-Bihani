@extends('cd-admin.admin-master')

@section('content')

<div class="col-md-12 ">
	<div class="portlet light bordered">
	    <div class="portlet-title">
	        <div class="caption">
	            <i class="icon-settings font-dark"></i>
	            <span class="caption-subject font-dark sbold uppercase">Edit Contact</span>
	        </div>
	    </div>
	    <div class="portlet-body form">
	        <form class="form-horizontal" role="form" action="{{url('cd-admin/update-contact/'.$contact['uuid'])}}" method="post" enctype="multipart/form-data">
	        	@csrf
	            <div class="form-body">
	            	@if(Session::has('msg'))
						<p class="alert alert-danger">{{ Session::get('msg') }}</p>
					@endif
	                <div class="form-group">
	                    <label class="col-md-3 control-label">English Address</label>
	                    <div class="col-md-6">
	                        <input type="text" name="address_eng" class="form-control" placeholder="Enter English Address" value="{{$contact['address_eng']}}">
	                        <div style="color: red;">{{$errors->first('address_eng')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Nepali Address</label>
	                    <div class="col-md-6">
	                        <input type="text" name="address_nep" class="form-control" placeholder="Enter Nepali Address" value="{{$contact['address_nep']}}">
	                        <div style="color: red;">{{$errors->first('address_nep')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">English Number</label>
	                    <div class="col-md-6">
	                        <input type="number" name="number_eng" class="form-control" placeholder="Enter English Number" value="{{$contact['number_eng']}}">
	                        <div style="color: red;">{{$errors->first('number_eng')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Nepali Number</label>
	                    <div class="col-md-6">
	                        <input type="number" name="number_nep" class="form-control" placeholder="Enter Nepali Number" value="{{$contact['number_nep']}}">
	                        <div style="color: red;">{{$errors->first('number_nep')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Image</label>
	                    <div class="col-md-6">
	                        <input type="file" name="image" class="form-control">
	                        <div style="color: red;">{{$errors->first('image')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Alt_image</label>
	                    <div class="col-md-6">
	                        <input type="text" name="alt_image" class="form-control" placeholder="Enter image name" value="{{$contact['alt_image']}}">
	                        <div style="color: red;">{{$errors->first('alt_image')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Website</label>
	                    <div class="col-md-6">
	                        <input type="url" name="website" class="form-control" placeholder="Enter Website" value="{{$contact['website']}}">
	                        <div style="color: red;">{{$errors->first('website')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Email</label>
	                    <div class="col-md-6">
	                        <input type="text" name="email" class="form-control" placeholder="Enter Email" value="{{$contact['email']}}">
	                        <div style="color: red;">{{$errors->first('email')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Facebook Link</label>
	                    <div class="col-md-6">
	                        <input type="url" name="fb_link" class="form-control" placeholder="Enter Facebook Link" value="{{$contact['fb_link']}}">
	                        <div style="color: red;">{{$errors->first('fb_link')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Twitter Link</label>
	                    <div class="col-md-6">
	                        <input type="url" name="twitter_link" class="form-control" placeholder="Enter Twitter Link" value="{{$contact['twitter_link']}}">
	                        <div style="color: red;">{{$errors->first('twitter_link')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Instagram Link</label>
	                    <div class="col-md-6">
	                        <input type="url" name="insta_link" class="form-control" placeholder="Enter Instagram Link" value="{{$contact['insta_link']}}">
	                        <div style="color: red;">{{$errors->first('insta_link')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Pinterest Link</label>
	                    <div class="col-md-6">
	                        <input type="url" name="pinterest_link" class="form-control" placeholder="Enter Pinterest Link" value="{{$contact['pinterest_link']}}">
	                        <div style="color: red;">{{$errors->first('pinterest_link')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Google Link</label>
	                    <div class="col-md-6">
	                        <input type="url" name="google_link" class="form-control" placeholder="Enter Google Link" value="{{$contact['google_link']}}">
	                        <div style="color: red;">{{$errors->first('google_link')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Status</label>
	                    <div class="col-md-6">
	                		<input type="radio" id="male" name="status" value="1" <?php if ($contact['status'] == '1') {echo "checked";} ?>>Active
	                		<input type="radio" id="male" name="status" value="0" <?php if ($contact['status'] == '0') {echo "checked";} ?>>Inactive
	                        <div style="color: red;">{{$errors->first('status')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Seo Title</label>
	                    <div class="col-md-6">
	                        <input type="text" name="seo_title" class="form-control" placeholder="Enter SEO Title" value="{{$contact['seo_title']}}">
	                        <div style="color: red;">{{$errors->first('seo_title')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Seo Keyword</label>
	                    <div class="col-md-6">
	                        <input type="text" name="seo_keyword" class="form-control" placeholder="Enter SEO keyword" value="{{$contact['seo_keyword']}}">
	                        <div style="color: red;">{{$errors->first('seo_keyword')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">SEO Description</label>
	                    <div class="col-md-6">
	                        <textarea name="seo_description" class="form-control" placeholder="Enter SEO Description">{{$contact['seo_description']}}</textarea>
	                        <div style="color: red;">{{$errors->first('seo_description')}}</div>
	                    </div>
	                </div>
	            </div>


	            <div class="form-actions">
	                <div class="row">
	                    <div class="col-md-offset-3 col-md-9">
	                        <button type="submit" class="btn green">Submit</button>
	                        <button type="button" class="btn default"><a href="{{url('cd-admin/contact')}}" style="text-decoration: none; color: white;">Cancel</a></button>
	                    </div>
	                </div>
	            </div>
	        </form>
	    </div>
	</div>
</div>

@endsection