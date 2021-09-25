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
                    <tr v-for="noveltie in $parent.arrayNovelties" :key="noveltie.id">
                        <th scope="row">{{ noveltie.id }}</th>
                        <td>
                            <a href="#">{{noveltie.novedad}}</a>
                        </td>
                        <td><span v-bind:class="[noveltie.estado == 'En curso' ? 'bg-success' : 'bg-danger']" class="badge color-white">{{noveltie.estado}}</span></td>
                        <td>{{new Date(noveltie.Finicio).toLocaleDateString()}}</td>
                        <td>{{new Date(noveltie.Ffin).toLocaleDateString()}}</td>
                        <td>
                            <a class="btn btn-info btn-circle btn-sm" href="#" title="Editar">
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
export default {
    mounted () {
        name: "Table"
        $('#novelties').DataTable();
    }
}
</script>