<h1 class="h1Geral">Cadastrar Novas Matrículas</h1>

<div class="col-md-12">




    <form class="form-horizontal" action="index.php?p=matrículas&m=cadastrar" method="POST" enctype="multipart/form-data">
        <div class="card-body">



            <div class="col-md-8 form-dash">

                <div class="mb-3">
                    <label class="labelfunc" for="dataInicioMatricula" class="form-label">Data de Início</label>
                    <input class="inputdatafuncAdmis" type="date" class="form-control" name="dataInicioMatricula" id="dataInicioMatricula" required placeholder="data de Inicio">
                </div>

                <div class="mb-3">
                    <label class="labelfunc" for="dataFimMatricula" class="form-label">Data do Fim</label>
                    <input class="inputdatafuncAdmis" type="date" class="form-control" name="dataFimMatricula" id="dataFimMatricula" required placeholder="data de final">
                </div>

                <div class="row">

                    <div class="form-group col-sm-6 offset-md-2">
                        <select class="form-select col-sm-2" aria-label="Default select example" name="statusMatricula" required>
                            <option selected="">Seleciona o Status da Matrícula</option>
                            <option value="ATIVO">ATIVO</option>
                            <option value="DESATIVADO">DESATIVADO</option>
                            <option value="INATIVO">INATIVO</option>

                        </select>
                    </div>
                </div>


                


                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">Cadastrar Matrícula</button>
                </div>



            </div>



        </div>
    </form>


</div>