# Welcome to SEASalon!

SEASalon is a simple web app with the purpose of creating and tracking salon reservations. Users are able to see the services offered by the salon, leave a review on SEASalon, and book a reservation. Admin is able to create branches, services, accept or reject a reservation, and track reservations made by the user.

This project was made by Abraham Gregorius as an assignment for COMPFEST 2024 hosted by Universitas Indonesia. 

### Requirements

- git
- Any webserver [XAMPP, LAMP, Laragon]
- composer
- node.js
- npm
- php (> 8.1)

### Credentials

- admin
email: [thomas.n@compfest.id](mailto:thomas.n@compfest.id)
password: Admin123
- customer
email: [customer@mail.com](mailto:customer@mail.com)
password: customer

---

Initialize the app

```bash
composer install
```

Rename `.env.example` to `.env`

Set the database configs to match your device configs

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Run these commands seperately

```bash
php artisan migrate --seed

# After process is finished, run the command below
npm install
```

Serve the application

```bash
php artisan serve

# In another terminal
npm run dev
```