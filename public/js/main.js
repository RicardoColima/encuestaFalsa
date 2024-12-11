// /public/js/main.js

// Esperamos a que el documento esté completamente cargado
$(document).ready(function() {
    console.log("¡Página cargada correctamente!");

    // Aquí puedes incluir tus scripts personalizados.
    // Ejemplo: Evento al hacer clic en un botón
    $('#btnSubmit').on('click', function(e) {
        e.preventDefault();  // Prevenir el comportamiento por defecto del formulario
        alert('Formulario enviado');
    });

    // Lógica de gráficos usando Chart.js (si se requiere)
    if ($('#encuestaChart').length) {
        var ctx = document.getElementById('encuestaChart').getContext('2d');
        var encuestaChart = new Chart(ctx, {
            type: 'bar',  // Tipo de gráfico (barras)
            data: {
                labels: ['Participante 1', 'Participante 2', 'Participante 3'],
                datasets: [{
                    label: 'Porcentaje',
                    data: [45, 30, 25],  // Porcentajes asignados
                    backgroundColor: ['#ff5733', '#33c1ff', '#33ff57'],
                    borderColor: ['#ff5733', '#33c1ff', '#33ff57'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
});
