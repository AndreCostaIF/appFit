@include('masterhead')

<!--PROGRESSO-->
<x-titulo-pagina cor='secondary' icon='bi bi-graph-up-arrow' titulo='Seu desempenho' size='h6' />
<div class="progressos bg-white p-2 shadow row mb-4">
    <x-titulo-pagina icon='bi bi-percent' titulo='Progresso' size='h5' />

    <div class="ProgressoAgua mb-3">
        <span class="">Nível de água <i class="text-primary bi bi-droplet-half"></i></span>
        <div class="progress mt-2">
            <div class="progress-bar  progress-bar-striped progress-bar-animated" role="progressbar"
                aria-label="Animated striped example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                style="width: 90%">
                90%
            </div>
        </div>
        <small class="opacity-50">Você já bebeu: <span>3.500ml</span></small>
    </div>
</div>

<!--CADASTRO-->
<x-titulo-pagina cor='secondary' icon='bi bi-plus' titulo='Registro' size='h6' />
<div class="progressos bg-white p-2 shadow row mb-4">
    <x-titulo-pagina icon='bi bi-droplet-half' titulo='Ingestão de água' size='h5' />
<div id="form-wrapper">
    <form action="/p/quote.php" method="GET">
      <h6 id="form-title">Quanto de água você bebeu?</h6>
      <div id="debt-amount-slider">
        <input type="radio" name="debt-amount" id="1" value="150" required>
        <label for="1" data-debt-amount="150ml"></label>
        <input type="radio" name="debt-amount" id="2" value="250" required>
        <label for="2" data-debt-amount="250ml"></label>
        <input type="radio" name="debt-amount" id="3" value="300" required>
        <label for="3" data-debt-amount="300ml"></label>
        <input type="radio" name="debt-amount" id="4" value="500" required>
        <label for="4" data-debt-amount="500ml"></label>
        <input type="radio" name="debt-amount" id="5" value="1000" required>
        <label for="5" data-debt-amount="1L"></label>
        <div id="debt-amount-pos"></div>
      </div>
    </form>

    <button type="submit" class="btn btn-outline-dark">Registrar +</button>
  </div>
</div>

<!--HISTORICO-->
<x-titulo-pagina cor='secondary' icon='bi bi-clock' titulo='Historico' size='h6' />
<div class="progressos bg-white p-2 shadow row mb-4">
    <x-titulo-pagina icon='bi bi-clock' titulo='Registros anteriores' size='h5' />

    <div class="mb-3">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Data</th>
                <th scope="col">Hora</th>
                <th scope="col">Quantidade</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row">01/06/2023</td>
                <td>10h44</td>
                <th>500ml</th>
              </tr>

              <tr>
                <td scope="row">01/06/2023</td>
                <td>10h44</td>
                <th>500ml</th>
              </tr>

              <tr>
                <td scope="row">01/06/2023</td>
                <td>10h44</td>
                <th>1L</th>
              </tr>

            </tbody>
          </table>
    </div>
</div>


<!--INFO-->
<x-titulo-pagina cor='secondary' icon='bi bi-info-circle' titulo='Informações' size='h6' />
<div class="progressos bg-white p-2 shadow row mb-4">
    <x-titulo-pagina icon='bi bi-info-circle' titulo='Se liga!' size='h5' />

    <div class="text-center mb-3">
        <p class=" text-center">
            A cada 20Kg é necessário em media de 1L de água. <br>
            O cálculo feito para saber a quantidade de água que seu corpo precisa por dia
            é feita <b>PESO / 20 </b>.
        </p>

        <span class=" badge text-bg-warning">
            Este site não dispensa avaliação médica!
        </span>

    </div>
</div>
@include('footer')
