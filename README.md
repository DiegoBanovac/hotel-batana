# hotel-batana

A hotel website with a full room booking system, built during a professional internship at Nivago.

Live: [diego-banovac.infinityfreeapp.com](https://diego-banovac.infinityfreeapp.com/index.php)

## About

hotel-batana is a dynamic PHP website for a hotel that allows guests to browse available rooms, check pricing, and complete a multi-step room reservation. The site connects to a MySQL database using PDO for storing and retrieving booking and availability data.

This project was developed during a professional software engineering internship at Nivago, giving real-world experience building a production-ready web application for a client.

## Tech Stack

- PHP (PDO for database access)
- MySQL
- HTML, CSS, JavaScript

## Features

- Room listings with descriptions and photos (sea view, sea family, deluxe sea family)
- Multi-step booking flow (room selection, guest details, confirmation)
- Real-time availability checking
- Dynamic pricing page
- Restaurant information page

## Project Structure

```
hotel-batana/
  index.php               # Homepage
  rezerviraj.php          # Start booking
  korak2.php              # Booking step 2 (guest details)
  korak3.php              # Booking step 3 (confirmation)
  check_availability.php  # Availability check logic
  get_price.php           # Dynamic pricing logic
  db_connection.php       # PDO database connection
  cjenik.php              # Price list page
  restoran.php            # Restaurant page
  seafamilysoba.php       # Sea family room page
  seaviewsoba.php         # Sea view room page
  deluxeseafamilysoba.php # Deluxe sea family room page
  assets/                 # Images and media
  css/                    # Stylesheets
  js/                     # JavaScript files
```

## Getting Started

1. Import the database schema into MySQL
2. Configure your database credentials in `db_connection.php`
3. Serve the project with a PHP-enabled web server (e.g. Apache, XAMPP, Laragon)
4. Open `index.php` in your browser

## Internship

Built during a professional internship at **Nivago**, Rijeka, Croatia.
