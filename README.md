# 🎓 Student Management System (Laravel)

A simple Student Management System built using Laravel to practice backend development, OOP principles, and database design. This project focuses on learning how real-world school systems are structured.

---

## 📌 Project Overview

This system manages students, teachers, subjects, and grades. It demonstrates how a typical school information system works using Laravel MVC architecture.

The goal is to improve backend development skills and apply Object-Oriented Programming (OOP) in a real project.

---

## 🎯 Objectives

- Build a CRUD-based school management system
- Practice Laravel MVC architecture
- Apply OOP concepts (Encapsulation, Inheritance, Polymorphism, Abstraction)
- Work with database relationships
- Implement authentication and role-based access

---

## ✨ Features

### 🔐 Authentication

- User login and logout
- Role-based access (Admin, Teacher, Student)
- Password hashing and security

---

### 🎓 Student Management

- Add new students
- Edit student information
- Delete students
- View student profiles

---

### 👨‍🏫 Teacher Management

- Add teachers
- Assign subjects
- View assigned students

---

### 📚 Subject Management

- Create and manage subjects
- Assign subjects to teachers

---

### 📊 Grade Management

- Input student grades
- View grade records
- Compute average grades

---

### 📈 Dashboard

- Total students
- Total teachers
- Total subjects
- Recent activity overview

---

## 🧱 Tech Stack

- PHP (Laravel Framework)
- PostgreSQL / MySQL
- Blade Templates
- Bootstrap (Simple UI)
- Eloquent ORM

---

## 🏗️ System Architecture

This project follows Laravel MVC structure:
Models → Database logic
Views → UI (Blade templates)
Controllers → Application logic

---

## 🗄️ Database Structure

### users

- id
- email
- password
- role

### students

- id
- user_id
- student_number
- course
- year_level

### teachers

- id
- user_id
- employee_number
- department

### subjects

- id
- code
- name
- units
- teacher_id

### grades

- id
- student_id
- subject_id
- grade
- remarks

---

## 🔗 Relationships

- A Student has many Grades
- A Teacher has many Subjects
- A Subject has many Grades
- A User can be Student, Teacher, or Admin

---

## 🧠 OOP Concepts Used

### Encapsulation

Data is protected using private/protected properties.

### Inheritance

Student, Teacher, and Admin extend a base User class.

### Polymorphism

Different user types implement the same method differently (e.g., dashboard()).

### Abstraction

Abstract classes define base behavior while child classes implement specific logic.

---

## 📂 Project Structure (Laravel)

app/
├── Http/
│ ├── Controllers/
│ │ ├── StudentController.php
│ │ ├── TeacherController.php
│ │ ├── SubjectController.php
│ │ └── GradeController.php
│
├── Models/
│ ├── Student.php
│ ├── Teacher.php
│ ├── Subject.php
│ └── Grade.php
│
├── Services/
│ └── GradeService.php

---

## 🎨 UI Design

Simple admin dashboard using Bootstrap:
+------------------------------------------------+
| Navbar |
+------------------------------------------------+
| Sidebar | Main Content |
| | Tables / Forms |
+------------------------------------------------+

Pages:

- Dashboard
- Students
- Teachers
- Subjects
- Grades

---

## 🔐 Security Features

- Password hashing (bcrypt)
- CSRF protection
- Input validation
- Role-based access control
- Laravel middleware protection

---

## ⚙️ Laravel Features Used

- Routing
- Controllers
- Models
- Migrations
- Seeders
- Middleware
- Eloquent ORM
- Authentication system

---

## 🚀 Future Improvements

- Attendance system
- Email notifications
- PDF grade reports
- API support (for Vue frontend)
- Redis caching
- Docker deployment

---

## 📚 Learning Outcome

After completing this project, you will understand:

- How real Laravel applications are structured
- How database relationships work in real systems
- How OOP is applied in backend systems
- How CRUD systems are built professionally
- Basic backend architecture design

---

## 🏁 Note

This is a learning project designed to simulate a real-world school management system. It is intended to build strong backend fundamentals before moving to advanced Laravel or full-stack development.
