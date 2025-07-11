<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title); ?></title>
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
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
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
            margin-top: 5px;
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

        .preview {
            display: block;
            margin-top: 10px;
            max-width: 150px;
            border-radius: 4px;
            border: 1px solid #ccc;
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

<form method="post" enctype="multipart/form-data" action="<?= site_url('/admin/artikel/edit/' . $data['id']) ?>">

    <p>
        <label for="judul">Judul</label>
        <input type="text" name="judul" value="<?= old('judul', $data['judul']); ?>" required>
    </p>
    <p>
        <label for="isi">Isi</label>
        <textarea name="isi" cols="50" rows="10" required><?= old('isi', $data['isi']); ?></textarea>
    </p>
    <p>
        <label for="id_kategori">Kategori</label>
        <select name="id_kategori" id="id_kategori" required>
            <?php foreach ($kategori as $k): ?>
                <option value="<?= $k['id_kategori']; ?>" <?= ($data['id_kategori'] == $k['id_kategori']) ? 'selected' : ''; ?>>
                    <?= esc($k['nama_kategori']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </p>
    <p>
        <label for="gambar">Upload Gambar</label>
        <input type="file" name="gambar" id="gambar">
        <?php if (!empty($data['gambar'])): ?>
            <img src="<?= base_url('uploads/' . $data['gambar']); ?>" alt="Preview" class="preview">
        <?php endif; ?>
    </p>
    <p>
        <input type="submit" value="Kirim" class="btn">
    </p>
</form>

<?= $this->include('template/admin_footer'); ?>

</body>
</html>
