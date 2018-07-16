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
                          <th>Mã đơn hàng</th>
                        <th>Tên khách hàng - SĐT</th>
                        <th>Ngày đặt</th>
                        <th>Sản phẩm (Số lượng)</th>
                        <th>Tổng tiền(chưa giảm)</th>
                        <th>Tổng tiền thanh toán</th>
                        <th>Note</th>
                        <th>Tuỳ chọn</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($bills as $b)
                      <tr>
                      <td>DH000{{$b->id}}</td>
                        <td>
                            {{$b->customer->name}}
                            <br>
                            {{$b->customer->phone}}
                        </td>
                        <td>{{date('d-m-Y',strtotime($b->date_order))}}</td>
                        <td>
                            @foreach($b->billDetail as $detail)
                            <li>{{$detail->product->name}} <b>({{$detail->quantity}})</b></li>
                            @endforeach
                        </td>
                        <td>{{number_format($b->total)}}</td>
                        <td>{{number_format($b->promt_price)}}</td>
                        <td>{{$b->note}}</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Đã giao</button>
                            <button class="btn btn-default btn-sm">Huỷ</button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </section>
</div>
@endsection