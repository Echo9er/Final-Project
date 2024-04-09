// Define the API endpoint
const apiEndpoint = "https://news-about-climate-change-api.herokuapp.com/news";


// Define the array of news sources
var newsSources = [
    {
      name: 'cityam',
      address: 'https://www.cityam.com/london-must-become-a-world-leader-on-climate-change-action/',
      base: ''
    },
    {
      name: 'thetimes',
      address: 'https://www.thetimes.co.uk/environment/climate-change',
      base: ''
    },
    {
      name: 'guardian',
      address: 'https://www.theguardian.com/environment/climate-crisis',
      base: '',
    },
    {
      name: 'telegraph',
      address: 'https://www.telegraph.co.uk/climate-change',
      base: 'https://www.telegraph.co.uk',
    },
    {
      name: 'nyt',
      address: 'https://www.nytimes.com/international/section/climate',
      base: 'https://www.nytimes.com',
    },
    {
      name: 'latimes',
      address: 'https://www.latimes.com/environment',
      base: '',
    },
    {
      name: 'smh',
      address: 'https://www.smh.com.au/environment/climate-change',
      base: 'https://www.smh.com.au',
    },
    {
      name: 'un',
      address: 'https://www.un.org/climatechange',
      base: '',
    },
    { 
      name: 'bbc',
      address: 'https://www.bbc.co.uk/news/science_and_environment',
      base: 'https://www.bbc.co.uk',
    },
    {
      name: 'es',
      address: 'https://www.standard.co.uk/topic/climate-change',
      base: 'https://www.standard.co.uk'
    },
    {
      name: 'sun',
      address: 'https://www.thesun.co.uk/topic/climate-change-environment/',
      base: ''
    },
    {
      name: 'dm',
      address: 'https://www.dailymail.co.uk/news/climate_change_global_warming/index.html',
      base: ''
    },
    {
      name: 'nyp',
      address: 'https://nypost.com/tag/climate-change/',
      base: ''
    },
    {
      name: 'independent',
      address: 'https://www.independent.co.uk/climate-change',
      base: 'https://www.independent.co.uk'
    },
    {
      name: 'sky',
      address: 'https://news.sky.com/climate',
      base: 'https://news.sky.com'
    },
    {
      name: 'vox',
      address: 'https://www.vox.com/energy-and-environment',
      base: 'https://www.vox.com'
    }
  ];
  
  // Function to fetch news from a specific news source
  function fetchNewsFromSource(sourceName) {
    var source = newsSources.find(function(source) {
      return source.name === sourceName;
    });
    if (source) {
      window.location.href = source.address;
    } else {
      console.error('News source not found');
    }
  }

  // Function to fetch news and populate the table
function fetchAndDisplayNews() {
    var newsData = fetchNews(); // Call your function to fetch news from the API
    if (newsData && newsData.length >= 2) {
      document.getElementById("headline1").innerText = newsData[0].title;
      document.getElementById("source1").innerText = newsData[0].source;
      document.getElementById("publishedDate1").innerText = newsData[0].publishedDate;
  
      document.getElementById("headline2").innerText = newsData[1].title;
      document.getElementById("source2").innerText = newsData[1].source;
      document.getElementById("publishedDate2").innerText = newsData[1].publishedDate;
    } else {
      console.error('Failed to fetch news data.');
    }
  }
  
  // Call the function to fetch and display news
  fetchAndDisplayNews();