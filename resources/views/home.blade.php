<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sertifika Oluşturma Aracı</title>

    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/css/vertical-layout-light/style.css">
    <link rel="stylesheet" href="/assets/css/vertical-layout-light/style.admin.css?v=1.0.8.0">
    <link href="/assets/css/responsive.bootstrap.min.css" rel="stylesheet">

</head>

<body class="sidebar-dark sidebar-icon-only" data-barba="wrapper" aria-live="polite" style="">

    <div class="container-scroller">

        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-success" style="">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">


            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                    </li>
                </ul>


            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial -->

            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                </ul>
            </nav>
            <!-- partial -->

            <div class="main-panel">
                <main style="" data-barba="container" data-barba-object="ApplicationUsers">
                    <div class="content-wrapper">

                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="row">
                                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                        <h3 class="font-weight-bold">Sertifika Oluşturma Aracı</h3>
                                        <h6 class="font-weight-normal mb-0">Gerekli alanları doldurduktan sonra
                                            Sertifika Oluştur butonu ile sertifikanızın pdf çıktısına
                                            ulaşabilirsiniz.</h6>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="card cardCustomBg">
                            <div class="card-body">

                                <form target="_blank" action="{{ route('pdf') }}" method="post"
                                    class="forms-sample formElement mt-2">
                                    <div style="display: none;" class="form_loading">
                                        <img src="http://ares.oyak.bur.renault.tr/assets/img/loading.gif">
                                    </div>
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inp1">Sertifika Başlığı</label>
                                                <input id="inp1" name="label1" required="" type="text"
                                                    class="form-control" placeholder="Teşekkür Belgesi">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inp2">Sertifika Açıklaması</label>
                                                <input id="inp2" name="label2" required="" type="text"
                                                    class="form-control" placeholder="Sertifika Açıklaması">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inp3">Sertifikayı Alan Kişi</label>
                                                <input id="inp3" name="label3" required="" type="text"
                                                    class="form-control" placeholder="Ad & Soyad">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inp4">Sertifikayı Alan Kişi Ünvanı</label>
                                                <input id="inp4" name="label4" required="" type="text"
                                                    class="form-control" placeholder="Ünvan">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inp5">İmzalayan Ad & Soyad</label>
                                                <input id="inp5" name="label5" required="" type="text"
                                                    class="form-control" placeholder="İmzalayan Ad & Soyad">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inp6">İmzalayan Ünvan</label>
                                                <input id="inp6" name="label6" required="" type="text"
                                                    class="form-control" placeholder="İmzalayan Ünvan">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group float-right mt-4 mr-4">
                                        <button class="btn btn-sm btn-themegreen" type="submit" aria-haspopup="true"
                                            aria-expanded="true">
                                            <i class="mdi mdi-calendar"></i> Sertifika Oluştur
                                        </button>
                                    </div>

                                </form>


                            </div>
                        </div>


                    </div>

                </main>

                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    </div>
                </footer>
                <!-- partial -->
            </div>

        </div>
        <!-- page-body-wrapper ends -->
    </div>

</body>

</html>