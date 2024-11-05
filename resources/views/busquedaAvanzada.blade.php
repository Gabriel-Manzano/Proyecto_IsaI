<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CDN de Remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Ruta al archivo CSS en Laravel -->
    <link rel="stylesheet" href="{{ asset('css/styles_Inicio.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles_BA.css') }}">
    

    <title>TURISTA SIN MAPS</title>
</head>

<body>
    <nav>
        <div class="nav__logo"><a href="{{ route('login') }}">Turista sin Maps</a></div>
        <ul class="nav__links">
            <ul class="nav__links">
                <a href="{{ route('login') }}">Home</a>
                <a href="{{ route('busqueda') }}">Descubre!</a>
                <a class="text-muted" href="{{ route('password') }}">Ofertas</a>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            </ul>
            
        </ul>
    </nav>
    <header>
  
        <h2>Búsqueda Avanzada de Hoteles</h2>


    </header>
   
    <input type="text" class="filter-input" id="search" placeholder="Buscar hoteles...">
    
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nombre del Hotel</th>
                    <th>Ubicación</th>
                    <th>Precio por Noche</th>
                    <th>Estrellas</th>
                    <th>Tipo de Alojamiento</th>
                    <th>Comodidades</th>
                </tr>
            </thead>
            <tbody id="hotel-table-body">
                <tr>
                    <td>Hotel Paradise</td>
                    <td>Cancún</td>
                    <td>$150</td>
                    <td>5</td>
                    <td>Resort</td>
                    <td>Piscina, Spa, WiFi</td>
                </tr>
                <tr>
                    <td>Montaña Retreat</td>
                    <td>Colorado</td>
                    <td>$120</td>
                    <td>4</td>
                    <td>Cabaña</td>
                    <td>Senderismo, Mascotas Permitidas</td>
                </tr>
                <tr>
                    <td>Urban Stay</td>
                    <td>Ciudad de México</td>
                    <td>$80</td>
                    <td>3</td>
                    <td>Hotel Urbano</td>
                    <td>Desayuno, Gimnasio</td>
                </tr>
                <tr>
                    <td>Playa Beach Hotel</td>
                    <td>Miami</td>
                    <td>$200</td>
                    <td>5</td>
                    <td>Hotel Playa</td>
                    <td>Restaurante, Bar, WiFi</td>
                </tr>
                <tr>
                    <td>Eco Lodge</td>
                    <td>Costa Rica</td>
                    <td>$90</td>
                    <td>3</td>
                    <td>Lodge</td>
                    <td>Ecoturismo, Wifi</td>
                </tr>
                <tr>
                    <td>City Center Hotel</td>
                    <td>Nueva York</td>
                    <td>$250</td>
                    <td>4</td>
                    <td>Hotel Urbano</td>
                    <td>Restaurante, Wifi, Centro de Negocios</td>
                </tr>
                <tr>
                    <td>Comfort Inn</td>
                    <td>Toronto</td>
                    <td>$70</td>
                    <td>3</td>
                    <td>Hotel Familiar</td>
                    <td>Desayuno, Wifi</td>
                </tr>
                <tr>
                    <td>Luxury Suites</td>
                    <td>París</td>
                    <td>$300</td>
                    <td>5</td>
                    <td>Hotel de Lujo</td>
                    <td>Spa, Restaurante, Transporte al Aeropuerto</td>
                </tr>
                <tr>
                    <td>Mountain View Inn</td>
                    <td>Aspen</td>
                    <td>$180</td>
                    <td>4</td>
                    <td>Hotel de Montaña</td>
                    <td>Jacuzzi, Actividades al aire libre</td>
                </tr>
                <tr>
                    <td>Tropical Oasis</td>
                    <td>Bali</td>
                    <td>$160</td>
                    <td>4</td>
                    <td>Resort</td>
                    <td>Piscina, Spa, Clases de Yoga</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <script>
        const searchInput = document.getElementById('search');
        const tableBody = document.getElementById('hotel-table-body');
    
        searchInput.addEventListener('keyup', function() {
            const filter = searchInput.value.toLowerCase();
            const rows = tableBody.getElementsByTagName('tr');
    
            for (let i = 0; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName('td');
                let found = false;
    
                for (let j = 0; j < cells.length; j++) {
                    if (cells[j].textContent.toLowerCase().includes(filter)) {
                        found = true;
                        break;
                    }
                }
    
                rows[i].style.display = found ? '' : 'none';
            }
        });
    </script>
    
    <footer>
        <div class="section__container">
            <h4>Turista din Maps</h4>
            <div class="social__icons">
                <span><i class="ri-facebook-fill"></i></span>
                <span><i class="ri-twitter-fill"></i></span>
                <span><i class="ri-instagram-line"></i></span>
                <span><i class="ri-linkedin-fill"></i></span>
            </div>
            <p>
                Travel makes one modest. You see what a tiny place you occupy in the
                world.
            </p>
        </div>
    </footer>
   

</body>

</html>
