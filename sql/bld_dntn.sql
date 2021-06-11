

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Database: `bld_dntn`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `dob` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `mobile` bigint(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `town` varchar(20) DEFAULT NULL,
  `state` varchar(30) NOT NULL DEFAULT 'Maharastra',
  `lastdate` timestamp NOT NULL DEFAULT '2020-12-31 18:30:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `bld_dntn`.`contactus` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `subject` VARCHAR(50) NOT NULL , `message` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `username`, `password`, `fullname`, `dob`, `sex`, `bloodgroup`, `mobile`, `email`, `town`, `state`, `lastdate`) VALUES
(2, 'Naruto', 'uzumaki', 'uzumaki naruto', '2000-02-02', 'male', 'O pos', 1234567890, 'uznaruto@gmail.com', 'konoha', 'hidden village', '2001-01-01 02:07:07');
 

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
