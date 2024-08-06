@extends('admin.layout.main')

@section('title', 'Dashboard')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tổng số người dùng</h5>
                    <p class="card-text display-4">{{$sumUser}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tổng số  lượng sản phẩm theo danh mục</h5>
                    <canvas id="myChart" width="200px" height="200px"></canvas>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tổng số sản phẩm</h5>
                    <p class="card-text display-4">{{$sumPro}}</p>
                </div>
            </div>
        </div>
    </div>



    
    <script>
         var myChartData = @json($chartData);

// Tạo biểu đồ
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: myChartData,
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: 'Số lượng sản phẩm theo danh mục'
            }
        }
    }
});
    </script>
@endsection
