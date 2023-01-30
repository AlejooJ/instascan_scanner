let scanner = new Instascan.Scanner({
  video: document.getElementById("preview"),
});

$("#abrirCamara").click(function (e) {
  e.preventDefault();

  scanner.addListener("scan", function (content) {
    // document.getElementById("sonido").play();
    if (content > 0) {
      let codigo = content;
      console.log(codigo);
    } else {
      console.log("No hay ningun codigo QR");
    }
  });
  Instascan.Camera.getCameras()
    .then(function (cameras) {
      if (cameras.length > 0) {
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
  scanner.stop();
});
