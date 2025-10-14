<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $data['titulo']; ?></h1>

</div>

<!-- Content Row -->

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo']; ?></h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="sec" value="formulario" />
                    <div class="mb-3">
                        <label for="entradanums">Introduza unha lista de numeros separados por comas</label>
                        <textarea class="form-control" id="entradanums" name="entradanums" rows="3"><?= $data['input_numeros'] ?? "" ?></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Enviar" class="btn btn-primary"/>
                    </div>
                </form>
                <div class="row">
                    <?php if(isset($data['maior'])){ ?>
                        <div class='col-6'><div class='alert alert-sucess'>Maior: <?= $data['maior'] ?></div></div>
                        <div class='col-6'><div class='alert alert-sucess'>Menor: <?= $data['menor'] ?></div></div>
                    <?php } else if (isset($data['erros'])) { ?>
                        <div class='col-12'><div class='alert alert-danger'><?= $data['erros']['numeros'] ?></div></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>