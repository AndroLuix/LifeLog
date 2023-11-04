$.ajax({
    url: "{{ route('meteoData') }}",
    type: "GET",
    success: function(data) {
        var meteoDataDiv = document.getElementById('meteoData');

        var currentDataHtml = '<h2>Current Data:</h2>' +
            '<p>Time: ' + data.current.time + '</p>' +
            '<p>Temperature at 2m: ' + data.current.temperature_2m + '</p>' +
            '<p>Wind Speed at 10m: ' + data.current.wind_speed_10m + '</p>';

        var hourlyDataHtml = '<h2>Hourly Data:</h2>';
        for (var i = 0; i < data.hourly.time.length; i++) {
            hourlyDataHtml += '<p>Time: ' + data.hourly.time[i] + '</p>' +
                '<p>Temperature at 2m: ' + data.hourly.temperature_2m[i] + '</p>' +
                '<p>Relative Humidity at 2m: ' + data.hourly.relative_humidity_2m[i] + '</p>' +
                '<p>Wind Speed at 10m: ' + data.hourly.wind_speed_10m[i] + '</p>';
        }

        meteoDataDiv.innerHTML = currentDataHtml + hourlyDataHtml;
    },
    error: function(xhr, status, error) {
        console.log(error);
    }
});
