# Ice Cream Shop E-commerce Website

## Project Overview
This project is a fully functional **E-commerce website** developed for an ice cream shop, allowing customers to browse products, place orders, and make online payments. It provides a user-friendly interface where users can easily navigate through the available flavors, add items to their cart, and proceed to checkout.

### Features:
- **Product Catalog**: Display of various ice cream flavors with prices and descriptions.
- **Shopping Cart**: Customers can add/remove items to/from their cart.
- **User Authentication**: Users can sign up, log in, and manage their profiles.
- **Order Management**: Users can place orders, and the admin can manage inventory and view orders.
- **Payment Integration**: Secure payment gateway integration for processing transactions.
- **Responsive Design**: Fully responsive design optimized for both desktop and mobile users.

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Payment Gateway**: PayPal (or other options can be integrated)
- **Version Control**: Git & GitHub

## System Architecture
1. **Frontend**: A clean and simple user interface designed using HTML and CSS, with JavaScript for dynamic interactions like adding items to the cart and managing checkout functionality.
2. **Backend**: PHP manages server-side logic, including user authentication, order processing, and connecting to the MySQL database for storing product and order information.
3. **Database**: MySQL is used to store product details, customer information, and order history.
4. **Payment Integration**: PayPal payment gateway is integrated for processing secure online transactions.

## Installation & Setup

### Prerequisites:
- [XAMPP](https://www.apachefriends.org/index.html) or any PHP server
- [MySQL](https://www.mysql.com/downloads/) database

### Steps:
1. **Clone the repository**:
    ```bash
    git clone https://github.com/ProgrammerTabish/icecream-website.git
    cd icecream-website
    ```

2. **Database Setup**:
   - Create a MySQL database and import the `icecream_db.sql` file located in the root directory.
   - Update the database connection details in the `config.php` file:
     ```php
     $host = 'localhost';
     $user = 'root';
     $password = '';
     $dbname = 'icecream_db';
     ```

3. **Server Setup**:
   - Place the project files in the `htdocs` folder if you're using XAMPP, or configure your server's root directory accordingly.

4. **Running the Project**:
   - Start Apache and MySQL services in XAMPP or start your PHP server.
   - Navigate to `http://localhost/icecream-website` in your browser to view the website.

## Demo
Check out the live demo of the project [here](https://your-demo-link.com).

## Folder Structure
```bash
icecream-website/
├── css/
│   └── styles.css       # All the custom styles for the website
├── js/
│   └── scripts.js       # JavaScript file for frontend interactivity
├── img/
│   └── ...              # All images used in the website (product images, banners, etc.)
├── admin/
│   └── ...              # Admin panel for managing products, orders, and inventory
├── index.php            # Homepage of the website
├── config.php           # Database connection settings
├── cart.php             # Shopping cart functionality
├── checkout.php         # Checkout and payment integration
├── register.php         # User registration page
├── login.php            # User login page
└── README.md            # Project documentation
```
## Future Enhancements
- **Mobile App**: Extend the website into a mobile app to provide users with easier and more convenient access to the ice cream shop. The app can include all website features and offer notifications for promotions and new flavors.
  
- **Order Tracking**: Implement real-time order tracking so that customers can monitor the status of their orders from preparation to delivery. This feature enhances customer experience by providing transparency and timely updates.

- **Coupons & Discounts**: Add support for applying discount codes and coupons during checkout. This feature will allow customers to take advantage of promotions and special offers, potentially increasing sales and customer satisfaction.

## License

This project is licensed under the MIT License - see the [LICENSE](./LICENSE) file for details.

## Contact

For any questions or feedback, feel free to reach out:

- **Name**: Zaka Tabish
- **Email**: [programmertabish@gmail.com](mailto:programmertabish@gmail.com)
- **GitHub**: [ProgrammerTabish](https://github.com/ProgrammerTabish)
