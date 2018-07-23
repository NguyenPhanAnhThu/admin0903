@extends('layout.admin-layout')
@section('title','Cập nhật thông tin sản phẩm '.$product->name)
@section('content')
<div class="panel panel-body">
    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <b>
                Cập nhật thông tin sản phẩm <i>{{$product->name}}</i>
                </b>
            </div>
            <div class="panel-body">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
                @endif
                <div class="row">
                    <form  action="" method="POST">
                        <div class="form-group">
                          <label for="name">Tên sản phẩm:</label>
                          <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Chọn loại:</label>
                            <select name="id_type" class="form-control">
                                <option value="">---Chọn loại---</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="pwd">Đơn giá:</label>
                          <input type="text" class="form-control" name="price" id="pwd">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Đơn giá khuyến mãi:</label>
                            <input type="text" class="form-control" name="promotion_price" id="pwd">
                        </div>
                        <div class="form-group">
                            <label for="name">Khuyến mãi kèm theo:</label>
                            <select name="promotion" class="form-control">
                                <option value="Phiếu mua hàng Samsung trị giá 250.000đ ">Phiếu mua hàng Samsung trị giá 250.000đ </option>
                                <option value="Giảm ngay 1 triệu">Giảm ngay 1 triệu</option>
                                <option value="Giảm 1 triệu cho Apple Watch khi mua kèm iPhone/iPad">Giảm 1 triệu cho Apple Watch khi mua kèm iPhone/iPad</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Thông tin chi tiết:</label>
                            <textarea rows="5" class="form-control" name="detail" id="pwd"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Hình sản phẩm:</label>
                            <input type="file" name="image">
                            <br>
                            <div>
                                <img height="100px" src="admin-master/products/{{$product->image}}" alt="">
                            </div>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="status"> Sản phẩm đặc biệt</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="new"> Sản phẩm mới</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" name="new"> Xoá sản phẩm</label>
                          </div>
                        <button typ
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection