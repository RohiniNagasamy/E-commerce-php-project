-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2024 at 07:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `iptracker`
--

CREATE TABLE `iptracker` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `user_ip` varchar(45) NOT NULL,
  `time_clicked` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iptracker`
--

INSERT INTO `iptracker` (`id`, `product_name`, `user_ip`, `time_clicked`) VALUES
(1, 'Brinjal', '::1', '2024-03-25 14:58:30'),
(2, 'Beetroot', '::1', '2024-03-25 14:59:35'),
(3, 'Beetroot', '::1', '2024-03-25 15:00:54'),
(4, 'Brinjal', '::1', '2024-03-25 16:09:49'),
(5, 'Guava', '::1', '2024-03-25 16:10:36'),
(6, 'Guava', '::1', '2024-03-25 16:10:36'),
(7, 'Milk', '::1', '2024-03-25 16:22:06'),
(8, 'Brinjal', '::1', '2024-03-26 05:16:09'),
(9, 'Cow feed', '::1', '2024-03-26 06:37:32'),
(10, 'Beetroot', '10.16.104.97', '2024-03-26 06:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `productcard`
--

CREATE TABLE `productcard` (
  `username` text NOT NULL,
  `proname` text NOT NULL,
  `proimage` text NOT NULL,
  `price` int(50) NOT NULL,
  `producttype` varchar(50) NOT NULL,
  `description` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productcard`
--

INSERT INTO `productcard` (`username`, `proname`, `proimage`, `price`, `producttype`, `description`) VALUES
('lakshmi gardens', 'Brinjal', 'uploaded_img/brinjal.jpg', 35, 'foodproducts', 'Freshly grown brinjals.'),
('lakshmi gardens', 'Beetroot', 'uploaded_img/beetroot.jpg', 30, 'foodproducts', 'Freshly grown beetroots.'),
('lakshmi gardens', 'Greenchillies', 'uploaded_img/greechilli.jpg', 20, 'foodproducts', 'Freshly grown greenchillies.'),
('lakshmi gardens', 'Radish', 'uploaded_img/radish.jpg', 50, 'foodproducts', 'Freshly grown radishes.'),
('lakshmi gardens', 'Tomato', 'uploaded_img/tomato.jpg', 38, 'foodproducts', 'Freshly grown tomatoes.'),
('lakshmi gardens', 'Potato', 'uploaded_img/potato.jpg', 25, 'foodproducts', 'Freshly grown potatoes.'),
('shenbagam cattles', 'Country chicken', 'uploaded_img/countrychicken.jpg', 350, 'cattles', 'Healthly grown country chicken.'),
('shenbagam cattles', 'Cow', 'uploaded_img/cowcow.jpg', 12000, 'cattles', 'Healthly grown cow.'),
('shenbagam cattles', 'Goat', 'uploaded_img/goatgoat.jpg', 7000, 'cattles', 'Healthly grown goat.'),
('shenbagam cattles', 'Sheep', 'uploaded_img/sheep.jpg', 9000, 'cattles', 'Healthly grown sheep.'),
('shenbagam cattles', 'Dog', 'uploaded_img/dog.jpg', 300, 'cattles', 'Cute dogs.'),
('shenbagam cattles', 'Milk', 'uploaded_img/milk.jpg', 50, 'Milk & oil products', 'Fresh milk.'),
('ABC Meats', 'Chicken', 'uploaded_img/chicken.jpg', 200, 'foodproducts', 'Fresh chicken.'),
('ABC Meats', 'Mutton', 'uploaded_img/mutton.jpg', 790, 'foodproducts', 'Fresh mutton.'),
('ABC Meats', 'Beef', 'uploaded_img/beef.jpg', 165, 'foodproducts', 'Fresh beef.'),
('ABC Meats', 'Pork', 'uploaded_img/pork.jpg', 355, 'foodproducts', 'Fresh pork.'),
('ABC Meats', 'Egg', 'uploaded_img/egg.jpg', 7, 'foodproducts', 'Fresh eggs.'),
('ABC Meats', 'Cow feed', 'uploaded_img/cowfeed.jpg', 125, 'cattles', 'Fresh cow feed.'),
('Anu tropical fruit garden', 'Pomegranate', 'uploaded_img/poemegra.jpg', 150, 'foodproducts', 'Freshly grown pomegranate.'),
('Anu tropical fruit garden', 'Grapes', 'uploaded_img/grapes.jpg', 140, 'foodproducts', 'Freshly grown grapes.'),
('Anu tropical fruit garden', 'Guava', 'uploaded_img/guava.jpg', 55, 'foodproducts', 'Freshly grown guava.'),
('Anu tropical fruit garden', 'Watermelon', 'uploaded_img/watermelon.jpg', 120, 'foodproducts', 'Freshly grown watermelon.'),
('Anu tropical fruit garden', 'Jackfruit', 'uploaded_img/jp.jpg', 70, 'foodproducts', 'Freshly grown jackfruits.'),
('Anu tropical fruit garden', 'Pineapple', 'uploaded_img/pineapp.jpg', 45, 'foodproducts', 'Freshly grown pineapples.'),
('Ragavendra supermarket', 'Apple', 'uploaded_img/apple.jpg', 230, 'foodproducts', 'Freshly grown apples.'),
('Ragavendra supermarket', 'Coconut', 'uploaded_img/coconut.jpg', 15, 'foodproducts', 'Fresh coconut'),
('Ragavendra supermarket', 'Coconut oil', 'uploaded_img/coconutoil.jpg', 80, 'Milk & oil products', 'Fresh coconut oil'),
('Ragavendra supermarket', 'Cauli flower', 'uploaded_img/cauli.jpg', 10, 'foodproducts', 'Fresh cauliflower'),
('Ragavendra supermarket', 'Corrainder', 'uploaded_img/corr.jpg', 10, 'foodproducts', 'Fresh corrainder'),
('Ragavendra supermarket', 'Banana', 'uploaded_img/bananabunch.jpg', 7, 'foodproducts', 'Fresh products.'),
('Adhvi shop', 'Ginger', 'uploaded_img/ginger.jpg', 200, 'foodproducts', 'Fresh ginger.'),
('Adhvi shop', 'Garlic', 'uploaded_img/garlicpair.jpg', 90, 'foodproducts', 'Fresh garlic.'),
('Adhvi shop', 'Orange', 'uploaded_img/orange.jpg', 90, 'foodproducts', 'Fresh oranges.'),
('Adhvi shop', 'Mint', 'uploaded_img/mint.jpg', 15, 'foodproducts', 'Fresh mint.'),
('Adhvi shop', 'Iceapple', 'uploaded_img/iceapple.jpg', 55, 'foodproducts', 'Fresh iceapple.'),
('Adhvi shop', 'Curry leaves', 'uploaded_img/curry.jpg', 15, 'foodproducts', 'Fresh curry leaves.'),
('Sadhvi milk & oil shop', 'Paneer', 'uploaded_img/paneer.jpg', 100, 'foodproducts', 'Fresh paneer.'),
('Sadhvi milk & oil shop', 'Curd', 'uploaded_img/curd.jpg', 20, 'foodproducts', 'Fresh curd.'),
('Sadhvi milk & oil shop', 'Ghee', 'uploaded_img/ghee.jpg', 220, 'foodproducts', 'Fresh ghee'),
('Sadhvi milk & oil shop', 'Honey', 'uploaded_img/honey.jpg', 150, 'foodproducts', 'Fresh honey'),
('Sadhvi milk & oil shop', 'Gingely oil', 'uploaded_img/gingrlyoil.jpg', 200, 'foodproducts', 'Fresh gingely oil'),
('Sadhvi milk & oil shop', 'Groundnut oil', 'uploaded_img/grouoil.jpg', 165, 'foodproducts', 'Fresh groundnut oil'),
('Durga shop', 'Star fruit', 'uploaded_img/sf.jpg', 200, 'foodproducts', 'Fresh starfruits'),
('Durga shop', 'Dragon fruit', 'uploaded_img/df.jpg', 260, 'foodproducts', 'Fresh dragon fruits'),
('Durga shop', 'Swet potatoes', 'uploaded_img/sweepot.jpg', 40, 'foodproducts', 'Fresh sweet potatoes'),
('Durga shop', 'ladysfinger', 'uploaded_img/ladfin.jpg', 30, 'foodproducts', 'Fresh ladysfinger'),
('Durga shop', 'Onion', 'uploaded_img/laronion.jpg', 24, 'foodproducts', 'Fresh onion'),
('Durga shop', 'Snacks', 'uploaded_img/laronion.jpg', 160, 'foodproducts', 'Fresh snacks'),
('Pooja works', 'Aari ', 'uploaded_img/aari.jpg', 1500, 'handicrafts', 'Handmade customised aari works.'),
('Pooja works', 'Embroidery', 'uploaded_img/embroid.jpg', 1900, 'handicrafts', 'Handmade customised embriodery works.'),
('Pooja works', 'Purse', 'uploaded_img/purse.jpg', 150, 'handicrafts', 'colorful handmade purses.'),
('Pooja works', 'Rope', 'uploaded_img/rope.jpg', 350, 'handicrafts', 'Ropes are made from natural coconut coir.'),
('Pooja works', 'Pickles', 'uploaded_img/pickles.jpg', 70, 'foodproducts', 'Fresh pickles'),
('Pooja works', 'Rice batter', 'uploaded_img/ricebatter.jpg', 25, 'foodproducts', 'Fresh ricebatter.'),
('Revathi handworks', 'Sweater', 'uploaded_img/sweat.jpg', 300, 'handicrafts', 'customised sweaters.'),
('Revathi handworks', 'saree', 'uploaded_img/saree.jpg', 700, 'handicrafts', 'customised saree'),
('Revathi handworks', 'Flower pot', 'uploaded_img/flowerpot.jpg', 400, 'handicrafts', 'customised flower pots.'),
('Revathi handworks', 'Bamboo baskets', 'uploaded_img/basket.jpg', 350, 'handicrafts', 'Handmade bamboo baskets.'),
('Revathi handworks', 'Paintings', 'uploaded_img/paint.jpg', 400, 'handicrafts', 'customised paintings.'),
('Revathi handworks', 'Door hangings', 'uploaded_img/doorhan.jpg', 30, 'handicrafts', 'customised door hangings.');

-- --------------------------------------------------------

--
-- Table structure for table `prof`
--

CREATE TABLE `prof` (
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `address` varchar(80) NOT NULL,
  `imagepath` varchar(50) NOT NULL,
  `description` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prof`
--

INSERT INTO `prof` (`username`, `password`, `email`, `phonenumber`, `address`, `imagepath`, `description`) VALUES
('lakshmi gardens', 'pass', 'lakshmi@gmail.com', 987654312, 'Panjampatti,Dindigul.', 'uploaded_img/sprm1.jpg', 'Our products are naturally farmed using natural fertilizers.so,you feel free to '),
('Anu tropical fruit garden', 'pass', 'anugardens@gmail.com', 2147483647, 'Alamarathupatti,Dindigul.', 'uploaded_img/fruitsgard.jpg', 'Our products are naturally farmed using natural fertilizers.so,you feel free to '),
('shenbagam cattles', 'pass', 'senbagamcattle@gmail.com', 2147483647, 'Pudukottai,Dindigul.', 'uploaded_img/cattle.jpg', 'Our products are naturally farmed using natural fertilizers.so,you feel free to '),
('ABC Meats', 'pass', 'abcabc@gmail.com', 2147483647, 'Melakottai,Dindigul.', 'uploaded_img/meat.jpg', 'Our products are naturally grown using natural foods.so,you feel free to buy our'),
('Pooja works', 'pass', 'pooja@gmail.com', 2147483647, 'Ambathurai,Dindigul.', 'uploaded_img/aashop.jpg', 'Our products are made from high quality product.so,you feel free to buy our prod'),
('Revathi handworks', 'pass', 'revathi@gmail.com', 2147483647, 'Ambathurai,Dindigul.', 'uploaded_img/art.jpg', 'Our products are made from skillful workers .so,you feel free to buy our product'),
('Ragavendra supermarket', 'pass', 'ragavan@gmail.com', 987654316, 'Poonjoolai,chinnalapatti,Dindigul.', 'uploaded_img/sprm3.jpg', 'Our products are naturally farmed using natural fertilizers.so,you feel free to '),
('Durga shop', 'pass', 'durga@gmail.com', 2147483647, 'Alamarathupatti,Dindigul.', 'uploaded_img/sprm2.jpg', 'Our products are naturally farmed using natural fertilizers.so,you feel free to '),
('Adhvi shop', 'pass', 'adhvic@gmail.com', 2147483647, 'Anjam colony,chinnalapatti,Dindigul.', 'uploaded_img/iceshop.jpg', 'Our products are naturally farmed using natural fertilizers.so,you feel free to '),
('Sadhvi milk & oil shop', 'pass', 'sadhvi@gmail.com', 2147483647, 'Gandhigram,Dindigul.', 'uploaded_img/oilshop.jpg', 'Our products are naturally refined from natural ingredients.so,you feel free to '),
('VANITHA ', 'pass', 'aitamil@gmail.com', 9999999, 'kallimandayam', 'uploaded_img/tomato.jpg', 'shop for the fresh  vegitables'),
('keerthi harish', 'mylove', 'aitamil@gmail.com', 111111111, 'icsonscsn', 'uploaded_img/unknown.jpeg', 'HELLO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iptracker`
--
ALTER TABLE `iptracker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iptracker`
--
ALTER TABLE `iptracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
