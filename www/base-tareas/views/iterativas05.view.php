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
                        <label for="entradanums">Introduza un texto</label>
                        <textarea class="form-control" id="entradatext" name="entradatext" rows="3"><?= $data['input_texto'] ?? "" ?></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Enviar" class="btn btn-primary" name="enviar" id="enviar"/>
                    </div>
                </form>
                <div class="row">
                    <?php if(isset($data['cuenta_palabras'])){ ?>
                        <div class='col-12'><div class='alert alert-success'>Cuenta de las palabras: <?= $data['cuenta_palabras'] ?></div></div>
                    <?php } else if (isset($data['erros'])) { ?>
                        <div class='col-12'><div class='alert alert-danger'><?= $data['erros']['texto'] ?></div></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>