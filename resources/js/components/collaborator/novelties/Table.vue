<template>
<div>    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="novelties">
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
                    <tr v-for="novelty in $parent.arrayNovelties" :key="novelty.id">
                        <th scope="row">{{ novelty.id }}</th>
                        <td>
                            <a href="#">{{novelty.novedad}}</a>
                        </td>
                        <td><span v-bind:class="[novelty.estado == 'En curso' ? 'bg-success' : 'bg-danger']" class="badge color-white">{{novelty.estado}}</span></td>
                        <td>{{new Date(novelty.Finicio).toLocaleDateString()}}</td>
                        <td>{{new Date(novelty.Ffin).toLocaleDateString()}}</td>
                        <td>
                            <a class="btn btn-info btn-circle btn-sm" @click="$parent.loadFieldsUpdate(novelty); $parent.currentModule = 'edit-noveltie'" title="Editar">
                                <i class="far fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</template>
<script>
import axios from 'axios';
export default {
    mounted () {
        name: "Table"
        $('#novelties').DataTable();
    }
}
</script>