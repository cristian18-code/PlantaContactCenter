<template>
<div class="d-flex align-items-start profile-feed-item">
    <div class="form-group col-md-6">
        <strong><i class="fas fa-address-card mr-1"></i>Numero de cedula</strong>
        <p class="text-muted mt-2">
             {{ colaborador.cedula }} 
        </p>
        <hr>
        <strong><i class="far fa-calendar-alt mr-1"></i> Fecha de nacimiento</strong>
        <p class="text-muted mt-2">
             {{ colaborador.Fnacimiento }} 
        </p>
        <hr>
        <strong><i class="fas fa-venus-mars mr-1"></i>Genero</strong>
        <p class="text-muted mt-2">
             {{ colaborador.genero }} 
        </p>
        <hr>
        <strong><i class="fas fa-school mr-1"></i>Nivel de estudio</strong>
        <p class="text-muted mt-2">
             {{ colaborador.nivelEstudio }} 
        </p>
        <hr>
    </div>
    <div class="form-group col-md-6">
        <strong>
            <i class="fas fa-child mr-1"></i>
            ¿Tiene hijos?</strong>
            <p class="text-muted mt-2">
                 {{ colaborador.hijos }} 
            </p>
        <hr>
        <strong><i class="fas fa-home mr-1"></i>Estrato</strong>
        <p class="text-muted mt-2">
            {{ colaborador.estrato }}
        </p>
        <hr>
        <strong><i class="fas fa-map-marked-alt mr-1"></i> localidad</strong>
        <p class="text-muted mt-2">
            {{ colaborador.localidad }}
        </p>
        <hr>
        <strong><i class="fas fa-map-marker-alt mr-1"></i>Barrio</strong>
        <p class="text-muted mt-2">
            {{ colaborador.barrio }}
        </p>
        <hr>
    </div>
</div>
</template>
<script>

    export default {
        mounted () {
            name: "DatosPersonales" 
        },
        props:{
            colaborador:{
                type: Object,
                default: 'indefined'
            }
        }
    }
</script>