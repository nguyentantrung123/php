@extends('master')
@section('title','Quản lí nhân viên')
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
				<li>
                    <a href="/thucdon"><i class="fas fa-bread-slice"></i></i><span class="Choose">Thực đơn</span></a>
                </li>
                <li>
                    <a href="/loai"><i class="fas fa-bars"></i><span class="Choose">Loại món</span></a>
				</li>
                <li >
                    <a href="/ban"><i class="fas fa-table"></i><span class="Choose">Bàn</span></a>
                </li>
                <li class="active">
                    <a href="/nhanvien"><i class="fas fa-user-friends"></i><span class="Choose">Nhân viên</span></a>
				</li>
			</ul>
@stop
@section('function_name','Nhân viên')


@section('content')
<p class="Inserttable"><a href="{{route('nhanvien.create')}}" class="Insert btn btn-primary">Thêm mới</a></p>
<div class="line"></div>

<form action="{{route('NV.timkiem')}}" method="post">
    @csrf
    <p>
        <div class="form-group row">
            <div class="col-4">
                <input type="text" class="form-control" name="tennv"   placeholder="Nhập từ khoá">
            </div>
            <div class="col-3">
                <button type="submit"  class="btn btn-info">
                     <i class="fas fa-search"></i>
                        <span>Tìm kiếm</span>
                    </button>
            </div>
  
        </div>
    </p>
</form>

<table class="table table-striped">
    <thead>
      <tr>
        <th hidden="true">Mã nhân viên</th>
        <th>Họ Tên</th>
        <th>Ngày Sinh</th>
        <th>Giới Tính</th>
        <th>Tài Khoản</th>
        <th>Mật Khẩu</th>
        <th>Trạng Thái</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach($dsnv as $nv)
        <tr>
            <td hidden="true">{{$nv['id']}}</td>
            <td>{{$nv['TenNV']}}</td>
            <td>{{$nv['NgaySinh']}}</td>
            <td>{{$nv['GioiTinh']}}</td>
            <td>{{$nv['TaiKhoan']}}</td>    
            <td> {{$nv['MatKhau']}}</td>
            <td>
            @if($nv['TrangThai'] == 0)
                khóa
            @else
                mở khóa
            @endif
            </td>
            <td>
                <button class="btn btn-success"><a href="{{route('nhanvien.edit',$nv['id'])}}">Sửa</a></button>
                <button class="btn btn-info"><a href="{{route('nhanvien.show',$nv['id'])}}">Chi tiết</a></button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-value="{{$nv['TrangThai']}}" data-whatever="{{ $nv['id']}}">Xóa</button>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="paginate">
      <div class="paginate-page">{{ $dsnv->links() }}</div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thông báo:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <label data-value="ghi_chu" for="recipient-name" class="col-form-label">Bấm OK nếu bạn muốn xóa</label>
            </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Trở về</button>
        <button type="button" class="btn btn-danger" id="ok_button">Xóa</button>
      </div>
    </div>
  </div>
</div>


@stop

@section('js')
    <script>
        var btn = document.querySelector('button[data-toggle="modal"]');
        if(btn){

            $('button[data-toggle="modal"]').click(function(){
                console.log($(this));

                
            var id = $(this)[0].dataset.whatever;
            
                var t = document.querySelector('label[data-value="ghi_chu"]');

                t.textContent = 'Bấm OK nếu bạn muốn xóa: ' + id;
                //lấy id
                $('#ok_button').click(function(){
                    $.ajax({
                        
                        url: "nhanvien/"+ id + "/destroy",
                        beforeSend: function(){
                            $('#ok_button').text('Chấp nhận');
                        },
                        success: function(){
                            location.reload();
                        }
                    });
                });
            });

        }
    </script>
@stop
