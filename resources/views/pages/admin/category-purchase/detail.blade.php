@extends('layouts.admin')


@section('title', 'detail')
    

@section('content')
    
<div class="container-fluid">

<!-- Bar Chart -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
    </div>
    <div class="card-body">
        <div class="chart-bar">
            <canvas id="myBarChart1"></canvas>
        </div>
        
    </div>
</div>
</div>

</div>

@endsection

