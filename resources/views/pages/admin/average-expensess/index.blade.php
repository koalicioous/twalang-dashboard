@extends('layouts.admin')

@section('title', 'Average Expensess & Booking Season')

@section('content')


   <!-- Begin Page Content -->
   <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Average Expensess</h1>
    <p class="mb-4">Menampilkan rata-rata pengeluaran untuk suatu demografi users
      </p>

    <!-- Content Row -->
    <div class="row">

      <div class="col-xl-8 col-lg-7">

        <!-- Area Chart -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pengeluaran Tiap Bulan</h6>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="myAreaChart"></canvas>
            </div>
            <hr>
           
          </div>
        </div>

        <!-- Bar Chart -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Pengeluaran rata-rata (Usia 17-25)</h6>
          </div>
          <div class="card-body">
            <div class="chart-bar">
              <canvas id="myBarChart"></canvas>
            </div>
            <hr>
          </div>
        </div>

      </div>

      <!-- Donut Chart -->
      <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pengeluaran Terbanyak</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <div class="chart-pie pt-4">
              <canvas id="myPieChart"></canvas>
            </div>
            <hr>
        
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


@endsection