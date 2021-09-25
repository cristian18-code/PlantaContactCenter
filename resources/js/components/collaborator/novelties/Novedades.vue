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
                ]
            }
        },
        methods:{
            getNovelties(){
                let me =this;
                let url = '../api/novelties/'+me.$parent.collaborator.id //Ruta que hemos creado para que nos devuelva las novedades
                axios.get(url).then(function (response) {
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    me.arrayNovelties = response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            },
            // updateTasks(){/*Esta funcion, es igual que la anterior, solo que tambien envia la variable update que contiene el id de la
            //     tarea que queremos modificar*/
            //     let me = this;
            //     axios.put('/tareas/actualizar',{
            //         'id':this.update,
            //         'name':this.name,
            //         'description':this.description,
            //         'content':this.content,
            //     }).then(function (response) {
            //        me.getTasks();//llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
            //        me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0
            //     })
            //     .catch(function (error) {
            //         console.log(error);
            //     });
            // },
            // loadFieldsUpdate(data){ //Esta función rellena los campos y la variable update, con la tarea que queremos modificar
            //     this.update = data.id
            //     let me =this;
            //     let url = '/tareas/buscar?id='+this.update;
            //     axios.get(url).then(function (response) {
            //         me.name= response.data.name;
            //         me.description= response.data.description;
            //         me.content= response.data.content;

            //     })
            //     .catch(function (error) {
            //         // handle error
            //         console.log(error);
            //     }); 
            // },
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
            //     this.update = 0;
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