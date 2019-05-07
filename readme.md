This is a transport app for comparing local interstate transport fare

## Prerequisite
* PHP 7
* Composer
* A database system

## Installation

### Step 1.

Clone this repository to machine , and install all dependencies

```bash
git clone https://github.com/e3-technologies/Transport-app.git
cd transport-app && composer Install
cp example.env .env
php artisan key generate
```

### Step 2.

Next, create a new database and reference its name and username/password in the projects .env file. Below the database name is "transport"

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=transport
DB_USERNAME=root
DB_PASSWORD=
```
