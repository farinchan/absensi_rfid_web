<?= $this->extend('layouts') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Tenaga Pengajar</h5>
                <a href="/admin/artikel/tambah" class="btn btn-primary mb-3">
                    <span class="tf-icons bx bx-book-add"></span>&nbsp; Tambah Tenaga Pengajar
                </a>
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>TAG</th>
                            <th>Nama Siswa</th>
                            <th>NIS</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($siswa as $item) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $item["tag"] ?></td>
                                <td><?= $item["siswa_nama"] ?></td>
                                <td><?= $item["siswa_nis"] ?></td>
                                <td><?= $item["Kelas_id"] ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="First group">
                                        <a type="button" class="btn btn-outline-secondary">
                                            <i class='tf-icons bx bx-info-circle'></i>
                                        </a>
                                        <a type="button" class="btn btn-outline-secondary">
                                            <i class='tf-icons bx bxs-edit'></i>
                                        </a>
                                        <a type="button" href="/admin/artikel/delete/<?= $item["id"] ?>" class="btn btn-outline-secondary">
                                            <i class='tf-icons bx bx-trash'></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>