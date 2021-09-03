<template>
<div class="row">
    <div class="col-lg-4">
        <div class="border-bottom text-center pb-4" id="cont-image">        
            <div class="d-flex justify-content-between">
            </div>
        </div>
        <div class="border-bottom py-4">
            <div class="list-group">
                <button type="button"
                        @click="changeVisibility"
                        v-bind:class="[mostrarDatosPersonales ? 'active' : '']"
                        class="list-group-item list-group-item-action">
                    Datos personales
                </button>
                <button type="button"
                        @click="changeVisibility"
                        v-bind:class="[mostrarDatosLaborales ? 'active' : '']"
                    class="list-group-item list-group-item-action">Datos laborales</button>
                <a  href="#"
                    data-toggle="modal" data-target="#exampleModal"
                    v-bind:class="[collaborator.estado == 'ACTIVO' ? 'btn-success' : 'btn-danger']"
                    class="btn btn-block change-status">{{collaborator.estado}}</a>
            </div>
        </div>
    </div>                        
    <div class="col-lg-8 pl-lg-5">
        <div class="d-flex justify-content-between mb-4">
            <div>
                <h4 v-if="mostrarDatosPersonales">Información Personal</h4>
                <h4 v-if="mostrarDatosLaborales">Información Laboral</h4>
            </div>
        </div>
        <div class="profile-feed">

            <datos-personales v-if="mostrarDatosPersonales" :colaborador="collaborator" />
            <datos-laborales v-if="mostrarDatosLaborales" :colaborador="collaborator" />

        </div>
    </div>
</div>
</template>
<script>
    import DatosPersonales from "../../components/collaborator/DatosPersonalesComponent.vue";
    import DatosLaborales from "../../components/collaborator/DatosLaboralesComponent.vue";

    export default {
        mounted () {
            name: "DatosLaborales"
            this.mounted_image();
        },
        components: {
            DatosPersonales,
            DatosLaborales
        },
        props: ['variable'],
        data: function(){            
            return {
                mostrarDatosPersonales: true,
                mostrarDatosLaborales: false,
                collaborator: JSON.parse(this.variable)
            }
        },
        methods: {
            mounted_image: function() {
                if (this.collaborator.image != null) {
                    document.getElementById("cont-image").innerHTML="<img src='../public/archivos/image_collaborator/"+this.collaborator.image+"' alt='profile' class='img-lg mb-3' />";
                } else {
                    document.getElementById("cont-image").innerHTML="<img src='../public/media/img/user.png' alt='profile' class='img-lg mb-3' />";
                }
            },
            changeVisibility: function () {                
                this.mostrarDatosLaborales = !this.mostrarDatosLaborales;
                this.mostrarDatosPersonales = !this.mostrarDatosPersonales;
            }
        }
    }
</script>