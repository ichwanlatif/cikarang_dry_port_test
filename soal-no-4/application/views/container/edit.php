<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Form Add Container
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url() ?>container/update/<?= $data['ContainerNumber'] ?>">
                            <div class="mb-3">
                                <label for="container-number" class="form-label">Container Number</label>
                                <input type="text" class="form-control" name="ContainerNumber" value="<?= $data['ContainerNumber'] ?>" readonly="true">
                                <div class="form-text text-danger"><?= form_error('ContainerNumber') ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="size" class="form-label">Size</label>
                                <input type="number" class="form-control" name="Size" value="<?= $data['Size'] ?>">
                                <div class="form-text text-danger"><?= form_error('Size') ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <select class="form-select" data-live-search="true" name="Type" value="<?= $data['Type'] ?>">
                                    <option value="Dry">Dry</option>
                                    <option value="Reefer">Reefer</option>
                                </select>
                                <div class="form-text text-danger"><?= form_error('Type') ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="GateInDate" id="GateInDate" class="form-label">Gate In Date</label>
                                <input type="datetime-local" class="form-control" name="GateInDate" value="<?= $data['GateInDate'] ?>">
                                <div class="form-text text-danger"><?= form_error('GateInDate') ?></div>
                            </div>
                            <div class="form-footer">
                                <a href="<?= base_url() ?>container" class="btn btn-secondary m-2">Batal</a>
                                <button type="submit" class="btn btn-primary m-2">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>