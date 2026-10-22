# ExploreMy

ExploreMy is a Malaysian travel itinerary web application for discovering attractions and planning local experiences. Users can browse destinations across Malaysia, view attraction details and ticket prices, save favourites to a wishlist, complete a demonstration checkout, and review their payment history.

## Features

- Browse popular Malaysian destinations and attractions
- Search for destinations and explore attractions by state
- View attraction descriptions, images, maps, and ticket prices
- Create an account and sign in securely
- Edit user profile information
- Add and remove attractions from a personal wishlist
- Select visit dates and ticket quantities during checkout
- Choose between card and Google Pay demonstration options
- View and manage payment history
- Responsive navigation and layouts for different screen sizes
- Contact, FAQ, privacy policy, and terms of service pages

> **Note:** The payment interface is for demonstration purposes only. It does not connect to a real payment gateway or process actual transactions.

## Technologies Used

- **Frontend:** HTML5, CSS3, JavaScript, Bootstrap Icons, Font Awesome
- **Backend:** PHP
- **Database:** MySQL
- **Local server:** WampServer

## Requirements

Before running the project, install:

- [WampServer](https://www.wampserver.com/en/) or another PHP/MySQL development environment
- PHP with the MySQLi extension enabled
- MySQL or MariaDB
- A modern web browser

## Installation

1. Clone the repository into the WampServer `www` directory:

   ```bash
   git clone https://github.com/YOUR-USERNAME/YOUR-REPOSITORY.git
   ```

2. Move or rename the cloned folder if necessary so the project is located at:

   ```text
   C:\wamp64\www\WAD-assignment\Web Application Development Assignment
   ```

3. Start WampServer and make sure the Apache and MySQL services are running.

4. Open phpMyAdmin:

   ```text
   http://localhost/phpmyadmin
   ```

5. Import `db.sql`. The script creates and selects the `ExploreMY_db` database and adds the required tables and sample attraction data.

6. Check the database settings in `includes/database_conn.php`:

   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "ExploreMY_db";
   ```

   Update these values if your MySQL configuration is different.

7. Open the application in your browser:

   ```text
   http://localhost/WAD-assignment/Web%20Application%20Development%20Assignment/
   ```

## Database

The supplied `db.sql` file defines the following main tables:

- `States` — Malaysian state information
- `Attractions` — destination and pricing information
- `Searches` — destination search data
- `Attraction_Details` — detailed attraction content, images, and maps
- `User_Profile` — registered user information
- `Wishlist` — attractions saved by users
- `Payment_History` — completed demonstration checkout records

## Project Structure

```text
├── assets/                 # Page-specific styles, scripts, and assets
├── attraction/             # Attraction-related pages and resources
├── images/                 # Destination and interface images
├── includes/               # Shared navigation, footer, database, and logic files
├── listingPage/            # Attraction listing page and supporting assets
├── style/                  # Shared and page-specific stylesheets
├── user/                   # Sign-up and login pages
├── index.php               # Home page
├── item_detail.php         # Attraction details
├── wishlist.php            # User wishlist
├── checkout.php            # Visitor and ticket details
├── payment.php             # Demonstration payment selection
├── payment_history.php     # User purchase history
└── db.sql                  # Database schema and sample data
```

## Usage

1. Create an account or sign in.
2. Browse or search for an attraction.
3. Open an attraction to view its information and available prices.
4. Save it to your wishlist or continue to checkout.
5. Choose a visit date and ticket quantities.
6. Complete the demonstration payment form.
7. Review the booking record in your payment history.

## Security Notice

This application is intended for demonstration and educational use. Do not enter real payment card information. A production deployment would require server-side validation, CSRF protection, secure environment-based configuration, HTTPS, and integration with a certified payment provider.

## Contributing

Contributions are welcome. Fork the repository, create a feature branch, commit your changes, and open a pull request.

## License

No license has been specified for this project. All rights are reserved by the project owner unless a license is added.
