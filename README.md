# TrainingHub

TrainingHub is a Laravel-based application designed to manage training programs, organizations, and user roles (students and supervisors). It provides a seamless experience for users to create plans, rate organizations, and manage their training schedules.

---

## Features

- **User Roles**:
    - **Students**: Can create training plans, rate organizations, and view their schedules.
    - **Supervisors**: Can manage organizations, view student progress, and oversee training programs.

- **Training Plans**:
    - Students can create plans with details like start date, end date, training type, and organization.

- **Organization Ratings**:
    - Students can rate organizations on a 5-star scale.

---

## Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-username/traininghub.git
   cd traininghub

2. **Install Dependencies**:
    ```bash 
    composer install
    npm install

3. **Set Up the Environment**:
    ```bash
    cp .env.example .env

4. **Generate an application key**:
    ```bash
    php artisan key:generate

5. **Update the .env file with your database credentials:**:
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=traininghub
    DB_USERNAME=root
    DB_PASSWORD=

6. **Run Migrations and Seeders:**:
    ```bash
    php artisan migrate --seed


6. **Start the Development Server:**:
    ```bash
    php artisan serve

7. **Access the Application:**:
    .Open your browser and go to http://localhost:8000
    ..For Student Dashboard: 
    ...E-mail: student@example.com
    ...Passowrd: Student@12345678
    ..For Supervisors:
    ...E-mail: supervisor@example.com
    ...Password: Supervisor@12345678

