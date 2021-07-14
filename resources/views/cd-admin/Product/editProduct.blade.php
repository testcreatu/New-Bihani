@extends('cd-admin.admin-master')

@section('content')

<div class="col-md-12 ">
	<div class="portlet light bordered">
	    <div class="portlet-title">
	        <div class="caption">
	            <i class="icon-settings font-dark"></i>
	            <span class="caption-subject font-dark sbold uppercase">Edit product</span>
	        </div>
	    </div>
	    <div class="portlet-body form">
	        <form class="form-horizontal" role="form" action="{{url('cd-admin/update-product/'.$product['slug_eng'].'?token='.$product['uuid'])}}" method="post" enctype="multipart/form-data">
	        	@csrf
	            <div class="form-body">
	                <div class="form-group">
	                    <label class="col-md-3 control-label">English Name</label>
	                    <div class="col-md-6">
	                        <input type="text" name="name_eng" class="form-control" placeholder="Enter English Name" value="{{$product['name_eng']}}">
	                        <div style="color: red;">{{$errors->first('name_eng')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Nepali Name</label>
	                    <div class="col-md-6">
	                        <input type="text" name="name_nep" class="form-control" placeholder="Enter Nepali Name" value="{{$product['name_nep']}}">
	                        <div style="color: red;">{{$errors->first('name_nep')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">English Product Description</label>
	                    <div class="col-md-6">
	                        <textarea name="description_eng" class="form-control" placeholder="Enter product description in english">{{$product['description_eng']}}</textarea>
	                        <div style="color: red;">{{$errors->first('description_eng')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Nepali Product Description</label>
	                    <div class="col-md-6">
	                        <textarea name="description_nep" class="form-control" placeholder="Enter product description in nepali">{{$product['description_nep']}}</textarea>
	                        <div style="color: red;">{{$errors->first('description_nep')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">English Vendor Name</label>
	                    <div class="col-md-6">
	                        <input type="text" name="vendor_name_eng" class="form-control" placeholder="Enter vnedor name in english" value="{{$product['vendor_name_eng']}}">
	                        <div style="color: red;">{{$errors->first('vendor_name_eng')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Nepali Vendor Name</label>
	                    <div class="col-md-6">
	                        <input type="text" name="vendor_name_nep" class="form-control" placeholder="Enter vendor name in nepali" value="{{$product['vendor_name_nep']}}">
	                        <div style="color: red;">{{$errors->first('vendor_name_nep')}}</div>
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
	                        <input type="text" name="alt_image" class="form-control" placeholder="Enter image name" value="{{$product['alt_image']}}">
	                        <div style="color: red;">{{$errors->first('alt_image')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">English Price</label>
	                    <div class="col-md-6">
	                        <input type="number" name="price_eng" class="form-control" placeholder="Enter english price" value="{{$product['price_eng']}}">
	                        <div style="color: red;">{{$errors->first('price_eng')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Nepali Price</label>
	                    <div class="col-md-6">
	                        <input type="number" name="price_nep" class="form-control" placeholder="Enter nepali price" value="{{$product['price_nep']}}">
	                        <div style="color: red;">{{$errors->first('price_nep')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Link</label>
	                    <div class="col-md-6">
	                        <input type="text" name="link" class="form-control" placeholder="Enter link" value="{{$product['link']}}">
	                        <div style="color: red;">{{$errors->first('link')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Status</label>
	                    <div class="col-md-6">
	                		<input type="radio" id="male" name="status" value="1" <?php if ($product['status'] == '1') {echo "checked";} ?>>Active
	                		<input type="radio" id="male" name="status" value="0" <?php if ($product['status'] == '0') {echo "checked";} ?>>Inactive
	                        <div style="color: red;">{{$errors->first('status')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Seo Title</label>
	                    <div class="col-md-6">
	                        <input type="text" name="seo_title" class="form-control" placeholder="Enter SEO Title" value="{{$product['seo_title']}}">
	                        <div style="color: red;">{{$errors->first('seo_title')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Seo Keyword</label>
	                    <div class="col-md-6">
	                        <input type="text" name="seo_keyword" class="form-control" placeholder="Enter SEO keyword" value="{{$product['seo_keyword']}}">
	                        <div style="color: red;">{{$errors->first('seo_keyword')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">SEO Description</label>
	                    <div class="col-md-6">
	                        <textarea name="seo_description" class="form-control" placeholder="Enter SEO Description">{{$product['seo_description']}}</textarea>
	                        <div style="color: red;">{{$errors->first('seo_description')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <div class="col-md-6">
	                        <input type="hidden" name="uuid" class="form-control" value="{{$product['uuid']}}">
	                    </div>
	                </div>
	            </div>


	            <div class="form-actions">
	                <div class="row">
	                    <div class="col-md-offset-3 col-md-9">
	                        <button type="submit" class="btn green">Submit</button>
	                        <button type="button" class="btn default"><a href="{{url('cd-admin/product')}}" style="text-decoration: none; color: white;">Cancel</a></button>
	                    </div>
	                </div>
	            </div>
	        </form>
	    </div>
	</div>
</div>

@endsection