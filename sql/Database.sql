
CREATE DATABASE crmdb;
CREATE USER 'crm_user'@'localhost' IDENTIFIED BY 'passcrm';
GRANT ALL PRIVILEGES ON crmdb.* TO 'crm_user'@'localhost' IDENTIFIED BY 'passcrm' WITH GRANT OPTION;
FLUSH PRIVILEGES;
