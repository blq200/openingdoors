CREATE TABLE `customer`(
    `id_customer` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nom` VARCHAR(255) NOT NULL,
    `prénom` VARCHAR(255) NOT NULL,
    `adress` VARCHAR(255) NOT NULL,
    `numéro` VARCHAR(255) NOT NULL,
    `mail` VARCHAR(255) NOT NULL,
    `motpass` VARCHAR(255) NOT NULL,
    `confirmer` VARCHAR(255) NOT NULL,
    `user_type` VARCHAR(255) NOT NULL
);
CREATE TABLE `Maison`(
    `id maison` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Adress` VARCHAR(255) NOT NULL,
    `Description` TEXT NOT NULL,
    `Prix` DECIMAL(8, 2) NOT NULL,
    `Superficie` INT NOT NULL
);
CREATE TABLE `Locataire`(
    `id locataire` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Nom` VARCHAR(255) NOT NULL,
    `Prénom` VARCHAR(255) NOT NULL,
    `Numéro de télèphone` VARCHAR(255) NOT NULL,
    `Email` VARCHAR(255) NOT NULL,
    `Mot de Pass` VARCHAR(255) NOT NULL
);
CREATE TABLE `Bailleur`(
    `id bailleur` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Nom` VARCHAR(255) NOT NULL,
    `Prénom` VARCHAR(255) NOT NULL,
    `Adresse` VARCHAR(255) NOT NULL,
    `Numéro de télèphone` VARCHAR(255) NOT NULL,
    `Email` VARCHAR(255) NOT NULL,
    `Mot de Pass` VARCHAR(255) NOT NULL
);
CREATE TABLE `Location`(
    `id location` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Place` VARCHAR(65) NOT NULL,
    `ddebut` DATE NOT NULL,
    `dfin` DATE NOT NULL
    `location_type` VARCHAR(255) NOT NULL,
);
ALTER TABLE
    `customer` ADD CONSTRAINT `customer_mot de pass_foreign` FOREIGN KEY(`motpass`) REFERENCES `Bailleur`(`id bailleur`);
ALTER TABLE
    `maison` ADD CONSTRAINT `maison_superficie_foreign` FOREIGN KEY(`Superficie`) REFERENCES `Location`(`id location`);