-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2023 at 08:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'ADMINISTRATOR', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_apparel`
--

CREATE TABLE `tb_apparel` (
  `id_apparel` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rating` double NOT NULL,
  `tags` text NOT NULL,
  `price` double NOT NULL,
  `sizes` text NOT NULL,
  `colors` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_apparel`
--

INSERT INTO `tb_apparel` (`id_apparel`, `name`, `rating`, `tags`, `price`, `sizes`, `colors`, `description`, `image`) VALUES
(3, 'MONOGRAM CAMO FLEECE BLOUSON', 5, 'Fleece', 200000, 'S, M, L, XL, XXL', 'Picture', 'This chic yet cozy zip-through blouson is made from a technical wool blend polar fleece and can be worn as an outer layer. It has a light jersey lining with an internal pocket. This piece is distinguished with an eye-catching allover Monogram Camo motif in different shades of green and blue creating pools of saturated color.\r\n', 'https://us.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-monogram-camo-fleece-blouson-ready-to-wear--HOY15WSQ9MU1_PM2_Front%20view.png?wid=1080&hei=1080'),
(4, 'MONOGRAM LEATHER HOODED DOWN JACKET', 5, 'Hoodie', 7, 'S, M, L, XL, XXL', 'Picture', 'This standout blouson is made from soft lambskin and padded with certified down feathers. Monogram signatures are hot-stamped into the leather, creating an effect of deep-buttoned upholstery. This piece has a hood with an integrated visor and a tall collar, a central zip closure and drawstrings to adjust the bottom hem and cuffs.', 'https://us.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-monogram-leather-hooded-down-jacket-ready-to-wear--HOL15WTV8901_PM2_Front%20view.png?wid=1080&hei=1080'),
(5, 'REVERSIBLE WINTERY DOWN PARKA', 5, 'Parka', 3, 'S, M, L, XL, XXL', 'Picture', 'This cozy reversible down parker has a plain quilted side and a shiny side with contrasting matt elements. Both sides feature multiple signatures, including a Staples tag, an LV staple at the back, and an LV silicone patch. Details include a zip closure with a double puller and a hood that can be packed into the tall collar.\r\n\r\n', 'https://us.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-reversible-wintery-down-parka-ready-to-wear--HOK50WTI4900_PM2_Front%20view.png?wid=1080&hei=1080'),
(6, 'LV JAZZ MULTI LOGO HOODIE', 5, 'Hoodie', 1, 'S, M, L, XL, XXL', 'Picture', 'This smart black hoodie in classic cotton felpa has a central zip closure and kangaroo pockets. It features screen-printed and embroidered signatures in vibrant colors on the front, back, sleeves and hood. These include an LV Jazz Flyer panel motif on the back and a 3D LV Malletier embroidered signature on the chest.\r\n\r\n', 'https://us.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-lv-jazz-multi-logo-hoodie-ready-to-wear--HOY32WSR1900_PM2_Front%20view.png?wid=1080&hei=1080'),
(7, 'SHEARLING EMBOSSED MONOGRAM JACKET', 5, 'Jacket', 7, 'S, M, L, XL, XXL', 'Picture', 'This luxurious shearling jacket has a lustrous exterior finish that sets off an allover embossed Monogram motif. The shearling wool matches the color of the leather to keep this piece simultaneously chic and cozy. Pared-down tailoring, with roomy patch pockets and a concealed zip closure, adds a rugged, workwear vibe.\r\n\r\n', 'https://us.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-shearling-embossed-monogram-jacket-ready-to-wear--HJL62WYGL900_PM2_Front%20view.png?wid=1080&hei=1080'),
(8, 'KNIT BLOUSON WITH SHEARLING COLLAR', 5, 'Jacket', 3, 'S, M, L, XL, XXL', 'Picture', 'This cozy blouson is made from responsibly sourced merino wool. The compact punto Milano knit and removable shearling collar give an outerwear effect, which is underlined by the two flap pockets and the zip closure. Two embroidered Vuitton signatures in contrasting thread on the left chest add a distinctive finishing touch.\r\n\r\n', 'https://us.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-knit-blouson-with-shearling-collar-ready-to-wear--HON33WZLL903_PM2_Front%20view.png?wid=1080&hei=1080'),
(9, 'MULTIPOCKET SHEARLING JACKET', 5, 'Jacket', 8, 'S, M, L, XL, XXL', 'Picture', 'This cozy white shearling jacket has a neat straight fit with a shirt collar. It is distinguished with an asymmetrical arrangement of fluffy 3D pockets set off with red suede leather details with an embossed Monogram finish, together with a red zip closure and piping. Signatures include an LVSE staple tag and carabiners.\r\n\r\n', 'https://us.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-multipocket-shearling-jacket-ready-to-wear--HOL50EOTY002_PM2_Front%20view.png?wid=1080&hei=1080'),
(10, 'LV DOVES QUILTED SWEATSHIRT', 5, 'Sweatshirt', 1, 'S, M, L, XL, XXL', 'Picture', 'This eye-catching sweatshirt in a statement color has a softly quilted finish to the cotton-blend jersey. It features a stitched-in allover LV Dove motif, whose sophisticated design integrates abstracted doves with LV signatures. The ribbed collar, cuffs and bottom hem give this piece a neat, tactile finish.\r\n\r\n', 'https://us.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-lv-doves-quilted-sweatshirt-ready-to-wear--HOY33WTK7405_PM2_Front%20view.png?wid=1080&hei=1080');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_apparel` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_cart`
--

INSERT INTO `tb_cart` (`id_cart`, `id_user`, `id_apparel`, `quantity`) VALUES
(1, 1, 4, 1),
(2, 1, 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `list_shop` text NOT NULL,
  `delivery` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `note` text NOT NULL,
  `total` double NOT NULL,
  `image` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `arrived` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_stok`
--

CREATE TABLE `tb_stok` (
  `id_apparel` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_stok`
--

INSERT INTO `tb_stok` (`id_apparel`, `stok`) VALUES
(3, 200);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name`, `email`, `password`) VALUES
(1, 'ridho', 'ridho@gmail.com', '926a161c6419512d711089538c80ac70');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wishlist`
--

CREATE TABLE `tb_wishlist` (
  `id_wishlist` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_apparel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_wishlist`
--

INSERT INTO `tb_wishlist` (`id_wishlist`, `id_user`, `id_apparel`) VALUES
(3, 1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_apparel`
--
ALTER TABLE `tb_apparel`
  ADD PRIMARY KEY (`id_apparel`);

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_wishlist`
--
ALTER TABLE `tb_wishlist`
  ADD PRIMARY KEY (`id_wishlist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_apparel`
--
ALTER TABLE `tb_apparel`
  MODIFY `id_apparel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_wishlist`
--
ALTER TABLE `tb_wishlist`
  MODIFY `id_wishlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
