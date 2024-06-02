@extends('layouts.admin')
@section('title','Trang Chủ')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Trang Chủ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Trang Trắng</li>
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
                        Xin chào, admin! <i class="fas fa-hand-holding-volume"></i>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p>Chào mừng bạn đến với trang quản trị của hệ thống. Trang chủ này cung cấp các tính năng quản trị và thống kê cơ bản.</p>
                <h4 style="border-bottom: 1px solid #000; display: inline-block; width: max-content;">Các Chức Năng Chính: <i class="fas fa-tools"></i></h4>
                <ul>
                    <li>Quản lý người dùng và vai trò </li>
                        <p>Quản lý thông tin người dùng, cấp quyền và vai trò cho họ.</p>
                    <li>Quản lý danh mục và nội dung </li>
                        <p>Tạo và quản lý danh mục, nội dung cho hệ thống.</p>
                    <li>Thống kê hoạt động của hệ thống </li>
                        <p>Xem thống kê, báo cáo về hoạt động của hệ thống.</p>
                </ul>
                <h4 style="border-bottom: 1px solid #000; display: inline-block; width: max-content;">Nhắc Nhở: <i class="fas fa-exclamation-triangle"></i></h4>
                <p>Hãy đảm bảo bạn duy trì bản sao lưu thường xuyên để đảm bảo an toàn dữ liệu.</p>
                <h4 style="border-bottom: 1px solid #000; display: inline-block; width: max-content;">Tính Năng Mới: <i class="fas fa-lightbulb"></i></h4>
                <p>Bạn có thể sử dụng tính năng mới "Thống kê nhanh" để xem tổng quan về hoạt động gần đây của hệ thống.</p>
                <h4 style="border-bottom: 1px solid #000; display: inline-block; width: max-content;">Hỗ Trợ: <i class="fas fa-life-ring"></i></h4>
                <p>Nếu bạn gặp bất kỳ vấn đề nào hoặc cần hỗ trợ, vui lòng liên hệ với bộ phận kỹ thuật của chúng tôi.</p>
                <ul>
                    <li>Email: MOC@gmail.com <i class="fas fa-envelope"></i></li>
                    <li>Điện thoại: 0905 649 073 <i class="fas fa-phone"></i></li>
                </ul>
            </div>
        </div>
    </section>
@endsection
