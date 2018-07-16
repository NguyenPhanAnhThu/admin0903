@extends('layout.admin-layout')
@section('title','Trang chủ')
@section('content')
<div class="panel panel-body">
    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Quản lý đơn hàng mới (Đơn hàng đã xác nhận) </b>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Tên khách hàng - SĐT</th>
                        <th>Ngày đặt</th>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền thanh toán</th>
                        <th>Note</th>
                        <th>Đã giao</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>John</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </section>
</div>
@endsection