<!-- Include Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

<style>
#client-map {
    border: 2px solid #007bff; /* Optional styling for the map */
}
</style>

<div class="container my-5" data-aos="fade-up" data-aos-duration="1000">
    <h2 class="text-center mb-4" data-aos="zoom-in" data-aos-duration="1000">Our Clients</h2>
    <div id="client-map" style="height: 500px;" data-aos="fade-up" data-aos-duration="1000"></div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Initialize the map
    function initMap() {
        var map = new google.maps.Map(document.getElementById('client-map'), {
            zoom: 2,
            center: { lat: 26.133127918480962, lng: 91.8301502270023 } // indigi office
        });

        addMarkers(map);
    }

    // Function to add markers for clients
    function addMarkers(map) {
        const clients = [
            {
                name: "Guwahati Jal Board",
                lat: 26.198242391007767, 
                lng: 91.76953709632484,
                testimonial: "This is a great company!",
                img: "images/testimonials/gjb_logo.png"
            },
            {
                name: "Rongsheng",
                lat: 26.155858629965707,
                lng:  91.78036553865408,
                testimonial: "Excellent services provided!",
                img: "images/testimonials/rongsheng.jpg"
            },
            {
                name: "IGGL",
                lat: 26.154650313252183, 
                lng: 91.78049102331455,
                testimonial: "A wonderful experience!",
                img: "images/testimonials/iggl_testimonial.jpg"
            }
            // Add more clients here...
        ];

        clients.forEach(client => {
            const marker = new google.maps.Marker({
                position: { lat: client.lat, lng: client.lng },
                map: map,
                title: client.name
            });

            const infowindow = new google.maps.InfoWindow({
                content: `
                    <div style="text-align: center;">
                        <img src="${client.img}" alt="${client.name}" style="width: 100px; height: auto; border-radius: 50%;">
                        <h5>${client.name}</h5>
                        <p>${client.testimonial}</p>
                    </div>
                `
            });

            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        });
    }

    // Initialize AOS
    AOS.init();

</script>

<!-- Load Google Maps API -->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCQw6Ml9RSra-m29ycAfi8WPMeN8NkcXg&callback=initMap">
</script>
