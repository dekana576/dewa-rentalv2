
<x-front-layout>




<main class="flex-grow container mx-auto p-6 flex justify-center items-center">
        <div class="w-full max-w-4xl bg-white rounded-lg">
            <h1 class="text-3xl font-bold text-center p-4 border-b">Our Rental Locations</h1>
            <div id="map" class="w-full rounded-b-lg"></div>
        </div>
    </main>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize the map
            const map = L.map('map').setView([-8.799588779111563, 115.16149136005205], 13);

            // Add tile layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Dewa Re'
            }).addTo(map);

            // Add a marker
            L.marker([-8.799588779111563, 115.16149136005205]).addTo(map)
                .bindPopup('Dewa Rental Bali')
                .openPopup();
        });
    </script>
    </x-front-layout>