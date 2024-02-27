<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Codeigniter 3" />
    <meta name="author" content="User" />
    <title><?= $title; ?></title>
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>css/custom.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Daterangepicker -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css">
    <!-- jquery -->
    <script src="<?= base_url('assets/') ?>js/jquery-3.4.1.min.js"></script>
    <script>
        let base_url = "<?= base_url(); ?>";
    </script>

    </head>
<body onload="window.print()">  
<!--<body>-->

<h1>Nama Toko</h1>
<table class="table table-hover mt-3 mb-0">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Nama Barang</th>
                                <th>Harga Satuan</th>
                                <th>Jumlah Beli</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $total=0;
                            foreach ($detail as $row) : ?>
                                <tr>
                                    <td align="center"><?= $no++; ?>.</td>
                                    <td><?= $row->namaBarang; ?></td>
                                    <td><?= format_uang($row->harga) ?></td>
                                    <td align="center"><?= $row->qty; ?></td>
                                    <td align="right"><?= format_uang($row->subtotal) ?></td>
                                </tr>   
                            <?php 
                                    $total= $total + $row->subtotal;
                        
                                    endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4" class="text-right">Total Harga</th>
                                <th class="text-right"><?= format_uang($total) ?></th>
                            </tr>
                        </tfoot>
                    </table>
</body>
</html>