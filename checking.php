<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geo-Location of IP</title>
</head>
<body>
    <h1>Geo-Location of IP Address</h1>
    <p id="location"></p>

    <script>
        const ip = '35.153.139.52';
        const apiUrl = `https://ipapi.co/${ip}/json/`;

            fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                document.getElementById('location').innerHTML = `
                    <strong>IP:</strong> ${data.ip}<br>
                    <strong>City:</strong> ${data.city}<br>
                    <strong>Region:</strong> ${data.region}<br>
                    <strong>Country:</strong> ${data.country_name}<br>
                    <strong>Latitude:</strong> ${data.latitude}<br>
                    <strong>Longitude:</strong> ${data.longitude}<br>
                `;
            })
            .catch(error => {
                console.error('Error fetching location data:', error);
                document.getElementById('location').innerText = 'Could not retrieve location data.';
            });
    </script>
</body>
</html>
