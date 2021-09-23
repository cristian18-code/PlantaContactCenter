<template>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Tabla de novedades</h4>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Novedad</th>
                                    <th>Estado</th>
                                    <th>Fecha inicio</th>
                                    <th>Fecha fin</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tbody-novelties">
                                <tr v-for="noveltie in novelties" :key="noveltie.id">
                                    <th scope="row">{{ noveltie.id }}</th>
                                    <td>
                                        <a href="#">{{noveltie.novedad}}</a>
                                    </td>
                                    <td><span v-bind:class="[noveltie.estado == 'En curso' ? 'bg-success' : 'bg-danger']" class="badge color-white">{{noveltie.estado}}</span></td>
                                    <td>{{new Date(noveltie.Finicio).toLocaleDateString()}}</td>
                                    <td>{{new Date(noveltie.Ffin).toLocaleDateString()}}</td>
                                    <td><a class="btn btn-info btn-circle btn-sm" href="#" title="Editar">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    mounted () {
        name: "Table",
        console,log(this.novelties);
    },
    data(){
        return {
            novelties: this.$parent.colaborador.novelties,
        }
    }
}
</script>