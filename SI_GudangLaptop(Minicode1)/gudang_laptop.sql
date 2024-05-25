-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2024 at 12:05 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang_laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `ID_Laptop` int NOT NULL,
  `merk` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `spesifikasi` text NOT NULL,
  `stok` int NOT NULL,
  `harga_beli` int NOT NULL,
  `harga_jual` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_laptop`
--

CREATE TABLE `pembelian_laptop` (
  `ID_Pembelian` int NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `ID_Supplier` int NOT NULL,
  `ID_Laptop` int NOT NULL,
  `jumlah_beli` int NOT NULL,
  `harga_beli` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjualanlaptop`
--

CREATE TABLE `penjualanlaptop` (
  `ID_Penjualan` int NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `ID_Laptop` int NOT NULL,
  `jumlah_jual` int NOT NULL,
  `harga_jual` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_stock`
--

CREATE TABLE `riwayat_stock` (
  `ID_Riwayat_stok` int NOT NULL,
  `ID_Laptop` int NOT NULL,
  `tanggal` date NOT NULL,
  `tipe_transaksi` enum('Pembelian','Penjualan') NOT NULL,
  `jumlah` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_laptop`
--

CREATE TABLE `supplier_laptop` (
  `ID_Supplier` int NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`ID_Laptop`);

--
-- Indexes for table `pembelian_laptop`
--
ALTER TABLE `pembelian_laptop`
  ADD PRIMARY KEY (`ID_Pembelian`),
  ADD KEY `ID_Supplier` (`ID_Supplier`),
  ADD KEY `ID_Laptop` (`ID_Laptop`);

--
-- Indexes for table `penjualanlaptop`
--
ALTER TABLE `penjualanlaptop`
  ADD PRIMARY KEY (`ID_Penjualan`),
  ADD KEY `ID_Laptop` (`ID_Laptop`);

--
-- Indexes for table `riwayat_stock`
--
ALTER TABLE `riwayat_stock`
  ADD PRIMARY KEY (`ID_Riwayat_stok`),
  ADD KEY `ID_Laptop` (`ID_Laptop`);

--
-- Indexes for table `supplier_laptop`
--
ALTER TABLE `supplier_laptop`
  ADD PRIMARY KEY (`ID_Supplier`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laptop`
--
ALTER TABLE `laptop`
  ADD CONSTRAINT `laptop_ibfk_1` FOREIGN KEY (`ID_Laptop`) REFERENCES `riwayat_stock` (`ID_Laptop`);

--
-- Constraints for table `penjualanlaptop`
--
ALTER TABLE `penjualanlaptop`
  ADD CONSTRAINT `penjualanlaptop_ibfk_1` FOREIGN KEY (`ID_Laptop`) REFERENCES `riwayat_stock` (`ID_Laptop`);

--
-- Constraints for table `riwayat_stock`
--
ALTER TABLE `riwayat_stock`
  ADD CONSTRAINT `riwayat_stock_ibfk_1` FOREIGN KEY (`ID_Laptop`) REFERENCES `pembelian_laptop` (`ID_Laptop`);

--
-- Constraints for table `supplier_laptop`
--
ALTER TABLE `supplier_laptop`
  ADD CONSTRAINT `supplier_laptop_ibfk_1` FOREIGN KEY (`ID_Supplier`) REFERENCES `pembelian_laptop` (`ID_Supplier`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
