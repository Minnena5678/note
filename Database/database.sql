-- สร้างฐานข้อมูล
CREATE DATABASE IF NOT EXISTS user_database;

-- เลือกฐานข้อมูลที่ใช้
USE user_database;

-- สร้างตาราง users
CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);


CREATE TABLE IF NOT EXISTS private_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    FOREIGN KEY (email) REFERENCES users(email),
    travel_method VARCHAR(50) NOT NULL,
    app_method VARCHAR(50),
    train VARCHAR(50),
    train_number VARCHAR(20),
    seat_class VARCHAR(50),
    seat_number VARCHAR(20),
    vehicle_plate VARCHAR(20),
    vehicle_color VARCHAR(50),
    pickup_dropoff VARCHAR(100),
    start_time TIME,
    atmosphere TEXT,
    baggage_images TEXT,
    capture_images TEXT,
    atmosphere_images TEXT,
    ticket_images TEXT,
    -- date DATETIME NOT NULL
    date DATETIME NOT NULL
);
CREATE TABLE IF NOT EXISTS public_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    FOREIGN KEY (email) REFERENCES users(email),
    travel_method VARCHAR(50) NOT NULL,
    vehicle_plate VARCHAR(20),
    route_number VARCHAR(20),
    driver_name VARCHAR(50),
    driver_id VARCHAR(20),
    pickup_dropoff VARCHAR(100),
    start_time TIME,
    baggage_images TEXT,
    driver_card_images TEXT,
    front_back_images TEXT,
    ticket_images TEXT,
    atmosphere_images TEXT,
    atmosphere TEXT,
    date DATETIME NOT NULL
);

