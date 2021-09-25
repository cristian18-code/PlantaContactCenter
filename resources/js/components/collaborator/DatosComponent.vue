<template>
<div class="row">
    <div class="col-lg-3">
        <div class="border-bottom text-center pb-4" id="cont-image">        
            <div class="d-flex justify-content-between">
            </div>
        </div>
        <div class="border-bottom py-4">
            <div class="list-group">
                <button type="button"
                    @click="changeVisibility('personales')"
                    v-bind:class="[mostrarDatosPersonales ? 'active' : '']"
                    class="list-group-item list-group-item-action">
                    Datos personales
                </button>
                <button type="button"
                    @click="changeVisibility('laborales')"
                    v-bind:class="[mostrarDatosLaborales ? 'active' : '']"
                    class="list-group-item list-group-item-action">Datos laborales</button>
                <button type="button"
                    @click="changeVisibility('medicos')"
                    v-bind:class="[mostrarDatosMedicos ? 'active' : '']"
                    class="list-group-item list-group-item-action">
                    Datos Medicos
                </button>
                <button type="button"
                    @click="changeVisibility('familiares')"
                    v-bind:class="[mostrarDatosFamiliares ? 'active' : '']"
                    class="list-group-item list-group-item-action">
                    Familiares
                </button>
                <button type="button"
                    @click="changeVisibility('estudios')"
                    v-bind:class="[mostrarEstudios ? 'active' : '']"
                    class="list-group-item list-group-item-action">
                    Estudios
                </button>
                <button type="button"
                    @click="changeVisibility('novedades')"
                    v-bind:class="[mostrarNovedades ? 'active' : '']"
                    class="list-group-item list-group-item-action">
                    Gestionar novedades
                </button>
                <a  href="#"
                    data-toggle="modal" data-target="#exampleModal"
                    v-bind:class="[collaborator.estado == 'ACTIVO' ? 'btn-success' : 'btn-danger']"
                    class="btn btn-block change-status">{{collaborator.estado}}
                </a>
            </div>
        </div>
    </div>                   
    <datos-personales v-show="mostrarDatosPersonales" />
    <datos-laborales v-show="mostrarDatosLaborales" />
    <datos-medicos v-show="mostrarDatosMedicos" />
    <datos-familiares v-show="mostrarDatosFamiliares" />
    <estudios v-show="mostrarEstudios"/>
    <novedades v-show="mostrarNovedades"/>
</div>
</template>
<script>
    import DatosPersonales from "../../components/collaborator/DatosPersonalesComponent.vue";
    import DatosLaborales from "../../components/collaborator/DatosLaboralesComponent.vue";
    import DatosMedicos from "../../components/collaborator/DatosMedicos.vue";
    import DatosFamiliares from "../../components/collaborator/DatosFamiliares.vue";
    import Estudios from "../../components/collaborator/Estudios.vue";
    import Novedades from "./novelties/Novedades.vue";

    export default {
        components: {
            DatosPersonales,
            DatosLaborales,
            DatosMedicos,
            DatosFamiliares,
            Estudios,
            Novedades
        },
        data: function(){            
            return {
                mostrarDatosPersonales: true,
                mostrarDatosLaborales: false,
                mostrarDatosMedicos: false,
                mostrarDatosFamiliares: false,
                mostrarEstudios: false,
                mostrarNovedades: false,
                collaborator: JSON.parse(this.$attrs.colaborador),
            }
        },
        methods: {
            mounted_image: function() {
                if (this.collaborator.image == null || this.collaborator.image == '') {
                    document.getElementById("cont-image").innerHTML="<img src='../public/media/img/user.png' alt='profile' class='img-lg mb-3' />";
                } else {
                    document.getElementById("cont-image").innerHTML="<img src='../public/archivos/image_collaborator/"+this.collaborator.image+"' alt='profile' class='img-lg mb-3' />";
                }
            },
            changeVisibility: function (mostrar) {

                switch (mostrar) {
                    case 'laborales':
                        this.mostrarDatosLaborales = true;
                        this.mostrarDatosPersonales = false;
                        this.mostrarDatosMedicos = false;
                        this.mostrarDatosFamiliares = false;
                        this.mostrarEstudios = false;
                        this.mostrarNovedades = false;
                        break;
                    case 'medicos':
                        this.mostrarDatosLaborales = false;
                        this.mostrarDatosPersonales = false;
                        this.mostrarDatosMedicos = true;
                        this.mostrarDatosFamiliares = false;
                        this.mostrarEstudios = false;
                        this.mostrarNovedades = false;
                        break;
                    case 'personales':
                        this.mostrarDatosLaborales = false;
                        this.mostrarDatosPersonales = true;
                        this.mostrarDatosMedicos = false;
                        this.mostrarDatosFamiliares = false;
                        this.mostrarEstudios = false;
                        this.mostrarNovedades = false;
                        break;
                    case 'familiares':
                        this.mostrarDatosLaborales = false;
                        this.mostrarDatosPersonales = false;
                        this.mostrarDatosMedicos = false;
                        this.mostrarDatosFamiliares = true;
                        this.mostrarEstudios = false;
                        this.mostrarNovedades = false;
                        break;
                    case 'estudios':
                        this.mostrarDatosLaborales = false;
                        this.mostrarDatosPersonales = false;
                        this.mostrarDatosMedicos = false;
                        this.mostrarDatosFamiliares = false;
                        this.mostrarEstudios = true;
                        this.mostrarNovedades = false;
                        break;
                    case 'novedades':
                        this.mostrarDatosLaborales = false;
                        this.mostrarDatosPersonales = false;
                        this.mostrarDatosMedicos = false;
                        this.mostrarDatosFamiliares = false;
                        this.mostrarEstudios = false;
                        this.mostrarNovedades = true;
                        break;
                    default:
                        this.mostrarDatosLaborales = false;
                        this.mostrarDatosPersonales = true;
                        this.mostrarDatosMedicos = false;
                        this.mostrarDatosFamiliares = false;
                        this.mostrarEstudios = false;
                        this.mostrarNovedades = false;
                        break;
                }
            }
        },
        mounted () {
            name: "Datos"
            this.mounted_image();
            // console.log(this.collaborator);
        }
    }
</script>