# Mart

## Prerequisites
Before you begin, ensure you have the following installed on your machine:
- **PHP** >= 8.x
- **Composer** >= 2.x
- **MySQL**
## Installation

### 1. Clone the repository
```bash
git clone https://github.com/Anthony4m/mart.git
cd mart
```

### 3. Environment setup
- Copy `.env.example` to `.env`:
  ```bash
  cp .env.example .env
  ```
- Configure the `.env` file with your environment variables, especially:
    - Database settings

### 5. Storage and permissions
- Link the storage directory:
  ```bash
  php artisan storage:link
  ```
- Ensure appropriate permissions for the `storage` and `bootstrap/cache` directories:
  ```bash
  chmod -R 775 storage bootstrap/cache
  ```

### 6. Start the development server
- Start the Laravel server:
  ```bash
  php artisan serve
  ```

The application will be available at `http://localhost:8000`.

## Usage
- Access the application in your browser at `http://localhost:8000`.
- [Add details about logging in, navigating the app, or interacting with APIs.]