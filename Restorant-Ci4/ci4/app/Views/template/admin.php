<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Layout</title>
</head>
<body>
    <nav>
        <ul>
            <a href="<?= base_url() ?>/admin/kategori"><li>Select</a></li>
            <a href="<?= base_url() ?>/admin/kategori/form"><li>Insert</a></li>
            <a href="<?= base_url() ?>/admin/kategori/update/5"><li>Update</a></li>
        </ul>
    </nav>
        <?= $this->renderSection('content') ?>
</body>
</html>