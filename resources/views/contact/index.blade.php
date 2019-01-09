@extends('layouts.app')
@section('content')
    <div class="container container-boxes">
            <div id="fh5co-contact-section">
                <div class="container py-5 mb-5">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Contact Info.</h3>
                            <ul class="contact-info" style="list-style:none;">
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i></i> Camias Extension Street, General Santos City, South Cotabato</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> </i> +63(83)5522418</li>
                                <li><i class="sl-icon-envelope-open"></i><a href="#"> niagensanarea@gmail.com</a></li>
                                <div class="">
                                    <h3>Follow Us</h3>
                                    <ul class="fh5co-social" style="list-style:none;">
                                        <li><a href="https://web.facebook.com/National-Irrigation-Administration-Region-12-1851407228266699/?modal=admin_todo_tour&ref=admin_to_do_step_controller"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                        <div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <input name="cntName" class="form-control" type="text" value="{{Auth::user()->name}}" readonly required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="cntEmail" class="form-control" value="{{Auth::user()->email}}" type="text" readonly required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="cntPhoneNumber" class="form-control" placeholder="Phone Number" type="text" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                                <select name="cntDepartment"class="form-control">
                                                        @foreach($roles as $role)
                                                        @if($role->name !='Admin')
                                                        @if($role->name !='Client')
                                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                                        @endif
                                                        @endif
                                                        @endforeach
                                                </select>
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <select name="cntBarangay" class="form-control">
                                                @foreach($barangays as $barangay)
                                                    <option>{{$barangay->b_name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="cntMessage" class="form-control" id="" cols="30" rows="7" placeholder="Message" required ></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input value="Send Message" name="btnSubmit" class="btn btn-primary" type="submit" required />
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection