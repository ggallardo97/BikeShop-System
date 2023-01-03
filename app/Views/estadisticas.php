
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">

    <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7" id="areas">
            <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Ventas por mes</h6>
                    </div>
                        <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
            </div>
        </div>
            <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5" id="sectores">
            <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Productos mas vendidos</h6>
                </div>
                    <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            Valores en porcentajes
                        </span>
                    </div>
                </div>
            </div>
                    
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Productos cercanos a agotarse</h6>
                </div>
                <div class="card-body" id="productStock">
                   <div id="productosBajoStock"></div>
                </div>
            </div>
        </div>
            
    <div class="col-lg-6 mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 300px; height: 400px"
                        src="<?php echo base_url('/assets/img/apu-bso.png'); ?>">
                </div>
            </div>
        </div>

    </div>
</div>
    