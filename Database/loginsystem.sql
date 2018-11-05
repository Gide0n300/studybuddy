-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 12:28 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Contact_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Contact_ID`, `Name`, `Email`, `Message`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', ''),
(4, 'Tiaan', 'blabla@gmail.com', 'Testing'),
(5, 'tiaan', 'tiaan@lantic.net', 'Hallo');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `massageid` smallint(5) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(255) NOT NULL,
  `sender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`massageid`, `message`, `timestamp`, `username`, `sender`) VALUES
(1, 'message1', '2018-08-23 19:18:36', 'try', ''),
(2, 'message2', '2018-08-23 19:18:36', 'try', ''),
(3, 'booo', '2018-08-23 22:02:32', 'try', ''),
(4, 'booo', '2018-08-23 22:02:42', 'try', ''),
(5, 'ho', '2018-08-23 22:04:01', 'try', ''),
(6, 'hi', '2018-08-23 22:05:17', 'try', ''),
(7, 'hi\r\n', '2018-08-23 22:11:30', 'Sari', ''),
(8, 'HGD', '2018-08-23 22:12:06', 'try', ''),
(9, 'Hallo\r\n', '2018-08-23 22:23:52', 'The Procrastinator ', ''),
(10, 'Raai wat?', '2018-08-23 22:24:43', 'try', ''),
(11, 'Dit werk!!!!! ', '2018-08-23 22:25:02', 'The Procrastinator ', ''),
(12, 'ekel', '2018-08-30 08:42:58', 'Sarina', ''),
(13, 'Jandikl', '2018-08-30 08:43:08', 'Sarina', ''),
(14, 'Saeo', '2018-08-30 08:45:51', 'Sarina', ''),
(15, 'hallo', '2018-08-30 20:59:18', 'Sa      ', ''),
(16, 'Hallo ', '2018-08-31 09:48:30', 'Sarina', ''),
(17, 'Hoe gaan dit\r\n', '2018-08-31 09:48:44', 'Jenny', ''),
(18, 'skkls\r\n', '2018-08-31 10:33:45', 'H', ''),
(19, 'skkls\r\n', '2018-08-31 10:34:53', 'H', ''),
(20, 'skkls\r\n', '2018-08-31 10:35:14', 'H', ''),
(21, 'jkdfds', '2018-08-31 10:35:25', 'H', ''),
(22, 'Ha;lo', '2018-09-06 11:49:00', 'Sarina', ''),
(23, 'jolllo\r\n', '2018-09-06 11:49:16', 'Jenny', ''),
(24, 'kbk\r\n', '2018-10-31 08:51:39', ',,', ''),
(25, 'nn\r\n', '2018-10-31 08:51:52', 'jk', ''),
(26, 'l;s', '2018-10-31 08:56:20', 'jk', ''),
(27, 'kl', '2018-10-31 08:56:40', ',,', ''),
(28, 'hallo\r\n', '2018-10-31 08:57:04', ',,', ''),
(29, 'kl', '2018-10-31 09:01:13', ',,', ''),
(30, 'm,s\r\n', '2018-10-31 09:01:28', 'jk', ''),
(31, 'lklk\r\n', '2018-10-31 09:07:58', 'lkdmc', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(225) NOT NULL,
  `user_last` varchar(225) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(12) DEFAULT NULL,
  `user_uid` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `user_bio` text NOT NULL,
  `user_sub1` varchar(255) NOT NULL,
  `user_sub2` varchar(255) NOT NULL,
  `user_sub3` varchar(255) NOT NULL,
  `user_price` int(255) NOT NULL,
  `user_demi` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_phone`, `user_uid`, `user_pwd`, `user_bio`, `user_sub1`, `user_sub2`, `user_sub3`, `user_price`, `user_demi`) VALUES
(1, 'Gideon', 'Breytenbach', 'gideonbre@gmail.com', '123-457-4859', 'Admin', '$2y$10$paheyWvybTwIiZ04pRaXLeDWSJl02Wtal0hiSsRMxDQXf5cjUIfYy', 'Hey my naam is Gideon en ek het \'n passie vir kinders !!', 'ITRW 123', 'KIND 123', 'DERS 234', 400, 1),
(2, 'Deon', 'Bach', 'deon@gmail.com', '124-458-7898', 'Deon', '$2y$10$8Ks9lW9GvTOrf3y8/53FEuFOkdIvMspH3Kd2xWDvbNtjqxRck2G.W', 'Hey ek is Deon en ek hou baie van surf en onderwys gee.', 'EDCC 512', 'EDCC 145', 'EDCC 452', 250, 1),
(3, 'Arno', 'Breytenbach', 'punkdogcreations@gmail.com', '145-785-9632', 'MacAwesome', '$2y$10$aVY1Zb1lsF2R4GYfoFkoWe.n9.PMbvwFXv3N9Ezp5KGPDYbWj9PrO', '0', '0', '0', '0', 0, 1),
(4, 'Alex', 'Black', 'alex@mail.com', '072-758-9996', 'Alex', '$2y$10$jSOOCWyq2VxPaPQi/h5.cOz5ZIXU819j7a9w0YwRbW6upl47S8Kju', '0', '0', '0', '0', 0, 1),
(5, 'Bobby', 'Jones', 'Bobby@gmail.com', '123-125-4569', 'Bobby', '$2y$10$rDToDgs3pyhOW7sVBh2am.aDhhc0BAg6vmVrcqazHWtgip0EgO/9m', '0', '0', '0', '0', 0, 1),
(6, 'Frik', 'Frik', 'frik@gmail.xom', '123-456-7859', 'Frik', '$2y$10$auhyihzhGKmvvBb2Fxdl/eHVz15Ev8Z1x283hhGVnCtpgeZ7O9.7e', '0', '0', '0', '0', 0, 1),
(7, 'Bran', 'Brannas', 'brannas@gmail.com', '145-569-7412', 'Bran', '$2y$10$P.uVwwor6AqKpY46bO/gPOE/jW8Pc.O/15uoJ5SWINpk.vmLUweAG', '0', '0', '0', '0', 0, 1),
(8, 'Bleg', 'Blegger', 'bleg@blegmail.com', '142-545-8778', 'Bleg', '$2y$10$N2c.ae98nlAopC0aChtnPuy8o7gItnwc4lMN8cC.BA5fSC6ahylHq', '0', '0', '0', '0', 0, 1),
(9, 'Perd', 'Perde', 'perd@perdmail.com', '111-111-5555', 'Perd', '$2y$10$wEkCP1IUMw3vECZ/N0R3HO6gkaOFgYZngwYHpRPu2d09Zm0qYiRku', '0', '0', '0', '0', 0, 0),
(10, 'Jan', 'Janneman', 'jan@mail.com', '145-789-6325', 'Jan', '$2y$10$9zdLnD3NmX/UGkL9V83maOqRM6OJG3xXGLULwc5X9gG9id5rxVbWm', '0', '0', '0', '0', 0, 1),
(11, 'Frikk', 'Frikk', 'frik@frikmail.com', '145-589-4789', 'Frikk', '$2y$10$KWDI8OdwJUEB5MatIn385OLlXWmkboYjd30T83O6HeBqqr3wvMYNa', '0', '0', '0', '0', 0, 0),
(12, 'Gideon', 'Breytenbach', 'gideonbre@gmail.com', '065-323-7142', 'Admin2', '$2y$10$HFJIGoLsOowh4hkr7.jW1.Bci2eqCf1WSix8Y8eyCxNI/PR4sEowa', '0', '0', '0', '0', 0, 1),
(13, 'Gideon', 'Breytenbach', 'gideonbre@gmail.com', '065-323-7142', 'Admin3', '$2y$10$Ishd.1zqjrp1SwXNsl3V2OER3AYAQxXBZkfYvR1cW77f0NDhODUSW', '0', '0', '0', '0', 0, 0),
(14, 'Gideon', 'Breytenbach', 'gideonbre@gmail.com', '065-323-7142', 'Admin4', '$2y$10$xjkqPo0.4Ylly0uB2wFWvutYy67oMCmPa7.KGs9rw72J0jkfESAna', '0', '0', '0', '0', 0, 0),
(15, 'Frikkie', 'LeGrange', 'flegrange@gmail.com', '123-456-7896', 'Beastmode', '$2y$10$z9VfJpcYMrkls3IEkJC/kO0RIUaRpS.L9AtIIwhsQhJMp4vzLo2EK', '0', '0', '0', '0', 0, 1),
(16, 'Frik', 'Le Grange', 'flegrange@gmail.com', '012-784-4568', 'Frikka', '$2y$10$kNPehzTmq0W/IvA3jjyXUe5s1Tg6Xx7bNOLhLkNUvdDgOxtmcwVVi', '0', '0', '0', '0', 0, 1),
(17, 'Johan Christiaan', 'Du Toit', 'jcdt@gmail.com', '123-963-8521', 'Johan', '$2y$10$igfuLRkikYEC3xMOVxWnDO2EHvUwO4YaeTuVO8WPrspL2PpJv3bX6', '0', '0', '0', '0', 0, 0),
(18, 'Sarina', 'Haasbroek', 'sarina@gmail.com', '154-899-9874', 'Sarina', '$2y$10$yMRczlPYMSob9k1s1k2im.sQFnm4GOwE.YPQ3uaawoaeipfkOF5bq', '0', '0', '0', '0', 0, 1),
(19, 'Brandon', 'Sandilands', 'brndon@gmail.com', '124-874-7894', 'Brandon', '$2y$10$BuEachqqXWS5zDU5kaRBXeaFygHotiBVjaav34arRlTk50yNH1rBq', '0', '0', '0', '0', 0, 0),
(20, 'Arno', 'Breytenbach', 'arno@gmail.com', '258-963-1478', 'Arno', '$2y$10$DhN6VT4UnhjcxS3jzVYa2.p2LL9ZrrZ.eCmqqwVvJV4yzJJkincOm', '0', '0', '0', '0', 0, 0),
(21, 'Sussan', 'Kuger', 's@gmail.com', '789-465-4567', 'Sussan', '$2y$10$2v76j7GVzcfffD7yRnfRrufqkcjpE081mN8j7mNW.Op73BxPi3i5.', '0', '0', '0', '0', 0, 1),
(22, 'Coenie', 'Breytenbach', 'coenie.bre@gmail.com', '072-940-0722', 'Coeniebre', '$2y$10$Xtwppfud7Mw9l3SNZqRp0Ocw9yOmceL9G0VIOrT3ec9kxhzporVSO', '0', '0', '0', '0', 0, 1),
(23, 'Andre', 'Wit', 'andre@mail.com', '084-568-4785', 'Andre', '$2y$10$qtV9ITI7USqPxGX27VoUruGrRvQNqfI0EkTiUEiIbdRxeAgKdB17i', '0', '0', '0', '0', 0, 1),
(24, 'Corrie', 'Bloom', 'corrie@gmail.com', '124-457-4578', 'Corrie', '$2y$10$dRVnv7k/RMpnc2LHu72l2ONRFal7pOKU/0bFHSf9Tp6nXvGlKEgO2', '0', '0', '0', '0', 0, 1),
(25, 'Allen', 'Watts', 'allen@gmail.com', '145-693-6688', 'Allen', '$2y$10$tSYzm1WEO9cuRY1yVSubWOtSZV5ydcOuS3v/e.AUzH47Nd983.nYi', '0', '0', '0', '0', 0, 0),
(26, 'Cat', 'Black', 'cat@gmail.com', '123-478-4569', 'cat', '$2y$10$zXaXY7IOPFXi6RDr9txguufnwoswxGvlhEV.6ozqbjihYA7Qgcmvy', '0', '0', '0', '0', 0, 1),
(27, 'Jannie', 'Black', 'jannie@gmail.com', '123-478-4569', 'jannie', '$2y$10$HwM7Xqg.ZFinkBx65Vt.xeuyFv55zcr7CDn2W5jnh9fhT1e5nsK0C', '0', '0', '0', '0', 0, 1),
(28, 'Jannie', 'Black', 'jannie@gmail.com', '123-478-4569', 'Ajax', '$2y$10$Sz9ECsCUdJXpgBg2QGg45uNFhPvkjrLVphTcuGakHQYdvs/E50hCm', '0', '0', '0', '0', 0, 1),
(29, 'Jannie', 'Black', 'jannie@gmail.com', '123-478-4569', 'Ajaxx', '$2y$10$5bgcdNZu3vmILA7E7/bDy.rR1GpGUzYvYpnS4Sklceai4keAIHH0y', '0', '0', '0', '0', 0, 1),
(30, 'Piggy', 'Black', 'piggy@gmail.com', '123-478-4568', 'Piggy', '$2y$10$.u26b9N5ff5ea60EZlzxJuhcy0txwDMnDB/SJ8XdzOm95RbYf8PlS', '0', '0', '0', '0', 0, 1),
(93, 'b', 'b', 'b@bmail.com', '122-558-9632', 'b', '$2y$10$XpvOamBJDGVOK1jWUhpS5.E1GGLgZ.qcFBR/k2Oo8aQdGQO7matg.', '0', '0', '0', '0', 0, 0),
(94, 'b', 'b', 'b@bmail.com', '122-558-9632', 'bb', '$2y$10$PzfRykOlbPldCjAK4WqVbek/Py/.RJ5B1z/QJhtWDTKIPvWTbxqPy', '0', '0', '0', '0', 0, 0),
(95, 'b', 'b', 'b@bmail.com', '122-558-9632', 'bbb', '$2y$10$06nf7WaGqlZPGX6Qav4wrORDjVP3kXZxNx6mc/H5o5kSKco8CWvj.', '0', '0', '0', '0', 0, 1),
(96, 'd', 'd', 'd@gmail.com', '142-478-4785', 'd', '$2y$10$sBtH5LkEmpBBlg4w9eWZK.qBg0OfW4aF1idaTLsm7oVK/z7.J4.jO', '0', '0', '0', '0', 0, 0),
(97, 'e', 'e', 'e@gmail.com', '142-478-4786', 'e', '$2y$10$phZQpFRZ7KwWwXcJQQOC9uheCgLWPoIxL14G8gAYGN5dioSrbrSJK', '0', '0', '0', '0', 0, 1),
(98, 'Piggy', 'Black', 'piggy@gmail.com', '123-478-4569', 'Piggys', '$2y$10$wBsuGFUumv75x3vfKT.nweDO6SAcvMqSLwS.RmZVB1Wsf2vBDK5CO', '0', '0', '0', '0', 0, 1),
(99, 'Poncho', 'Black', 'piggy@gmail.com', '123-478-4569', 'Poncho', '$2y$10$dg7oAGboN.tcCzr2CMjLouK0r0pPjFn5XrcJ9QmMoTrL4YZY//lhC', '0', '0', '0', '0', 0, 1),
(100, 'Poncho', 'Black', 'piggy@gmail.com', '123-478-4569', 'Ponchos', '$2y$10$6GMMhZR4W.a.OIiqrCrC7.v7T94aWsNIKXKTUouynPyl8d2txmgeS', '', '', '', '', 0, 1),
(101, 'Poncho', 'Black', 'piggy@gmail.com', '123-478-4569', 'Ponchosj', '$2y$10$dOkwUsS4sG3uC7JdyCroW.Poot8rpaK4TzsCcQSMLE2BVs7hQZQXS', '', '', '', '', 0, 1),
(102, 'Ponchoww', 'Black', 'piggy@gmail.com', '123-478-4569', 'Ponchosjw', '$2y$10$dOsQJGJ2aUZha.fDWNTdG.QzhSB35mE2HPOKkfg49t0RHYfPK6.Va', '', '', '', '', 0, 1),
(103, 'Sa', 'Ha', 'S@Ss.com', '012-345-6789', 'SaHaas', '$2y$10$RAiYyi8NpLUlU4VIIxy37.uAMl7KXhOqOTlaeFPL9AEzFWnANja9q', '', '', '', '', 0, 1),
(104, 'Sa', 'Ha', 'S@Ss.com', '012-345-6789', 'hh', '$2y$10$kVnqxF/R.e.Z1TYded2lseV6nY3ILQ6q/s09WOCNonGnErsMOAeBC', '', '', '', '', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Contact_ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`massageid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `Contact_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `massageid` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
