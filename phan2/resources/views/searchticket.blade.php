@extends('layouts.app', [])
@section('content')
<main class="my-5">
  <div class="container">
    <div class="card route-box">
      <!-- Tiêu đề tuyến -->
      <div class="position-absolute top-0 start-50 translate-middle">
        <h4 class="route-title text-bg-warning p-3 rounded-pill">TRA CỨU ĐẶT VÉ</h4>
      </div>
      <!-- /Tiêu đề tuyến -->
      <div class="card-body pt-5">
        <div class="row mb-3">
          <div class="col-sm-4">
            <div class="input-group mb-3">
              <input id="txtPhone" type="text" class="form-control" placeholder="Số điện thoại" />
              <button id="btnSearch" type="button" class="btn btn-secondary">
                <i class="fa-solid fa-search"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table id="tbl" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Id</th>
                <th>Thời gian đặt</th>
                <th>Tuyến</th>
                <th>Ga lên</th>
                <th>Ga xuống</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>12/2/2023 8:00:00</td>
                <td>Tuyến số 1</td>
                <td>Bến Thành</td>
                <td>Thủ Đức</td>
                <td>3</td>
                <td>45.000 đ</td>
              </tr>
              <tr>
                <td>2</td>
                <td>11/3/2023 10:30:59</td>
                <td>Tuyến số 2</td>
                <td>Tao Đàn</td>
                <td>Tham Lương</td>
                <td>4</td>
                <td>60.000 đ</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
@section('script')
  <script>
    $(document).ready(function(){
      // sao chép mẫu
      $defaultRow = $('#tbl tbody tr:first').clone();
      // xóa dòng của table
      $('#tbl tbody tr').remove();

      $('#txtPhone').change(function(){
        search();
      });
      $('#btnSearch').click(function(){
        search();
      });

      function search() {
        phone = $('#txtPhone').val();
        url = base_url + '/dat-ve/search?phone=' + phone;
        $.getJSON(url, function(res) {
          // reset table
          $('#tbl tbody tr').remove();
          // hiển thị vé
          $.each(res, function(i, el) {
            tr = $defaultRow.clone();
            tr.find('td:eq(0)').html(i + 1);
            tr.find('td:eq(1)').html(el.ThoiGianDat);
            tr.find('td:eq(2)').html(el.tuyen.TenTuyen);
            tr.find('td:eq(3)').html(el.galen.TenGa);
            tr.find('td:eq(4)').html(el.gaxuong.TenGa);
            tr.find('td:eq(5)').html(el.SoLuong);
            tr.find('td:eq(6)').html(el.ThanhTien);

            $('#tbl tbody').append(tr);
          });
          
        });
      }
    });
  </script>
@endsection