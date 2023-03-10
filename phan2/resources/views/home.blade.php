@extends('layouts.app', [])
@section('content')
<main class="my-5">
    <div class="container">
      {{-- load routes from db --}}
      <div class="mb-5">
      @foreach ($dsTuyen as $tuyen)
          <a href="#" data-group="tuyen" data-id="{{$tuyen->id}}" class="btn btn-warning">{{$tuyen->TenTuyen}}</a>
      @endforeach
      </div>
      <div id="cardTuyen" class="card route-box d-none">
        <!-- Tiêu đề tuyến -->
        <div class="position-absolute top-0 start-50 translate-middle">
          <h4 class="route-title text-bg-warning p-3 rounded-pill text-uppercase">TUYẾN SỐ 1</h4>
        </div>
        <!-- /Tiêu đề tuyến -->
        <!-- Các tuyến -->
        <div class="card-body">
          <div id="stations" class="routes d-flex flex-row-reverse overflow-x-scroll overflow-y-visible">
            <div class="route">
              <div class="content">
                <a href="javascript:void()">
                  <p class="title">Bến thành 4 fdsfa f saf</p>
                  <div>
                    <span
                      class="dot"
                      data-bs-toggle="tooltip"
                      data-bs-placement="bottom"
                      data-bs-custom-class="custom-tooltip"
                      data-bs-html="true"
                      data-bs-title="Tuyến <span class='badge text-bg-light'>1</span> <span class='badge text-bg-light'>5</span>"
                    ></span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- /Các tuyến -->
        <div class="card-footer text-center">
          <span class="text-bg-secondary px-3 py-1 me-1 rounded-pill">
            <i class="fa-solid fa-clock"></i>
            <span id="thoigian">5:00 - 21:00</span>
          </span>
          <span class="text-bg-secondary px-3 py-1 rounded-pill">
            <i class="fa-solid fa-arrows-left-right-to-line"></i>
            <span id="chieudai">28</span>km
          </span>
        </div>
      </div>
    </div>
  </main>   
@endsection
@section('script')
  <script>
    $(document).ready(function(){
      // sao chép mẫu
      $defaultRow = $('#stations .route:first').clone();

      $('a[data-group=tuyen]').click(function(e){
        e.preventDefault();
        url = base_url + '/tuyen/get/' +$(this).attr('data-id');
        $.getJSON(url, function(data) {
          // hiển thị tuyến
          $('#cardTuyen').removeClass('d-none');
          // hiển thị thông tin tuyến
          $('.route-title').html(data.TenTuyen);
          $('#thoigian').html(data.ThoiGianHoatDong);
          $('#chieudai').html(data.ChieuDai);
          // ========== hiển thị danh sách ga ==================
          if (data.dsga.length > 10) {
            $('#stations').removeClass('justify-content-end');
          } else {
            $('#stations').addClass('justify-content-end');
          }
          // reset ga
          $('#stations .route').remove();
          $.each(data.dsga, function(i, el) {
            tuyen = $defaultRow.clone();
            tuyen.find('.title').html(el.ga.TenGa);

            // danh sách tuyến : Tuyến 
            dstuyen = "Tuyến ";
            $.each(el.ga.dstuyen, function(i, item){
              dstuyen += " <span class='badge text-bg-light'>" + item.tuyen.MaTuyen + "</span>";
            });
            tuyen.find('span').attr('data-bs-title', dstuyen);

            $('#stations').append(tuyen);
          });

          setTimeout(() => {
            const tooltip = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            const tooltipList = [...tooltip].map((el) => new bootstrap.Tooltip(el));
          }, 500);
          // ========== /hiển thị danh sách ga =================
        });
      });
    });
  </script>
@endsection