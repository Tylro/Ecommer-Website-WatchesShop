

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;


INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Hunter Street ', 660.000),
(2, 'Hunter Core ', 780.000),
(3, 'Eva 1 ', 330.000),
(4, 'Eva 2 ', 410.000),
(5, 'Barbie ', 320.000),
(6, 'Hunter Green ', 690.000),
(7, 'Embrace ', 525.000),
(8, 'Hunter X ', 910.000),
(9, 'Red ', 380.000),
(10, 'Avenger ', 450.000),
(11, 'Pink ', 340.000),
(12, 'Rainbow ', 470.000);

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Venu', 'venu@xyz.com', '100001', '1649611400', 'Bangalore', 'Sai Ram road'),
(2, 'Nidhi', 'nidhi19@gmail.com', '100005', '9877878788', 'Karwar', 'Kodibaag'),
(3, 'Riya', 'riya12@gmail.com', '1000090', '8788787877', 'Mumbai', 'Andheri'),
(4, 'Haritha', 'haritha888@gmail.com', '1000082', '8788787888', 'Bangalore', 'Electronic city'),
(5, 'harsha', 'harsha45@gmail.com', '1000067', '8988988988', 'Bangalore', 'Electronic city'),
(6, 'Preetha', 'preetha222@gmail.com', '1001001', '8988989800', 'Mumbai', 'Navi Mumbai'),
(7, 'aravinda', 'ara11@gmail.com', '100100100', '8788679800', 'Chennai', 'koimedu'),
(8, 'Geeta', 'geeta11@gmail.com', '1234567', '6766767677', 'Mumbai', 'Andheri'),
(9, 'priya', 'priya44@gmail.com', '12121212', '8988989899', 'Mumbai', 'Navi Mumbai'),
(10, 'seema', 'seema11@gmail.com', '11111111', '6777676766', 'Mumbai', 'Navi Mumbai'),
(11, 'abcd', 'abcdefg@gmail.com', '9b874d36b003ea971d16c6fa947a6228', '8788787877', 'Karwar', 'wail Mehkeri'),
(12, 'seta', 'seta11@gmail.com', 'fcf272aed6ef644a2b1a5ccedb828847', '8788787877', 'Karwar', 'Karwar'),
(13, 'ee', 'ee11@gmail.com', 'e5e5d06e8e9f950414c4cd8eb18d9e7c', '8788787877', 'Karwar', 'karwar'),
(14, 'rema', 'rema11@gmail.com', 'cf36cba3a1d28a4947b6b8706df9c91b', '8788787877', 'Karwar', 'khodibaag'),
(15, 'hh', 'hh11@gmail.com', 'de43e0fe88869b15160e7e0be4190423', '8788787877', 'Karwar', 'karwar'),
(16, 'zz', 'zz11@gmail.com', '4ce4daf8c6283a054e1fe6bf2124cb63', '6766767677', 'karwar', 'karwar'),
(17, 'vina', 'vina11@gmail.com', 'fcf272aed6ef644a2b1a5ccedb828847', '8788789899', 'k', 'k'),
(18, 'reta', 'reta@gmail.com', '8b2773c0f1074f1cd5bc6f64eb19a592', '98', 'k', 'k'),
(19, 'aa', 'aa@gmail.com', 'aa21ac9ebd74ef6f04d95897ff5443d5', '8788787888', 'k', 'k'),
(20, 'tt', 'tt11@gmail.com', '3ed80171b1f4ab825f2038fc203c887c', '9899898999', 't', 't'),
(21, 'sana', 'sana22@gmail.com', '73812f2b9a460ff9b3873fbcf717b5f7', '8888888888', 'karwar', 'sai mandir road'),
(22, 'ana', 'ana22@gmail.com', '987654', '9899898988', 'ka', 'kaa');

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 1, 2, 'Confirmed'),
(2, 11, 2, 'Confirmed'),
(5, 12, 1, 'Confirmed'),
(6, 12, 2, 'Confirmed'),
(8, 13, 1, 'Confirmed'),
(9, 13, 2, 'Confirmed'),
(12, 14, 1, 'Added to cart'),
(13, 14, 2, 'Added to cart'),
(16, 20, 1, 'Confirmed'),
(17, 21, 1, 'Added to cart'),
(18, 21, 2, 'Added to cart'),
(20, 22, 1, 'Added to cart'),
(21, 22, 2, 'Added to cart');

ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;
