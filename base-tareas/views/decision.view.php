<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $data['titulo']; ?></h1>

</div>

<!-- Content Row -->

<div class="row">
    <!-- Exercicio 1 -->
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
    <!-- Exercicio 2 -->
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ex2']; ?></h6>
            </div>
            <div class="card-body">
                <?= $data['n1'] == $data['maximo'] ? "<strong>$data[n1]</strong>" :  $data['n1'] ?>
                <?= $data['n2'] == $data['maximo'] ? "<strong>" . $data['n2'] . "</strong>" :  $data['n2'] ?>
                <?= $data['n3'] == $data['maximo'] ? "<strong>" . $data['n3'] . "</strong>" :  $data['n3'] ?>
            </div>
        </div>
    </div>
    <!-- Exercicio 3 -->
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ex3']; ?></h6>
            </div>
            <div class="card-body">
                <h6>Segundos como entrada: <?= $data['segundos_iniciales'] ?></h6>
                <table class="table table-bordered">
                    <tr>
                        <th>Días</th>
                        <th>Horas</th>
                        <th>Minutos</th>
                        <th>Segundos</th>
                    </tr>
                    <tr>
                        <td><?=$data['dias']?></td>
                        <td><?=$data['horas']?></td>
                        <td><?=$data['minutos']?></td>
                        <td><?=$data['segundos']?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- Exercicio  4 -->
        <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ex4']; ?></h6>
            </div>
            <div class="card-body">
                O ano <?= $data['ano'] ?> <?= $data['es_bisiesto'] ? "" : "NON" ?> é bisiexto
            </div>
        </div>
    </div>
</div>

