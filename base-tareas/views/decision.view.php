<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $data['titulo']; ?></h1>

</div>

<!-- Content Row -->

<div class="row">

    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ex1']; ?></h6>
            </div>
            <div class="card-body">
                <?= $data['num1']?> <?= $data['e_divisible'] ? "" : "NON "?> é divisible entre
                <?= $data['num2']?>
            </div>
        </div>
    </div>
</div>

