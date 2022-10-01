-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 04:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `editedbookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `sid` int(11) NOT NULL,
  `sname` varchar(20) DEFAULT NULL,
  `top` varchar(10) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`sid`, `sname`, `top`, `photo`) VALUES
(1, 'Cha Eunwo', 'yes', 'picture/aut2.jpg'),
(2, 'Jang Nara', 'yes', 'picture/aut1.jpg'),
(3, 'SK Sharma', 'yes', 'picture/aut3.jpg'),
(4, 'NK Aggarwal', 'yes', 'picture/aut4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` int(50) NOT NULL,
  `uid` int(10) NOT NULL,
  `pid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkoutproducts`
--

CREATE TABLE `checkoutproducts` (
  `product_price` int(20) NOT NULL,
  `qty` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `pid` int(10) NOT NULL,
  `oid` int(10) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkoutproducts`
--

INSERT INTO `checkoutproducts` (`product_price`, `qty`, `uid`, `date`, `pid`, `oid`, `id`) VALUES
(44, 2, 10, '2022-07-25', 2, 0, 3),
(29, 1, 10, '2022-07-25', 3, 0, 4),
(74, 1, 10, '2022-07-25', 16, 0, 5),
(25, 1, 10, '2022-07-25', 10, 0, 6),
(11, 2, 10, '2022-07-25', 11, 0, 7),
(29, 1, 11, '2022-07-25', 3, 0, 8),
(10, 2, 11, '2022-07-25', 15, 0, 9),
(51, 2, 11, '2022-07-25', 9, 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(4, 'Minal', 'minalkamra7@gmail.com', 'Email Address Change', 'Can I change my email id for the already existing account?', '2021-11-20 16:00:38.000000');

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `name` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `products` text NOT NULL,
  `amount_paid` int(25) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `oid` int(10) NOT NULL,
  `uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`name`, `email`, `phone`, `address`, `products`, `amount_paid`, `date`, `oid`, `uid`) VALUES
('Harshita Kamra', 'harshitakamra392@gmail.com', '9999999999', 'GTB Nagar, Delhi', ' Know the universe (2)<br> Science and Technology (1)<br> Computer Sc. and Engineering (1)', 191, '2022-07-25', 8, 10),
('Harshita Kamra', 'harshitakamra392@gmail.com', '111111111111', 'Delhi', ' Grammer and Composition (1)<br> English Listening (2)', 47, '2022-07-25', 9, 10),
('Simrat Deol', 'simratdeol1@gmail.com', '9999999999', 'New Delhi, India', ' Science and Technology (1)<br> Computer SCience (2)<br> English Grammer (2)', 151, '2022-07-25', 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(10) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` int(20) NOT NULL,
  `offer` int(10) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(25) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `availability` varchar(25) NOT NULL,
  `tag` varchar(25) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `nf` varchar(25) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pprice`, `offer`, `description`, `category`, `photo`, `availability`, `tag`, `date`, `nf`, `rating`) VALUES
(1, 'Science World', 15, 0, 'This guide is a distillation of the authors’ own experiences as recent science graduates, bolstered by years of research and interviews with successful scientists and other science students. The authorial team includes former editors-in-chief of the prestigious Dartmouth Undergraduate Journal of Science. All have weathered the ups and downs of undergrad life―and all are still pursuing STEM careers. ', 'science', 'KRbookpic/science1.jpg', 'In Stock', 'SK Sharma', '2021-10-31', 'featured', 5),
(2, 'Know the universe', 59, 25, 'All the big ideas in science, simply explained Part of the popular Big Ideas series, The Science Book explores the history of science, how scientists have sought to explain our incredible universe and how amazing scientific discoveries have been made. Discover how Galileo worked out his scientific theories of motion and inertia and why Copernicuss ideas were contentious.', 'science', 'KRbookpic/science2.png', 'In Stock', 'NK Aggarwal', '2021-10-31', 'featured', 5),
(3, 'Science and Technology', 29, 0, 'An engaging book for the Physics aficionado \'For the Love of Physics: From the End of the Rainbow to the Edge of Time - A Journey Through the Wonders of Physics? by Walter Lewin is an engaging book which tries to explain the concepts of the subject in a unique and interactive manner. We all go through physics exams and study its concepts, but have you ever wondered what these concepts actually mean to our race, to our planet and their importance for our existence?', 'science', 'KRbookpic/science3.jpg', 'In Stock', 'Jang Nara', '2021-10-31', 'featured', 5),
(4, 'The Story of Innovation', 24, 0, 'Discover the psychology of scoring high grades and the power of Topper\'s blueprint to become a super successful student, year after year. You are holding a life-changing book that is based on 13, 000 hours of research in areas of psychology, philosophy and Science that enables high performance and success.  This ground-breaking book is written exclusively for students, parents and teachers. .', 'science', 'KRbookpic/science.jpg', 'In Stock', 'Cha Eunwo', '2021-10-31', 'featured', 5),
(5, 'Practicing Minds\r\n', 99, 0, 'The Classic Texts Series is only one of its kind selections of classic pieces that started off as a bestseller and continues to be the same today as well. The newly updated edition of ‘Elementary Algebra for School’ deals with the modern treatment of various concepts of Elementary Algebra, presented in a manner suitable for beginners and junior students.', 'maths', 'KRbookpic/maths1.webp', 'In Stock', 'SK Sharma', '2021-10-31', 'new', 4),
(6, 'Fun with Maths', 34, 0, 'his third edition of the successful outline in linear algebra--which sold more than 400,000 copies in its past two editions--has been thoroughly updated to increase its applicability to the fields in which linear algebra is now essential: computer science, engineering, mathematics, physics, and quantitative analysis. Revised coverage includes new problems relevant to computer science and a revised chapter on linear equations.', 'maths', 'KRbookpic/math1.jfif', 'In Stock', 'Cha Eunwo', '2021-10-31', 'new', 4),
(7, 'Calculus', 49, 0, 'A2ZBOX NCERT Exemplar Problem solutions- Mathematics is a unique book designed to provide a comprehensive guide to NCERT Exemplar Problems for Class X students. This book provides a detailed explanation to all subjective and objective type questions given in NCERT Exemplar Problems book.This book aims to give the best solutions and help the students to score high in school examinations as well as to build a strong foundation for competitive exams like NTSE, Olympiad etc.', 'maths', 'KRbookpic/math7.png', 'In Stock', 'Jang Nara', '2021-10-31', 'new', 4),
(8, 'Maths Notebook', 34, 0, 'The Classic Texts Series is only one of its kind selections of classic pieces that started off as a bestseller and continues to be the same today as well. These classic texts have been designed to work as elementary textbooks, which help the students in building the concepts to prepare for various competitive examinations.The present edition of ‘Differential Calculus for Beginners’ for engineering aspirants is based on the premise that problems in calculus are difficult but they are workable.', 'maths', 'KRbookpic/maths10.webp', 'In Stock', 'NK Aggarwal', '2021-10-31', 'new', 4),
(9, 'English Grammer', 69, 25, 'Spelling Success presents user-friendly and practical activities. This book, part of a series of carefully graded books for three different levels, is designed to introduce children to all the elements of spelling relevant to their particular ability level and age group. The worksheets provide a variety of well-planned, purposeful activities', 'english', 'KRbookpic/english grammer.jpg', 'In Stock', 'Jang Nara', '2021-10-31', '', 4),
(10, 'Grammer and Composition', 25, 0, 'Does your English work for you or against you?What you say is important, but so is how you say it.If you find yourself using the same words over and over again . . . making embarrassing mistakes in grammar . . . misspelling and mispronouncing words of average difficulty . . . you may be hurting your chances of success in school or on the job without even knowing it!', 'english', 'KRbookpic/eng1.jpg', 'In Stock', 'NK Aggarwal', '2021-10-31', '', 4),
(11, 'English Listening', 15, 25, 'A Children’s Bookshelf Selection: Each month our editor’s pick the best books for children and young adults by age to be a part of the children’s bookshelf. These are editorial recommendations made by our team of experts. Our monthly reading list includes a mix of bestsellers and top new releases and evergreen books that will help enhance a child’s reading life\r\n', 'english', 'KRbookpic/english grammer1.jpg', 'In Stock', 'Cha Eunwo', '2021-10-31', '', 3),
(12, 'Learn Grammer', 5, 0, 'Present frosting-swirled cupcakes, savories or even home accessories with artful charm on this elegant stand. Make a lasting impression on your guests! Central rod disassembles for easy storage and transportation. Can be made into a 2 tier stand. Perfect for festivals, the two storey plate tray stand is the best decor and storage accessory to have around the house. ', 'english', 'KRbookpic/english grammer3.jpg', 'In Stock', 'unknown', '2021-10-31', '', 3),
(13, 'Computer Engineering', 99, 35, 'Computers and computer networks are one of the most incredible inventions of the 20th century, having an ever-expanding role in our daily lives by enabling complex human activities in areas such as entertainment, education, and commerce. One of the most challenging problems in computer science for the 21st century is to improve the design of distributed systems where computing devices have to work together as a team to achieve common goals.', 'computer sc.', 'KRbookpic/c1.jpg', 'In Stock', 'NK Aggarwal', '2021-10-31', '', 3),
(14, 'Artificial Engineering and Machine Learning', 49, 0, 'This illuminating textbook provides a concise review of the core concepts in mathematics essential to computer scientists. Emphasis is placed on the practical computing applications enabled by seemingly abstract mathematical ideas, presented within their historical context. The text spans a broad selection of key topics, ranging from the use of finite field theory to correct code and the role of number theory in cryptography, to the value of graph theory when modelling networks and the importance of formal methods.', 'computer sc.', 'KRbookpic/c2.jpg', 'In Stock', 'SK Sharma', '2021-10-31', '', 4),
(15, 'Computer SCience', 10, 0, 'NEW for 2020 with updated curriculum and College Board updates. Over 30% new content including more on Boolean logic and gates, databases, compression, info security, the impacts of computing, and more! Computer science is the world\'s fastest growing field of study, and this growth is showing no signs of slowing down. As a new field, computer science can seem intimidating, but it should not be scary to learn or difficult to understand.', 'computer sc.', 'KRbookpic/c3.jpg', 'In Stock', 'Cha Eunwo', '2021-10-31', '', 3),
(16, 'Computer Sc. and Engineering', 99, 25, 'Endorsed by xyz Assessment International Education.\r\nDevelop computational thinking and programming skills with complete coverage of the latest syllabus from experienced examiners and teachers.\r\n- Follows the order of the syllabus exactly, ensuring complete coverage\r\n- Introduces students to self-learning exercises, helping them learn how to use their knowledge in new scenarios', 'computer sc.', 'KRbookpic/c4.jpg', 'In Stock', 'Jang Nara', '2021-10-31', '', 4),
(55, 'Computer Sc. and Engineering', 99, 25, 'Endorsed by xyz Assessment International Education.\r\nDevelop computational thinking and programming skills with complete coverage of the latest syllabus from experienced examiners and teachers.\r\n- Follows the order of the syllabus exactly, ensuring complete coverage\r\n- Introduces students to self-learning exercises, helping them learn how to use their knowledge in new scenarios', 'other', 'KRbookpic/c4.jpg', 'In Stock', 'Jang Nara', '2021-10-31', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `sid` int(10) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `top` varchar(10) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`sid`, `sname`, `top`, `photo`) VALUES
(1, 'science', 'yes', 'picture/science.gif'),
(2, 'Maths', 'yes', 'picture/eco.gif'),
(3, 'English', 'yes', 'picture/hindi.gif'),
(4, 'Computer Sc.', 'yes', 'picture/comp.gif');

-- --------------------------------------------------------

--
-- Table structure for table `ureviews`
--

CREATE TABLE `ureviews` (
  `sno` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `review` text NOT NULL,
  `pid` int(10) NOT NULL,
  `rating` int(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ureviews`
--

INSERT INTO `ureviews` (`sno`, `uname`, `email`, `review`, `pid`, `rating`, `date`) VALUES
(1, 'Astha Singh', 'astha@gmail.com', 'I liked this book a lot, one must have! Highly recommended for students.', 1, 5, '2022-07-25 22:55:47'),
(2, 'Astha Singh', 'astha@gmail.com', 'Awesome book for beginners in the field of science and universe. The things beyond science and the universe, brain storming!', 2, 4, '2022-07-25 22:57:22'),
(3, 'Harshita Kamra', 'harshitakamra392@gmail.com', 'awesome book', 10, 4, '2022-07-25 23:07:35'),
(4, 'Harshita Kamra', 'harshitakamra392@gmail.com', 'Great book for beginners in this field.', 1, 4, '2022-07-25 23:08:27'),
(5, 'Harshita Kamra', 'harshitakamra392@gmail.com', 'Great Book!!', 2, 3, '2022-07-25 23:08:47'),
(6, 'Harshita Kamra', 'harshitakamra392@gmail.com', 'awesome book', 3, 3, '2022-07-25 23:22:28'),
(7, 'Harshita Kamra', 'harshitakamra392@gmail.com', 'A very interesting book for students of all age group!', 4, 4, '2022-07-25 23:24:02'),
(8, 'Harshita Kamra', 'harshitakamra392@gmail.com', 'must have book.', 5, 4, '2022-07-25 23:24:29'),
(9, 'Harshita Kamra', 'harshitakamra392@gmail.com', 'Great book', 6, 4, '2022-07-25 23:25:21'),
(10, 'Harshita Kamra', 'harshitakamra392@gmail.com', 'I liked this book a lot, one must have! Highly rec...', 7, 4, '2022-07-25 23:26:09'),
(11, 'Harshita Kamra', 'harshitakamra392@gmail.com', 'I liked this book a lot, one must have! Highly rec...', 8, 5, '2022-07-25 23:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(10) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `email`, `password`, `address`, `date`) VALUES
(10, 'Harshita Kamra', 'harshitakamra392@gmail.com', 'pass', 'Outram lane, GTB Nagar, Delhi', '2022-07-25'),
(11, 'Simrat Deol', 'simratdeol1@gmail.com', 'abc123', 'New Delhi, India', '2022-07-25'),
(12, 'Astha Singh', 'astha@gmail.com', 'pass', 'Raebarelli, India', '2022-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `pid` int(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wid`, `uid`, `uname`, `pid`, `date`) VALUES
(1, 10, 'Harshita Kamra', 2, '2022-07-25'),
(2, 11, 'Simrat Deol', 4, '2022-07-25'),
(3, 11, 'Simrat Deol', 2, '2022-07-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkoutproducts`
--
ALTER TABLE `checkoutproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `ureviews`
--
ALTER TABLE `ureviews`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `checkoutproducts`
--
ALTER TABLE `checkoutproducts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orderhistory`
--
ALTER TABLE `orderhistory`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ureviews`
--
ALTER TABLE `ureviews`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
