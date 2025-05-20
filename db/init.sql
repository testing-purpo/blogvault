-- Create the database
CREATE DATABASE IF NOT EXISTS blogvault;
USE blogvault;

-- Create users table
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100),
  contact VARCHAR(20)
);

-- Insert initial admin user
INSERT INTO users (username, password, email, contact)
VALUES ('admin', 'admin@youdonotabletobruteforcethisp@ssw0rd', 'admin@blogvault.htb', '1234567890');
