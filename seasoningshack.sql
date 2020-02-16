-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 10:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seasoningshack`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--
-- Creation: Feb 16, 2020 at 08:42 AM
-- Last update: Feb 16, 2020 at 05:16 AM
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `ingredients` varchar(500) NOT NULL,
  `instructions` varchar(1000) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `name`, `ingredients`, `instructions`, `price`) VALUES
(1, 'Beef Noodle Soup', '2 noodles</br>\r\n1 egg</br>\r\n3 choy</br>\r\n4 beef</br>\r\n2 spring onions</br>\r\n1 chili pepper</br>\r\n2 garlics</br>', 'Sear 4 cubed beef at medium-high heat.</br>\r\nAdd 2 crushed garlic and 1 chili pepper, with salt and soy sauce.</br>\r\nIn another pot, boil water, then add noodles. Making sure noodles submerged.</br>\r\nAfter 2 minutes, add beef and choy.</br>\r\nAfter 2 minutes, crack into the pot, an egg.</br>\r\nCook until noodles are slightly translucent.</br>\r\nsprinkle cut spring onions on top to finish.</br>', 42.53),
(2, 'Grilled Salmon', '2 butter</br>\r\n2 thyme</br>\r\n6 asparagus</br>\r\n1 salmon</br>\r\n2 garlic</br>\r\n1 lemon</br>', 'Make small cuts on the skin side of the salmon, season with salt and pepper.</br>\r\nOn medium-low heat, melt 2 butter.</br>\r\nbefore butter is melted completely, place salmon on pan, skin side down.</br>\r\nAdd to the pan, 2 thyme and 2 crushed garlic.</br>\r\nCook for 2 minutes, and flip the salmon over.</br>\r\nAdd the asparagus to the pan and shut the lid.</br>\r\nCook for 2 minutes, and squeeze lemon juice on salmon.</br>', 53.87),
(3, 'Fried Rice', '4 rice</br>\r\n2 eggs</br>\r\n6 shrimps</br>\r\n2 peas</br>\r\n1 carrot</br>\r\n1 corn</br>', 'In a separate bowl, scramble 2 eggs and season.</br>\r\nIn a hot pan, add oil and fry 2 scrambled eggs.</br>\r\nRemove the eggs, then add in 1 diced carrots and 2 peas.</br>\r\nFry for 2 minutes, then add corn and fried eggs.</br>\r\nAdd 4 rice, and fry until ingredients uniformly mixed.</br>', 23.91),
(4, 'Spaghetti and meatballs', '2 pasta</br>\r\n2 tomatoes</br>\r\n3 beef</br>\r\n1 cheese</br>\r\n1 onion</br>', 'Boil pasta in a pot of water.</br>\r\nIn a separate pan, add oil and fry diced onions and tomatoes.</br>\r\nSeason onions and tomatoes with salt pepper, and add the pasta water.</br>\r\nAdd beef balls to the sauce and cook until seared.</br>\r\nAdd pasta to the sauce and stir until uniformed.</br>\r\nShred cheese on top of pasta.</br>', 34.62),
(5, 'Poutine', '3 potatoes</br>\r\n2 cheese</br>\r\n2 gravy</br>', 'Cut potatoes into wedges.</br>\r\nSeason potatoes with salt, pepper and garlic pounder.</br>\r\nBake potatoes wedges at 470 degrees F.</br>\r\nAdd to pan and melt shredded cheese on top of potato wedges.</br>\r\npour gravy on top of melted cheese.</br>', 18.5),
(6, 'Steak Dinner', '4 beef</br>\r\n4 mushrooms</br>\r\n1 onion</br>\r\n1 potato</br>', 'Season beef with oil, salt and pepper.</br>\r\nOn high heat, lay the beef on the pan.</br>\r\nAfter 3 minutes, flip beef.</br>\r\nAfter 3 minutes, put beef in the oven preheated at 400 degrees F.</br>\r\nIn a separate pot, boil water.</br>\r\nAdd potato to boil for 3 minutes.</br>\r\nRemove potatoes and mash until fine.</br>\r\nOn medium heat, fry sliced onions and mushrooms.</br>\r\nPlate and pour gravy from beef onto the mashed potatoes.</br>', 64.56),
(7, 'Deluxe Pizza', '3 flour</br>\r\n10 pepperoni</br>\r\n2 tomato sauce</br>\r\n3 cheese</br>\r\n1 onion</br>\r\n3 bacon</br>\r\n3 mushrooms</br>', 'Mix water with flour and yeast until it is soft and consistent.</br>\r\nLet dough rise for 2 hours, then knead the dough for 10 minutes.</br>\r\nStretch dough into a large circle and lay tomato sauce uniformly on pizza.</br>\r\nSprinkle shredded cheese on pizza, then uniformly add sliced onions, grilled bacon, sliced mushroom, and sliced pepperoni.</br>\r\nCook pizza in the oven pre-heated at 400 degrees F.</br>', 47.83),
(8, 'BLT Burger', '4 ground meat</br>\r\n1 burger bun</br>\r\n1 cheese</br>\r\n2 lettuce</br>\r\n1 tomato</br>\r\n1 onion</br>', 'Season patty with salt and pepper.</br>\r\nOil pan and sear patty, 2 minutes on each side.</br>\r\nMelt cheese on patty.</br>\r\nToast bun in the burger grease.</br>\r\nAssemble with mayo, lettuce, a patty with cheese, onion, tomato, mayo, bun.</br>', 31.02),
(9, 'Ratatouille', '1 eggplant</br>\r\n2 tomato</br>\r\n1 zucchini</br>\r\n1 yellow zucchini</br>', 'Cut all vegetables into circular slices.</br>\r\nGather off-cuts and simmer on medium-low heat, season with salt and pepper.</br>\r\nSmash simmer into paste and smear onto the bottom of a baking tray.</br>\r\nPlace slices of vegetables in an alternating pattern around the bottom of the tray.</br>\r\nBake at 350 degrees F.</br>', 35.45),
(10, 'Sushi', '1 cucumber</br>\r\n1 salmon</br>\r\n2 rice</br>\r\n1 seaweed</br>\r\n1 pickled carrot</br>\r\n1 bell pepper</br>', 'Layout seaweed on top of the sushi roller.</br>\r\nLayer rice on the seaweed.</br>\r\ncut salmon, bell pepper, and cucumber lengthwise.</br>\r\nLayout sliced salmon, bell pepper, cucumber, and pickled carrots uniformly on the rice horizontally.</br>\r\nRoll using the sushi roller, pressing tight to firm up the sushi roll.</br>\r\nCut at uniform intervals and serve with wasabi.</br>', 23.22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Feb 16, 2020 at 02:32 AM
-- Last update: Feb 16, 2020 at 05:34 AM
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `address`, `username`, `password`) VALUES
(1, 'Katrina', '', '', 'kat9897', 'Katrina'),
(2, 'Bob', '', '', 'bob', 'bob'),
(3, 'Katrina', 'kat@mail.com', 'asdfasdfasfasdfasfasfasfsdfasfasfasfsafadfafsaf', 'sadfasdf123F', 'asdfasdfasfd'),
(4, 'asdf', 'asdf@gmail.com', 'asdfas</br> asdfasdf, alberta</br>asdfasdf', 'asdfF3', ''),
(5, 'asdf', 'asdf@gmail.com', 'asdfas</br> asdfasdf, alberta</br>asdfasdf', 'asdfF3', 'abc123F'),
(6, 'Katrina Best', 'katrinabest@hotmail.com', 'Military Trail, 402D</br> Scarborough, ontario</br>Canada', 'bestkatrF3', 'abc123F'),
(7, 'gfhfjhghblbhgh', 'hgvgh@fff.com', '45f hbjhb</br> nnbbn, british columbia</br>Canada', 'Uza97', '12345Kat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
