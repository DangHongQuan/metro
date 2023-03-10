<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trần Thanh Đàn - 07</title>
    <link rel="stylesheet" href="{{asset('/assets')}}/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('/assets')}}/plugins/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('/assets')}}/plugins/bootstrap-icons/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{asset('/assets')}}/css/style.css" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="{{url('')}}">
            <img src="{{asset('/assets')}}/images/HCMC_Metro_Logo.png" alt="" class="icon-logo img-fluid" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/ticket')}}">Đặt vé</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/searchticket')}}">Tra cứu đặt vé</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    @yield('content')
    <footer class="text-bg-dark p-3">
      <div class="container">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('/assets')}}/images/logoThanhDoanTP.png" alt="logo Thành đoàn" class="img-fluid" />
          </div>
          <div class="col-sm">
            <h4>Thông tin liên hệ</h4>
            <div>Địa chỉ: Số 1 Phạm Ngọc Thạch, Quận 1, Tp. HCM</div>
            <div>Email: thanhdoan@tphcm.gov.vn</div>
          </div>
          <div class="col-auto">@2023. Bản quyền thuộc Thành Đoàn Tp.HCM</div>
        </div>
      </div>
    </footer>
    <script src="{{asset('/assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/assets')}}/plugins/jquery/jquery-3.6.3.min.js"></script>
    <script>
      base_url = '{{url("")}}';
    </script>
    @yield('script')
  </body>
</html>
