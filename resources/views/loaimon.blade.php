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
                    <a href="/nhanvien"><i class="fas fa-user-friends"></i><span class="Choose">Nhân viên</span></a>
				</li>
			</ul>
@stop

@section('function_name','Loại món')


@section('content')
<p class="Inserttable"><a href="{{route('loai.create')}}" class="Insert btn btn-primary">Thêm mới</a></p>
<div class="line"></div>
<form   action="{{route('loai.search')}}" method="post">
@csrf
    <p>
        <div class="form-group row">
            <div class="col-4">
                <input type="text" id="name_type" name="name_type" class="form-control"  placeholder="Nhập từ khoá...">
          
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
<!-- Thêm nội dung mới tại đây -->
<table class="table table-striped">
    <thead>
      <tr>
        <th hidden="true"></th>
        <th>Tên loại</th>
        <th hidden="true">Trạng thái</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach($dsloai as $loai)
        <tr>
            <td hidden="true">{{$loai['id']}}</td>
            <td>{{$loai['TenLoai']}}</td>
            <td hidden="true">{{$loai['TrangThai']}}</td>
            <td>
                <button class="btn btn-success"><a href="{{route('loai.edit',$loai['id'])}}">Sửa</a></button>
                <button class="btn btn-info"><a href="{{route('loai.show',$loai['id'])}}"> Chi tiết</a></button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
             data-whatever="{{ $loai['id']}}">Xóa</button>
            </td> 

        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="paginate">
      <div class="paginate-page">{{ $dsloai->links() }}</div>
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

@section('js_loai')
    <script>
        var btn = document.querySelector('button[data-toggle="modal"]');
        if(btn){

            $('button[data-toggle="modal"]').click(function(){
                

                
            var id = $(this)[0].dataset.whatever;
            
                var t = document.querySelector('label[data-value="ghi_chu"]');

                t.textContent = 'Bấm OK nếu bạn muốn xóa: ' + id;
                //lấy id
                $('#ok_button').click(function(){
                    $.ajax({
                        
                        url: "loai/"+ id + "/destroy",
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