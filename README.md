# Application Overview
This document provides an overview of the application's features, including user roles, project management, and navigation options.

---
## Home Page
![alt text](ReadmeReadmeImages/images/Homepage.png)

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

### Instructions
1. Clone the repository:
   ```bash
   git clone https://github.com/KrisChan33/K-Employee-Management-Web-App
    ```
2. Navigate to the project directory
   ```bash
   cd K-Employee-Management-Web-App
    ```
3. Import the database file into your database management system.
4. Extract the zip file to access additional resources.

---

## License

This project is licensed under the Apache 2.0 License - see the [LICENSE](LICENSE) file for details.
---
End of document.
