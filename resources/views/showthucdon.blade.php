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
<p class="Inserttable"><a href="#" class="Insert">Thêm mới</a></p>
<div class="line"></div>
<form >
    <p>
        <div class="form-group row">
            <div class="col-3">
            <select class="custom-select" name="searchId" placeholder="Chọn loại">
                <option value="0">Chọn loại cần tìm...</option>
                <option value="0">Tất cả</option>
                <option value="0">Loại 1</option>
                <option value="0">Loại 2</option>
            </select>
           
            </div>
            <div class="col-4">
                <input type="email" class="form-control"   placeholder="Nhập từ khoá">
          
            </div>
            <div class="col-3">
                <button type="button"  class="btn btn-info">
                     <i class="fas fa-search"></i>
                        <span>Tìm kiếm</span>
                    </button>
            </div>
           
           
        </div>
        
    </p>
  
</form>
<!-- Thêm nội dung mới tại đây -->
<div class="container">
    <div class="row">
        <div class="col-9 detail">
            <div> 
                <p style="font-weight: 500;"><span>Tên món:</span> {{$sp['TenMon']}}</p>
            </div>
            <div>
                <span>Hình ảnh:</span><br>
                <img src="../../images/{{$sp['HinhAnh']}}" alt="món ăn" class="img_food">
            </div>
            <div>
                <p style="margin-top:10px"><span>Giá tiền:</span> {{$sp['Gia']}}</p><br>
            </div>
           
           <div>
                <p><span>Mô tả:</span>{{$sp['MoTa']}}</p><br>
           </div>
           <div>
                <p><span>Loại:</span> {{$sp['Loai']}}</p><br>
           </div>
        </div>
    </div>
</div>
<button class="btn btn-primary"><a href="{{route('mon_an.index')}}">Trở về</a></button>
@stop