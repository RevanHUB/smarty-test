

-- Delete comments before executing for safety
-- Create the DB
CREATE DATABASE `assestment_contact`;
-- Create the table for Contact
CREATE TABLE `assestment_contact`.`contact`(
	id INT AUTO_INCREMENT,
    email_sender VARCHAR(25) NOT NULL,
    message VARCHAR(255) NOT NULL,
    treatment VARCHAR(5) NOT NULL,
    time DATE NOT NULL,
    CONSTRAINT pk_contact PRIMARY KEY(`id`)
)ENGINE=InnoDB;
