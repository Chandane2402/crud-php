# 📝 Simple PHP MySQL CRUD Application

This is a beginner-friendly web application built using **PHP** and **MySQL** to perform basic CRUD operations: **Create**, **Read**, **Update**, and **Delete** users.

---

## 🚀 Features

- ✅ Add New Users
- ✅ Display User List
- ✅ Edit User Information
- ✅ Delete Users
- ✅ Simple and clean UI
- ✅ Database connection using MySQLi

---

## 🛠 Tech Stack

| Layer      | Technology      |
|------------|-----------------|
| Frontend   | HTML, CSS       |
| Backend    | PHP (Procedural)|
| Database   | MySQL (phpMyAdmin) |
| Dev Tool   | VS Code + XAMPP |

---

## 📂 Folder Structure

crud-php/
│
├── db.php # MySQL connection
├── index.php # List users
├── create.php # Add user form
├── store.php # Insert user
├── edit.php # Edit user form
├── update.php # Update user
├── delete.php # Delete user
└── README.md # Project details

yaml
Copy
Edit

---

## 🧑‍💻 How to Run the Project

### 1️⃣ Install XAMPP
- Download from: [https://www.apachefriends.org](https://www.apachefriends.org)
- Start **Apache** and **MySQL** in XAMPP Control Panel.

### 2️⃣ Set Up the Project

- Copy your project folder (`crud-php`) to:
C:\xampp\htdocs\

diff
Copy
Edit

- Visit the app in your browser:
http://localhost/crud-php/index.php

sql
Copy
Edit

### 3️⃣ Create the Database

- Go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
- Run this SQL to create `test_db` and the `users` table:

```sql
CREATE DATABASE test_db;

USE test_db;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100)
);
🧪 Testing the App
Open http://localhost/crud-php/

Click "Add New User" to insert new data

View, edit, or delete entries using the buttons

📷 Screenshots
(Optional: Add screenshots later for better preview)

✅ GitHub Repository
This project is hosted at:
🔗 https://github.com/Chandane2402/crud-php

🙋‍♂️ Author
Chandan E
Final Year B.E. (ECE), BMS Institute of Technology
Learning Full Stack Development using PHP & Java

📄 License
This project is open-source and free to use for learning and development.

🌟 Happy Coding!
yaml
Copy
Edit

---

Let me know if you want to include [badges](f), [screenshots](f), or a [live demo link](f) later.
