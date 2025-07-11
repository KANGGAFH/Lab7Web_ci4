<?= view('template/admin_header') ?>

<h1 style="margin: 20px 0; color: #1f5faa; font-size: 28px;"><?= $title ?></h1>

<form id="search-form" method="get" style="margin-bottom: 20px;">
    <input type="text" name="q" placeholder="Cari artikel..." value="<?= esc($q) ?>" style="padding: 8px; width: 200px;">
    <select name="kategori_id" style="padding: 8px;">
        <option value="">-- Semua Kategori --</option>
        <?php foreach ($kategori as $kat): ?>
            <option value="<?= $kat['id_kategori']; ?>" <?= $kategori_id == $kat['id_kategori'] ? 'selected' : '' ?>>
                <?= $kat['nama_kategori']; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button type="submit" style="padding: 8px 16px; background-color: #1f5faa; color: white; border: none; cursor: pointer;">Cari</button>
</form>

<div id="artikel-list">
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <thead style="background-color: #f4f4f4;">
            <tr>
                <th style="padding: 10px; border: 1px solid #ddd;">Judul</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Kategori</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($artikel as $row): ?>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><?= $row['judul']; ?></td>
                    <td style="padding: 10px; border: 1px solid #ddd;"><?= $row['nama_kategori']; ?></td>
                    <td style="padding: 10px; border: 1px solid #ddd;"><?= $row['status']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?= $pager->links('default', 'default_full') ?>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    function loadArtikel(params) {
        $.ajax({
            url: '<?= base_url('admin/artikel') ?>',
            type: 'get',
            data: params,
            dataType: 'json',
            success: function(response) {
                let html = '<table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">';
                html += '<thead style="background-color: #f4f4f4;"><tr>';
                html += '<th style="padding: 10px; border: 1px solid #ddd;">Judul</th>';
                html += '<th style="padding: 10px; border: 1px solid #ddd;">Kategori</th>';
                html += '<th style="padding: 10px; border: 1px solid #ddd;">Status</th>';
                html += '</tr></thead><tbody>';
                response.artikel.forEach(function(item) {
                    html += '<tr>';
                    html += '<td style="padding: 10px; border: 1px solid #ddd;">' + item.judul + '</td>';
                    html += '<td style="padding: 10px; border: 1px solid #ddd;">' + item.nama_kategori + '</td>';
                    html += '<td style="padding: 10px; border: 1px solid #ddd;">' + item.status + '</td>';
                    html += '</tr>';
                });
                html += '</tbody></table>';
                html += response.pager.links;

                $('#artikel-list').html(html);
            }
        });
    }

    $('#search-form').on('submit', function(e) {
        e.preventDefault();
        const params = $(this).serialize();
        loadArtikel(params);
    });

    $(document).on('click', '#artikel-list .page-link', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        const urlParams = new URLSearchParams(href.split('?')[1]);
        loadArtikel(urlParams.toString());
    });
});
</script>

<?= view('template/admin_footer') ?>