# Application Overview
This document provides an overview of the application's features, including user roles, project management, and navigation options.

---
## Home Page
![alt text](ReadmeImages/Homepage.png)
---

## Login/Register
 Dark Mode: ![Dark Mode](ReadmeImages/image.png)
 Light Mode: ![Dark Mode](ReadmeImages/image-1.png)
 Registration Page: ![Registration](ReadmeImages/image-2.png)

# Admin Panel

### Features

The Admin Panel is accessible to the super admin and includes:

- **Super Admin Navigation Groups**:
  - User Management
  - Filament Shield (Roles & Permissions)

- **User Roles**:
  - Super Admin (controller access)
  - User

- **Security**:
  - Two-Factor Authentication (2FA) for enhanced security
---
### Navigation Groups

#### Human Resources
- **Departments**: Manage department information.
- **Employees**: Manage employee records.
- **Positions**: Manage job positions.

#### Attendance Management
- **Attendances**: Track and manage employee attendance records.

#### Payroll Management
- **Payrolls**: Manage payroll information.

#### Leave Management
- **Leave Requests**: Manage leave requests.

#### Performance Management
- **Performance Reviews**: Conduct and manage performance reviews.

---

### User Roles and Permissions

- **Admin**:
  - Can create, read, update, and delete (CRUD) all records.
  - Has access to all controllers and can manage all resources.
  - Can Enable 2FA.

- **Employee**:
  - Can View own records in Attendance, Payroll, Performance Review and Profile Information
  - Can Create own record in Attendance, Leave Request, 
  - Can Delete own record in Profile Information
  - Can Update records in Profile Information.
  - Cannot delete records or access admin-specific controllers.
  - Can Enable 2FA.
  - Can Disable 2FA.

---

### Admin Dashboard
![alt text](ReadmeImages/image-4.png)

### Admin Nav
![alt text](ReadmeImages/image-5.png)

## Controllers (Admin Only)

### Attendance Controller (Table)
![alt text](ReadmeImages/image-6.png) 

### Attendance Controller (Form)
![alt text](ReadmeImages/image-7.png)


### Payroll Controller (Table)
![alt text](ReadmeImages/image-10.png)

### Payroll Controller (Form)
![alt text](ReadmeImages/image-9.png)

### Leave Request Controller (Table)
![alt text](ReadmeImages/image-11.png)

### Leave Request Controller (Form)
![alt text](ReadmeImages/image-12.png)

### Performance Review Controller (Table)
![alt text](ReadmeImages/image-15.png)

### Performance Review Controller (Form)
![alt text](ReadmeImages/image-13.png)
---


# User Panel

### Features

The User Panel is accessible to the  panel user and includes:

- **Security**:
  - Two-Factor Authentication (2FA) for enhanced security
---
### Navigation Groups

#### Attendance Management
- **Attendances**: Track own attendance records.

#### Payroll Management
- **Payrolls**: View list of owned payroll information.

#### Leave Management
- **Leave Requests**: Track and Manage leave requests.

#### Performance Management
- **Performance Reviews**:  View owned performance reviews.

---

### User Roles and Permissions

- **Employee**:
  - Can View own records in Attendance, Payroll, Performance Review and Profile Information
  - Can Create own record in Attendance, Leave Request, 
  - Can Delete own record in Profile Information
  - Can Update records in Profile Information.
  - Cannot delete records or access admin-specific controllers.
  - Can Enable 2FA.
  - Can Disable 2FA.

---

### Employee Dashboard
![alt text](ReadmeImages/image-21.png)

### Employee Nav
![alt text](ReadmeImages/image-22.png)

## Navigations Groups

### Attendance (Table)
![alt text](ReadmeImages/image-23.png)

### Attendance (Form)
![alt text](ReadmeImages/image-24.png)

### Payroll (Table)
![alt text](ReadmeImages/image-25.png)

### Leave Request (Table)
![alt text](ReadmeImages/image-9.png)

### Leave Request Controller (Form)
![alt text](ReadmeImages/image-26.png)

### Performance Review Controller (Table)
![alt text](ReadmeImages/image-27.png)

---






### Edit Profile
Users and Admin have similar profile-editing options as including photo management.

![alt text](ReadmeImages/image-17.png)
![alt text](ReadmeImages/image-18.png)

---

### 2FA Authentication
![alt text](ReadmeImages/image-19.png)
![alt text](ReadmeImages/image-20.png)
---


## Default Permissions for 'super_admin'
![alt text](ReadmeImages/image-28.png)
- Select all

## Default Permissions Needed to set for 'panel_user'
  Only check the list below for default employee permission.
![alt text](ReadmeImages/image-29.png)
![alt text](ReadmeImages/image-30.png)
![alt text](ReadmeImages/image-31.png)
![alt text](ReadmeImages/image-32.png)
![alt text](ReadmeImages/image-33.png)




---
## Default Credentials

### Super Admin
- **Email:** superadmin@gmail.com
- **Password:** K-is-king

### User
- **Email:** employee@gmail.com
- **Password:** K-is-dev

## Database and Zip File

### Database
The database file is located in the `database` directory. You can import it into your database management system.

- **File:** `Database of K-Employee-Management-Web-App/k-task-management-web-app-database.sql`

### Zip File
The zip file containing additional resources is located in the `resources` directory.

- **File:** `you can download a zip file here in github`

## Requirements

Before you begin, ensure you have met the following requirements:

- **PHP**: ^8.1
- **Composer**: Latest version
- **Node.js**: Latest LTS version (if using frontend assets)
- **npm**: Latest version (if using frontend assets)
- **Database**: MySQL or any other supported database

## Instructions

### 1. Clone the repository:
  ```bash
   git clone https://github.com/KrisChan33/K-Task-Management-Web-App
  ```
---
### 2. Import the Database
 Import the database file into your database management system for Default Permissions,  Run Migration if not.
---
### 3. Extract the Zip File
 Extract the zip file to access additional resources.

---

### 4. Navigate to the Project Directory.
Open your terminal and navigate to the folder where you cloned the project:
```bash
cd K-Task-Management-Web-App
```

---

### 5. Install Dependencies
Install all required PHP dependencies using Composer:
```bash
composer install
```

---

### 6. Set Up the Environment File
- Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```
- Edit the `.env` file and configure your database credentials and other settings.
---

### 7. Generate an Application Key
Run the following command to generate a new application key:
```bash
php artisan key:generate
```

---

### 8. Set Up the Database
- Ensure you have a database ready and update the `.env` file with the database credentials.

- Run the migrations to create the necessary tables in the database:
   ```bash
   php artisan migrate 
   ```
  ```bash
   php artisan migrate --seed     = for include the user and super admin account.
   ```

---

### 9. Start the Development Server
Start the Laravel development server using Artisan:
```bash
php artisan serve
```
The server will run at [http://localhost:8000](http://localhost:8000) by default.

---

## 10. (Optional) Install Node.js Dependencies
If the project uses frontend assets, you might need to install Node.js dependencies:
```bash
npm install
```
Then compile the assets:
```bash
npm run dev
```

---

## Troubleshooting
- If you encounter missing `.env` or permissions errors, double-check file paths and server requirements.
- If `php artisan` commands fail, ensure PHP and Composer are installed and properly configured.

---

## License

This project is licensed under the Apache 2.0 License - see the [LICENSE](LICENSE) file for details.
---
End of document.
