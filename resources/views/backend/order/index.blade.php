@extends('layouts.admin')
@section('title','QL Đơn Hàng')

@section('content')

        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Lý Đơn Hàng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-12 text-right">
                <a class="btn btn-sm btn-success" href="{{route('admin.product.create')}}">
                  <i class="fas fa-plus"></i> ThêmĐH
                </a>
                <a class="btn btn-sm btn-danger" href="#">
                    <i class="fas fa-trash"></i> Thùng rác
                </a>
            </div>
          </div>
        </div>
        <div class="card-body">
                <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 30px;">#</th>
                        <th>Tên KH</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Ngày tạo đơn</th>
                        <th class="text-center" style="width: 190px;">Chức năng</th>
                        <th class="text-center" style="width: 30px;">ID</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($list as $row)
                        <tr>
                            <td class="text-center">
                                <input type="checkbox" name="checkId[]" id="checkId" value="1">
                            </td>
                            <td>{{$row->delivery_name}}</td>
                            <td>{{$row->delivery_phone}}</td>
                            <td>{{$row->delivery_email}}</td>
                            <td>{{$row->delivery_address}}</td>
                            <td>{{$row->created_at}}</td>
                            <td class="text-center">
                                <a href="{{route("admin.order.status",['id'=>$row->id])}}" class="btn btn-sm btn-success">
                                  <i class="fas fa-toggle-on"></i>
                                </a>
                                <a href="{{route("admin.order.show",['id'=>$row->id])}}" class="btn btn-sm btn-info">
                                  <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{route("admin.order.edit",['id'=>$row->id])}}" class="btn btn-sm btn-primary">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{route("admin.order.delete",['id'=>$row->id])}}" class="btn btn-sm btn-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                            </td>
                            <td class="text-center">{{$row->id}}</td>
                        </tr>
                </tbody>
              @endforeach
            </table>

            </div>
      </div>
    </section>

@endsection