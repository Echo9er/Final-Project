// Import required libraries
const express = require('express')
const axios = require('axios')
const cheerio = require('cheerio')

// Set the port for the server
const PORT = process.env.PORT || 8000

// Create an instance of Express
const app = express()

// Define an array of objects containing information about various newspapers
const newspapers = [
    // Each object contains the name of the newspaper, its URL address,
    // and a base URL (if applicable)
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
]

// Initialize an empty array to store fetched articles
const articles = []

// Iterate over each newspaper in the 'newspapers' array
newspapers.forEach(newspaper => {
    // Make an HTTP GET request to the newspaper's address using Axios
    axios.get(newspaper.address)
        .then((response) => {
            // Upon receiving the response, extract HTML content
            const html = response.data
            const $ = cheerio.load(html)

            // Search for anchor tags containing the word "climate"
            $('a:contains("climate")', html).each(function () {
                // For each matching link, extract title and URL,
                // then push them into the 'articles' array along with the source newspaper
                const title = $(this).text()
                const url = $(this).attr('href')

                articles.push({
                    title,
                    // Construct the full URL using the newspaper's base URL (if provided)
                    url: newspaper.base + url,
                    source: newspaper.name
                })
            })
        }).catch(err => {
            // Log any errors that occur during the request
            console.log(err)
        })
})

// Start the server and listen on the specified port
app.listen(PORT, () => {
    console.log(`server running on port ${PORT}`)
})

// Define routes

// Route to welcome message
app.get('/', (req, res) => {
    res.json('Welcome to my climate change news API')
})

// Route to get all fetched articles
app.get('/news', (req, res) => {
    res.json(articles)
})

// Route to get articles from a specific newspaper
app.get('/news/:newspaperId', (req, res) => {
    // Extract the 'newspaperId' parameter from the URL
    const newspaperId = req.params.newspaperId

    // Filter the 'newspapers' array to find the corresponding newspaper's address and base URL
    const newspaperAddress = newspapers.filter(newspaper => newspaper.name == newspaperId)[0].address
    const newspaperBase = newspapers.filter(newspaper => newspaper.name == newspaperId)[0].base

    // Make an HTTP request to fetch articles specifically from the specified newspaper's climate change section
    axios.get(newspaperAddress)
        .then((response) => {
            // Upon receiving the response, extract HTML content
            const html = response.data
            const $ = cheerio.load(html)
            const specificArticles = []

            // Search for anchor tags containing the word "climate"
            $('a:contains("climate")', html).each(function () {
                // For each matching link, extract title and URL,
                // then push them into the 'specificArticles' array along with the source newspaper
                const title = $(this).text()
                const url = $(this).attr('href')

                specificArticles.push({
                    title,
                    // Construct the full URL using the newspaper's base URL (if provided)
                    url: newspaperBase + url,
                    source: newspaperId
                })
            })
            // Respond with the array of specific articles as JSON
            res.json(specificArticles)
        }).catch(err => {
            // Log any errors that occur during the request
            console.log(err)
        })
})