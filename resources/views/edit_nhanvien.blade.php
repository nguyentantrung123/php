@extends('master')
@section('title','Nhân Viên')
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
				<li >
                    <a href="/thucdon"><i class="fas fa-bread-slice"></i></i><span class="Choose">Thực đơn</span></a>
                </li>
                <li>
                    <a href="/ban"><i class="fas fa-table"></i><span class="Choose">Bàn</span></a>
                </li>
                <li class="active">
                    <a href="/nhanvien"><i class="fas fa-user-friends"></i><span class="Choose">Nhân viên</span></a>
				</li>
			</ul>
@stop

@section('function_name','Nhân Viên')


@section('content')

<!-- Thêm nội dung mới tại đây -->
<form action="{{route('nhanvien.update',$nv['id'])}}" enctype="multipart/form-data" method="POST">
@method('PATCH')
    @csrf
<div class="form-group">
    <input type="text" class="form-control" hidden="true" value="{{$nv['id']}}">
  </div>
  <div class="form-group">
    <label for="ten_nv">Tên Nhân Viên</label>
    <input type="text" class="form-control" id="ten_nv" name="ten" value="{{$nv['TenNV']}}">
  </div>
  <div class="form-group">
    <label for="ngaysinh">Ngày Sinh</label>
    <input type="date" class="form-control" id="dt"  name="ngay" value="{{$nv['NgaySinh']}}">
  </div>

    <div class="form-group">
      <label for="gioitinh">Giới Tính</label> <br>
      <select name="gioitinh" id="gioitinh">
        @if($nv['GioiTinh'] == 'Nam')      
          <option value="Nam">{{$nv['GioiTinh']}}</option>
          <option value="Khác">Khác</option>
          <option value="Nữ">Nữ</option>
          @endif


          @if($nv['GioiTinh'] == 'Nữ')      
          <option value="Nữ">{{$nv['GioiTinh']}}</option>
          <option value="Nam">Nam</option>
          <option value="Khác">Khác</option>    
          @endif
          
      </select>
    </div>

    <div class="form-group">
      <label for="taikhoan">Tài Khoản</label> <br>
      <textarea rows="1" cols="50" class="from-control" name="taikhoan" id="taikhoan" value="{{$nv['TaiKhoan']}}">{{$nv['TaiKhoan']}}</textarea>
    </div>

    <div class="form-group">
      <label for="matkhau">Mật Khẩu </label> <br>
      <textarea rows="1" cols="100" name="matkhau" id="matkhau" value="{{$nv['MatKhau']}}" class="from-control">{{$nv['MatKhau']}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary" onclick="sua()">Save</button> 
</form>
<script>
        function sua(){
            alert("Cập nhật thành công");
        }
</script>

<!--<script>
  function mydate(){
    document.getElementById("dt").hidden=false;
    document.getElementById("ndt").hidden=true;

  }

  function mydate1(){
    d = new Date(document.getElementById("dt").value);
    dt = d.getDate();
    mn = d.getMonth();
    mn++;
    yy = d.getFullYear();
    document.getElementById("ndt").value=dt+""+mm+""+yy document.getElementById("ndt").hidden = false;
    document.getElementById("dt").hidden = true;
  }
</script> -->

@stop