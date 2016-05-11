@extends('layout.base')
@section('title')
    Thêm mới nhân viên
@endsection

@section('jsandcss')
    <script type="text/javascript" src="{{ URL::asset('assets/js/module/staff.js') }}"></script>
@endsection
@section('aside')
    <aside class="col-sm-3">
        <h1>Aside</h1>
    </aside>
@endsection

@section('content')
    <div class="col-sm-9">
        <div id="create-staff">
            <div class="panel panel-default">
                <div class="panel-heading">Thêm mới nhân viên <i class="pull-right">Thêm</i></div>
                <div class="panel-body">
                    {!! Form::open(array('action' => 'StaffController@create', 'method' => 'post', 'id' => 'form-create-staff')) !!}
                    {!! Form::label('Họ tên nhân viên') !!}
                    {!! Form::text('fullname', '', ['class' => 'form-control', 'placeholder' => 'Họ tên nhân viên']) !!}
                    {!! Form::label('Giới tính') !!}
                    {!! Form::radio('gender', Constants::$gender['male']) !!} Nam
                    {!! Form::radio('gender', Constants::$gender['female']) !!} Nữ
                    {!! Form::radio('gender', Constants::$gender['other']) !!} Khác
                    <label id="gender-error" class="error" for="gender"></label>
                    {!! Form::label('Số điện thoại') !!}
                    {!! Form::text('mobile', '', ['class' => 'form-control', 'type' => 'tel']) !!}
                    {!! Form::label('Địa chỉ') !!}
                    {!! Form::text('location', '', ['class' => 'form-control']) !!}
                    {!! Form::label('Hình ảnh') !!}
                    {!! Form::file('picture', '', ['class' => 'form-control add-image']) !!}
                    {!! Form::label('Lương') !!}
                    {!! Form::text('salary', '', ['class' => 'form-control']) !!}
                    {!! Form::label('Phòng ban') !!}
                    {!! Form::select('department', [],'', ['class' => 'form-control'] ) !!}
                    {!! Form::submit('Thên nhân viên', ['class' => 'btn btn-success add-staff']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
@endsection



