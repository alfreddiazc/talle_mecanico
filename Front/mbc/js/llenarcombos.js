$(document).ready(function () {
    cargar();
    cargarT();
});

function cargar() {

    var url = "../../Back/llenarcombos.php?mode=actuCliente";

    //llama a la funcion ajax
    realizarAjax(url);

    //funcion ajax para enviar formulario a php
    function realizarAjax(url1) {

        $.ajax({
            url: url1,
            type: 'GET',
            //esta funncion se ejecuta cuando el php a terminado de procesar
            //con el resultado e inserta el resultado en algun elemento html

            success: function (response) {
                //alert(response);
                $("#actuCliente").html(response);
            }

        });
    }
}

function cargarT() {

    var url = "../../Back/llenarcombos.php?mode=actuTrabajador";

    //llama a la funcion ajax
    realizarAjax(url);

    //funcion ajax para enviar formulario a php
    function realizarAjax(url1) {

        $.ajax({
            url: url1,
            type: 'GET',
            //esta funncion se ejecuta cuando el php a terminado de procesar
            //con el resultado e inserta el resultado en algun elemento html

            success: function (response) {
                //alert(response);
                $("#actuTrabajador").html(response);
            }

        });
    }
}

function precioRep() {

    var id = document.getElementById('codRepu').value
    var url = "../../Back/llenarcombos.php?mode=precioRepu&id=" + id + "";

    //llama a la funcion ajax
    realizarAjax(url);

    //funcion ajax para enviar formulario a php
    function realizarAjax(url1) {

        $.ajax({
            url: url1,
            type: 'GET',
            //esta funncion se ejecuta cuando el php a terminado de procesar
            //con el resultado e inserta el resultado en algun elemento html

            success: function (response) {
                //alert(response);
                pat = /Undefined/
                if (pat.test(response)) {
                    document.getElementById("valorReparacion").value = '';
                } else {
                    document.getElementById("valorReparacion").value = response;
                }
            }

        });
    }
}

