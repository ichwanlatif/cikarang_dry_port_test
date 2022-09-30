<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            <div class="row">
                <div class="col-ms-3">
                    <?php if($this->session->flashData('addNewContainer')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $this->session->flashData('addNewContainer'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    <?php if($this->session->flashData('editContainer')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $this->session->flashData('editContainer'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    <?php if($this->session->flashData('deleteContainer')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $this->session->flashData('deleteContainer'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    <a href="<?= base_url() ?>container/create" class="btn btn-success btn-sm mt-3 mb-3">+ Add New</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-bordered table-striped mt-3" id="container-data">
                        <thead>
                            <tr>
                                <th>Container Number</td>
                                <th>Size</th>
                                <th>Type</th>
                                <th>Gate In Date</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datas as $data) : ?>
                                <tr>
                                    <td><?= $data['ContainerNumber'] ?></td>
                                    <td><?= $data['Size'] ?></td>
                                    <td><?= $data['Type'] ?></td>
                                    <td><?= date("Y-m-d H:i", strtotime($data['GateInDate'])) ?></td>
                                    <td>
                                        <a href="<?= base_url() ?>container/detail/<?= $data['ContainerNumber'] ?>" class="btn btn-sm btn-info m-2">Detail</a>
                                        <a href="<?= base_url() ?>container/update/<?= $data['ContainerNumber'] ?>" class="btn btn-sm btn-warning m-2">Edit</a>
                                        <a href="<?= base_url() ?>container/delete/<?= $data['ContainerNumber'] ?>" class="btn btn-sm btn-danger m-2" onclick="return confirm('Are you sure to delete this container?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
    <script>
        $('#container-data').DataTable({
            "processing": true,
            "responsive":true,
            dom: 'Bfrtip',
            buttons: [ 'excel', 'pdf', 'csv', 'colvis' ]
        });
    </script>
  </body>
</html>