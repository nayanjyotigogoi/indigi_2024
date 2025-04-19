<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - INDIGI Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/admin" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-sm-block">INDIGI Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> -->
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
        <!-- End Search Icon -->

        <li class="nav-item dropdown">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a>
          <!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>INDIGI Admin</h6>
              <span>ADMIN</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form action="{{route('logout')}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="POST">
                <button type="submit" class="dropdown-item d-flex align-items-center">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </button>

              </form>
              <!-- <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a> -->
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      <!-- Dashboard -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <!-- About Page -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#aboutMenu" role="button" aria-expanded="false"
          aria-controls="aboutMenu">
          <i class="bi bi-info-circle"></i>
          <span>About Page</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <div class="collapse" id="aboutMenu">
          <ul class="nav flex-column ms-3">

            {{-- Optional "Add" link - only if you add a separate create form later --}}
            {{--
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.about.create') }}">
                <i class="bi bi-plus-circle"></i> Add About
              </a>
            </li>
            --}}

            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.about.edit') }}">
                <i class="bi bi-pencil"></i> Edit About
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.about.view') }}">
                <i class="bi bi-eye"></i> View About
              </a>
            </li>
          </ul>
        </div>
      </li>


      <!-- Solutions -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#solutionsMenu" role="button"
          aria-expanded="false" aria-controls="solutionsMenu">
          <i class="bi bi-lightbulb"></i>
          <span>Solutions</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <div class="collapse" id="solutionsMenu">
          <ul class="nav flex-column ms-3">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('solutions.view') }}">
                <i class="bi bi-eye"></i> Manage Solutions
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.solutions.create') }}">
                <i class="bi bi-plus-circle"></i> Add New Solution
              </a>
            </li>
          </ul>
        </div>
      </li>



      <!-- Services -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#servicesMenu" role="button" aria-expanded="false"
          aria-controls="servicesMenu">
          <i class="bi bi-gear-wide-connected"></i>
          <span>Services</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <div class="collapse" id="servicesMenu">
          <ul class="nav flex-column ms-3">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.services.view') }}">
                <i class="bi bi-eye"></i> Manage Services
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.services.add') }}">
                <i class="bi bi-plus-circle"></i> Add New Service
              </a>
            </li>
          </ul>
        </div>
      </li>


      <!-- Gallery -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#galleryMenu" role="button" aria-expanded="false"
          aria-controls="galleryMenu">
          <i class="bi bi-images"></i>
          <span>Gallery</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <div class="collapse" id="galleryMenu">
          <ul class="nav flex-column ms-3">
            <li class="nav-item">
              <a class="nav-link" href="{{route('gallery.create')}}">
                <i class="bi bi-plus-circle"></i> Add Image
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('gallery.view')}}">
                <i class="bi bi-eye"></i> View Gallery
              </a>
            </li>
          </ul>
        </div>
      </li>

    
      <!-- Career -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#careerMenu" role="button" aria-expanded="false"
          aria-controls="careerMenu">
          <i class="bi bi-briefcase"></i>
          <span>Career</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <div class="collapse" id="careerMenu">
          <ul class="nav flex-column ms-3">
            <li class="nav-item">
              <a class="nav-link" href="{{route('job.create')}}">
                <i class="bi bi-plus-circle"></i> Add Job
              </a>
            </li>
            <!-- <li class="nav-item">
        <a class="nav-link" href="/admin/career/edit">
          <i class="bi bi-pencil"></i> Edit Career
        </a>
      </li> -->
            <li class="nav-item">
              <a class="nav-link" href="{{route('job.index')}}">
                <i class="bi bi-eye"></i> View jobs
              </a>
            </li>
            <!-- Add this line to view career applications -->
            <li class="nav-item">
              <a class="nav-link" href="{{ route('career.applications') }}">
                <i class="bi bi-eye"></i> View Applications
              </a>
            </li>
          </ul>
        </div>
      </li>


    </ul>
  </aside>
  <!-- End Sidebar -->



  <!-- Vendor JS Files -->
  <script src="/admin_assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/admin_assets/vendor/chart.js/chart.umd.js"></script>
  <script src="/admin_assets/vendor/echarts/echarts.min.js"></script>
  <script src="/admin_assets/vendor/quill/quill.min.js"></script>
  <script src="/admin_assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/admin_assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/admin_assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/admin_assets/js/main.js"></script>

</body>

</html>