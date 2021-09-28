<template>
<div class="col-lg-9 pl-lg-5">
    <div class="card">
        <div class="align-items-center justify-content-between">
            <div class="card-header py-3 col-md-12">
                <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                    <button type="button"
                        v-for="(module, index) in modules"
                        v-bind:key="module"
                        v-bind:class="['btn btn-secondary ', {active: currentModule === module}]"
                        v-on:click="currentModule = module">
                        {{ modulesName[index] }}
                    </button>         
                </div>
            </div>
            <!-- End of Topbar -->
            <component v-bind:is="currentModule"></component>
        </div>
    </div>
</div>
</template>
<script>
    import axios from 'axios';
    export default {
        data(){
            return {
                colaborador: this.$parent.collaborator,
                arrayNovelties:[],
                currentModule: '',
                modulesName:[
                    'Ver novedades', 'Registrar novedad'
                ],
                modules:[
                    'table-novelties',
                    'create-noveltie'
                ],
                noveltyUpdate: {}
            }
        },
        methods: {
            loadFieldsUpdate(data){
                let me =this;
                let url = '../api/novelties/buscar/'+data.id;
                axios.get(url).then(function (response) {
                    me.noveltyUpdate=response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                }); 
            },
            getNovelties(){
                let me =this;
                let url = '../api/novelties/'+me.colaborador.id //Ruta que hemos creado para que nos devuelva las novedades
                axios.get(url).then(function (response) {
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    me.arrayNovelties = response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            },
            updateNoveltie(){
                let me = this;
                axios.put('../api/novelties/actualizar/'+me.noveltyUpdate.id,this.noveltyUpdate).then(function (response) {
                   me.getNovelties();
                    Swal.fire(
                        '¡Exito!',
                        'Se ha modificado la novedad: ' +response.data.id,
                        'success'
                    );
                   console.log(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            // deleteTask(data){//Esta nos abrirá un alert de javascript y si aceptamos borrará la tarea que hemos elegido
            //     let me =this;
            //     let task_id = data.id
            //     if (confirm('¿Seguro que deseas borrar esta tarea?')) {
            //         axios.delete('/tareas/borrar/'+task_id
            //         ).then(function (response) {
            //             me.getTasks();
            //         })
            //         .catch(function (error) {
            //             console.log(error);
            //         }); 
            //     }
            // },
            // clearFields(){/*Limpia los campos e inicializa la variable update a 0*/
            //     this.name = "";
            //     this.description = "";
            //     this.content = "";
            // }
        },
        beforeMount() {
            this.getNovelties();
        },
        mounted () {
            name: "Novedades"
        }
    }
</script>