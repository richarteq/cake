CREATE DATABASE cake_cms;
CREATE USER cake_cms@localhost IDENTIFIED BY '12345678';
GRANT ALL PRIVILEGES ON cake_cms.* TO cake_cms@localhost;
