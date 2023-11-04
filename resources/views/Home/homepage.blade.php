@include('components.doctype')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<body>
    <!-- navbar -->
    @include('components.navbar')
    <!-- end navbar -->


  

    <div id="meteo">
        <h2>Current Data:</h2>
        <p id="currentTime"></p>
        <p id="currentTemperature"></p>
        <p id="currentWindSpeed"></p>
    
    </div>

    <!-- Contenitore per i dati correnti -->


<!-- Contenitore per i dati orari -->
<div id="hourlyData">
    <h2>Hourly Data:</h2>
    <!-- Questo spazio sarà popolato dinamicamente con i dati orari -->
</div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <script src="{{asset('js/meteo.js')}}">    </script>


    

    </html>
