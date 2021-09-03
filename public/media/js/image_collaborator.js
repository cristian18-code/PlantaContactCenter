$('#picture').change(function () {

    let imagen = this.files[0];

    if ((imagen["type"] != "image/jpeg") && (imagen["type"] != "image/jpg") && (imagen["type"] != "image/png")) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Debe subir una imagen en formato jpeg, jpg o png!',
          });
    } else if (imagen["size" > 200000]) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'La imagen debe tener como maximo 2MB!',
          });
    } else {
        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function (e) {
            var rutaImagen = e.target.result;
            $(".previsualizar").attr("src", rutaImagen);
        })
    }
})