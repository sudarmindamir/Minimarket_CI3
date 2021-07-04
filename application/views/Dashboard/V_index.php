<div class="mx-auto mt-5 col-xl-9 col-md-9 mb-9">
    <div class="card border-left-primary shadow h-80 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    </div>

                    <div role="tabpanel" class="tab-pane active" id="datasekolah">
                        <div class="container mt-2 ml-3">
                            <h3 class="mb-4"> <strong> Form Lagi </strong> </h3>
                            <form action="<?= base_url('C_Minimarket/terimaDataMinimarket') ?>" method="POST">

                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Nama Jualan</label>
                                    <input type="text" class="form-control" name="nama_jualan">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kategori Jualan</label>
                                    <select name="kategori_jualan" class="form-control">
                                        <option value="ATK">ATK</option>
                                        <option value="Sabun">Sabun</option>
                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Harga Jualan</label>
                                    <input type="text" class="form-control" name="harga_jualan">
                                </div>

                                <a href=> <button type="submit" class="btn btn-primary">Submit</button></a>

                            </form>
                        </div>
                    </div>

                </div>
                <!-- <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div> -->
            </div>
        </div>
    </div>
</div>