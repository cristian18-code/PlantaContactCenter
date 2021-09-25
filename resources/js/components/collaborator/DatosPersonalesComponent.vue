<template>
<div class="col-lg-9 pl-lg-5">
    <div class="d-flex justify-content-between mb-4">
        <div>
            <h4>Información Personal</h4>
        </div>
    </div>
    <div class="profile-feed">
        <div class="d-flex align-items-start profile-feed-item">
            <div class="form-group col-md-6">
                <strong><i class="fas fa-address-card mr-1"></i>Numero de cedula</strong>
                <p class="text-muted mt-2">
                    {{ $parent.collaborator.cedula }} 
                </p>
                <hr>
                <strong><i class="far fa-calendar-alt mr-1"></i> Fecha de nacimiento</strong>
                <p class="text-muted mt-2">
                    {{ $parent.collaborator.Fnacimiento }} 
                </p>
                <hr>
                <strong><i class="fas fa-pager mr-1"></i> Edad</strong>
                <p class="text-muted mt-2">
                    {{ $parent.collaborator.edad }} años
                </p>
                <hr>
                <strong><i class="fas fa-venus-mars mr-1"></i>Genero</strong>
                <p class="text-muted mt-2">
                    {{ $parent.collaborator.genero }} 
                </p>
                <hr>
                <strong>
                    <i class="fas fa-child mr-1"></i>
                    ¿Tiene hijos?</strong>
                    <p class="text-muted mt-2">
                        {{ $parent.collaborator.hijos }} 
                    </p>
                <hr>
            </div>
            <div class="form-group col-md-6">
                <strong>
                    <i class="fas fa-phone mr-1"></i>
                    Celular</strong>
                    <p class="text-muted mt-2">
                        {{ $parent.collaborator.celular }} 
                    </p>
                <hr>
                <strong>
                    <i class="fas fa-at mr-1"></i>
                    Correo</strong>
                    <p class="text-muted mt-2">
                        {{ $parent.collaborator.correo }} 
                    </p>
                <hr>
                <strong><i class="fas fa-home mr-1"></i>Estrato</strong>
                <p class="text-muted mt-2">
                    {{ $parent.collaborator.estrato }}
                </p>
                <hr>
                <strong><i class="fas fa-map-marked-alt mr-1"></i> localidad</strong>
                <p class="text-muted mt-2">
                    {{ $parent.collaborator.localidad }}
                </p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i>Barrio</strong>
                <p class="text-muted mt-2">
                    {{ $parent.collaborator.barrio }}
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
            name: "DatosPersonales"
        }
    }
</script>