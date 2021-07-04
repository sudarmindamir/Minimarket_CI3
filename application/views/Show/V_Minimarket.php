<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <!-- <th scope="col">Kategori Barang</th> -->
                        <!-- <th scope="col">Harga Barang (Rp.)</th> -->
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($minimarket as $s) { ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $s->nama_jualan ?></td>
                            <!-- <td><?= $s->kategori_jualan ?></td> -->
                            <!-- <td><?= $s->harga_jualan ?></td> -->



                            <td class="text-center">
                                <a href="<?= base_url('C_Minimarket/detailDataMinimarket/') . $s->id_jualan ?>" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>