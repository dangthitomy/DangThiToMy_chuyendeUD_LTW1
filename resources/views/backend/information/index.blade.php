@extends('layouts.admin')
@section('title', 'Thông Tin Quản Trị')
<link rel="stylesheet" href="{{ asset('css/admin.css')}}">

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Thông Tin Quản Trị</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Trang Chủ</a></li>
                    <li class="breadcrumb-item active">Thông Tin Quản Trị</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Trang Thông Tin Quản Trị</h3>
        </div>
        <div class="card-body">
            <h4>Giới Thiệu</h4>
            <p>Chào mừng bạn đến với trang thông tin quản trị của hệ thống. Tại đây, bạn có thể quản lý các thông tin quan trọng và cập nhật về các hoạt động của hệ thống.</p>
            
            <h4>Chức Năng Quản Trị</h4>
            <p>Trang này cung cấp các chức năng quản trị như:</p>
            <ul>
                <li>Quản lý người dùng</li>
                <li>Quản lý nội dung</li>
                <li>Quản lý sản phẩm</li>
                <li>Thống kê và báo cáo</li>
            </ul>
            
            <h4>Hướng Dẫn Sử Dụng</h4>
            <p>Để sử dụng các chức năng quản trị, bạn có thể truy cập vào các mục tương ứng trong menu bên trái. Mỗi mục sẽ có các hướng dẫn chi tiết về cách sử dụng.</p>

            <h4>Liên Hệ Hỗ Trợ</h4>
            <p>Nếu bạn cần hỗ trợ, vui lòng liên hệ với bộ phận kỹ thuật:</p>
            <ul>
                <li>Email: support@company.com</li>
                <li>Điện thoại: 0123-456-789</li>
            </ul>
        </div>
    </div>
</section>
@endsection
