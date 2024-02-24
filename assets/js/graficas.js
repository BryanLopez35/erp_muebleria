document.addEventListener('DOMContentLoaded', function() {
    obtenerDatosClientes();
});

function obtenerDatosClientes() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);

            if (response.success) {
                var datosClientes = {
                    labels: response.data.map(cliente => cliente.nombre),
                    datasets: [{
                        label: 'Número de clientes',
                        data: response.data.map(cliente => cliente.cliente_id),
                        backgroundColor: ['#36a2eb', '#ff6384']
                    }]
                };

                dibujarGraficoClientes(datosClientes);
            } else {
                console.error(response.error);
            }
        }
    };

    xhttp.open("GET", "clientes.php", true);
    xhttp.send();
}

function dibujarGraficoClientes(datosClientes) {
    var clientesChart = new Chart(document.getElementById("clientesChart"), {
        type: 'bar',
        data: datosClientes,
    });
}z