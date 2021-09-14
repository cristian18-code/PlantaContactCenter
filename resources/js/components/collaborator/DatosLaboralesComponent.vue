<template>
<div class="col-lg-8 pl-lg-5">
    <div class="d-flex justify-content-between mb-4">
        <div>
            <h4>Información Laboral</h4>
        </div>
    </div>
    <div class="profile-feed">
        <div class="d-flex align-items-start profile-feed-item">
            <div class="form-group col-md-6">
                <strong><i class="far fa-calendar-alt mr-1"></i> Fecha de ingreso</strong>
                <p class="text-muted mt-2">
                    {{ colaborador.Fingreso }} 
                </p>
                <hr>
                <strong><i class="fas fa-file-signature mr-1"></i>Tipo de contrato</strong>
                <p class="text-muted mt-2">
                    {{ colaborador.contrato }} 
                </p>
                <hr>
                <strong><i class="fas fa-user-tie mr-1"></i>Supervisor</strong>
                <p class="text-muted mt-2">
                    {{ colaborador.supervisor }} 
                </p>
                <hr>
                <strong><i class="fas fa-money-bill-alt mr-1"></i>Sueldo</strong>
                <p class="text-muted mt-2">
                    $ {{ colaborador.sueldo }} 
                </p>
                <hr>
                <strong><i class="fas fa-school mr-1"></i>Site</strong>
                <p class="text-muted mt-2">
                    {{ colaborador.site }} 
                </p>
                <hr>
                <strong><i class="fas fa-id-card mr-1"></i>Login</strong>
                <p class="text-muted mt-2">
                    {{ colaborador.login }} 
                </p>
                <hr>
            </div>
            <div class="form-group col-md-6">
                <strong>
                    <i class="fas fa-file-contract mr-1"></i>Cargo en nomina</strong>
                    <p class="text-muted mt-2">
                        {{ colaborador.cargoNomina }} 
                    </p>
                <hr>
                <strong><i class="fas fa-chart-area mr-1"></i>Campaña</strong>
                <p class="text-muted mt-2">
                    {{ colaborador.campania }}
                </p>
                <hr>
                <strong><i class="fas fa-address-book mr-1"></i> Tipo </strong>
                <p class="text-muted mt-2">
                    {{ colaborador.tipo }}
                </p>
                <hr>
                <strong><i class="far fa-calendar-alt mr-1"></i> Fecha fin de contrato</strong>
                <p class="text-muted mt-2">
                    {{ colaborador.finContrato }} 
                </p>
                <hr>
                <strong><i class="fas fa-handshake-alt-slash mr-1"></i> Motivo de retiro</strong>
                <p class="text-muted mt-2">
                    {{ colaborador.motivoRetiro }} 
                </p>
                <hr>
            </div>
        </div>
    </div>
</div>
</template>
<script>

    export default {
        mounted () {
            name: "DatosLaborales"
        },
        props:{
            colaborador:{
                type: Object,
                default: 'undefined'
            }
        }
    }
</script>