// Nuovo oggetto XMLHttpRequest
var xhr = new XMLHttpRequest();
var url = "{{route('meteoData')}}";
url = "api/meteoData"

// Configurazione della richiesta con il metodo GET
xhr.open("GET", url, true);

// Funzione di callback che viene eseguita quando la richiesta viene completata
xhr.onload = function() {
    if (xhr.status >= 200 && xhr.status < 300) {
        // Conversione della risposta JSON in un oggetto JavaScript
        var data = JSON.parse(xhr.responseText);

        // Ottenimento del riferimento all'ID in cui verranno inseriti gli elementi
        document.getElementById('currentTime').textContent = 'Time: ' + data.current.time;
        document.getElementById('currentTemperature').textContent = 'Temperature at 2m: ' + data.current.temperature_2m;
        document.getElementById('currentWindSpeed').textContent = 'Wind speed at 10m: ' + data.current.wind_speed_10m;
    } else {
      //Mostro errori di API
        console.error(xhr.statusText);
        document.getElementById('meteo').textContent = 'Error: ' + xhr.statusText;
    }
};

xhr.onerror = function() {
    console.error(xhr.statusText);
    document.getElementById('meteo').textContent = 'Error: ' + xhr.statusText;
};

xhr.send();
