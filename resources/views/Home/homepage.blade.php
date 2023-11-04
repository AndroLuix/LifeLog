@include('components.doctype')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <body>
       
        <!-- navbar -->
        @include('components.navbar')
        <!-- end navbar -->


        <div id="meteoData">
            
            <!-- I dati verranno visualizzati qui -->
        </div>

        <script src="{{asset('js/title.js')}}"></script>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
        <script>
            axios.get('http://127.0.0.1:8000/meteoData')
                .then(function (response) {
                    var meteoData = response.data;
                    var currentData = meteoData.current;
                    var hourlyData = meteoData.hourly;
    
                    var meteoDataDiv = document.getElementById('meteoData');
    
                    var currentDataHtml = '<h2>Current Data:</h2>' +
                        '<p>Time: ' + currentData.time + '</p>' +
                        '<p>Temperature at 2m: ' + currentData.temperature_2m + '</p>' +
                        '<p>Wind Speed at 10m: ' + currentData.wind_speed_10m + '</p>';
    
                    var hourlyDataHtml = '<h2>Hourly Data:</h2>';
                    for (var i = 0; i < hourlyData.time.length; i++) {
                        hourlyDataHtml += '<p>Time: ' + hourlyData.time[i] + '</p>' +
                            '<p>Temperature at 2m: ' + hourlyData.temperature_2m[i] + '</p>' +
                            '<p>Relative Humidity at 2m: ' + hourlyData.relative_humidity_2m[i] + '</p>' +
                            '<p>Wind Speed at 10m: ' + hourlyData.wind_speed_10m[i] + '</p>';
                    }
    
                    meteoDataDiv.innerHTML = currentDataHtml + hourlyDataHtml;
                })
                .catch(function (error) {
                    console.log(error);
                });
        </script>
        </html>
