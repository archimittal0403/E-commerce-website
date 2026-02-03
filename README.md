# E-Commerce Website (WordPress-like Independent System)

## 📌 Project Overview
This project is a **dynamic, reusable E-Commerce platform** inspired by the **WordPress working model**.  
The main goal of this project is to provide **independence and sustainability** to the website owner so that once the website is delivered, the owner does **not depend on the developer** for day-to-day operations.

Using this system, a single base project can be customized and reused to create **multiple e-commerce websites** for different clients.

---

## 🎯 Core Idea (Why This Project?)
Just like **WordPress**, where:
- A website is designed once
- Then deployed
- And the owner can independently manage content, products, and design

Similarly, this project allows:
- Business owners to manage products
- Update logos, content, and prices
- Handle orders and users  
**without contacting the developer again**

This ensures:
- ✅ User Independence  
- ✅ Scalability  
- ✅ Sustainability  

---

## 🔁 Project Flow & Architecture

### 1️⃣ Landing Page (`index.php`)
- Displays all available products
- Shows product name, price, and details
- Displays business logo and branding
- Navigation menu includes:
  - Home
  - Contact
  - My Account
  - Login / Register

This page acts as the **storefront** for customers.

---

### 2️⃣ Domain Separation
The project is divided into **two independent domains**:

#### 🔹 User Domain
Works like Amazon / Flipkart:
- User registration & login
- Product browsing
- Add to cart
- Checkout & order placement
- Profile management

#### 🔹 Admin Domain
Used by the website owner:
- Product management
- Order tracking
- Website customization
- Full control without developer dependency

---

## 👤 User Flow

1. User registers / logs in
2. Authentication includes:
   - CAPTCHA verification
   - Secure login validation
3. After login, user can:
   - Browse products
   - Add items to cart
   - Place orders
   - Checkout
4. User can manage profile:
   - Update name
   - Upload/change profile picture
   - View order status

---

## 🛡️ Security Implementation

This project follows **secure coding practices**, which is highly aligned with RT Camp expectations.

### 🔐 Implemented Security Features
- **CAPTCHA**
  - Prevents bots and fake traffic
  - Reduces unnecessary server load

- **OTP Generation**
  - Used for verification
  - Adds an extra authentication layer

- **Password Hashing**
  - Passwords are never stored in plain text
  - Secure hashing techniques used

- **Input Validation**
  - Prevents SQL Injection
  - Sanitized user inputs

- **Session Management**
  - Secure login sessions
  - Unauthorized access prevention

---

## 🛠️ Admin Flow (Independence Model)

Once the website is sold to a business owner:

The admin can independently:
- Add new products
- Edit product details
- Change product prices
- Update logos and branding
- Manage orders
- Control website content

💡 **No developer dependency required after delivery**

This makes the project **commercially viable** and **client-friendly**.

---

## 🧰 Tech Stack
- **Frontend:** HTML, CSS, Bootstrap, JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **Server:** Apache (XAMPP)

---

## 🚀 Installation Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/archimittal0403/E-commerce-website.git
