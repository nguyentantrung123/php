@extends('master')
@section('title','Thực đơn')
@section('menu_active')
<ul class="list-unstyled components">
				<p>Chức năng</p>
				
				<li class="">
                    <a href="/home"><i class="fas fa-home"></i><span class="Choose">Trang chủ</span></a>
                </li>
                <li class="">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-chart-pie"></i> <span class="Choose"> Thống kê</span></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                        <a href="/doanhthu"><span class="lst_item">Doanh thu</span></a>
                        </li>
                        <li>
                        <a href="/tkmonan"><span class="lst_item">Món ăn</span></a>
                        </li>
                        
                    </ul>
                </li>
				<li class="active">
                    <a href="/thucdon"><i class="fas fa-soup"></i><span class="Choose">Thực đơn</span></a>
                </li>
                <li>
                    <a href="/loai"><i class="fas fa-bars"></i><span class="Choose">Loại món</span></a>
				</li>
                <li>
                    <a href="/ban"><i class="fas fa-table"></i><span class="Choose">Bàn</span></a>
                </li>
                <li>
                    <a href="/nhanvien"><i class="fas fa-user-friends"></i><span class="Choose">Nhân viên</span></a>
				</li>
			</ul>
@stop

@section('function_name','Thực đơn')


@section('content')

<!-- Thêm nội dung mới tại đây -->
<form action="{{route('mon_an.update',$sp['id'])}}" enctype="multipart/form-data" method="POST">
@method('PATCH')
    @csrf
<div class="form-group">
    <input type="text" class="form-control" hidden="true" value="{{$sp['id']}}">
  </div>
  <div class="form-group">
    <label for="name_food">Tên món ăn</label>
    <input type="text" class="form-control" id="name_food" name="ten" value="{{$sp['TenMon']}}">
  </div>
  <div class="form-group">
    <label for="price">Giá tiền</label>
    <input type="text" class="form-control" id="gia" name="gia" value="{{$sp['Gia']}}">
  </div>
    <div class="form-group">
      <label for="img">Hình ảnh</label>
      <input type="file" class="form-control" name="hinh" value="">
    </div>
    <div class="form-group">
      <input type="text" hidden="true" class="form-control" name="hinh_2" value="{{$sp['HinhAnh']}}">
    </div>
    <div class="form-group">
      <label for="loai">Loại</label>
      <select id="loai" class="form-control" name="loai">
      @foreach($dsloai as $loai)
      @if($loai['id'] == $sp['Loai'])
        <option value="{{$loai['id']}}">{{$loai['TenLoai']}}</option>
      @endif
      @endforeach
      
      @foreach($dsloai as $loai)
      @if($loai['id'] != $sp['Loai'])
        <option value="{{$loai['id']}}">{{$loai['TenLoai']}}</option>
      @endif
      @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="mota">Mô tả: </label> <br>
      <textarea name="mota" id="" cols="120"  rows="10" value="{{$sp['MoTa']}}">{{$sp['MoTa']}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary" onclick="sua()">Save</button> 
</form>
<script>
        function sua(){
            alert("Cập nhật thành công");
        }
</script>
@stop