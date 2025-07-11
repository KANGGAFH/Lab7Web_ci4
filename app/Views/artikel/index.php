<?= $this->include('template/header'); ?>

<?php if ($artikel): ?>
    <?php foreach ($artikel as $row): ?>
        <article class="entry">
            <h2>
                <a href="<?= base_url('/artikel/' . $row['slug']); ?>" style="color: #1f5faa; text-decoration: none;">
                    <?= esc($row['judul']); ?>
                </a>
            </h2>
            <p style="font-size: 14px; color: #888; margin-bottom: 10px;">
                Kategori: <strong><?= esc($row['nama_kategori']); ?></strong>
            </p>

            <?php if (!empty($row['gambar'])): ?>
                <img src="<?= base_url('/uploads/' . $row['gambar']); ?>"
                     alt="<?= esc($row['judul']); ?>"
                     style="width: 100%; max-width: 600px; height: auto; border-radius: 5px; margin-bottom: 10px;">
            <?php endif; ?>

            <p style="font-size: 15px; line-height: 1.6; color: #444;">
                <?= esc(substr($row['isi'], 0, 200)); ?>...
                <a href="<?= base_url('/artikel/' . $row['slug']); ?>" style="color: #2b83ea; font-weight: bold;">
                    Baca Selengkapnya
                </a>
            </p>
        </article>
        <hr class="divider" />
    <?php endforeach; ?>
<?php else: ?>
    <article class="entry">
        <h2>Belum ada data.</h2>
    </article>
<?php endif; ?>

<?= $this->include('template/footer'); ?>
