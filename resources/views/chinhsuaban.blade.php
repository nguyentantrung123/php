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

@section('function_name','Bàn')


@section('content')


<!-- Thêm nội dung mới tại đây -->
<form action="{{route('ban.update',$ban['id'])}}" enctype="multipart/form-data" method="POST">
    @method('PATCH')
    @csrf
   
  <div class="form-group">
    <label for="name_food">Tên bàn: </label>
    <input type="text" class="form-control" id="ten" name="ten" value="{{$ban['TenBan']}}">
  </div>
  <div class="form-group">
    <label for="price">Vị trí: </label>
    <input type="text" class="form-control" id="vitri" name="vitri" value="{{$ban['ViTri']}}">
  </div>
  <div class="form-group">
      <label for="hinh">Số người: </label>
      <input type="number" class="form-control" name="songuoi" value="{{$ban['SoNguoi']}}">
    </div>
    <div class="form-group">
      <label for="hinh">Số ghế: </label>
      <input type="number" class="form-control" name="soghe" value="{{$ban['SoGhe']}}">
    </div>

  <button type="submit" class="btn btn-primary" onclick="sua()">Chỉnh sữa</button>
</form>

<script>
        function sua(){
            alert("Chỉnh sữa thành công");
        }
</script>
@stop