-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2017 at 03:34 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uastubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `stok` int(10) NOT NULL,
  `kdSatuan` int(11) NOT NULL,
  `kdKategori` int(11) NOT NULL,
  `hargaSatuan` int(15) NOT NULL,
  `hargaBeli` int(15) NOT NULL,
  `hargaJual` int(15) NOT NULL,
  `Laba` int(15) NOT NULL,
  `idSupplier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `nama`, `stok`, `kdSatuan`, `kdKategori`, `hargaSatuan`, `hargaBeli`, `hargaJual`, `Laba`, `idSupplier`) VALUES
(1, 'Maskara', 20, 2, 1, 3500, 40000, 4000, 100, 7);

-- --------------------------------------------------------

--
-- Table structure for table `kategoribarang`
--

CREATE TABLE `kategoribarang` (
  `kdKategori` int(10) NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategoribarang`
--

INSERT INTO `kategoribarang` (`kdKategori`, `nama`) VALUES
(1, 'Kosmetika'),
(3, 'Alat Tulis'),
(4, 'Kaos Kaki');

-- --------------------------------------------------------

--
-- Table structure for table `satuanbarang`
--

CREATE TABLE `satuanbarang` (
  `kdSatuan` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuanbarang`
--

INSERT INTO `satuanbarang` (`kdSatuan`, `nama`) VALUES
(1, 'Lusin'),
(2, 'Kodikok');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `idSupplier` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`idSupplier`, `nama`, `alamat`, `telp`) VALUES
(4, 'pamantosukoharjo', 'mojoagung', '0839'),
(7, 'hadi', 'purworejo', '8975875'),
(8, 'pratman', 'iaushd', '982374');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `kategoribarang`
--
ALTER TABLE `kategoribarang`
  ADD PRIMARY KEY (`kdKategori`);

--
-- Indexes for table `satuanbarang`
--
ALTER TABLE `satuanbarang`
  ADD PRIMARY KEY (`kdSatuan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idSupplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategoribarang`
--
ALTER TABLE `kategoribarang`
  MODIFY `kdKategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `satuanbarang`
--
ALTER TABLE `satuanbarang`
  MODIFY `kdSatuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `idSupplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
