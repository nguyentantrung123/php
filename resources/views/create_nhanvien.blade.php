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
<form action="{{route('nhanvien.store')}}" enctype="multipart/form-data" method="POST">
    @csrf
   
  <div class="form-group">
    <label for="tennv">Tên Nhân Viên</label>
    <input type="text" class="form-control" id="tennv" name="tennv" value="">
    @if($errors->has('tennv'))
        <div class="alert alert-danger" role="alert">
          <strong>{{$errors->first('ten')}}</strong>
        </div>
      @endif
  </div>
  <div class="form-group">
    <label for="price">Ngày Sinh</label>
    <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" value="">
    @if($errors->has('ngaysinh'))
        <div class="alert alert-danger" role="alert">
          <strong>{{$errors->first('ngaysinh')}}</strong>
        </div>
      @endif
  </div>
   
    <div class="form-group">
      <label for="hinh">Giới Tính</label>
            <select name="gioitinh" id="gioitinh">
          <option value="Nam">Nam</option>
          <option value="Khác">Khác</option>
          <option value="Nữ">Nữ</option>
            </select>       
        </div>
      
     <div class="form-group">
      <label for="hinh">Tài Khoản</label>
       <input type="text" class="form-control" id="tennv" name="taikhoan" value="">
      @if($errors->has('taikhoan'))
        <div class="alert alert-danger" role="alert">
          <strong>{{$errors->first('taikhoan')}}</strong>
        </div>
      @endif
    </div>
    <div class="form-group">
      <label for="hinh">Mật Khẩu</label>
       <input type="text" class="form-control" id="tennv" name="matkhau" value="">
      @if($errors->has('matkhau'))
        <div class="alert alert-danger" role="alert">
          <strong>{{$errors->first('matkhau')}}</strong>
        </div>
      @endif
    </div>
  <button type="submit" class="btn btn-primary" onclick="them()">Create</button>
</form>
@stop