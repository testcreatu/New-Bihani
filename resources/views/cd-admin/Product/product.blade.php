@extends('cd-admin.admin-master')

@section('content')

@if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
@if(Session::has('msg'))
<p class="alert alert-danger">{{ Session::get('msg') }}</p>
@endif

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Product</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button id="sample_editable_1_new" class="btn sbold green"><a href="{{url('cd-admin/create-product')}}" style="text-decoration: none; color: white;">Add New <i class="fa fa-plus"></i></a> 
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                    <span></span>
                                </label>
                            </th>
                            <th> Name </th>
                            <th> Vendor Name  </th>
                            <th> Price </th>
                            <th> Status </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($finalResponse['products'] as $product)
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> {{$product['name_eng']}} </td>
                            <td> {{$product['vendor_name_eng']}} </td>
                            <td> {{$product['price_eng']}} </td>
                            <td>
                                <div class="btn-group">
                                    @if($product['status'] ==1)
                                    <button type="button" class="btn green">Active</button>
                                    @else
                                    <button type="button" class="btn red">Inactive</button>
                                    @endif
                                    <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            @if($product->status == 1)
                                            <a href="{{url('cd-admin/editstatus/'.$finalResponse['model'].'/'.$product['uuid'])}}"> Inactive </a>
                                            @else
                                            <a href="{{url('cd-admin/editstatus/'.$finalResponse['model'].'/'.$product['uuid'])}}"> Active </a>
                                            @endif
                                        </li>
                                        
                                    </ul>
                                </div>
                            </td>
                            <td>
                                    <button class="btn btn-xs green"><a href="{{url('cd-admin/edit-product/'.$product['slug_eng'].'?token='.$product['uuid'])}}" style="color: white; text-decoration: none;"><i class="fa fa-edit"></i>Edit</a></button>

                                    <button class="btn btn-xs blue"><a style="color: white; text-decoration: none;" data-toggle="modal" href="#{{$product['uuid']}}"><i class="fa fa-eye"></i>View</a></button>
                                    
                                    <button class="btn btn-xs red"><a onclick="return confirm('Are you sure?')" href="{{url('cd-admin/delete-product/'.$product['slug_eng'].'?token='.$product['uuid'])}}" style="color: white; text-decoration: none;"><i class="fa fa-trash"></i>Delete</a></button>
                                    
                                
                            </td>
                        </tr>
                        <div class="modal fade" id="{{$product['uuid']}}" tabindex="-1" role="basic" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                        <h4 class="modal-title">Product Details</h4>
                                    </div>
                                    <div class="modal-body"> 
                                        <img src="{{url('public/images/'.$product['image'])}}" height="100" width="100"><br><br>
                                        English Name: {{$product['name_eng']}}<br><br>
                                        Nepali Name: {{$product['name_nep']}}<br><br>
                                        Vendor English Name: {{$product['vendor_name_eng']}}<br><br>
                                        Vendor Nepali Name: {{$product['vendor_name_nep']}}<br><br>
                                        English Price: {{$product['price_eng']}}<br><br>
                                        Nepali Price: {{$product['price_nep']}}<br><br>
                                        English Description: {{$product['description_eng']}}<br><br>
                                        Nepali Description: {{$product['description_nep']}}<br><br>
                                        Link: <a href="{{$product['link']}}">{{$product['link']}}</a><br><br>
                                        


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        @endforeach
                        
                    </tbody>
                </table>
                
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>

@endsection