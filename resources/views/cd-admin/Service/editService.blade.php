@extends('cd-admin.admin-master')

@section('content')

<div class="col-md-12 ">
	<div class="portlet light bordered">
	    <div class="portlet-title">
	        <div class="caption">
	            <i class="icon-settings font-dark"></i>
	            <span class="caption-subject font-dark sbold uppercase">Edit service</span>
	        </div>
	    </div>
	    <div class="portlet-body form">
	        <form class="form-horizontal" role="form" action="{{url('cd-admin/update-service/'.$service['slug_eng'].'?token='.$service['uuid'])}}" method="post" enctype="multipart/form-data">
	        	@csrf
	            <div class="form-body">
	                <div class="form-group">
	                    <label class="col-md-3 control-label">English Title</label>
	                    <div class="col-md-6">
	                        <input type="text" name="title_eng" class="form-control" value="{{$service['title_eng']}}">
	                        <div style="color: red;">{{$errors->first('title_eng')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Nepali Name</label>
	                    <div class="col-md-6">
	                        <input type="text" name="title_nep" class="form-control" value="{{$service['title_nep']}}">
	                        <div style="color: red;">{{$errors->first('title_nep')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">English service Description</label>
	                    <div class="col-md-6">
	                        <textarea name="description_eng" class="form-control" placeholder="Enter service description in english">{{$service['description_eng']}}</textarea>
	                        <div style="color: red;">{{$errors->first('description_eng')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Nepali service Description</label>
	                    <div class="col-md-6">
	                        <textarea name="description_nep" class="form-control" placeholder="Enter service description in nepali">{{$service['description_nep']}}</textarea>
	                        <div style="color: red;">{{$errors->first('description_nep')}}</div>
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
	                    <label class="col-md-3 control-label">Image_name</label>
	                    <div class="col-md-6">
	                        <input type="text" name="alt_image" class="form-control" placeholder="Enter image name" value="{{$service['alt_image']}}">
	                        <div style="color: red;">{{$errors->first('alt_image')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Status</label>
	                    <div class="col-md-6">
	                		<input type="radio" id="male" name="status" value="1" <?php if ($service['status'] == '1') {echo "checked";} ?>>Active
	                		<input type="radio" id="male" name="status" value="0" <?php if ($service['status'] == '0') {echo "checked";} ?>>Inactive
	                        <div style="color: red;">{{$errors->first('status')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Seo Title</label>
	                    <div class="col-md-6">
	                        <input type="text" name="seo_title" class="form-control" placeholder="Enter SEO Title" value="{{$service['seo_title']}}">
	                        <div style="color: red;">{{$errors->first('seo_title')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Seo Keyword</label>
	                    <div class="col-md-6">
	                        <input type="text" name="seo_keyword" class="form-control" placeholder="Enter SEO keyword" value="{{$service['seo_keyword']}}">
	                        <div style="color: red;">{{$errors->first('seo_keyword')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">SEO Description</label>
	                    <div class="col-md-6">
	                        <textarea name="seo_description" class="form-control" placeholder="Enter SEO Description">{{$service['seo_description']}}</textarea>
	                        <div style="color: red;">{{$errors->first('seo_description')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <div class="col-md-6">
	                        <input type="hidden" name="uuid" class="form-control" value="{{$service['uuid']}}">
	                    </div>
	                </div>
	            </div>


	            <div class="form-actions">
	                <div class="row">
	                    <div class="col-md-offset-3 col-md-9">
	                        <button type="submit" class="btn green">Submit</button>
	                        <button type="button" class="btn default"><a href="{{url('cd-admin/service')}}" style="text-decoration: none; color: white;">Cancel</a></button>
	                    </div>
	                </div>
	            </div>
	        </form>
	    </div>
	</div>
</div>

@endsection