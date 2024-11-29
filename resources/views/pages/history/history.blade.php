@extends('layout')
@section('content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="text-primary" style="font-size: 24px; font-weight: bold;">Liệt kê đơn hàng</h4>
    </div>
     
    <div class="table-responsive p-5">
      <?php
        $message = Session::get('message');
        if($message){
            echo '<div class="alert alert-success" style="font-size: 18px; padding: 15px;">'.$message.'</div>';
            Session::put('message', null);
        }
      ?>
      <table class="table table-bordered table-hover" style="font-size: 20px; width: 100%; line-height: 2;">
        <thead class="thead-dark" style="font-size: 22px;">
          <tr class="text-center">
            <th style="width: 10%;">Thứ tự</th>
            <th style="width: 16%;">Mã đơn hàng</th>
            <th style="width: 20%;">Ngày tháng </th>
            <th style="width: 20%;">Tình trạng </th>
            <th style="width: 18%;">Thao tác</th>
          </tr>
        </thead>
        <tbody>
          @php $i = 0; @endphp
          @foreach($order as $key => $ord)
            @php $i++; @endphp
          <tr class="text-center align-middle">
            <td><strong>{{ $i }}</strong></td>
            <td>{{ $ord->order_code }}</td>
            <td>{{ \Carbon\Carbon::parse($ord->created_at)->format('d-m-Y H:i') }}</td>
            <td>
              @if($ord->order_status == 1)
                <span class="badge badge-warning" style="font-size: 16px;">Đơn hàng mới</span>
              @else
                <span class="badge badge-success" style="font-size: 16px; background-color:#FE980F ">Đã xử lý</span>
              @endif
            </td>
            <td>
              <a href="{{ URL::to('/view-history-order/'.$ord->order_code) }}" class="btn btn-info btn-lg" style="padding: 8px 15px; font-size: 14px;">
                <i class="fa fa-eye"></i> Xem đơn hàng
              </a>
              <!-- Liên kết xóa (tuỳ chọn) -->
              <!--
              <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này không?')" href="{{ URL::to('/delete-order/'.$ord->order_code) }}" class="btn btn-danger btn-lg" style="padding: 10px 20px; font-size: 18px;">
                <i class="fa fa-trash"></i> Xóa
              </a>
              -->
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-12 text-center">
          <ul class="pagination pagination-lg m-t-none m-b-none" style="font-size: 18px;">
            {!! $order->links() !!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection
