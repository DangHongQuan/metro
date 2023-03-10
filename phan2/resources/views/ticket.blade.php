@extends('layouts.app', [])
@section('content')
<main class="my-5">
  <div class="container">
    <div class="card route-box">
      <!-- Tiêu đề tuyến -->
      <div class="position-absolute top-0 start-50 translate-middle">
        <h4 class="route-title text-bg-warning p-3 rounded-pill">ĐẶT VÉ</h4>
      </div>
      <!-- /Tiêu đề tuyến -->
      <div class="card-body">
        <form id="frm">
          @csrf
          <!-- row 1 -->
          <div class="row">
            <div class="col-sm-6">
              <div class="mb-3">
                <label for="drpRoute" class="form-label">Tuyến</label>
                <select class="form-select" id="drpRoute" name="Route" required>
                  <option value=""></option>
                  @foreach ($dsTuyen as $item)
                  <option value="{{$item->id}}">{{$item->TenTuyen}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <!-- row 2 -->
          <div class="row">
            <div class="col-sm">
              <div class="mb-3">
                <label for="drpStationUp" class="form-label">Ga lên</label>
                <select class="form-select" id="drpStationUp" name="StationUp" required>
                  <option value=""></option>
                </select>
              </div>
            </div>
            <div class="col-sm">
              <div class="mb-3">
                <label for="drpStationDown" class="form-label">Ga xuống</label>
                <select class="form-select" id="drpStationDown" name="StationDown" required>
                  <option value=""></option>
                </select>
              </div>
            </div>
          </div>
          <!-- row 3 -->
          <div class="row">
            <div class="col-sm">
              <div class="mb-3">
                <label for="txtQuantity" class="form-label">Số lượng</label>
                <input type="number" id="txtQuantity" name="Quantity" value="" class="form-control" required/>
              </div>
            </div>
            <div class="col-sm">
              <div class="mb-3">
                <label for="txtPhone" class="form-label">Điện thoại</label>
                <input type="tel" id="txtPhone" name="Phone" value="" class="form-control" required/>
              </div>
            </div>
          </div>
          <!-- row 4 -->
          <div class="row">
            <div class="col-sm">
              <div>
                <label class="form-label">Thành tiền:</label>
                <input type="hidden" id="txtTotal" name="Total" value="0" />
                <span id="lblTotal">0</span> đồng
              </div>
            </div>
            <div class="col-sm">
              <button type="submit" class="btn btn-primary px-5">Đặt vé</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main> 
@endsection
@section('script')
  <script>
    var tuyenInfo, tongSoGa;
    $(document).ready(function(){
      $('#drpRoute').change(function(){
        id = $(this).val();
        if (id) {
          // set số lượng vé
          $('#txtQuantity').val('1');
          // get Tuyen info
          urlTuyen = base_url + '/tuyen/get-info/' + id;
          $.getJSON(urlTuyen, function(data) {
            tuyenInfo = data;
          });
          // get stations
          url = base_url + '/ga/get-by-tuyen/' + id;
          $.getJSON(url, function(data){
            tongSoGa = data.length;
            // reset dropdown
            $('#drpStationUp option').remove();
            $("#drpStationUp").append($("<option />").val('').text(''));
            $('#drpStationDown option').remove();
            $("#drpStationDown").append($("<option />").val('').text(''));
            $.each(data, function(i, el){
              $("#drpStationUp").append($("<option />").val(el.ga.id).text(el.ga.TenGa));
              $("#drpStationDown").append($("<option />").val(el.ga.id).text(el.ga.TenGa));
            });
          });
        } else {
          //reset dropdown to empty
          $('#drpStationUp option').remove();
          $("#drpStationUp").append($("<option />").val('').text(''));
          $('#drpStationDown option').remove();
          $("#drpStationDown").append($("<option />").val('').text(''));
        }        
      });

      $('#drpStationUp, #drpStationDown, #txtQuantity').change(function(){
        TinhTong();
      });

      function TinhTong() {
        giaVeToiThieu = tuyenInfo.GiaVeToiThieu;
        donGiaGa = tuyenInfo.DonGiaGa;
        soLuong = parseInt($('#txtQuantity').val());

        gaLen = $('#drpStationUp').prop('selectedIndex');
        gaXuong = $('#drpStationDown').prop('selectedIndex');
        
        soGa = Math.abs(gaXuong - gaLen) + 1;
        lamTronLen = Math.ceil(tongSoGa/2);

        if (soGa <= lamTronLen) {
          soTien = giaVeToiThieu * soLuong;
        } else {
          soTien = giaVeToiThieu + (soGa - lamTronLen) * donGiaGa * soLuong;
        }

        // hiển thị tổng tiền
        $('#lblTotal').html(soTien);
        $('#txtTotal').val(soTien);        
      }

      // submit form
      $('#frm').submit(function (e) {
        e.preventDefault();
        data = {
          _token: $('input[type=hidden][name=_token]').val(),
          TuyenId: $('#drpRoute').val(),
          GaLenId: $('#drpStationUp').val(),
          GaXuongId: $('#drpStationDown').val(),
          SoLuong: $('#txtQuantity').val(),
          ThanhTien: $('#txtTotal').val(),
          DienThoai: $('#txtPhone').val()
        };
        url = base_url +'/dat-ve';
        $.post(url, data, function(res){
          alert("Cảm ơn bạn đã đặt vé");
        });
      });
    });
  </script>
@endsection