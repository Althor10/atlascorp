-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 06:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atlas`
--

-- --------------------------------------------------------

--
-- Table structure for table `atlashotel`
--

CREATE TABLE `atlashotel` (
  `id` int(15) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `num_stars_id` int(15) NOT NULL,
  `id_home_hotel_path` int(15) NOT NULL,
  `description` varchar(900) COLLATE utf8_unicode_ci NOT NULL,
  `short_desc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `avg_hotel_price` int(5) NOT NULL,
  `wireless` tinyint(1) NOT NULL,
  `smoking_area` tinyint(1) NOT NULL,
  `wheelchair` tinyint(1) NOT NULL,
  `pool` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `atlashotel`
--

INSERT INTO `atlashotel` (`id`, `name`, `num_stars_id`, `id_home_hotel_path`, `description`, `short_desc`, `avg_hotel_price`, `wireless`, `smoking_area`, `wheelchair`, `pool`) VALUES
(2, 'Galileo Galilei Cloud Hotel', 3, 1, 'Cloud City was a completely man-made Tibanna gas mining colony staff hovering over the gas giant Jupiter, occupied by millions of workers, tourists and support staff. Located in Jupiters Life Zone, the station had no need for airlocks or life support systems, with the atmosphere comprised mostly of oxygen and acceptable levels of gravity and temperature. The hotel was situated 59,000 kilometers above. Hotels core, while its disk was approximately 16.2 kilometers in diameter. 36,000 repulsorlift engines and tractor beam generators kept the giant city floating above the planet. It contained 392 levels, along with platforms and rooms for residents and visitors.The top 50 levels of the city were used as a luxury resort, renowned for its famous casinos such as Yarith Bespin and Pair O\'Dice, while the lower levels housed workers and catered for the mining and processing of Jupiters gas.', 'A huge cloud city hotel with amazing views and tours over Jupiter.', 3000, 1, 1, 1, 1),
(3, 'The Twin Towers Hotel', 2, 2, 'With brand new discoveries on Mars and a new colony Atlas has made its contribution with another grand Hotel! Explore the Twin Tower Hotel with astounding views and vast attractions. With its peak tower you can see the old civilization before us. You can enlist in the grand tours of the planet and be a contributor of the new frontiers!', 'Marses newfound Hotel with brilliant staff and well organized tours of the planet and its moons.', 500, 1, 1, 1, 0),
(4, 'Atlantis Grand', 3, 4, 'For a truly unique and luxurious experience, stay at a hotel that features underwater rooms or even an underwater restaurant. Some of these hotels are located along the ocean and simply have a restaurant that allows you to dine under the water, while others even have underwater rooms. The common theme is that these are all high-end hotels and restaurants that will attend to your every need while you experience the unique opportunity to view marine animals you wouldn’t normally get to see.', 'Have you wandered how it is living on a water planet?', 6000, 1, 0, 1, 1),
(5, 'Glazglow', 3, 1, 'Aasduashduiahsiudhasidhjn asdku hasukdhaksu hkdaush kudahs kudahs', 'Adasijdasuihduiashiu hasiu dhasiud hasuidh uiashd uiash', 1200, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `atlasuser`
--

CREATE TABLE `atlasuser` (
  `id` int(15) NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dateMade` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pic` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'images\\review_2.jpg',
  `role_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `atlasuser`
--

INSERT INTO `atlasuser` (`id`, `username`, `password`, `email`, `first_name`, `last_name`, `dateMade`, `pic`, `role_id`) VALUES
(1, 'atlasAdmin', '4ff821fb179af8cbb1102489d0733e3f', 'atlasadmin@gmail.com', 'John', 'On The Radio', '2019-03-15 19:50:37', 'images\\review_2.jpg', 1),
(2, 'atlasUser', '6eca9b7257a357dec250a5183c66c279', 'altasuser@gmail.com', 'Fitz', 'McTavish', '2019-03-16 00:54:32', 'images\\review_1.jpg', 2),
(3, 'Pera123', '03f690195f59c32d566cfb79383e01c8', 'danilo@gmail.com', 'Danilo', 'Zdravkovic', '2019-03-16 22:58:02', 'images/me.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(15) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Nzmnista', 'danilo@gmail.com', 'Laasdaskdjl a', 'Adasjdasijdasoijidasj');

-- --------------------------------------------------------

--
-- Table structure for table `home_hotel_path`
--

CREATE TABLE `home_hotel_path` (
  `id` int(15) NOT NULL,
  `id_planet` int(15) NOT NULL,
  `distance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_hotel_path`
--

INSERT INTO `home_hotel_path` (`id`, `id_planet`, `distance`) VALUES
(1, 2, 588),
(2, 1, 55),
(3, 6, 261),
(4, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(15) NOT NULL,
  `title1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `title1`, `title2`, `img_id`) VALUES
(1, 'discover', 'the universe', 1),
(2, 'discover', 'the world', 2);

-- --------------------------------------------------------

--
-- Table structure for table `img_home_slider`
--

CREATE TABLE `img_home_slider` (
  `id` int(15) NOT NULL,
  `img_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `img_home_slider`
--

INSERT INTO `img_home_slider` (`id`, `img_path`) VALUES
(1, 'images/home_slider2.jpg'),
(2, 'images/home_slider.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `img_hotel`
--

CREATE TABLE `img_hotel` (
  `id` int(15) NOT NULL,
  `img_hotel_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_hotel` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `img_hotel`
--

INSERT INTO `img_hotel` (`id`, `img_hotel_path`, `id_hotel`) VALUES
(1, 'images/places/login2.jpg', 2),
(2, '/images/places/about.jpg', 3),
(3, 'images/hotels/hotel3.jpg', 4),
(4, 'images/hotels/1552863236167268920.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `nav`
--

CREATE TABLE `nav` (
  `id` int(15) NOT NULL,
  `title` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`id`, `title`, `path`) VALUES
(1, 'home', 'index'),
(2, 'about us', 'aboutpage'),
(3, 'offers', 'offers'),
(4, 'contact', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(15) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`) VALUES
(1, 'We are Hiring', 'Want to be one of us contact us on our Contact page!'),
(2, 'Test', 'Tests1');

-- --------------------------------------------------------

--
-- Table structure for table `num_stars`
--

CREATE TABLE `num_stars` (
  `id` int(15) NOT NULL,
  `stars` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `num_stars`
--

INSERT INTO `num_stars` (`id`, `stars`) VALUES
(1, 3),
(2, 4),
(3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(15) NOT NULL,
  `payment` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `payment`) VALUES
(1, 'Cash'),
(2, 'Visa'),
(3, 'MasterCard');

-- --------------------------------------------------------

--
-- Table structure for table `planet`
--

CREATE TABLE `planet` (
  `id` int(15) NOT NULL,
  `planet_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `num_moons` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `planet`
--

INSERT INTO `planet` (`id`, `planet_name`, `description`, `num_moons`) VALUES
(1, 'Mars', 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System after Mercury. In English, Mars carries a name of the Roman god of war, and is often referred to as the \"Red Planet\"because the reddish iron oxide prevalent on its surface gives it a reddish appearance that is distinctive among the astronomical bodies visible to the naked eye.Mars is a terrestrial planet with a thin atmosphere, having surface features reminiscent both of the impact craters of the Moon and the valleys, deserts, and polar ice caps of Earth.Mars has two moons, Phobos and Deimos, which are small and irregularly shaped. These may be captured asteroids, similar to 5261 Eureka, a Mars trojan.', 2),
(2, 'Jupiter', 'Jupiter is the fifth planet from the Sun and the largest in the Solar System. It is a giant planet with a mass one-thousandth that of the Sun, but two-and-a-half times that of all the other planets in the Solar System combined. Jupiter and Saturn are gas giants; the other two giant planets, Uranus and Neptune, are ice giants. Jupiter has been known to astronomers since antiquity. It is named after the Roman god Jupiter.When viewed from Earth, Jupiter can reach an apparent magnitude of −2.94, bright enough for its reflected light to cast shadows,[19] and making it on average the third-brightest natural object in the night sky after the Moon and Venus.Jupiter has 79 known moons, including the four large Galilean moons discovered by Galileo Galilei in 1610. Ganymede, the largest of these, has', 79),
(3, 'Saturn', 'Saturn is the sixth planet from the Sun and the second-largest in the Solar System, after Jupiter. It is a gas giant with an average radius about nine times that of Earth.[13][14] It has only one-eighth the average density of Earth, but with its larger volume Saturn is over 95 times more massive. Saturn is named after the Roman god of agriculture; its astronomical symbol (♄) represents the god\'s sickle. Titan, Saturn\'s largest moon, and the second-largest in the Solar System, is larger than the planet Mercury, although less massive, and is the only moon in the Solar System to have a substantial atmosphere', 62),
(4, 'Neptune', 'Neptune is the eighth and farthest known planet from the Sun in the Solar System. In the Solar System, it is the fourth-largest planet by diameter, the third-most-massive planet, and the densest giant planet. Neptune is 17 times the mass of Earth, slightly more massive than its near-twin Uranus. Neptune is denser and physically smaller than Uranus because its greater mass causes more gravitational compression of its atmosphere. Neptune orbits the Sun once every 164.8 years at an average distance of 30.1 AU (4.5 billion km). It is named after the Roman god of the sea and has the astronomical symbol ♆, a stylised version of the god Neptune\'s trident.', 13),
(5, 'Mercury', 'Mercury is the smallest and innermost planet in the Solar System. Its orbital period around the Sun of 87.97 days is the shortest of all the planets in the Solar System. It is named after the Roman deity Mercury, the messenger of the gods.\r\n\r\nLike Venus, Mercury orbits the Sun within Earth\'s orbit as an inferior planet, and never exceeds 28° away from the Sun when viewed from Earth. This proximity to the Sun means the planet can only be seen near the western or eastern horizon during the early evening or early morning. At this time it may appear as a bright star-like object, but is often far more difficult to observe than Venus. ', 1),
(6, 'Venus', 'Venus is the second planet from the Sun, orbiting it every 224.7 Earth days. It has the longest rotation period (243 days) of any planet in the Solar System and rotates in the opposite direction to most other planets (meaning the Sun rises in the west and sets in the east). It does not have any natural satellites. It is named after the Roman goddess of love and beauty. It is the second-brightest natural object in the night sky after the Moon, reaching an apparent magnitude of −4.6 – bright enough to cast shadows at night and, rarely, visible to the naked eye in broad daylight. Orbiting within Earth\'s orbit, Venus is an inferior planet and never appears to venture far from the Sun; its maximum angular distance from the Sun (elongation) is 47.8°.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `hotel_id` int(15) NOT NULL,
  `rating` int(1) NOT NULL,
  `comment` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datePosted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `user_id`, `hotel_id`, `rating`, `comment`, `subject`, `datePosted`) VALUES
(1, 1, 2, 9, 'The best hotel EVER!', 'I love It!', '2019-03-17 17:00:19'),
(2, 1, 3, 7, 'Could use a pool...', 'Its good!', '2019-03-17 17:00:19'),
(3, 1, 4, 5, 'Scary', 'Not going there again', '2019-03-17 17:00:19'),
(4, 2, 4, 8, 'Great!', 'Mesmorised', '2019-03-17 17:00:19'),
(5, 3, 2, 8, 'Super!', 'Absolutely ', '2019-03-17 17:00:19'),
(6, 3, 4, 8, 'Tests1124', 'Please', '2019-03-18 15:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_hotel`
--

CREATE TABLE `reservation_hotel` (
  `id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `stay_id` int(15) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `num_people` int(2) NOT NULL,
  `service_id` int(15) NOT NULL,
  `payment_id` int(15) NOT NULL,
  `date_reserved` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reservation_hotel`
--

INSERT INTO `reservation_hotel` (`id`, `user_id`, `stay_id`, `date_start`, `date_end`, `num_people`, `service_id`, `payment_id`, `date_reserved`, `full_price`) VALUES
(1, 3, 4, '2019-03-18 00:00:00', '2019-03-30 00:00:00', 5, 1, 3, '2019-03-18 15:28:38', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(15) NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(15) NOT NULL,
  `room_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`id`, `room_type`) VALUES
(1, 'Single'),
(2, 'Double'),
(3, 'Triple'),
(4, 'Quad'),
(5, 'Penthouse');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service`, `service_desc`) VALUES
(1, 'Full Board', 'Includes bed, breakfast, packed lunch and evening meal.'),
(2, 'Half Board', 'Includes bed, breakfast and evening meal (no packed lunch).');

-- --------------------------------------------------------

--
-- Table structure for table `stay_room`
--

CREATE TABLE `stay_room` (
  `id` int(15) NOT NULL,
  `hotel_id` int(15) NOT NULL,
  `room_type_id` int(15) NOT NULL,
  `price_per_night` int(255) NOT NULL,
  `num_free_rooms` int(255) DEFAULT NULL,
  `vip` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stay_room`
--

INSERT INTO `stay_room` (`id`, `hotel_id`, `room_type_id`, `price_per_night`, `num_free_rooms`, `vip`) VALUES
(1, 2, 5, 5000, 5, 1),
(2, 3, 2, 1400, 250, 0),
(3, 4, 3, 6000, 2, 1),
(4, 5, 3, 1200, 5, 0),
(5, 5, 2, 1200, 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atlashotel`
--
ALTER TABLE `atlashotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_planet` (`id_home_hotel_path`),
  ADD KEY `num_stars_id` (`num_stars_id`);

--
-- Indexes for table `atlasuser`
--
ALTER TABLE `atlasuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_hotel_path`
--
ALTER TABLE `home_hotel_path`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_planet` (`id_planet`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `img_id` (`img_id`);

--
-- Indexes for table `img_home_slider`
--
ALTER TABLE `img_home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_hotel`
--
ALTER TABLE `img_hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hotel` (`id_hotel`);

--
-- Indexes for table `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `num_stars`
--
ALTER TABLE `num_stars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planet`
--
ALTER TABLE `planet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `reservation_hotel`
--
ALTER TABLE `reservation_hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `stay_id` (`stay_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stay_room`
--
ALTER TABLE `stay_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`),
  ADD KEY `room_type_id` (`room_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atlashotel`
--
ALTER TABLE `atlashotel`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `atlasuser`
--
ALTER TABLE `atlasuser`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_hotel_path`
--
ALTER TABLE `home_hotel_path`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `img_home_slider`
--
ALTER TABLE `img_home_slider`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `img_hotel`
--
ALTER TABLE `img_hotel`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nav`
--
ALTER TABLE `nav`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `num_stars`
--
ALTER TABLE `num_stars`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `planet`
--
ALTER TABLE `planet`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reservation_hotel`
--
ALTER TABLE `reservation_hotel`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stay_room`
--
ALTER TABLE `stay_room`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atlashotel`
--
ALTER TABLE `atlashotel`
  ADD CONSTRAINT `atlashotel_ibfk_1` FOREIGN KEY (`id_home_hotel_path`) REFERENCES `home_hotel_path` (`id`),
  ADD CONSTRAINT `atlashotel_ibfk_2` FOREIGN KEY (`num_stars_id`) REFERENCES `num_stars` (`id`);

--
-- Constraints for table `atlasuser`
--
ALTER TABLE `atlasuser`
  ADD CONSTRAINT `atlasuser_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Constraints for table `home_hotel_path`
--
ALTER TABLE `home_hotel_path`
  ADD CONSTRAINT `home_hotel_path_ibfk_1` FOREIGN KEY (`id_planet`) REFERENCES `planet` (`id`);

--
-- Constraints for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD CONSTRAINT `home_slider_ibfk_1` FOREIGN KEY (`img_id`) REFERENCES `img_home_slider` (`id`);

--
-- Constraints for table `img_hotel`
--
ALTER TABLE `img_hotel`
  ADD CONSTRAINT `img_hotel_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `atlashotel` (`id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `atlasuser` (`id`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`hotel_id`) REFERENCES `atlashotel` (`id`);

--
-- Constraints for table `reservation_hotel`
--
ALTER TABLE `reservation_hotel`
  ADD CONSTRAINT `reservation_hotel_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`),
  ADD CONSTRAINT `reservation_hotel_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`id`),
  ADD CONSTRAINT `reservation_hotel_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `atlasuser` (`id`),
  ADD CONSTRAINT `reservation_hotel_ibfk_4` FOREIGN KEY (`stay_id`) REFERENCES `stay_room` (`id`);

--
-- Constraints for table `stay_room`
--
ALTER TABLE `stay_room`
  ADD CONSTRAINT `stay_room_ibfk_1` FOREIGN KEY (`room_type_id`) REFERENCES `room_type` (`id`),
  ADD CONSTRAINT `stay_room_ibfk_2` FOREIGN KEY (`hotel_id`) REFERENCES `atlashotel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
