@extends('layout.base')
@section('title')
    Thêm mới nhân viên
@endsection

@section('aside')
    @include('layout.sidebar')
@endsection

@section('jsandcss')

    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/module/staff.js') }}"></script>
@endsection

@section('title_page')
    <i class=im-screen></i> Dashboard
@endsection

    @section('content')
            <!-- Page start here ( usual with .row ) -->
    <div class=outlet>
        <!-- Start .outlet -->
        <div class=row>
            <!-- Start .row -->
            <div class=col-lg-12>
                <!-- Start col-lg-12 -->
                <div class="panel panel-default toggle">
                    <!-- Start .panel -->
                    <div class=panel-heading>
                        <h3 class=panel-title>Form fields</h3>
                    </div>
                    <div class=panel-body>
                        {!! Form::open(array('action' => 'StaffController@create', 'method' => 'post', 'class' => 'form-horizontal group-border hover-stripped', 'id' => 'form-create-staff')) !!}
                        <div class=form-group>
                            <label class="col-lg-2 control-label">
                                {!! Form::label('Họ tên nhân viên') !!}
                            </label>
                            <div class=col-lg-10>
                                {!! Form::text('fullname', '', ['class' => 'form-control', 'placeholder' => 'Họ tên nhân viên']) !!}
                            </div>
                        </div>
                        <div class=form-group>
                            <label class="col-lg-2 control-label">
                                {!! Form::label('Giới tính') !!}
                            </label>
                            <div class=col-lg-10>
                                @foreach  (Constants::$gender as $gender)
                                    <label class="radio">
                                        <div class="iradio_flat-blue" style="position: relative;">
                                            {!! Form::radio('gender', $gender['key'])  !!}
                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                                        </div>{{ $gender['label']  }}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <div class=form-group>
                            <label class="col-lg-2 control-label">
                                {!! Form::label('Số điện thoại') !!}
                            </label>
                            <div class=col-lg-10>
                                {!! Form::text('mobile', '', ['class' => 'form-control', 'type' => 'tel']) !!}
                            </div>
                        </div>
                        <div class=form-group>
                            <label class="col-lg-2 control-label">
                                {!! Form::label('Địa chỉ') !!}
                            </label>
                            <div class=col-lg-10>
                                {!! Form::text('location', '', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class=form-group>
                            <label class="col-lg-2 control-label">
                                {!! Form::label('Hình ảnh') !!}
                            </label>
                            <div class=col-lg-10>
                                {!! Form::file('picture', '', ['class' => 'form-control add-image']) !!}
                            </div>
                        </div>
                        <div class=form-group>
                            <label class="col-lg-2 control-label">
                                {!! Form::label('Lương') !!}
                            </label>
                            <div class=col-lg-10>
                                {!! Form::text('salary', '', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class=form-group>
                            <label class="col-lg-2 control-label">
                                {!! Form::label('Phòng ban') !!}
                            </label>
                            <div class=col-lg-10>
                                {!! Form::select('department', [],'', ['class' => 'form-control'] ) !!}
                            </div>
                        </div>
                        <div class=form-group>
                            <div class=col-lg-offset-2>
                                {!! Form::submit('Thên nhân viên', ['class' => 'btn btn-default ml15 add-staff']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- End .panel -->
            </div>
            <!-- End col-lg-12 -->
        </div>
        <!-- End .row -->
        <!-- Page End here -->
    </div>
    <!-- End .outlet -->

@endsection




