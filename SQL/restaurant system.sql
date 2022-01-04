-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 10:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant system`
--

-- --------------------------------------------------------

--
-- Table structure for table `drinks_menu`
--

CREATE TABLE `drinks_menu` (
  `itemId` int(11) NOT NULL,
  `itemName` longtext NOT NULL,
  `itemPrice` float NOT NULL,
  `itemImg` longtext NOT NULL,
  `itemOrder` int(11) NOT NULL,
  `itemType` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drinks_menu`
--

INSERT INTO `drinks_menu` (`itemId`, `itemName`, `itemPrice`, `itemImg`, `itemOrder`, `itemType`) VALUES
(3, 'Coke', 2, 'coke.60c906e5eb92b6.07839270.jpg', 3, 'softdrinks'),
(4, 'Fanta', 2, 'fanta.60c90726eab5c6.27567850.jpg', 2, 'softdrinks'),
(5, '7up', 2, '7up.60c90740a66283.45596091.jpg', 3, 'softdrinks'),
(6, 'Apple Juice', 2, 'apple.60c90769e1a398.75937715.jpg', 4, 'juice'),
(7, 'Orange Juice', 2, 'orange.60c90792d5e2a7.09897307.jpg', 5, 'juice'),
(8, 'Pineapple Juice', 2, 'pineapple.60c907aa1bb546.93479472.jpg', 6, 'juice'),
(9, 'Peach Juice', 2, 'peach.60c907cb4dfec5.89518483.jpg', 7, 'juice'),
(10, 'Still Water', 1, 'still.60c907e9802a37.67331980.jpg', 8, 'water'),
(11, 'Sparking Water', 1.5, 'sparking.60c9081ac7cdb7.45523110.png', 9, 'water'),
(12, 'Beer', 4, 'beer.60c9083c08a3a4.55477185.jpg', 10, 'alcoholicDrinks'),
(13, 'Red Wine', 7, 'red-wine.60c90851e5dee2.77337935.jpg', 11, 'alcoholicDrinks'),
(14, 'White Wine', 7, 'white-wine.60c9086ab3c565.34187833.jpg', 12, 'alcoholicDrinks'),
(15, 'Rose', 2, 'rose.60c9089a45a642.57087479.jpg', 13, 'alcoholicDrinks'),
(16, 'Cider', 0.99, 'cider.60c908b54d9a07.52682298.jpg', 14, 'alcoholicDrinks'),
(17, 'Coffee', 2, 'coffee.60c908d215f0b1.17410202.jpg', 15, 'hotDrinks'),
(18, 'Tea', 3, 'tea.60c908f564c137.05652489.jpg', 16, 'hotDrinks'),
(19, 'Hot Chocolate ', 3, 'hot-chocolate-.60c909178274a3.15566916.jpg', 17, 'hotDrinks'),
(20, 'Sake', 10, 'sake.60c90a14e63f47.14203541.jpg', 18, 'Liquor'),
(21, 'Amaretto', 3, 'amaretto.60c90a339c4cd6.65822783.jpg', 19, 'liquor'),
(22, 'Passoa', 2, 'passoa.60c90a6572f2f7.33209543.jpg', 20, 'Liquor'),
(23, 'Hibiki', 6, 'hibiki.60c90abd5447e1.59350138.jpg', 21, 'liquor'),
(24, 'Cointreau', 4, 'cointreau.60c90ae237d0c4.86463270.jpg', 22, 'liquor'),
(25, 'Kraken', 4, 'kraken.60c90b0c2e5a63.94119524.jpg', 23, 'Liquor');

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `favouritesId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `itemIdFood` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`favouritesId`, `userId`, `itemIdFood`) VALUES
(41, 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `favourites_drinks`
--

CREATE TABLE `favourites_drinks` (
  `favouritesId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `itemId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favourites_drinks`
--

INSERT INTO `favourites_drinks` (`favouritesId`, `userId`, `itemId`) VALUES
(3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `food_menu`
--

CREATE TABLE `food_menu` (
  `itemId` int(11) NOT NULL,
  `itemName` longtext NOT NULL,
  `itemIngredients` longtext NOT NULL,
  `itemPrice` float NOT NULL,
  `itemImg` longtext NOT NULL,
  `itemOrder` int(11) NOT NULL,
  `itemType` longtext NOT NULL,
  `itemSpiceLevel` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_menu` (`itemId`, `itemName`, `itemIngredients`, `itemPrice`, `itemImg`, `itemOrder`, `itemType`, `itemSpiceLevel`) VALUES
(4, 'Spring Rolls', 'Minced lamb stuffed spring Rolls served with red sweet and sour sauce ', 6.6, 'springrolls.60a60698bf3248.47522970.jpg', 1, 'starter', 'none'),
(5, 'Prawn and Avocado Salad', 'Stir-Fry prawns served on a bed of fresh produce, topped with Avocado and chili', 10.5, 'prawn_and_avocado_salad.60a6072ac4b6b0.10034196.jpg', 2, 'starter', 'hot'),
(7, 'Mixed Satay', 'A selection of marinated Chicken, Beef and Pork skewers served with a peanut sauce', 11, 'mixed_satay.60a607b23234d2.77211026.jpg', 3, 'starter', 'mild'),
(8, 'Prawn Tempura', 'Deep fried prawns served with a sweet chili sauce and Thai coleslaw', 9, 'prawn-tempura.60a607faab73f2.98138208.jpg', 4, 'starter', 'mild'),
(9, 'Fish Cakes', 'Deep fried ground fish fillet, mixed spices and red curry past, served with a cumber and sweet and sour sauce', 7.75, 'fish-cakes.60a60821882fd9.32352308.jpg', 5, 'starter', 'mild'),
(10, 'Prawn Rice Raps', 'A selection of fresh produce and prawns presented in a wrap ', 13.75, 'prawn-rice-raps.60a60a8e94da12.24258354.jpg', 6, 'starter', 'none'),
(11, 'Dhansak', 'Lentils, sugar or pineapple, lemon, fresh chili, mutton or lamb', 12.99, 'dhansak.60c6039a2b0772.46399888.jpg', 7, 'curry', 'mild'),
(12, 'Tikka masala ', 'Chicken, thick infused tomato sauce', 14, 'tikka-masala-.60c603f2094965.80561025.jpg', 8, 'curry', 'mild'),
(13, 'Pasanda ', 'Lamb, peppercorns, garlic, cumin (marinated in yoghurt)', 14.5, 'pasanda-.60c6042969ebc3.14448028.jpg', 9, 'curry', 'hot'),
(14, 'Korma', 'Chicken, yoghurt, coconut milk, nuts(almonds peanuts)', 11.5, 'korma.60c6046c88a606.49554344.jpg', 10, 'curry', 'none'),
(15, 'Soy sauce fried rice', 'Soy Sauce, peas, corn, rice', 4, 'soy-sauce-fried-rice.60c605aa8b7e47.92181202.jpg', 11, 'accompaniment', 'none'),
(16, 'Plain rice', 'Rice', 1, 'plain-rice.60c606667d5a55.17409735.jpg', 12, 'accompaniment', 'none'),
(17, 'Fries', 'potato', 1, 'fries.60c606931a5386.29589375.jpg', 13, 'accompaniment', 'none'),
(18, 'Side Of Vegetables', 'mushrooms, peppers, onions, broccoli', 2, 'side-of-vegetables.60c606dfba7c04.01829294.jpg', 14, 'accompaniment', 'none'),
(19, 'Milk Bread Rolls', 'flour, milk, yeest, suger, salt, condeced milk, butter and eggs', 2.5, 'milk-bread-rolls.60c607657ca174.12975830.jpg', 15, 'accompaniment', 'none'),
(20, 'Rice balls', 'Rice, sesame seeds', 3, 'rice-balls.60c607c95bb742.84918499.jpg', 16, 'accompaniment', 'none'),
(21, 'Shoyu ramen', 'Chicken broth, soy sauce, pork, ramen noodles, spring onions and a soft boiled egg ', 13, 'shoyu-ramen.60c60960708d83.00662129.jpg', 17, 'Soup', 'mild'),
(22, 'Tonkotsu ramen', 'Pork broth, soy sauce, pork, ramen noodles, enoki Mushrooms, spring onions and a soft boiled egg, fish sauce, mirin, bonito flakes', 15, 'tonkotsu-ramen.60c6097c5b52d7.32007884.jpg', 18, 'Soup', 'hot'),
(23, 'Shio ramen ', 'Sea salt, fish broth, pork, soft boiled eggs, nori and chives', 15, 'shio-ramen-.60c609a20bf961.01311580.jpg', 19, 'Soup', 'mild'),
(24, 'Ice Cream', 'variety of flavours on hand, ask for assistance', 5, 'ice-cream.60c60e2b3858b3.43493016.jpg', 20, 'dessert', 'none'),
(25, 'Mochi', 'variety of flavours on hand, ask for assistance', 6, 'mochi.60c60e4380e249.34738708.jpg', 21, 'dessert', 'none'),
(27, 'Sorbet', 'variety of flavours on hand, ask for assistance', 5, 'sorbet.60c60ecf85bc49.23499914.jpg', 22, 'dessert', 'none'),
(28, 'Fried ice cream', 'variety of flavours on hand, ask for assistance', 8, 'fried-ice-cream.60c60ef3d1dfc9.48509450.jpg', 23, 'dessert', 'none'),
(29, 'Tuna Nigiri (2 Pieces)', 'Tuna, Rice', 5.5, 'tuna-nigiri.60c60f20b88263.83019511.jpg', 24, 'sushi', 'none'),
(30, 'Salmon Nigiri (3 Pieces)', 'Salmon, Rice', 6, 'salmon-nigiri.60c60f5db5bd00.11083648.jpg', 25, 'sushi', 'none'),
(31, 'Seabass Nigiri (2 Pieces)', 'Seabass, Rice', 6, 'seabass-nigiri.60c60fad337602.84361689.png', 26, 'sushi', 'none'),
(32, 'Salmon Sashimi (6 Pieces)', 'Salmon', 10, 'salmon-sashimi.60c6104f04fce6.56936532.jpg', 27, 'sushi', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `usersName` longtext NOT NULL,
  `usersSurname` longtext NOT NULL,
  `usersPassword` longtext NOT NULL,
  `usersEmail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `usersName`, `usersSurname`, `usersPassword`, `usersEmail`) VALUES
(3, 'Max', 'Camilleri', '$2y$10$bbqsvUsZfb8fnSYGlA9bWuP.VLf0u3YzbMtYhFvcHG6M9vLGR9BHa', 'max.matthew.camilleri@gmail.com'),
(5, 'va', 'va', '$2y$10$YESbaebxGIlRvKO6/l.zyOif2okyQ5Hbh85I2PzxZxrV8tEPZBTqm', 'vab@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drinks_menu`
--
ALTER TABLE `drinks_menu`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`favouritesId`),
  ADD KEY `itemIdFood` (`itemIdFood`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `favourites_drinks`
--
ALTER TABLE `favourites_drinks`
  ADD PRIMARY KEY (`favouritesId`),
  ADD KEY `itemId` (`itemId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `food_menu`
--
ALTER TABLE `food_menu`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drinks_menu`
--
ALTER TABLE `drinks_menu`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `favouritesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `favourites_drinks`
--
ALTER TABLE `favourites_drinks`
  MODIFY `favouritesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food_menu`
--
ALTER TABLE `food_menu`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`itemIdFood`) REFERENCES `food_menu` (`itemId`),
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `favourites_drinks`
--
ALTER TABLE `favourites_drinks`
  ADD CONSTRAINT `favourites_drinks_ibfk_1` FOREIGN KEY (`itemId`) REFERENCES `drinks_menu` (`itemId`),
  ADD CONSTRAINT `favourites_drinks_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
