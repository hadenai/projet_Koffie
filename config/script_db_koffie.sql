/*CREATION TABLE category*/

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Arabica'),
(2, 'Robusta'),
(3, 'Blends');



/*CREATION TABLE product */
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `acidity` varchar(255) NOT NULL,
  `caffeine` varchar(255) NOT NULL,
  `flavor` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `more` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `imageOrigin` varchar(255) NOT NULL,
  `imageA` varchar(255) NOT NULL,
  `imageB` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;


INSERT INTO `product` (`id`, `name`, `image`, `details`, `acidity`, `caffeine`, `flavor`, `origin`, `more`, `price`, `imageOrigin`, `imageA`, `imageB`, `category_id`, `created_at`) VALUES
(1, 'Dune', '1.png', 'lorem', 'Moyenne', '10%', 'Boiser', 'Australie', 'lorem ipsum', '150$', '2.png', '3.png', '4.png', 1, '2019-04-25 10:00:00'),
(2, 'Peepe', '5.PNG', 'lorem', 'Moyenne', '18%', 'Fruit', 'Mali', 'lorem ipsum', '55$', '6.PNG', '7.PNG', '8.PNG', 2, '2019-04-25 10:23:59');

/*CREATION TABLE form */
CREATE TABLE form ( id INT(11) AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, email VARCHAR(255), yourmessage VARCHAR(255) NOT NULL );
