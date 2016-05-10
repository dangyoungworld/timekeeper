@extends('layout.base')
@section('title')
    Thêm mới nhân viên
@endsection
@section('aside')
    <aside class="col-sm-3">
        <h1>Aside</h1>
    </aside>
@endsection

@section('content')
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm mới nhân viên <i class="pull-right">Thêm</i></div>
            <div class="panel-body">
                {!! Form::open(array('action' => 'StaffController@create', 'method' => 'post')) !!}
                {!! Form::label('Họ tên nhân viên') !!}
                {!! Form::text('fullname', '', ['class' => 'form-control', 'placeholder' => 'Họ tên nhân viên']) !!}
                {!! Form::label('Giới tính') !!}
                {!! Form::radio('gender', Constants::$gender['male']) !!}
                {!! Form::radio('gender', Constants::$gender['female']) !!}
                {!! Form::radio('gender', Constants::$gender['other']) !!}
                {!! Form::label('Số điện thoại') !!}
                {!! Form::text('mobile', '', array('class' => 'form-control')) !!}
                {!! Form::label('Địa chỉ') !!}
                {!! Form::text('location', '', array('class' => 'form-control')) !!}
                {!! Form::label('Hình ảnh') !!}
                {!! Form::text('picture', '', array('class' => 'form-control')) !!}
                {!! Form::label('Lương') !!}
                {!! Form::text('salary', '', array('class' => 'form-control')) !!}
                {!! Form::label('Phòng ban') !!}
                {!! Form::text('department', '', array('class' => 'form-control')) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection



