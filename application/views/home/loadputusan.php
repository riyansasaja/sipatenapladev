<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-6 fw-bolder mb-0"><span class="text-gradient d-inline">Data Putusan di Upload</span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-11">
            <!-- Experience Section-->
            <section>
                <!-- Experience Card untuk chart-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center mb-4 mb-lg-0">
                                <div>
                                    <canvas id="uploadChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </div>
    <div class="row justify-content-center">
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
                                <button class="btn btn-info text-white">Download</button>
                            </td>
                        </tr>

                        <tr>
                            <td>18/Pdt.P/2023/PA.Btg</td>
                            <td>PA Bitung</td>
                            <td>12/02/2023</td>
                            <td>
                                <button class="btn btn-info text-white">Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td>29/Pdt.P/2023/PA.Btg</td>
                            <td>PA Manado</td>
                            <td>16/03/2023</td>
                            <td>
                                <button class="btn btn-info text-white">Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td>60/Pdt.P/2023/PA.Btg</td>
                            <td>PA Manado</td>
                            <td>24/07/2023</td>
                            <td>
                                <button class="btn btn-info text-white">Download</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>