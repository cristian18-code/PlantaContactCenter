var studies = parseInt($('#studies').val());
$(document).ready(function(){
    $('#btn_addStudie').on('click', function(){
        agregar(studies);
    })
      
    $('#inf_academicaModal').on('hidden.bs.modal', function(e){
        if (studies > 0) {
            Swal.fire(
                '¡Atencion!',
                'Recuerda no dejar campos vacios de informacion academica, de lo contrario no te permitira guardar',
                'warning'
              )
        }
    })
});

function agregar(studie) {

    console.log(studie);
    $('#cont-studies').append(
        '<div class="row col-md-12" id="studie'+studie+'">'+
            '<div class="row col-md-12">'+
                '<h5 class="text-gray-700">Estudio '+(studie+1)+'</h5>'+
            '</div>'+
            '<div class="form-group col-md-4">'+
                '<label for="nivel">Nivel Educativo</label>'+
                '<select id="nivel" class="form-control" required name="nivel[]">'+
                    '<option value="" hidden></option>'+
                    '<option value="Primaria">Primaria</option>'+
                    '<option value="Bachillerato">Bachillerato</option>'+
                    '<option value="Tecnico">Tecnico</option>'+
                    '<option value="Tecnologico">Tecnologico</option>'+
                    '<option value="Profesional">Profesional</option>'+
                    '<option value="Doctorado">Doctorado</option>'+
                    '<option value="Magister">Magister</option>'+
                    '<option value="Seminario">Seminario</option>'+
                    '<option value="Otros">Otros</option>'+
                '</select>'+
            '</div>'+
            '<div class="form-group col-md-4">'+
                '<label for="titulo">titulo</label>'+
                '<input id="titulo" class="form-control" type="text" required name="titulo[]">'+
            '</div>'+
            '<div class="form-group col-md-3">'+
                '<label for="estado">Estado</label>'+
                '<select id="estado" class="form-control" required name="estado[]">'+
                    '<option value="" hidden></option>'+
                    '<option value="Culminado">Culminado</option>'+
                    '<option value="Aplazado">Aplazado</option>'+
                    '<option value="Estudiando">Estudiando</option>'+
                '</select>'+
            '</div>'+
            '<div class="col-md-1 my-auto container">'+
                '<button type="button" class="btn btn-danger btn-circle btn-sm" onClick="eliminar('+studie+')" title="Quitar">'+
                    '<i class="fas fa-times"></i>'+
                '</button>'+
            '</div>'+
        '</div>'
    );
    studies++;
}

function eliminar(studie) {
    if ((studies-1) == studie) {
        $('#studie'+studie).remove();
        studies--;
    } else {
        Swal.fire({
            icon: 'warning',
            title: 'Opsss...',
            type: 'error',
            text: 'Si deseas quitar un estudio debe ser el ultimo. Es decir el estudio '+studies,
        });
    }
}