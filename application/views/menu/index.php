<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
    <div class="col-lg-6">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Devisi</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menu as $m) : ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $m['nama']; ?></td>
                    <td><?= $m['devisi']; ?></td>
                    <td><?= $m['unit']; ?></td>
                    <td>
                        <a href="">edit</a>
                        <a href="">delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>