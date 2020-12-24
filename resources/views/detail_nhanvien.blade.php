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
<p class="Inserttable"><a href="{{route('nhanvien.create')}}" class="Insert">Thêm mới</a></p>
<div class="line"></div>

<!-- Thêm nội dung mới tại đây -->
<div class="container">
    <div class="row">
        <div class="col-9 detail">
            <div> 
                <p style="font-weight: 500;"><span>Tên Nhân Viên : </span> {{$nv['TenNV']}}</p>
            </div>
            <div>
                <p><span>Ngày Sinh: </span> {{$nv['NgaySinh']}}</p>
            </div>
            <div>
                <p style="margin-top:10px"><span>Giới Tính:</span> {{$nv['GioiTinh']}}</p><br>
            </div>
           
           <div>
                <p><span>Tài Khoản:</span>{{$nv['TaiKhoan']}}</p><br>
           </div>
           <div>
                <p><span>Mật Khẩu:</span> {{$nv['MatKhau']}}</p><br>
           </div>
        </div>
    </div>
</div>
<div><button class="btn btn-primary"><a href="{{route('nhanvien.index')}}">Trở về</a></button></div>
@stop