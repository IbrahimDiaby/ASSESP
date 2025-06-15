CREATE DATABASE ASSESP;

CREATE TABLE admin (
    id INT PRIMARY KEY AUTO_INCREMENT,
    image TEXT NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    lastname VARCHAR(30) NOT NULL,
    firstname VARCHAR(60) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE gallery (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100),
    image TEXT NOT NULL,
    tag VARCHAR(100) NOT NULL,
    description TEXT,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE events (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    location VARCHAR(255),
    event_date DATE NOT NULL,
    start_time TIME,
    end_time TIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE team (
    id INT PRIMARY KEY AUTO_INCREMENT,
    lastname VARCHAR(30) NOT NULL,
    firstname VARCHAR(60) NOT NULL,
    role VARCHAR(100) NOT NULL,
    bio TEXT,
    image TEXT,
    joined_at DATE
);



