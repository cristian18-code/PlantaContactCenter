<template>
    <form @submit.prevent="$parent.updateNoveltie()">
        <div class="card-body">
            <div class="form-group row col-md-12">
                <label for="novedad" class="col-md-4 col-form-label">Nombre de la novedad</label>
                <input v-model="$parent.noveltyUpdate.novedad" name="novedad" id="novedad" type="text" class="form-control" autocomplete="off" required>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-6">
                    <label for="Finicio" class="col-form-label">Fecha y hora de inicio</label>
                    <input v-model="$parent.noveltyUpdate.Finicio" name="Finicio" id="Finicio" type="datetime-local" class="form-control" required>
                </div>
                <div class="form-group row col-md-6">
                    <label for="Ffin" class="col-form-label">Fecha y hora final</label>
                    <input v-model="$parent.noveltyUpdate.Ffin" name="Ffin" id="Ffin" type="datetime-local" class="form-control" required>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label for="estado" class="col-form-label">Estado de la novedad</label>
                <select v-model="$parent.noveltyUpdate.estado" name="estado" id="estado" type="text" class="form-control" required>
                    <option>En curso</option>
                    <option>cerrado</option>
                </select>
            </div>
            <div class="row col-md-12">
                <label for="observaciones">Detalles de la novedad</label>
                <textarea name="observaciones" id="observaciones" class="form-control" v-model="$parent.noveltyUpdate.observaciones" required></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn col-3 btn-primary mr-2">Actualizar</button>
            <a class="btn btn-danger col-3 float-right"
                @click="$parent.currentModule = 'table-novelties'">
                Cancelar
            </a>
        </div>
    </form>
</template>
<script>
export default {
    mounted () {
        name: "Edit"
    }
}
</script>