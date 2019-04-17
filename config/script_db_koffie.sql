//DB NAME = koffie





--!CREATION TABLE category-->

CREATE TABLE category (
id int(255) NOT NULL AUTO_INCREMENT,
name varchar(255) NOT NULL,
PRIMARY KEY (`id`)
);


--!CREATION TABLE product-->


CREATE TABLE product ( id INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
name VARCHAR(255) NOT NULL,
image VARCHAR(255) NOT NULL,
details VARCHAR(255) NOT NULL,
acidity VARCHAR(255) NOT NULL,
caffeine VARCHAR(255) NOT NULL,
flavor VARCHAR(255) NOT NULL,
origin VARCHAR(255) NOT NULL,
category_id INT(11),
FOREIGN KEY (category_id) REFERENCES category(id)
);




--!AJOUT DE DONNEES FAKE-->


INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Arabica'),
(2, 'Robusta'),
(3, 'Blends');

INSERT INTO product (id, name, image, details, acidity, caffeine, flavor, origin, category_id) VALUES (1, 'coffee_1', '1.PNG', 'blablablablabla', 'Moyenne', '19%', 'cacao', 'Marocco', 1);
INSERT INTO product (id, name, image, details, acidity, caffeine, flavor, origin, category_id) VALUES (2, 'coffee_2', '2.PNG', 'blablablablabla', 'Moyenne', '19%', 'cacao', 'Marocco', 2);
INSERT INTO product (id, name, image, details, acidity, caffeine, flavor, origin, category_id) VALUES (3, 'coffee_3', '3.PNG', 'blablablablabla', 'Moyenne', '19%', 'cacao', 'Marocco', 3);
INSERT INTO product (id, name, image, details, acidity, caffeine, flavor, origin, category_id) VALUES (4, 'coffee_4', '4.PNG', 'blablablablabla', 'Moyenne', '19%', 'cacao', 'Marocco', 1);
INSERT INTO product (id, name, image, details, acidity, caffeine, flavor, origin, category_id) VALUES (5, 'coffee_5', '5.PNG', 'blablablablabla', 'Moyenne', '19%', 'cacao', 'Marocco', 2);
INSERT INTO product (id, name, image, details, acidity, caffeine, flavor, origin, category_id) VALUES (6, 'coffee_6', '6.PNG', 'blablablablabla', 'Moyenne', '19%', 'cacao', 'Marocco', 3);
INSERT INTO product (id, name, image, details, acidity, caffeine, flavor, origin, category_id) VALUES (7, 'coffee_7', '7.PNG', 'blablablablabla', 'Moyenne', '19%', 'cacao', 'Marocco', 1);
INSERT INTO product (id, name, image, details, acidity, caffeine, flavor, origin, category_id) VALUES (8, 'coffee_8', '8.PNG', 'blablablablabla', 'Moyenne', '19%', 'cacao', 'Marocco', 2);
INSERT INTO product (id, name, image, details, acidity, caffeine, flavor, origin, category_id) VALUES (9, 'coffee_9', '9.PNG', 'blablablablabla', 'Moyenne', '19%', 'cacao', 'Marocco', 3);
INSERT INTO product (id, name, image, details, acidity, caffeine, flavor, origin, category_id) VALUES (10, 'coffee_10', '10.PNG', 'blablablablabla', 'Moyenne', '19%', 'cacao', 'Marocco', 1);
INSERT INTO product (id, name, image, details, acidity, caffeine, flavor, origin, category_id) VALUES (11, 'coffee_11', '11.PNG', 'blablablablabla', 'Moyenne', '19%', 'cacao', 'Marocco', 2);
INSERT INTO product (id, name, image, details, acidity, caffeine, flavor, origin, category_id) VALUES (12, 'coffee_12', '12.PNG', 'blablablablabla', 'Moyenne', '19%', 'cacao', 'Marocco', 3);

