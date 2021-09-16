<template>
<div class="col-lg-8 pl-lg-5">
    <div class="justify-content-between mb-4">
        <div>
            <h4 v-if="colaborador.familiers.length != 0">Información Familiar</h4>
            <h4 v-else>El colaborador no tiene familiares registrados</h4>
        </div>
    </div>    
    <div v-for="familier in colaborador.familiers" :key="familier.id">
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a :href="'#collapseFamilier'+familier.id" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" :aria-controls="'collapseFamilier'+familier.id">
                <h6 class="m-0 font-weight-bold text-secondary">{{ familier.nombre}}</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse" :id="'collapseFamilier'+familier.id">
                <div class="card-body text-gray-800">
                    <div class="d-flex align-items-start profile-feed-item">
                        <div class="form-group col-md-4">
                            <strong>Fecha de nacimiento</strong>
                            <p class="text-gray-800 mt-2">
                                {{ familier.fNacimiento }} 
                            </p>
                            <hr>
                            <strong>Genero</strong>
                            <p class="text-gray-800 mt-2">
                                {{ familier.genero }} 
                            </p>
                            <hr>
                            <strong>Edad</strong>
                            <p class="text-gray-800 mt-2">
                                {{ familier.edad }} 
                            </p>
                            <hr>
                        </div>
                        <div class="form-group col-md-4">
                            <strong>Ocupación</strong>
                            <p class="text-gray-800 mt-2">
                                {{ familier.ocupacion }}
                            </p>
                            <hr>
                            <strong>Parentesco</strong>
                            <p class="text-gray-800 mt-2">
                                {{ familier.parentesco }} 
                            </p>
                            <hr>
                        </div>
                        <div class="form-group col-md-4">
                            <strong>Celular</strong>
                            <p class="text-gray-800 mt-2">
                                {{ familier.celular }} 
                            </p>
                            <hr>
                            <strong>¿Contactar en emergencia?</strong>
                            <p class="text-gray-800 mt-2">
                                {{ familier.emergencia }}
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
    export default {
        mounted () {
            name: "DatosFamiliares"
        },
        props:{
            colaborador:{
                type: Object,
                default: 'undefined'
            }
        }
    }
</script>