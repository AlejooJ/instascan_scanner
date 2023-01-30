const URL = window.location.origin + "/instascan/";

let scanner = new Instascan.Scanner({
  video: document.getElementById("preview"),
});

$("#abrirCamara").click(function (e) {
  e.preventDefault();
  $("#seleccionarCamara").removeClass("d-none");
  $("#abrirCamara").addClass("d-none");

  scanner.addListener("scan", function (content) {
    document.getElementById("sonido").play();
    if (content > 0) {
      let codigo = content;
      let datos = {
        gestionarQR: "ok",
        codigo: codigo,
      };

      $.ajax({
        type: "POST",
        url: `${URL}ajax/gestionar_qr.ajax.php`,
        data: datos,
        success: function (response) {
          console.log(response);
        },
      });
    } else {
      console.log("No hay ningun codigo QR");
    }
  });
  Instascan.Camera.getCameras()
    .then(function (cameras) {
      if (cameras.length > 0) {
        $("#cerrarCamara").removeClass("d-none");
        let camarasDisponibles = `<li>Seleccionar: </li>`;
        cameras.forEach((e) => {
          function selectCamara(idCamara) {
            if (e.id == idCamara) {
              scanner.start(e);
            }
          }
          camarasDisponibles += `<li> <a href="#" class="btnSeleccionarCamara mt-2" data-id="${e.id}">${e.name}</a></li>`;

          $(document).on("click", ".btnSeleccionarCamara", function (e) {
            let idCamara = $(this).data("id");
            selectCamara(idCamara);
          });
        });

        document.getElementById("seleccionarCamara").innerHTML =
          camarasDisponibles;
      } else {
        console.error("No cameras found.");
      }
    })
    .catch(function (e) {
      console.error(e);
    });
});

$("#cerrarCamara").click(function (e) {
  e.preventDefault();
  $("#abrirCamara").removeClass("d-none");
  $("#seleccionarCamara").addClass("d-none");
  $("#cerrarCamara").addClass("d-none");
  scanner.stop();
});

var urlSio = window.location.href;
var arrayUrlSio = urlSio.split("/");
var protocoloArray = urlSio.split(":");
var protocolo = protocoloArray[0];
var dominioSio = protocolo + "://" + window.document.domain;
var SIO = window.location.origin + "/ti/sio";
var URL_SIO = window.location.origin + "/ti/sio/";

console.log(protocolo);
