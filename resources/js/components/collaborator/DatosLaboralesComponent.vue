<template>
<div class="d-flex align-items-start profile-feed-item">
    <div class="form-group col-md-6">
        <strong><i class="far fa-calendar-alt mr-1"></i> Fecha de ingreso</strong>
        <p class="text-muted mt-2">
             {{ colaborador.Fingreso }} 
        </p>
        <hr>
        <strong><i class="fas fa-contract mr-1"></i>Tipo de contrato</strong>
        <p class="text-muted mt-2">
             {{ colaborador.contrato }} 
        </p>
        <hr>
        <strong><i class="fas fa-school mr-1"></i>Supervisor</strong>
        <p class="text-muted mt-2">
             {{ colaborador.supervisor }} 
        </p>
        <hr>
        <strong><i class="fas fa-school mr-1"></i>Sueldo</strong>
        <p class="text-muted mt-2">
             {{ colaborador.sueldo }} 
        </p>
        <hr>
        <strong><i class="fas fa-school mr-1"></i>Site</strong>
        <p class="text-muted mt-2">
             {{ colaborador.site }} 
        </p>
        <hr>
    </div>
    <div class="form-group col-md-6">
        <strong><i class="far fa-calendar-alt mr-1"></i> Fecha fin de contrato</strong>
        <p class="text-muted mt-2">
             {{ colaborador.finContrato }} 
        </p>
        <hr>
        <strong>
            <i class="fas fa-child mr-1"></i>Cargo en nomina</strong>
            <p class="text-muted mt-2">
                 {{ colaborador.cargoNomina }} 
            </p>
        <hr>
        <strong><i class="fas fa-home mr-1"></i>Campaña</strong>
        <p class="text-muted mt-2">
            {{ colaborador.campania }}
        </p>
        <hr>
        <strong><i class="fas fa-map-marked-alt mr-1"></i> Tipo </strong>
        <p class="text-muted mt-2">
            {{ colaborador.tipo }}
        </p>
        <hr>
    </div>
</div>
</template>
<script>

    export default {
        mounted () {
            name: "DatosLaborales"
            console.log(this.colaborador)
        },
        props:{
            colaborador:{
                type: Object,
                default: 'undefined'
            }
        }
    }
</script>