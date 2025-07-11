<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f4f4f4;
            color: #5a5a5a;
            padding: 20px;
        }

        h2 {
            color: #1f5faa;
            margin-bottom: 20px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            max-width: 600px;
        }

        p {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="file"] {
            font-size: 14px;
        }

        .btn {
            background-color: #1f5faa;
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px 18px;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #2b83ea;
            transform: translateY(-1px);
        }

        .error {
            background-color: #f8d7da;
            color: #842029;
            border: 1px solid #f5c2c7;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<?= $this->include('template/admin_header'); ?>

<h2><?= esc($title); ?></h2>

<?php /*
if (!empty($validation)) : ?>
    <div class="error">
        <?= $validation->listErrors(); ?>
    </div>
<?php endif;
*/ ?>


<form action="<?= site_url('/admin/artikel/add') ?>" method="post" enctype="multipart/form-data">
    <p>
        <label for="judul">Judul</label>
        <input type="text" name="judul" value="<?= old('judul') ?>" required>
    </p>
    <p>
        <label for="isi">Isi</label>
        <textarea name="isi" cols="50" rows="10"><?= old('isi') ?></textarea>
    </p>
    <p>
        <label for="id_kategori">Kategori</label>
        <select name="id_kategori" id="id_kategori" required>
            <?php foreach($kategori as $kat): ?>
                <option value="<?= $kat['id_kategori']; ?>" <?= old('id_kategori') == $kat['id_kategori'] ? 'selected' : '' ?>>
                    <?= esc($kat['nama_kategori']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </p>
    <p>
        <label for="gambar">Upload Gambar</label>
        <input type="file" name="gambar">
    </p>
    <p><input type="submit" value="Kirim" class="btn"></p>
</form>

<?= $this->include('template/admin_footer'); ?>

</body>
</html>
