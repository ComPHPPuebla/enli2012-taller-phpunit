-- Create database
DROP DATABASE IF EXISTS address_book;
CREATE DATABASE address_book 
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

-- Create user
GRANT ALL PRIVILEGES on address_book.* TO abook_user@localhost IDENTIFIED BY 'address_b00k_us3r';

-- Create tables
USE address_book;