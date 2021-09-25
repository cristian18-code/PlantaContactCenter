<template>
    <form @submit.prevent="createNoveltie()">
        <div class="card-body">
            <div class="form-group row col-md-12">
                <label for="novedad" class="col-md-4 col-form-label">Nombre de la novedad</label>
                <input v-model="novedad" name="novedad" id="novedad" type="text" class="form-control" autocomplete="off" required>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-6">
                    <label for="Finicio" class="col-form-label">Fecha y hora de inicio</label>
                    <input v-model="Finicio" name="Finicio" id="Finicio" type="datetime-local" class="form-control" required>
                </div>
                <div class="form-group row col-md-6">
                    <label for="Ffin" class="col-form-label">Fecha y hora final</label>
                    <input v-model="Ffin" name="Ffin" id="Ffin" type="datetime-local" class="form-control" required>
                </div>
            </div>
            <div class="row col-md-12">
                <label for="observaciones">Detalles de la novedad</label>
                <textarea name="observaciones" id="observaciones" class="form-control" v-model="observaciones" required></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn col-3 btn-primary mr-2">Agregar</button>
            <a class="btn btn-danger col-3 float-right"
            @click="$parent.currentModule = 'table-novelties'">
                Cancelar
            </a>
        </div>
    </form>
</template>
<script>
import axios from 'axios';
export default {
    mounted () {
        name: "Create",
        console.log(this.$parent.colaborador.id);
    },
    data(){
        return {
            novedad:'',
            Finicio:'',
            Ffin:'',
            observaciones:'',
        }
    },
    methods: {
        createNoveltie(){
            let me =this;
            let url = '../api/novelties/guardar' //Ruta que hemos creado para enviar una novedad y guardarla
            axios.post(url,{ //estas variables son las que enviaremos para que crear la novedad
                'collaborator_id':this.$parent.colaborador.id,
                'novedad':this.novedad,
                'Finicio':this.Finicio,
                'Ffin':this.Ffin,
                'observaciones':this.observaciones,
            }).then(function (response) {
                Swal.fire(
                    '¡Exito!',
                    'Se ha registrado la novedad: ' +response.data.novedad,
                    'success'
                );
                me.$parent.getNovelties();
                me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0

            })
            .catch(function (error) {
                Swal.fire(
                    '¡Error!',
                    'Ha ocurrido un problema..',
                    'error'
                );
                console.log(error);
            });   

        },
        clearFields(){/*Limpia los campos e inicializa*/
            this.novedad = "";
            this.Finicio = "";
            this.Ffin = "";
            this.observaciones = "";
        }
    }
}
</script>