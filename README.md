# 📚 Booknest - Smart Library Management System

<div align="center">

![UI4](https://github.com/faatihahr/Pustaka2/assets/121376054/ec82b652-8853-41d1-8724-575345a94ab5)

**A modern, intelligent library management system built with Laravel**

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![Laravel](https://img.shields.io/badge/Laravel-8.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-7.4%2B-purple.svg)](https://php.net)

[Features](#-features) • [Demo](#-demo) • [Installation](#-installation) • [Usage](#-usage) • [Tech Stack](#-tech-stack) • [Contributing](#-contributing)

</div>

---

## 🌟 Overview

Booknest is a comprehensive library management system designed to streamline the operations of modern libraries. With an intuitive interface and powerful features, it makes managing books, members, and transactions effortless.

## ✨ Features

### 📖 Book Management
- **Complete Catalog System** - Add, edit, delete, and organize books with detailed information
- **Advanced Search** - Find books quickly by title, author, ISBN, or category
- **Category Management** - Organize books into customizable categories
- **Stock Tracking** - Real-time monitoring of book availability

### 👥 Member Management
- **Member Registration** - Easy onboarding process for new library members
- **Member Profiles** - Comprehensive member information and borrowing history
- **Member Status Tracking** - Monitor active, inactive, and suspended members

### 🔄 Transaction System
- **Borrowing Management** - Streamlined check-out and check-in processes
- **Return Tracking** - Automated due date calculations and reminders
- **Fine Calculation** - Automatic late fee computation
- **Transaction History** - Complete audit trail of all library activities

### 📊 Reporting & Analytics
- **Dashboard Overview** - Visual insights into library operations
- **Borrowing Statistics** - Track popular books and reading trends
- **Member Analytics** - Understand member engagement patterns

### 🔐 Security
- **Role-Based Access Control** - Admin and librarian permission levels
- **Secure Authentication** - Protected login system
- **Data Validation** - Input sanitization and validation

## 🎯 Demo

<div align="center">

### Dashboard
![UI1](https://github.com/faatihahr/Pustaka2/assets/121376054/0790373c-b29a-4e67-bb25-e6aadf4d5367)


### Book Catalog
![UI2](https://github.com/faatihahr/Pustaka2/assets/121376054/63af70df-0316-4796-9032-6717cbae155a)

### Transaction Management
![UI3](https://github.com/faatihahr/Pustaka2/assets/121376054/a6ce3ec3-4405-41b6-a01c-100654512375)

</div>

## 🚀 Installation

### Prerequisites

Before you begin, ensure you have the following installed:
- PHP >= 7.4
- Composer
- MySQL/MariaDB
- Apache/Nginx web server

### Step-by-Step Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/faatihahr/Booknest.git
   cd Booknest
   ```

2. **Install Dependencies**
   ```bash
   composer update
   ```

3. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Setup**
   - Create a new MySQL database named `pustaka2`
   - Import the provided database schema:
   ```bash
   mysql -u your_username -p pustaka2 < pustaka2.sql
   ```

5. **Configure Database Connection**
   
   Edit your `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=pustaka2
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Configure Base URL**
   
   Update `config/app.php` to match your local setup:
   ```php
   'url' => 'http://localhost/Booknest',
   ```

7. **Start the Development Server**
   ```bash
   php artisan serve
   ```

8. **Access the Application**
   
   Open your browser and navigate to:
   ```
   http://localhost:8000
   ```

## 💻 Usage

### Default Login Credentials

**Admin Account:**
- Username: `admin`
- Password: `admin123`

**Librarian Account:**
- Username: `librarian`
- Password: `librarian123`

> ⚠️ **Important:** Change these default credentials after first login for security purposes.

### Basic Operations

#### Adding a New Book
1. Navigate to **Books** > **Add New Book**
2. Fill in book details (Title, Author, ISBN, Category, etc.)
3. Click **Save**

#### Registering a Member
1. Go to **Members** > **Register New Member**
2. Enter member information
3. Submit the form

#### Processing a Loan
1. Select **Transactions** > **New Loan**
2. Search for the member
3. Scan or search for the book
4. Set return date and confirm

## 🛠 Tech Stack

<div align="center">

| Category | Technology |
|----------|-----------|
| **Backend Framework** | Laravel 8.x |
| **Frontend** | Blade Templates, Bootstrap 5 |
| **Database** | MySQL |
| **Authentication** | Laravel Auth |
| **Language** | PHP 7.4+ |

</div>

## 📁 Project Structure

```
Booknest/
├── app/                    # Application core
│   ├── Http/
│   │   ├── Controllers/   # Request handlers
│   │   └── Middleware/    # HTTP middleware
│   └── Models/            # Eloquent models
├── config/                # Configuration files
├── database/              # Migrations & seeders
│   ├── migrations/
│   └── seeders/
├── public/                # Public assets
│   ├── css/
│   ├── js/
│   └── images/
├── resources/             # Views & frontend assets
│   └── views/
│       ├── books/
│       ├── members/
│       └── transactions/
├── routes/                # Application routes
└── storage/               # Application storage
```

## 🎨 Screenshots

<details>
<summary>Click to view more screenshots</summary>

### Member Management
![Members](img/UI1.jpg)

### Book Details
![Book Details](img/UI2.jpg)

### Transaction History
![History](img/UI3.jpg)

### Reports Dashboard
![Reports](img/UI4.jpg)

</details>

## 🔄 Updates & Roadmap

### Current Version: 1.0.0

### Upcoming Features
- [ ] Mobile-responsive design improvements
- [ ] Email notifications for due dates
- [ ] Book reservation system
- [ ] QR code generation for books
- [ ] Multi-library support
- [ ] Advanced reporting with exports (PDF/Excel)
- [ ] Integration with external book APIs
- [ ] Digital library card generation

## 🤝 Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 🐛 Bug Reports

Found a bug? Please open an issue with detailed information:
- Steps to reproduce
- Expected behavior
- Actual behavior
- Screenshots (if applicable)

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 Author

**Faatihah Rahmatillah**

- GitHub: [@faatihahr](https://github.com/faatihahr)
- Portfolio: [fahraaraa.vercel.app](https://fahraaraa.vercel.app/)

## 🙏 Acknowledgments

- Laravel Framework for the robust foundation
- Bootstrap for the responsive UI components
- The open-source community for inspiration and support

## 📞 Support

If you like this project, please give it a ⭐️ on GitHub!

For questions or support, please open an issue or contact me through my portfolio website.

---

<div align="center">

**Made with ❤️ and ☕ by Faatihah**

⭐️ Star this repo if you find it useful!

</div>
##📚** Booknest - Smart Library Management System**
<div align="center">
A modern, intelligent library management system built with Laravel


Features • Demo • Installation • Usage • Tech Stack • Contributing

</div>
 
## 🌟 Overview
Booknest is a comprehensive library management system designed to streamline the operations of modern libraries. With an intuitive interface and powerful features, it makes managing books, members, and transactions effortless.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
