const token = '4285d8848c36883740cf2a41f30d9b590ae1aefd'; // Your API token

// Make a GET request to the API endpoint
fetch(`https://api.waqi.info/feed/ottawa/?token=${token}`)
    .then(response => {
        // Check if the request was successful
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        // Parse the JSON response
        return response.json();
    })
    .then(data => {
        // Handle the response data
        console.log(data);
        if (data.status === 'ok') {
            // Extract AQI information
            const aqi = data.data.aqi;
            console.log('Air Quality Index for Ottawa:', aqi);
            
            // Display AQI on HTML page
            const aqiContainer = document.getElementById('aqi-container');
            aqiContainer.textContent = `Air Quality Index for Ottawa: ${aqi}`;
        } else {
            console.error('Error:', data.message);
        }
    })
    .catch(error => {
        // Handle any errors
        console.error('There was a problem with the fetch operation:', error);
    });


    // Make a GET request to the API endpoint
fetch(`https://api.waqi.info/feed/toronto/?token=${token}`)
.then(response => {
    // Check if the request was successful
    if (!response.ok) {
        throw new Error('Network response was not ok');
    }
    // Parse the JSON response
    return response.json();
})
.then(data => {
    // Handle the response data
    console.log(data);
    if (data.status === 'ok') {
        // Extract AQI information
        const aqi = data.data.aqi;
        console.log('Air Quality Index for Toronto:', aqi);
        
        // Display AQI on HTML page
        const aqiContainer = document.getElementById('aqi-container');
        aqiContainer.textContent += `Air Quality Index for Toronto: ${aqi}`;
    } else {
        console.error('Error:', data.message);
    }
})
.catch(error => {
    // Handle any errors
    console.error('There was a problem with the fetch operation:', error);
});
