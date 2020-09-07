<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact me</h1>
            <?php foreach ($alamat as $a) : ?>
                <ul>
                    <li>
                        <?= $a['tipe']; ?>
                    </li>
                    <li>
                        <?= $a['alamat']; ?>
                    </li>
                    <li>
                        <?= $a['kota']; ?>
                    </li>
                </ul>
            <?php endforeach; ?>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, voluptatem inventore assumenda optio totam, porro voluptatibus quia voluptatum quo odit consectetur fuga, natus fugit. Quas numquam hic porro officiis totam!</p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>