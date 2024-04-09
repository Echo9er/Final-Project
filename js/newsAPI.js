// JavaScript to fetch data from the API and populate the table
fetch('https://api.example.com/environment-news')
    .then(response => response.json())
    .then(data => {
        // Assuming data is an array of news articles
        // Populate the first row
        document.getElementById('headline1').textContent = data[0].headline;
        document.getElementById('source1').textContent = data[0].source;
        document.getElementById('publishedDate1').textContent = data[0].publishedDate;

        // Populate the second row
        document.getElementById('headline2').textContent = data[1].headline;
        document.getElementById('source2').textContent = data[1].source;
        document.getElementById('publishedDate2').textContent = data[1].publishedDate;
    })
    .catch(error => console.error('Error fetching data:', error));
