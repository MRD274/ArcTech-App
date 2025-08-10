-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2025 at 10:19 PM
-- Server version: 10.4.34-MariaDB-log
-- PHP Version: 8.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rivasde_arctech`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `option1` varchar(100) DEFAULT NULL,
  `option2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `NAME`, `description`, `price`, `image`, `option1`, `option2`) VALUES
(1, 'Smartwatch X2', 'Advanced smartwatch with health tracking.', 429.99, 'assets/images/smartwatch.jpg', 'Color: Black(+0)/Silver(+100)', 'Band: Silicone(+0)/Leather(+200)'),
(2, 'Wireless Earbuds Pro', 'Noise-canceling wireless earbuds with case.', 299.99, 'assets/images/earbuds.jpg', 'Color: White(+0)/Black(+50)', 'Case Protector : No(+0)/Yes(+55)'),
(3, 'Bluetooth Speaker Mini', 'Portable Bluetooth speaker with rich bass.', 39.99, 'assets/images/speaker.jpg', 'Color: Red(+0)/Blue(+50)', 'Power: USB/Battery'),
(4, '4K Action Camera', 'Waterproof camera for action sports.', 149.99, 'assets/images/actioncam.jpg', 'Resolution: 1080p(+0)/4K(+80)', 'Storage: 32GB(+0)/64GB(+100)'),
(5, 'USB-C Hub 7-in-1', 'Multiport USB-C hub for laptops.', 59.99, 'assets/images/hub.jpg', 'Material: Plastic(+0)/Aluminum(+55)', 'Ports: 7(+0)/9(+50)'),
(6, 'Gaming Mouse Pro', 'RGB gaming mouse with 12 buttons.', 49.99, 'assets/images/mouse.jpg', 'Color: Black(+0)/White(+50)', 'DPI: 3200(+0)/6400(+50)'),
(7, 'Mechanical Keyboard RGB', 'Backlit mechanical keyboard.', 79.99, 'assets/images/keyboard.jpg', 'Switches: Blue(+0)/Red(+50)', 'Layout: ANSI(+0)/ISO(+50)'),
(8, 'Smartphone Tripod', 'Adjustable tripod with phone mount.', 29.99, 'assets/images/tripod.jpg', 'Height: 40in(+0)/60in(+50)', 'Mount: Clip(+0)/Screw(+50)'),
(9, 'Wireless Charger Pad', 'Fast wireless charger for phones.', 24.99, 'assets/images/charger.jpg', 'Output: 10W(+0)/15W(+50)', 'Color: Black(+0)/White(+50)'),
(10, '1080p Webcam', 'HD webcam with microphone.', 59.99, 'assets/images/webcam.jpg', 'Resolution: 720p(+0)/1080p(+50)', 'Mount: Clip(+0)/Tripod(+50)'),
(11, 'VR Headset X', 'VR headset for immersive experience.', 199.99, 'assets/images/vr.jpg', 'Support: Phone(+0)/PC(+80)', 'Color: Black(+0)/White(+50)'),
(12, 'Drone Cam A1', 'Compact drone with 4K camera.', 299.99, 'assets/images/drone.jpg', 'Battery: 30min(+0)/1hr(+100)', 'GPS: No(+0)/Yes(+100)'),
(13, 'Portable SSD 1TB', 'High-speed external SSD.', 119.99, 'assets/images/ssd.jpg', 'Capacity: 512GB(+0)/1TB(+100)', 'Connection: USB-C(+0)/USB-A(+10)'),
(14, 'Noise-Cancel Headphones', 'Over-ear headphones with ANC.', 139.99, 'assets/images/headphones.jpg', 'Color: Blue(+0)/Silver(+50)', 'Connection: Wired(+0)/Wireless(+50)'),
(15, 'Laptop Stand Foldable', 'Aluminum stand for laptops.', 34.99, 'assets/images/stand.jpg', 'Material: Plastic(+0)/Aluminum(+50)', 'Adjustable: Yes/No'),
(16, 'Smart Light Bulb', 'WiFi-enabled RGB light bulb.', 19.99, 'assets/images/bulb.jpg', 'Control: App(+0)/Voice(+50)', 'Brightness: 800lm(+0)/1000lm(+50)'),
(17, 'Fitness Tracker Band', 'Slim fitness band with sleep monitor.', 49.99, 'assets/images/fitband.jpg', 'Color: Blue(+0)/Pink(+50)', 'Battery Life: 5 Days(+0)/10 Days(+50)'),
(18, 'USB Desk Fan', 'Mini USB-powered desk fan.', 15.99, 'assets/images/fan.jpg', 'Color: White(+0)/Black()+50', 'Speed: 2 Levels(+0)/3 Levels(+50)'),
(19, 'Wireless Presenter', 'Laser pointer with slide control.', 25.99, 'assets/images/presenter.jpg', 'Laser: Red(+0)/Green(+50)', 'Range: 10m(+0)/30m(+50)'),
(20, 'Phone Gimbal Stabilizer', 'Handheld gimbal for smooth video.', 99.99, 'assets/images/gimbal.jpg', 'Modes: Pan(+0)/Follow(+50)', 'Battery: 6h(+0)/10h(+40)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `is_disabled` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `NAME`, `email`, `PASSWORD`, `is_admin`, `is_disabled`) VALUES
(2, 'goe', 'goe@gamil.com', '$2y$10$p.pFoZ01a.bLX0C0BPEbdO6.rusc468stBMfKu0hXPwgFR8qO6AVK', 0, 0),
(3, 'joe', 'joe@gamil.com', '$2y$10$d3DwU8CV1YYpr58f8.IfkOitlBNAu.1.ooS8qE0TGijRHqvT4qS3.', 1, 0);

-- Admin: Joe, Email: joe@gamil.com, Password: 1234

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
