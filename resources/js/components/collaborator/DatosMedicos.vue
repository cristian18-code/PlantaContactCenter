<template>
<div class="col-lg-9 pl-lg-5">
    <div class="justify-content-between mb-4">
        <div>
            <h4 v-if="colaborador.inf_medical != null">Información Medica</h4>
            <h4 v-else>El colaborador no tiene registrada informacion medica</h4>
        </div>
    </div>    
    <div class="profile-feed">
        <div v-if="colaborador.inf_medical != null" class="d-flex align-items-start profile-feed-item">
            <div class="form-group col-md-4">
                <strong>Eps</strong>
                <p class="text-gray-800 mt-2">
                    {{ colaborador.inf_medical.eps }} 
                </p>
                <hr>
                <strong>Alergias</strong>
                <p class="text-gray-800 mt-2">
                    {{ colaborador.inf_medical.alergias }} 
                </p>
                <hr>
                <strong>Plan MP</strong>
                <p class="text-gray-800 mt-2">
                    {{ colaborador.inf_medical.plan_mp }} 
                </p>
                <hr>
            </div>
            <div class="form-group col-md-4">
                <strong>Medicamentos</strong>
                <p class="text-gray-800 mt-2">
                    {{ colaborador.inf_medical.medicamentos }} 
                </p>
                <hr>
                <strong>Estatura</strong>
                <p class="text-gray-800 mt-2">
                    {{ colaborador.inf_medical.estatura }} Cm 
                </p>
                <hr>
            </div>
            <div class="form-group col-md-4">
                <strong>Peso</strong>
                <p class="text-gray-800 mt-2">
                    {{ colaborador.inf_medical.peso }} Kg 
                </p>
                <hr>
                <strong>RH</strong>
                <p class="text-gray-800 mt-2">
                    {{ colaborador.inf_medical.rh }} 
                </p>
                <hr>
            </div>
        </div>
    </div> 
    <div v-if="colaborador.inf_medical != null">
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseAntecedentes" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" aria-controls="collapseAntecedentes">
                <h6 class="m-0 font-weight-bold text-secondary">Antecedentes Medicos</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseAntecedentes">
                <div class="card-body text-gray-800">
                    {{colaborador.inf_medical.antecedentes}}
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
    export default {
        mounted () {
            name: "DatosMedicos" 
        },
        props:{
            colaborador:{
                type: Object,
                default: 'undefined'
            }
        }
    }
</script>