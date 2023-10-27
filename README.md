
Simple_School_Db

A Simple Php Laravel Project to display Student_Db Database tables content.

## Project Setup

### Prerequisites

- PHP >= 7.4
- Composer
- MySQL or a compatible database system
- Node.js & NPM (for Laravel Mix)

### Installation Steps

1. **Clone the repository**:

   ```bash
   git clone https://github.com/your_username/your_repo_name.git
   ```

2. **Navigate to the project directory**:

   ```bash
   cd your_repo_name
   ```

3. **Install PHP dependencies**:

   ```bash
   composer install
   ```

4. **Copy the `.env.example` to `.env`**:

   ```bash
   cp .env.example .env
   ```

5. **Generate an application key**:

   ```bash
   php artisan key:generate
   ```

6. **Setup the database**:

   - Create a new database in your database system.
   - Update the `.env` file with your database credentials:

     ```env
     DB_DATABASE=your_database_name
     DB_USERNAME=your_database_user
     DB_PASSWORD=your_database_password
     ```

7. **Import the database**:

   If you've included a `.sql` file in your repository:

   ```bash
   mysql -u username -p School_Db < your_file.sql
   ```

8. **Install JS dependencies and compile assets (if needed)**:

   ```bash
   npm install
   npm run dev
   ```

9. **Start the local development server**:

   ```bash
   php artisan serve
   ```

   You can access the app at [http://localhost:8000](http://localhost:8000).
