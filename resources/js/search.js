document.addEventListener("DOMContentLoaded", function () {
    const nameInput = document.getElementById("search-name");
    const locationInput = document.getElementById("search-location");
    const typeInput = document.getElementById("search-type");
    const amenitiesInput = document.getElementById("search-amenities");
    const hotelsList = document.getElementById("hotels-list");

    function fetchHotels() {
        const name = nameInput.value;
        const location = locationInput.value;
        const type = typeInput.value;
        const amenities = amenitiesInput.value.split(',');

        fetch(`/hotels/search?name=${name}&location=${location}&type=${type}&amenities=${amenities}`)
            .then(response => response.json())
            .then(data => {
                hotelsList.innerHTML = "";

                if (data.length === 0) {
                    hotelsList.innerHTML = "<p>No se encontraron resultados.</p>";
                    return;
                }

                data.forEach(hotel => {
                    const hotelCard = `
                        <div class="card mb-2">
                            <div class="card-body">
                                <h5 class="card-title">${hotel.name}</h5>
                                <p class="card-text">Ubicación: ${hotel.location}</p>
                                <p class="card-text">Precio: $${hotel.price}</p>
                                <p class="card-text">Estrellas: ${hotel.stars}</p>
                                <p class="card-text">Tipo: ${hotel.type}</p>
                                <p class="card-text">Amenidades: ${hotel.amenities.join(', ')}</p>
                            </div>
                        </div>
                    `;
                    hotelsList.innerHTML += hotelCard;
                });
            })
            .catch(error => console.error("Error al buscar hoteles:", error));
    }

    nameInput.addEventListener("input", fetchHotels);
    locationInput.addEventListener("input", fetchHotels);
    typeInput.addEventListener("input", fetchHotels);
    amenitiesInput.addEventListener("input", fetchHotels);
});
