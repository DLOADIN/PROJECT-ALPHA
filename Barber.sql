-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 01:22 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Barber`
--

-- --------------------------------------------------------

--
-- Table structure for table `barbers`
--

CREATE TABLE `barbers` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_amount` int(11) NOT NULL,
  `u_customers` int(11) NOT NULL,
  `u_date` date NOT NULL,
  `u_percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barbers`
--

INSERT INTO `barbers` (`id`, `u_name`, `u_amount`, `u_customers`, `u_date`, `u_percentage`) VALUES
(7, 'Rasta', 8000, 2, '2023-12-23', 2800);

-- --------------------------------------------------------

--
-- Table structure for table `bikila`
--

CREATE TABLE `bikila` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bikila`
--

INSERT INTO `bikila` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(4, 'V', '1000', '2023-12-30 00:00:00', 1, 350),
(5, 'bikila', '1000', '2023-12-30 00:00:00', 1, 350),
(10, '', '', '2024-01-02 06:53:00', 0, 0),
(11, '', '', '2024-01-02 06:53:00', 0, 0),
(12, '', 'sjdhajsk', '2024-01-02 06:54:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cece`
--

CREATE TABLE `cece` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) DEFAULT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cece`
--

INSERT INTO `cece` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(1, 'Cece', '3000', '2023-12-29 00:00:00', 1, 1050),
(2, '', '0', '2024-01-02 05:54:00', 0, 0),
(3, '', 'sjdhajsk', '2024-01-02 06:55:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `coka`
--

CREATE TABLE `coka` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) DEFAULT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coka`
--

INSERT INTO `coka` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(1, 'Cokacoka', '3000', '2023-12-29 00:00:00', 1, 1050),
(2, '', '0', '2024-01-02 05:53:00', 0, 0),
(3, '', 'sjdhajsk', '2024-01-02 06:56:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `u_name`, `u_phone`) VALUES
(3, 'Hassan Bosco', '(+250) 782250191');

-- --------------------------------------------------------

--
-- Table structure for table `drake`
--

CREATE TABLE `drake` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) DEFAULT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drake`
--

INSERT INTO `drake` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(1, 'Drako', '2000', '2023-12-29 00:00:00', 1, 700),
(2, '', '0', '2024-01-02 05:53:00', 0, 0),
(3, '', 'sjdhajsk', '2024-01-02 06:55:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_expense` int(11) NOT NULL,
  `u_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `u_name`, `u_expense`, `u_date`) VALUES
(1, 'Ganza', 1000, '2023-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `ganza`
--

CREATE TABLE `ganza` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ganza`
--

INSERT INTO `ganza` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(3, 'V', '1000', '2023-12-30 00:00:00', 2, 350),
(4, '', '', '2024-01-02 06:52:00', 0, 0),
(5, '', 'sjdhajsk', '2024-01-02 06:54:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jojo`
--

CREATE TABLE `jojo` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jojo`
--

INSERT INTO `jojo` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(3, 'v', '3000', '2023-12-30 00:00:00', 1, 1050),
(4, 'jojo', '1000', '2023-12-29 00:00:00', 1, 350),
(5, '', '', '2024-01-02 06:52:00', 0, 0),
(6, '', 'sjdhajsk', '2024-01-02 06:54:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kayaga`
--

CREATE TABLE `kayaga` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) DEFAULT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kayaga`
--

INSERT INTO `kayaga` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(1, 'Kayaga', '19000', '2023-12-01 00:00:00', 1, 6650),
(2, '', '0', '2024-01-02 05:54:00', 0, 0),
(3, '', 'sjdhajsk', '2024-01-02 06:54:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kevis`
--

CREATE TABLE `kevis` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) DEFAULT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kevis`
--

INSERT INTO `kevis` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(2, '', '0', '2024-01-02 05:54:00', 0, 0),
(3, '', 'sjdhajsk', '2024-01-02 06:54:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lolo`
--

CREATE TABLE `lolo` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lolo`
--

INSERT INTO `lolo` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(4, 'v', '1000', '2023-12-30 00:00:00', 0, 350),
(5, 'Lolo', '1000', '2023-12-30 00:00:00', 1, 350),
(6, 'Lolo', '1000', '2023-12-30 00:00:00', 1, 350),
(7, 'Lolo', '1000', '2023-12-30 00:00:00', 1, 350),
(8, 'Lolo', '1000', '2023-12-30 00:00:00', 1, 350),
(9, 'Lolo', '1000', '2023-12-30 00:00:00', 1, 350),
(10, '', '', '2024-01-02 06:52:00', 0, 0),
(11, '', 'sjdhajsk', '2024-01-02 06:53:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `u_name`, `u_password`) VALUES
(2, 'Ganza David', '30122'),
(3, 'Ganza', '12345'),
(4, 'Manzi ', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `mulumba`
--

CREATE TABLE `mulumba` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) DEFAULT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mulumba`
--

INSERT INTO `mulumba` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(1, 'Mulumba', '3000', '2023-12-29 00:00:00', 1, 1050),
(2, '', '0', '2024-01-02 05:53:00', 0, 0),
(3, '', 'sjdhajsk', '2024-01-02 06:55:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nigros`
--

CREATE TABLE `nigros` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) DEFAULT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nigros`
--

INSERT INTO `nigros` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(2, '', '0', '2024-01-02 05:54:00', 0, 0),
(3, '', 'sjdhajsk', '2024-01-02 06:55:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `noah`
--

CREATE TABLE `noah` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) DEFAULT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noah`
--

INSERT INTO `noah` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(8, 'V:', '0', '2023-12-31 00:00:00', 0, 0),
(9, 'V:', '0', '2023-12-31 00:00:00', 0, 0),
(21, '', '0', '2024-01-02 05:54:00', 0, 0),
(22, 'Noah', '2000', '2024-01-02 06:48:00', 1, 700),
(23, '', 'sjdhajsk', '2024-01-02 06:54:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `packson`
--

CREATE TABLE `packson` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) DEFAULT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packson`
--

INSERT INTO `packson` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(1, 'Packson', '3000', '2023-12-29 00:00:00', 1, 1050),
(2, '', '0', '2024-01-02 05:54:00', 0, 0),
(3, '', 'sjdhajsk', '2024-01-02 06:54:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pdg`
--

CREATE TABLE `pdg` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) DEFAULT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdg`
--

INSERT INTO `pdg` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(1, 'PDG-PDF', '3000', '2023-12-29 00:00:00', 1, 1050),
(2, '', '0', '2024-01-02 05:53:00', 0, 0),
(3, '', 'sjdhajsk', '2024-01-02 06:56:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `productentry`
--

CREATE TABLE `productentry` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_amount` int(100) NOT NULL,
  `p_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productentry`
--

INSERT INTO `productentry` (`id`, `u_name`, `p_name`, `p_amount`, `p_date`) VALUES
(1, 'Manzi  ', 'SCRUB', 3000, '2023-12-30'),
(2, 'Rozine', 'MEDECINE BEARD', 1000, '2023-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) DEFAULT NULL,
  `u_currentdate` date DEFAULT NULL,
  `u_expiringdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id`, `u_name`, `u_currentdate`, `u_expiringdate`) VALUES
(1, 'Rasta', '2024-01-12', '2024-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_amount` int(80) NOT NULL,
  `u_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `u_name`, `u_amount`, `u_date`) VALUES
(1, 'Manzi  ', 1000, '2023-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `rasta`
--

CREATE TABLE `rasta` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) DEFAULT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rasta`
--

INSERT INTO `rasta` (`id`, `u_name`, `u_amount`, `u_date`, `u_percentage`, `u_customers`) VALUES
(1, 'Rasta', '2000', '2023-12-28 00:00:00', 700, 0),
(3, 'Rasta', '3000', '2023-12-28 00:00:00', 1050, 1),
(4, 'Rasta', '3000', '2023-12-29 00:00:00', 1050, 1),
(5, 'V', '0', '2023-12-29 00:00:00', 0, 0),
(6, 'VV', '0', '2023-12-29 00:00:00', 0, 0),
(7, '', '0', '2024-01-02 05:53:00', 0, 0),
(8, '', 'sjdhajsk', '2024-01-02 06:55:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rosine`
--

CREATE TABLE `rosine` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) DEFAULT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rosine`
--

INSERT INTO `rosine` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(3, '', '0', '2024-01-02 05:53:00', 0, 0),
(4, '', 'sjdhajsk', '2024-01-02 06:56:00', 0, 0),
(5, '', 'sjdhajsk', '2024-01-02 06:56:00', 0, 0),
(6, '', 'sjdhajsk', '2024-01-02 06:56:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `texas`
--

CREATE TABLE `texas` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_amount` varchar(80) DEFAULT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_customers` int(11) DEFAULT NULL,
  `u_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `texas`
--

INSERT INTO `texas` (`id`, `u_name`, `u_amount`, `u_date`, `u_customers`, `u_percentage`) VALUES
(3, 'V', '1000', '2023-12-30 00:00:00', 8, 350),
(4, '', '', '2024-01-02 06:52:00', 0, 0),
(5, '', 'sjdhajsk', '2024-01-02 06:53:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `id` int(11) NOT NULL,
  `id_expense` int(11) NOT NULL,
  `id_barber` int(11) NOT NULL,
  `id_productentry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barbers`
--
ALTER TABLE `barbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bikila`
--
ALTER TABLE `bikila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cece`
--
ALTER TABLE `cece`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coka`
--
ALTER TABLE `coka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drake`
--
ALTER TABLE `drake`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ganza`
--
ALTER TABLE `ganza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jojo`
--
ALTER TABLE `jojo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kayaga`
--
ALTER TABLE `kayaga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kevis`
--
ALTER TABLE `kevis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lolo`
--
ALTER TABLE `lolo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mulumba`
--
ALTER TABLE `mulumba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nigros`
--
ALTER TABLE `nigros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noah`
--
ALTER TABLE `noah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packson`
--
ALTER TABLE `packson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdg`
--
ALTER TABLE `pdg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productentry`
--
ALTER TABLE `productentry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rasta`
--
ALTER TABLE `rasta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rosine`
--
ALTER TABLE `rosine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `texas`
--
ALTER TABLE `texas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_expense` (`id_expense`),
  ADD KEY `id_productentry` (`id_productentry`),
  ADD KEY `id_barber` (`id_barber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barbers`
--
ALTER TABLE `barbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bikila`
--
ALTER TABLE `bikila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `cece`
--
ALTER TABLE `cece`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `coka`
--
ALTER TABLE `coka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `drake`
--
ALTER TABLE `drake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ganza`
--
ALTER TABLE `ganza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jojo`
--
ALTER TABLE `jojo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kayaga`
--
ALTER TABLE `kayaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kevis`
--
ALTER TABLE `kevis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lolo`
--
ALTER TABLE `lolo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mulumba`
--
ALTER TABLE `mulumba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nigros`
--
ALTER TABLE `nigros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `noah`
--
ALTER TABLE `noah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `packson`
--
ALTER TABLE `packson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pdg`
--
ALTER TABLE `pdg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `productentry`
--
ALTER TABLE `productentry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rasta`
--
ALTER TABLE `rasta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `rosine`
--
ALTER TABLE `rosine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `texas`
--
ALTER TABLE `texas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `total`
--
ALTER TABLE `total`
  ADD CONSTRAINT `total_ibfk_1` FOREIGN KEY (`id_expense`) REFERENCES `expenses` (`id`),
  ADD CONSTRAINT `total_ibfk_2` FOREIGN KEY (`id_productentry`) REFERENCES `productentry` (`id`),
  ADD CONSTRAINT `total_ibfk_3` FOREIGN KEY (`id_barber`) REFERENCES `barbers` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
