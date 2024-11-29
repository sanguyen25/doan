@extends('admin_layout')
@section('admin_content')
<div class="container-fluid">
	<style type="text/css">
            p.title_thongke {
                text-align: center;
                font-weight: bold;
                font-size: 18pt;
            }
       </style>
 <div class="row">
 	<p class="title_thongke">Thông kê đơn hàng danh số</p>
    <div id="donut" ></div>
 	<form autocomplete="off">

 		<!-- @csrf
 		<div class="col-md-2">
 			<p> Từ ngày: <input type="text" id="datepicker" class="form-control"></p>
 			<input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lọc kết quả"></p>
 		</div>
 		<div class="col-md-2">
 			<p> Đến ngày: <input type="text" id="datepicker2" class="form-control"></p>
 			
 		</div> -->
 		<!-- <div class="col-md-2">
 			<p>
 				Lọc theo:
 				<select class="dashboard-filter form-control">
 					<option>---Chọn---</option>
 					<option value="7ngay">7 ngày qua</option>
 					<option value="thangtruoc">tháng trước</option>
 					<option value="365ngayqua">365 ngày qua</option>

 					
 				</select>
 			</p>
 			
 		</div> -->
 		
 	</form>
 	
 </div>
</div>
@endsection