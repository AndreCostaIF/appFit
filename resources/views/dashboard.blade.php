@include('masterhead')

<!--PROGRESSO-->
<x-titulo-pagina cor='secondary' icon='bi bi-graph-up-arrow' titulo='Seu desempenho' size='h6' />
<div class="progressos bg-white p-2 shadow row mb-4">
    <x-titulo-pagina icon='bi bi-percent' titulo='Progresso' size='h5' />

    <div class="ProgressoAgua mb-3">
        <span class="">Seu progresso de hoje (Água) <i class="text-primary bi bi-droplet-half"></i></span>
        <div class="progress mt-2">
            <div class="progress-bar  progress-bar-striped progress-bar-animated" role="progressbar"
                aria-label="Animated striped example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                style="width: 90%">
                90%
            </div>
        </div>
    </div>

    <div class="ProgressoProteina mb-3">
        <span class="">Seu progresso de hoje (Proteína) <i class="text-warning bi bi-egg"></i></span>
        <div class="progress mt-2">
            <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar"
                aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                style="width: 75%">
                75%
            </div>
        </div>
    </div>
</div>


<!--RESUMO-->
<div class="bg-white p-2 shadow row mb-4">
    <x-titulo-pagina icon='bi bi-journal-text' titulo='Resumo' size='h5' />
    <div class="d-flex justify-content-around p-2">

        <div class="d-flex flex-column align-items-center  ">
            <span class="border-bottom border-3 border-danger  h6 text-center w-100">
                Kcal
            </span>
            <span class="text-danger h5">550</span>
        </div>

        <div class="d-flex flex-column align-items-center  ">
            <span class="border-bottom border-3 border-info  h6 text-center w-100">
                Carboidratos
            </span>
            <span class="text-info h5">150g</span>
        </div>

        <div class="d-flex flex-column align-items-center">
            <span class="border-bottom border-3 border-warning  h6 text-center w-100">
                Proteína
            </span>
            <span class="text-warning h5">200g</span>
        </div>
    </div>
</div>

<!--FEED-->
<x-titulo-pagina cor='secondary' icon='bi bi-bookmarks' titulo='Melhores amigos' size='h6' />

<div class="progressos bg-white p-2 shadow row mb-4">
    <x-titulo-pagina icon='bi bi-people' titulo='Amigos' size='h5' />
    <hr>
    <div>
        <x-titulo-pagina cor='info' icon='bi bi-people' titulo='Fulano' size='h6' />
        <div class="ProgressoAgua mb-3">
            <span class="">Seu progresso de hoje (Água) <i class="text-primary bi bi-droplet-half"></i></span>
            <div class="progress mt-2">
                <div class="progress-bar  progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-label="Animated striped example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                    style="width: 90%">
                    90%
                </div>
            </div>
        </div>

        <div class="ProgressoProteina mb-3">
            <span class="">Seu progresso de hoje (Proteína) <i class="text-warning bi bi-egg"></i></span>
            <div class="progress mt-2">
                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                    style="width: 75%">
                    75%
                </div>
            </div>
        </div>
    </div>
</div>

<div class="progressos bg-white p-2 shadow row mb-4">
    <x-titulo-pagina icon='bi bi-people' titulo='Amigos' size='h5' />
    <hr>
    <div>
        <x-titulo-pagina cor='info' icon='bi bi-people' titulo='Fulano da silva' size='h6' />
        <div class="ProgressoAgua mb-3">
            <span class="">Seu progresso de hoje (Água) <i class="text-primary bi bi-droplet-half"></i></span>
            <div class="progress mt-2">
                <div class="progress-bar  progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-label="Animated striped example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                    style="width: 90%">
                    90%
                </div>
            </div>
        </div>

        <div class="ProgressoProteina mb-3">
            <span class="">Seu progresso de hoje (Proteína) <i class="text-warning bi bi-egg"></i></span>
            <div class="progress mt-2">
                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                    style="width: 75%">
                    75%
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
