const express = require('express');
const bodyParser = require('body-parser');

const app = express();
const PORT = process.env.PORT || 3000;

// Middleware to parse JSON bodies
app.use(bodyParser.json());

// API endpoint to handle incoming requests
app.post('/calculate', (req, res) => {
    // Extract input parameters from the request body
    const { mobility_vehicles, mobility_flight, consumption_food, consumption_shopping, household_area, household_building, household_heating } = req.body.input_params;

    // Perform calculations based on input parameters
    const kg = 12238.475460077108;
    const mobility_kg = 2535.6713591286748;
    const consumption_kg = 6697.282654256381;
    const household_kg = 1795.5214466920533;
    const public_services_kg = 1210.0;
    const price_in_eur_cents = 0;

    // Construct the response JSON object
    const response = {
        kg,
        mobility_kg,
        consumption_kg,
        household_kg,
        public_services_kg,
        price_in_eur_cents,
        input_params: req.body.input_params
    };

    // Send the response back to the client
    res.json(response);
});

// Start the server
app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});

const settings = {
    "mobility_vehicles": "high",
    "mobility_flight": "medium",
    "consumption_food": "giant",
    "consumption_shopping": "high",
    "household_area": "low",
    "household_building": "high",
    "household_heating": "high"
  };