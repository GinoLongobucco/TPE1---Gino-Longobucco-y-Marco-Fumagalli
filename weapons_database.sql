SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
    time_zone = "+00:00";

CREATE TABLE
    WeaponType (id SERIAL PRIMARY KEY, NAME VARCHAR(50) NOT NULL);

CREATE TABLE
    Weapon (
        id SERIAL PRIMARY KEY,
        NAME VARCHAR(100) NOT NULL,
        damage INT NOT NULL,
        effective_range INT NOT NULL,
        weapon_type_id INT NOT NULL,
        FOREIGN KEY (weapon_type_id) REFERENCES WeaponType (id)
    );

INSERT INTO
    WeaponType (NAME)
VALUES
    ('Asalto'),
    ('Francotirador'),
    ('Subfusil'),
    ('Escopeta'),
    ('Ametralladora ligera'),
    ('Pistola');

INSERT INTO
    Weapon (NAME, damage, effective_range, weapon_type_id)
VALUES
    ('AK-12', 30, 500, 1),
    ('SCAR-H', 40, 450, 1),
    ('M416', 32, 500, 1),
    ('AUG A3', 34, 480, 1),
    ('F2000', 33, 470, 1);

INSERT INTO
    Weapon (NAME, damage, effective_range, weapon_type_id)
VALUES
    ('M98B', 100, 1200, 2),
    ('SRR-61', 95, 1300, 2),
    ('CS-LR4', 90, 1100, 2),
    ('JNG-90', 88, 1150, 2),
    ('FY-JS', 85, 1000, 2);

INSERT INTO
    Weapon (NAME, damage, effective_range, weapon_type_id)
VALUES
    ('MPX', 25, 200, 3),
    ('UMP-45', 34, 250, 3),
    ('P90', 22, 180, 3),
    ('CZ-3A1', 23, 220, 3),
    ('PDW-R', 24, 240, 3);

INSERT INTO
    Weapon (NAME, damage, effective_range, weapon_type_id)
VALUES
    ('SPAS-12', 80, 50, 4),
    ('870 MCS', 90, 45, 4),
    ('Saiga 12K', 75, 60, 4),
    ('UTS-15', 85, 55, 4),
    ('DBV-12', 78, 50, 4);

INSERT INTO
    Weapon (NAME, damage, effective_range, weapon_type_id)
VALUES
    ('M249', 25, 600, 5),
    ('M240B', 36, 650, 5),
    ('PKP Pecheneg', 38, 700, 5),
    ('LSAT', 26, 550, 5),
    ('MG4', 28, 580, 5);

INSERT INTO
    Weapon (NAME, damage, effective_range, weapon_type_id)
VALUES
    ('G18', 22, 50, 6),
    ('M1911', 34, 60, 6),
    ('P226', 33, 65, 6),
    ('MP443', 31, 55, 6),
    ('Glock 17', 28, 50, 6);

COMMIT;