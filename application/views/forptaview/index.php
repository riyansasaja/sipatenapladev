<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col">
            <h5 class="mb-4 text-gray-800">Data Total Putusan di Upload</h5>
            <div>
                <canvas id="myAreaChart"></canvas>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total File Uploaded</div>
                            <div class="h3 mb-0 font-weight-bold text-gray-800">22</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total File Approved</div>
                            <div class="h3 mb-0 font-weight-bold text-gray-800">20</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Waiting Approval</div>
                            <div class="h3 mb-0 font-weight-bold text-gray-800">2</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tabel -->
    <div class="row">
        <div class="col">
            <div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor Putusan</th>
                            <th>PA Asal</th>
                            <th>Tanggal Putusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nomor Putusan</th>
                            <th>PA Asal</th>
                            <th>Tanggal Putusan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>23/Pdt.P/2023/PA.Mdo</td>
                            <td>PA Manado</td>
                            <td>12/04/2023</td>
                            <td>
                                <button class="btn btn-warning text-white">
                                    <i class="fas fa-fw fa-eye"></i>
                                </button>
                                <button class="btn btn-warning text-white">
                                    <i class="fas fa-check-double"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>29/Pdt.P/2023/PA.Btg</td>
                            <td>PA Bitung</td>
                            <td>16/03/2023</td>
                            <td>
                                <button class="btn btn-info text-white">Approved</button>
                            </td>
                        </tr>
                        <tr>
                            <td>60/Pdt.P/2023/PA.Mdo</td>
                            <td>PA Manado</td>
                            <td>24/07/2023</td>
                            <td>
                                <button class="btn btn-info text-white">Approved</button>
                            </td>
                        </tr>
                        <tr>
                            <td>14/Pdt.P/2023/PA.Llk</td>
                            <td>PA Lolak</td>
                            <td>14/02/2023</td>
                            <td>
                                <button class="btn btn-warning text-white">
                                    <i class="fas fa-fw fa-eye"></i>
                                </button>
                                <button class="btn btn-warning text-white">
                                    <i class="fas fa-check-double"></i>
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->