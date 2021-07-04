<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Kategori Barang</th>
                        <th scope="col">Harga Barang (Rp.)</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $minimarket->nama_jualan ?></td>
                        <td><?= $minimarket->kategori_jualan ?></td>
                        <td><?= $minimarket->harga_jualan ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('C_Minimarket/updateMinimarket/') . $minimarket->id_jualan ?>" class="btn btn-primary">Ubah</a>
                            <a href="<?= base_url('C_Minimarket/hapusMinimarket/') . $minimarket->id_jualan ?>" class="btn btn-danger">hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>