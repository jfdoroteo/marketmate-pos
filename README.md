# MarketMate POS

MarketMate POS is a beginner-friendly CodeIgniter 4 application for displaying customer and staff account records. This version replaces the temporary PHP arrays from TFA1 with records stored in a MySQL database and retrieved through CodeIgniter Models.

## Features

- Landing and About pages
- Customer Accounts page backed by MySQL
- User Accounts page backed by MySQL
- Ten sample customer records and ten sample staff records
- Customer type, loyalty points, and account status
- Staff role, contact details, and account status
- CodeIgniter Models and Query Builder
- Responsive navigation and table layout

## Requirements

- PHP 8.2 or newer
- Composer
- MySQL or MariaDB
- XAMPP can be used for Apache, MySQL, and phpMyAdmin

## Setup

1. Clone or download this repository.
2. Open a terminal in the project folder.
3. Install PHP dependencies:

   ```powershell
   composer install
   ```

4. Copy `env` to `.env` if `.env` does not exist.
5. Configure `.env` with your local settings:

   ```ini
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost:8080/'

   database.default.hostname = localhost
   database.default.database = marketmate_pos
   database.default.username = root
   database.default.password =
   database.default.DBDriver = MySQLi
   database.default.port = 3306
   ```

6. Import `database/marketmate_pos.sql` into an empty database through phpMyAdmin or the MySQL command line. Do not import it over an existing MarketMate database.
7. Start the application:

   ```powershell
   php spark serve
   ```

8. Visit `http://localhost:8080/`.

## Routes

- `/` - Landing page
- `/about` - About page
- `/customers` - Customer Accounts
- `/users` - User Accounts

## Database Flow

The `CustomerModel` and `UserModel` retrieve database records. Their controllers pass the returned arrays to the existing views, where `foreach` loops render the records as tables.

The tables retain the required TFA2 fields (`id`, `full_name`, `created_at`, and the specified contact and username fields). They also include optional POS fields from the initial schema draft. `created_at` represents the registration date. The nullable `password_hash` field is reserved for a future login feature; no passwords are stored or displayed in this activity.

### Customer fields

| Field | Purpose |
| --- | --- |
| `id` | Unique customer ID |
| `full_name`, `email`, `phone` | Contact information |
| `address` | Optional location |
| `customer_type` | Regular or Member |
| `loyalty_points` | Points balance |
| `account_status` | Active or Inactive |
| `created_at` | Registration date and time |

### Staff fields

| Field | Purpose |
| --- | --- |
| `id` | Unique staff ID |
| `username`, `full_name` | Account identity |
| `email`, `phone` | Optional contact information |
| `password_hash` | Reserved for a future login feature |
| `role` | Admin, Manager, Cashier, or Inventory |
| `account_status` | Active or Inactive |
| `last_login` | Optional last sign-in time |
| `created_at` | Account creation date and time |
