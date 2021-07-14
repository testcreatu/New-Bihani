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
                    <span class="caption-subject bold uppercase"> Contact</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button id="sample_editable_1_new" class="btn sbold green"><a href="{{url('cd-admin/create-contact')}}" style="text-decoration: none; color: white;">Add New <i class="fa fa-plus"></i></a> 
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
                            <th> Address </th>
                            <th> Phone Number </th>
                            <th> Email </th>
                            <th> Status </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($finalResponse['contacts'] as $contact)
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> {{$contact['address_eng']}} </td>
                            <td> {{$contact['number_eng']}} </td>
                            <td> {{$contact['email']}} </td>
                            <td>
                                <div class="btn-group">
                                    @if($contact['status'] ==1)
                                    <button type="button" class="btn green">Active</button>
                                    @else
                                    <button type="button" class="btn red">Inactive</button>
                                    @endif
                                    <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            @if($contact->status == 1)
                                            <a href="{{url('cd-admin/editstatus/'.$finalResponse['model'].'/'.$contact['uuid'])}}"> Inactive </a>
                                            @else
                                            <a href="{{url('cd-admin/editstatus/'.$finalResponse['model'].'/'.$contact['uuid'])}}"> Active </a>
                                            @endif
                                        </li>
                                        
                                    </ul>
                                </div>
                            </td>
                            <td>
                                    <button class="btn btn-xs green"><a href="{{url('cd-admin/edit-contact/'.$contact['uuid'])}}" style="color: white; text-decoration: none;"><i class="fa fa-edit"></i>Edit</a></button>

                                    <button class="btn btn-xs blue"><a style="color: white; text-decoration: none;" data-toggle="modal" href="#{{$contact['uuid']}}"><i class="fa fa-eye"></i>View</a></button>
                                    
                                    <button class="btn btn-xs red"><a onclick="return confirm('Are you sure?')" href="{{url('cd-admin/delete-contact/'.$contact['uuid'])}}" style="color: white; text-decoration: none;"><i class="fa fa-trash"></i>Delete</a></button>
                                    
                                
                            </td>
                        </tr>
                        <div class="modal fade" id="{{$contact['uuid']}}" tabindex="-1" role="basic" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                        <h4 class="modal-title">contact Details</h4>
                                    </div>
                                    <div class="modal-body"> 
                                        <img src="{{url('public/images/'.$contact['image'])}}" height="100" width="100"><br><br>
                                        English address: {{$contact['address_eng']}}<br><br>
                                        Nepali address: {{$contact['address_nep']}}<br><br>
                                        English number: {{$contact['number_eng']}}<br><br>
                                        Nepali number: {{$contact['number_nep']}}<br><br>
                                        Email: {{$contact['email']}}<br><br>
                                        Website: <a href="{{$contact['website']}}">{{$contact['website']}}</a><br><br>
                                        Facebook Link: <a href="{{$contact['fb_link']}}">{{$contact['fb_link']}}</a><br><br>
                                        Twitter Link: <a href="{{$contact['twitter_link']}}">{{$contact['website']}}</a><br><br>
                                        Instagram Link: <a href="{{$contact['insta_link']}}">{{$contact['insta_link']}}</a><br><br>
                                        Pinterest Link: <a href="{{$contact['pinterest_link']}}">{{$contact['pinterest_link']}}</a><br><br>
                                        Google Link: <a href="{{$contact['google_link']}}">{{$contact['google_link']}}</a><br><br>
                                        


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