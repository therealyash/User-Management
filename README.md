# User Management System

A simple **User Registration & Login System** built with **PHP, MySQL, and Bootstrap**, running on **XAMPP**.


## Screenshots

![image](https://github.com/user-attachments/assets/1a6a4e20-771e-4a07-9ef3-39405338bbb4)

![image](https://github.com/user-attachments/assets/06a71cca-5563-4850-ac4e-0e34f09a770f)

![image](https://github.com/user-attachments/assets/93a7d574-149f-4b2e-a353-a31324f35195)

![image](https://github.com/user-attachments/assets/8807c90f-aa58-40c6-9e88-cb79952bfe05)

---

## 📁 Project Structure

```
registration/             # Main project folder
│— 📄 index.php          # Homepage (Navigation to Register/Login)
│— 📄 registration.html  # User Registration Page (Bootstrap Form)
│— 📄 register.php       # PHP Script to handle user registration
│— 📄 login.html         # User Login Page (Bootstrap Form)
│— 📄 login.php          # PHP Script to authenticate users
│— 📄 dashboard.php      # User Dashboard (after login)
│— 📄 users.php          # Display all registered users
│— 📄 logout.php         # Logout script (destroys session)
│— 📄 README.md          # Project Documentation
└— 📁 assets/            # Folder for CSS, JS, Images (if needed)
```

---

## 🛠️ Features

✅ **User Registration** with **encrypted passwords**  
✅ **User Login & Authentication** using **PHP Sessions**  
✅ **Bootstrap-styled UI** for a responsive design  
✅ **User Dashboard** after successful login  
✅ **Logout Functionality**  
✅ **View Registered Users** in a Bootstrap table  

---

## 🛠️ Setup Instructions

### 🔹 1. Install XAMPP (if not installed)
Download & install **[XAMPP](https://www.apachefriends.org/download.html)**.

### 🔹 2. Start Apache & MySQL
Open **XAMPP Control Panel**, then **Start Apache & MySQL**.

### 🔹 3. Create Database & Table
1. Open **phpMyAdmin** (`http://localhost/phpmyadmin/`).
2. Create a new database named **`registration_form`**.
3. Run the following SQL query to create the `users` table:

```sql
CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

### 🔹 4. Add Sample Users
Run this SQL query in phpMyAdmin:

```sql
INSERT INTO `users` (`user_name`, `password`, `name`) VALUES
('admin', MD5('123'), 'Admin User'),
('user', MD5('123'), 'Regular User');
```

### 🔹 5. Place Project in XAMPP `htdocs`
Move the **`registration`** folder to:  
```
C:\xampp\htdocs\registration
```

### 🔹 6. Run the Project
Open your browser and visit:
- 👉 **Homepage**: `http://localhost/registration/index.php`
- 👉 **Register User**: `http://localhost/registration/registration.html`
- 👉 **Login Page**: `http://localhost/registration/login.html`
- 👉 **View Users**: `http://localhost/registration/users.php`

---

## 📚 License
This project is open-source and free to use.

---

## 💡 Contribution
Feel free to fork this repository, submit issues, or make pull requests to improve the project!

