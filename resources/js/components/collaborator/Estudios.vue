<template>
<div class="col-lg-9 pl-lg-5">
    <div class="justify-content-between mb-4">
        <div>
            <h4 v-if="colaborador.studies.length != 0" class="">Información Academica</h4>
            <h4 v-else>El colaborador no tiene estudios registrados</h4>
        </div>
    </div>    
    <div v-for="studie in colaborador.studies" :key="studie.id">
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a :href="'#collapseStudie'+studie.id" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" :aria-controls="'collapseStudie'+studie.id">
                <h6 class="m-0 font-weight-bold text-secondary">{{ studie.titulo}}</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse" :id="'collapseStudie'+studie.id">
                <div class="card-body text-gray-800">
                    <div class="d-flex align-items-start profile-feed-item">
                        <div class="form-group col-md-4">
                            <strong>Nivel</strong>
                            <p class="text-gray-800 mt-2">
                                {{ studie.nivel }} 
                            </p>
                            <hr>
                        </div>
                        <div class="form-group col-md-4">
                            <strong>Titulo</strong>
                            <p class="text-gray-800 mt-2">
                                {{ studie.titulo }} 
                            </p>
                            <hr>
                        </div>
                        <div class="form-group col-md-4">
                            <strong>Estado</strong>
                            <p class="text-gray-800 mt-2">
                                {{ studie.estado }} 
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
            name: "Estudios"
        },
        props:{
            colaborador:{
                type: Object,
                default: 'undefined'
            }
        }
    }
</script>