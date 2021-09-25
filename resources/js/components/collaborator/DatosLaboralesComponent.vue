<template>
<div class="col-lg-9 pl-lg-5">
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
                    {{ $parent.collaborator.Fingreso }} 
                </p>
                <hr>
                <strong><i class="fas fa-file-signature mr-1"></i>Tipo de contrato</strong>
                <p class="text-muted mt-2">
                    {{ $parent.collaborator.contrato }} 
                </p>
                <hr>
                <strong><i class="fas fa-user-tie mr-1"></i>Supervisor</strong>
                <p class="text-muted mt-2">
                    {{ $parent.collaborator.supervisor }} 
                </p>
                <hr>
                <strong><i class="fas fa-money-bill-alt mr-1"></i>Sueldo</strong>
                <p class="text-muted mt-2">
                    $ {{ $parent.collaborator.sueldo }} 
                </p>
                <hr>
                <strong><i class="fas fa-school mr-1"></i>Site</strong>
                <p class="text-muted mt-2">
                    {{ $parent.collaborator.site }} 
                </p>
                <hr>
                <strong><i class="fas fa-id-card mr-1"></i>Login</strong>
                <p class="text-muted mt-2">
                    {{ $parent.collaborator.login }} 
                </p>
                <hr>
            </div>
            <div class="form-group col-md-6">
                <strong>
                    <i class="fas fa-file-contract mr-1"></i>Cargo en nomina</strong>
                    <p class="text-muted mt-2">
                        {{ $parent.collaborator.cargoNomina }} 
                    </p>
                <hr>
                <strong><i class="fas fa-chart-area mr-1"></i>Campaña</strong>
                <p class="text-muted mt-2">
                    {{ $parent.collaborator.campania }}
                </p>
                <hr>
                <strong><i class="fas fa-address-book mr-1"></i> Tipo </strong>
                <p class="text-muted mt-2">
                    {{ $parent.collaborator.tipo }}
                </p>
                <hr>
                <strong><i class="far fa-calendar-alt mr-1"></i> Fecha fin de contrato</strong>
                <p class="text-muted mt-2">
                    {{ $parent.collaborator.finContrato }} 
                </p>
                <hr>
                <strong><i class="fas fa-handshake-alt-slash mr-1"></i> Motivo de retiro</strong>
                <p class="text-muted mt-2">
                    {{ $parent.collaborator.motivoRetiro }} 
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
        }
    }
</script>