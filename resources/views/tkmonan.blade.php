@extends('master')
@section('title','Thống kê món ăn')
@section('menu_active')
<ul class="list-unstyled components">
				<p>Chức năng</p>
				<li class="">
                    <a href="/home"><i class="fas fa-home"></i><span class="Choose">Trang chủ</span></a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"><i class="fas fa-chart-pie"></i> <span class="Choose"> Thống kê</span></a>
                    <ul class="list-unstyled collapse show" id="homeSubmenu">
                        <li >
                            <a href="/doanhthu"><span class="lst_item">Doanh thu</span></a>
                        </li>
                        <li class="active">
                             <a href="/tkmonan"><span class="lst_item">Món ăn</span></a>
                        </li>
                        
                    </ul>
                </li>
				<li>
                    <a href="/thucdon"><i class="fas fa-soup"></i><span class="Choose">Thực đơn</span></a>
                </li>
                <li>
                    <a href="/loai"><i class="fas fa-bars"></i><span class="Choose">Loại món</span></a>
				</li>
                <li>
                    <a href="/ban"><i class="fas fa-table"></i><span class="Choose">Bàn</span></a>
                </li>
                <li>
                    <a href="nhanvien"><i class="fas fa-user-friends"></i><span class="Choose">Nhân viên</span></a>
				</li>
			</ul>
@stop

@section('content')
<h1>Đây là trang thống kê món ăn</h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th hidden="true">Mã món</th>
        <th>Tên món</th>
        <th>Tên bàn</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Thời gian</th>
        <th>Trạng Thái</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach($dstk as $item)
        <tr>
            <td hidden="true">{{$item['id']}}</td>
            <td>{{$item['TenMon']}}</td>
            <td>{{$item['TenBan']}}</td>
            <td>{{$item['Gia']}}</td>
            <td>{{$item['SoLuong']}}</td>
            <td>{{$item['ThoiGian']}}</td>
            <td>{{$item['TrangThai']}}</td>
          
        </tr>
        @endforeach
    </tbody>
  </table>
@stop