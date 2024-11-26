# Application Overview
This document provides an overview of the application overview. For detailed information, visit the [Wiki](https://github.com/KrisChan33/K-Employee-Management-Web-App/wiki).

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
  - Spatie (Roles & Permissions)

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
For an overview of the Default Credential and its navigation options, visit the Default [Default Credentials Wiki](https://github.com/KrisChan33/K-Task-Management-Web-App/wiki/6.-Default-Credentials).

## Database and Zip File
Refer to the [Database Wiki ](https://github.com/KrisChan33/K-Task-Management-Web-App/wiki/7.-Database) for instructions on importing the database and extracting resources.

## Requirements

Ensure your system meets the following requirements before starting. For more details, see the [ Requirements Wiki](https://github.com/KrisChan33/K-Task-Management-Web-App/wiki/8.-Requirements).

## Instructions
Complete installation and setup instructions are available in the [Setup Requirements Wiki.](https://github.com/KrisChan33/K-Task-Management-Web-App/wiki/7.-Instructions)

## Troubleshooting
- If you encounter missing `.env` or permissions errors, double-check file paths and server requirements.
- If `php artisan` commands fail, ensure PHP and Composer are installed and properly configured.


## License
 This project is licensed under the Apache 2.0 License - see the [LICENSE](LICENSE) file for details.
 
---
End of document.
