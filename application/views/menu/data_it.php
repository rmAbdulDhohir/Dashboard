<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>

<div class="row">
    <div class="col-lg-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Inventory</th>
                    <th scope="col">Merk & Seri</th>
                    <th scope="col">Spesifikasi</th>
                    <th scope="col">Kelengkapan Acc</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($menu as $m) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $m['kode']; ?></td>
                    <td><?= $m['merk']; ?></td>
                    <td><?= $m['spesifikasi']; ?></td>
                    <td><?= $m['kelengkapan']; ?></td>
                    <td>
                        <a href="">edit</a>
                        <a href="">delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>