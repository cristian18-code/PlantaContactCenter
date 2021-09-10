var familiers = parseInt($('#familiers').val());
$(document).ready(function(){
    $('#btn_addFamilier').on('click', function(){
        addFamilier(familiers);
    })
      
    $('#inf_familierModal').on('hidden.bs.modal', function(e){
        if (familiers > 0) {
            Swal.fire(
                '¡Atencion!',
                'Recuerda no dejar campos vacios de informacion famiiar, de lo contrario no te permitira guardar',
                'warning'
              )
        }
    })
});

function addFamilier(familier) {

    console.log(familier);
    $('#cont-familiers').append(
        '<div class="row col-md-12" id="familier'+familier+'">'+
            '<div class="row col-md-12">'+
                '<h5 class="text-gray-700">Familiar '+(familier+1)+'</h5>'+
                '<button type="button" class="btn btn-danger btn-circle btn-sm ml-4" onClick="deleteFamilier('+familier+')" title="Quitar">'+
                    '<i class="fas fa-times"></i>'+
                '</button>'+
            '</div>'+
            '<div class="row col-md-12">'+
                '<div class="form-group col-md-4">'+
                    '<label for="nombre_familier">Nombre</label>'+
                    '<input type="text" name="nombre_familier[]" id="nombre_familier" required class="form-control">'+
                '</div>'+
                '<div class="form-group col-md-4">'+
                    '<label for="fNacimiento_familier">Fecha de nacimiento</label>'+
                    '<input type="date" name="fNacimiento_familier[]" id="fNacimiento_familier" required class="form-control">'+
                '</div>'+
                '<div class="form-group col-md-4">'+
                    '<label for="genero_familier">Genero</label>'+
                    '<select name="genero_familier[]" id="genero_familier" required class="form-control">'+
                        '<option value="" hidden></option>'+
                        '<option value="Femenino">Femenino</option>'+
                        '<option value="Masculino">Masculino</option>'+
                    '</select>'+    
                '</div>'+
            '</div>'+
            '<div class="row col-md-12">'+
                '<div class="form-group col-md-3">'+
                    '<label for="ocupacion_familier">Ocupacion</label>'+
                    '<input type="text" name="ocupacion_familier[]" id="ocupacion_familier" required class="form-control"">'+
                '</div>'+
                '<div class="form-group col-md-3">'+
                    '<label for="celular_familier">Celular</label>'+
                    '<input type="text" name="celular_familier[]" id="celular_familier" required class="form-control">'+
                '</div>'+
                '<div class="form-group col-md-3">'+
                    '<label for="parentesco_familier">Parentesco</label>'+
                    '<input type="text" name="parentesco_familier[]" id="parentesco_familier" required class="form-control">'+
                '</div>'+
                '<div class="form-group col-md-3">'+
                    '<label for="emergencia_familier">¿Contactar en caso de emergencia?</label>'+
                    '<select name="emergencia_familier[]" id="emergencia_familier" required class="form-control">'+
                        '<option value="" hidden></option>'+
                        '<option value="Si">Si</option>'+
                        '<option value="No">No</option>'+
                    '</select>'+
                '</div>'+
            '</div>'+
        '</div>'
    );
    familiers++;
}

function deleteFamilier(familier) {
    if ((familiers-1) == familier) {
        $('#familier'+familier).remove();
        familiers--;
    } else {
        Swal.fire({
            icon: 'warning',
            title: 'Opsss...',
            type: 'error',
            text: 'Si deseas quitar un familiar debe ser el ultimo. Es decir el familiar '+familiers,
        });
    }
}