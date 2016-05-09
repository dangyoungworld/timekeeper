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
                <form action="" method="post">
                    <input type="text" name="fullname" class="form-control">
                </form>
            </div>
        </div>
    </div>
@endsection



