/*
SQLyog Professional
MySQL - 5.6.50-log : Database - heroku_c28ac8203d799de
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `admin` */

CREATE TABLE `admin` (
  `idAdmin` int(10) unsigned NOT NULL,
  `UKM_idUKM` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idAdmin`),
  KEY `admin_ukm_idukm_foreign` (`UKM_idUKM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admin` */

/*Table structure for table `anggota` */

CREATE TABLE `anggota` (
  `idAnggota` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UKM_idUKM` int(10) unsigned NOT NULL,
  `namaAnggota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NIMAnggota` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatanAnggota` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kementerian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programStudiAnggota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statusAnggota` enum('tetap','baru') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idAnggota`),
  KEY `anggota_ukm_idukm_foreign` (`UKM_idUKM`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `anggota` */

insert  into `anggota`(`idAnggota`,`UKM_idUKM`,`namaAnggota`,`NIMAnggota`,`jabatanAnggota`,`kementerian`,`programStudiAnggota`,`statusAnggota`,`created_at`,`updated_at`) values (4,5,'Rendy Kharisma Aksmala','183307050','1',NULL,'Teknologi Informasi 2018','tetap','2021-04-10 05:38:56','2021-04-10 06:41:05');

/*Table structure for table `jadwal` */

CREATE TABLE `jadwal` (
  `idJadwal` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UKM_idUKM` int(10) unsigned NOT NULL,
  `namaKegiatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggalAwal` date DEFAULT NULL,
  `tanggalAkhir` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idJadwal`),
  KEY `jadwal_ukm_idukm_foreign` (`UKM_idUKM`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jadwal` */

insert  into `jadwal`(`idJadwal`,`UKM_idUKM`,`namaKegiatan`,`tanggalAwal`,`tanggalAkhir`,`created_at`,`updated_at`) values (1,5,'Musyawarah Besar 2021','2021-04-11','2021-04-11','2021-04-09 07:22:34','2021-04-10 07:05:30');
insert  into `jadwal`(`idJadwal`,`UKM_idUKM`,`namaKegiatan`,`tanggalAwal`,`tanggalAkhir`,`created_at`,`updated_at`) values (2,5,'Seminar Covid-19','2021-04-14','2021-04-14','2021-04-09 07:23:10','2021-04-09 07:23:13');
insert  into `jadwal`(`idJadwal`,`UKM_idUKM`,`namaKegiatan`,`tanggalAwal`,`tanggalAkhir`,`created_at`,`updated_at`) values (4,5,'Makrab 2021','2021-04-12','2021-04-12','2021-04-09 13:07:21','2021-04-10 06:41:28');
insert  into `jadwal`(`idJadwal`,`UKM_idUKM`,`namaKegiatan`,`tanggalAwal`,`tanggalAkhir`,`created_at`,`updated_at`) values (14,2,'Latihan','2021-04-10','2021-04-10','2021-04-09 14:35:17','2021-04-09 14:35:17');
insert  into `jadwal`(`idJadwal`,`UKM_idUKM`,`namaKegiatan`,`tanggalAwal`,`tanggalAkhir`,`created_at`,`updated_at`) values (24,3,'Latihan Rutin','2021-04-13','2021-04-13','2021-04-10 07:03:17','2021-04-10 07:06:12');
insert  into `jadwal`(`idJadwal`,`UKM_idUKM`,`namaKegiatan`,`tanggalAwal`,`tanggalAkhir`,`created_at`,`updated_at`) values (34,3,'Latihan Rutin','2021-04-20','2021-04-20','2021-04-10 07:09:00','2021-04-10 07:09:00');

/*Table structure for table `detailjadwal` */

CREATE TABLE `detailjadwal` (
  `idDetailJadwal` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idJadwal` int(10) unsigned NOT NULL,
  `NIM` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaUndangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idDetailJadwal`),
  KEY `detailjadwal_idjadwal_foreign` (`idJadwal`),
  CONSTRAINT `detailjadwal_ibfk_1` FOREIGN KEY (`idJadwal`) REFERENCES `jadwal` (`idJadwal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `detailjadwal` */

insert  into `detailjadwal`(`idDetailJadwal`,`idJadwal`,`NIM`,`namaUndangan`,`prodi`,`created_at`,`updated_at`) values (4,1,'183307050','Rendy Kharisma Aksmala','Teknologi Informasi 2018','2021-04-09 14:54:49','2021-04-09 14:54:49');
insert  into `detailjadwal`(`idDetailJadwal`,`idJadwal`,`NIM`,`namaUndangan`,`prodi`,`created_at`,`updated_at`) values (14,1,'183307009','Mochamad Irfani Ardhyansah','Teknologi Informasi 2018','2021-04-09 14:54:56','2021-04-09 14:54:56');
insert  into `detailjadwal`(`idDetailJadwal`,`idJadwal`,`NIM`,`namaUndangan`,`prodi`,`created_at`,`updated_at`) values (24,2,'183307050','Rendy Kharisma Aksmala','Teknologi Informasi 2018','2021-04-09 14:56:25','2021-04-09 14:56:25');
insert  into `detailjadwal`(`idDetailJadwal`,`idJadwal`,`NIM`,`namaUndangan`,`prodi`,`created_at`,`updated_at`) values (34,4,'183307043','Rezy Andrean Rosyidin','Teknologi Informasi 2018','2021-04-10 12:43:00','2021-04-10 12:43:00');
insert  into `detailjadwal`(`idDetailJadwal`,`idJadwal`,`NIM`,`namaUndangan`,`prodi`,`created_at`,`updated_at`) values (44,1,'183307040','Nur Yuli Wahyu Agung','Teknologi Informasi 2018','2021-04-30 13:53:08','2021-04-30 13:53:08');
insert  into `detailjadwal`(`idDetailJadwal`,`idJadwal`,`NIM`,`namaUndangan`,`prodi`,`created_at`,`updated_at`) values (54,4,'183307009','Mochamad Irfani Ardhyansah','Teknologi Informasi 2018','2021-04-30 13:55:16','2021-04-30 13:55:16');
insert  into `detailjadwal`(`idDetailJadwal`,`idJadwal`,`NIM`,`namaUndangan`,`prodi`,`created_at`,`updated_at`) values (64,2,'183307044','Novendra Ilham Windianto','Teknologi Informasi 2018','2021-05-16 14:15:48','2021-05-16 14:15:48');

/*Table structure for table `informasi` */

CREATE TABLE `informasi` (
  `idInformasi` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UKM_idUKM` int(10) unsigned NOT NULL,
  `isiInformasi` varchar(760) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idInformasi`),
  KEY `informasi_ukm_idukm_foreign` (`UKM_idUKM`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `informasi` */

insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (2,2,'Futsal PNM','2021-04-09 03:06:01','2021-04-09 14:39:43');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (3,3,'Taekwondo adalah UKM yang didirikan pada tahun 2019','2021-04-09 03:09:02','2021-04-10 07:12:55');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (4,4,'Voli','2021-04-09 03:08:59','2021-04-09 03:08:57');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (5,5,'Badminton','2021-04-09 03:08:52','2021-04-09 03:08:54');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (6,6,'IPSI','2021-04-09 03:08:49','2021-04-09 03:08:47');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (7,7,'Niknema','2021-04-09 03:08:43','2021-04-09 03:08:45');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (8,8,'Tari','2021-04-09 03:08:41','2021-04-09 03:08:39');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (9,9,'Stupa','2021-04-09 03:08:35','2021-04-09 03:08:37');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (10,10,'Cakra','2021-04-09 03:08:31','2021-04-09 03:08:30');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (11,11,'Kewirausahaan','2021-04-09 03:08:26','2021-04-09 03:08:28');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (12,12,'Resimen Mahasiswa','2021-04-09 03:08:23','2021-04-09 03:08:22');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (13,13,'Musican','2021-04-09 03:08:17','2021-04-09 03:08:19');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (14,14,'Paduan Suara','2021-04-09 03:08:15','2021-04-09 03:08:12');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (15,15,'Pers G-Plasma','2021-04-09 03:08:08','2021-04-09 03:08:10');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (16,16,'PALS','2021-04-09 03:08:06','2021-04-09 03:08:04');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (17,17,'Kerohanian Islam','2021-04-09 03:07:59','2021-04-09 03:08:01');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (18,18,'Basket','2021-04-09 03:07:56','2021-04-09 03:07:54');
insert  into `informasi`(`idInformasi`,`UKM_idUKM`,`isiInformasi`,`created_at`,`updated_at`) values (19,19,'Pramuka','2021-04-09 03:07:49','2021-04-09 03:07:52');

/*Table structure for table `kritiksaran` */

CREATE TABLE `kritiksaran` (
  `idKritikSaran` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UKM_idUKM` int(10) unsigned NOT NULL,
  `namaMahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isiKritikSaran` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idKritikSaran`),
  KEY `kritiksaran_ukm_idukm_foreign` (`UKM_idUKM`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kritiksaran` */

insert  into `kritiksaran`(`idKritikSaran`,`UKM_idUKM`,`namaMahasiswa`,`isiKritikSaran`,`created_at`,`updated_at`) values (4,1,'Anonim','Tes memberi kritik dan saran ke BEM sebagai Anonim','2021-04-09 03:17:25','2021-04-09 03:17:25');
insert  into `kritiksaran`(`idKritikSaran`,`UKM_idUKM`,`namaMahasiswa`,`isiKritikSaran`,`created_at`,`updated_at`) values (14,1,'Rendy Kharisma','Tes memberi kritik dan saran ke BEM dengan nama','2021-04-09 03:24:31','2021-04-09 03:24:31');

/*Table structure for table `mahasiswas` */

CREATE TABLE `mahasiswas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NIM` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programStudi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mahasiswas_nim_unique` (`NIM`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mahasiswas` */

insert  into `mahasiswas`(`id`,`NIM`,`password`,`name`,`programStudi`,`remember_token`,`created_at`,`updated_at`) values (1,183307050,'$2y$10$Vb6HyWuPsXC.oYd3ANUEoekpynDmgCOaQfirwRmZhTpCFHD4T9Rfy','Rendy Kharisma Aksmala','Teknologi Informasi 2018',NULL,'2021-04-09 03:05:21','2021-04-09 03:05:23');

/*Table structure for table `migrations` */

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_76700_create_password_resets_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (2,'2021_02_21_115152_create_mahasiswas_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (3,'2021_04_08_143101_create_ukm_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (4,'2021_04_08_144659_create_admin_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (5,'2021_04_08_144901_create_anggota_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (6,'2021_04_08_145210_create_jadwal_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (7,'2021_04_08_145219_create_detailjadwal_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (8,'2021_04_08_145330_create_informasi_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (9,'2021_04_08_145810_create_kritiksaran_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (10,'2021_04_08_145948_create_programkerja_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (11,'2021_04_08_151104_create_users_table',1);

/*Table structure for table `password_resets` */

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(191)),
  KEY `password_resets_token_index` (`token`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `programkerja` */

CREATE TABLE `programkerja` (
  `idProgramKerja` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UKM_idUKM` int(10) unsigned NOT NULL,
  `namaKegiatanProker` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuanKegiatanProker` varchar(760) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggalKegiatanProker` date DEFAULT NULL,
  `lokasiKegiatanProker` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sasaranKegiatanProker` varchar(760) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuKegiatanProker` varchar(760) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pjKegiatanProker` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotoKegiatanProker` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keteranganKegiatanProker` enum('terlaksana','tidakTerlaksana','belumTerlaksana') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idProgramKerja`),
  KEY `programkerja_ukm_idukm_foreign` (`UKM_idUKM`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `programkerja` */

insert  into `programkerja`(`idProgramKerja`,`UKM_idUKM`,`namaKegiatanProker`,`tujuanKegiatanProker`,`tanggalKegiatanProker`,`lokasiKegiatanProker`,`sasaranKegiatanProker`,`tuKegiatanProker`,`pjKegiatanProker`,`fotoKegiatanProker`,`keteranganKegiatanProker`,`created_at`,`updated_at`) values (4,5,'Musyawarah Besar','Membahas AD dan ART UKM Bulutangkis untuk satu periode kedepan','2021-04-10','Kampus 1 PNM','Seluruh anggota UKM Bulutangkis','Dihadiri 1/2n + 1 dari total anggota UKM Bulutangkis','Rendy Kharisma Aksmala','5-4.jpg','terlaksana','2021-04-09 11:25:48','2021-04-09 11:27:22');
insert  into `programkerja`(`idProgramKerja`,`UKM_idUKM`,`namaKegiatanProker`,`tujuanKegiatanProker`,`tanggalKegiatanProker`,`lokasiKegiatanProker`,`sasaranKegiatanProker`,`tuKegiatanProker`,`pjKegiatanProker`,`fotoKegiatanProker`,`keteranganKegiatanProker`,`created_at`,`updated_at`) values (14,5,'Makrab 2021','Untuk berkegiatan bersama dan bersilaturahmi antar anggota UKM Bulutangkis','2021-04-09','Sarangan','Seluruh anggota UKM Bulutangkis','Dihadiri 1/2n + 1 anggota UKM Bulutangkis','Rendy Kharisma Aksmala',NULL,'belumTerlaksana','2021-04-09 13:10:40','2021-04-10 06:42:36');
insert  into `programkerja`(`idProgramKerja`,`UKM_idUKM`,`namaKegiatanProker`,`tujuanKegiatanProker`,`tanggalKegiatanProker`,`lokasiKegiatanProker`,`sasaranKegiatanProker`,`tuKegiatanProker`,`pjKegiatanProker`,`fotoKegiatanProker`,`keteranganKegiatanProker`,`created_at`,`updated_at`) values (24,2,'Musyawarah Besar','tes','2021-04-12','Kampus 1 PNM','Mhs PNM','tes','Rendy',NULL,'belumTerlaksana','2021-04-09 14:37:07','2021-04-09 14:37:07');

/*Table structure for table `ukm` */

CREATE TABLE `ukm` (
  `idUKM` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namaUKM` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idUKM`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ukm` */

insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (1,'Badan Eksekutif Mahasiswa','2021-04-09 02:53:00','2021-04-09 02:53:04');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (2,'Futsal','2021-04-09 02:54:28','2021-04-09 02:54:31');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (3,'Taekwondo','2021-04-09 02:56:20','2021-04-09 02:56:24');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (4,'Voli','2021-04-09 02:56:27','2021-04-09 02:56:30');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (5,'Bulutangkis','2021-04-09 02:56:34','2021-04-09 02:56:36');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (6,'IPSI','2021-04-09 02:56:40','2021-04-09 02:56:42');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (7,'Niknema','2021-04-09 02:56:45','2021-04-09 02:56:47');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (8,'Tari','2021-04-09 02:56:51','2021-04-09 02:56:53');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (9,'Stupa','2021-04-09 02:56:57','2021-04-09 02:57:00');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (10,'Cakra','2021-04-09 02:57:03','2021-04-09 02:57:06');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (11,'Kewirausahaan','2021-04-09 02:57:21','2021-04-09 02:57:23');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (12,'Resimen Mahasiswa','2021-04-09 02:57:26','2021-04-09 02:57:28');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (13,'Musican','2021-04-09 02:57:32','2021-04-09 02:57:34');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (14,'Paduan Suara','2021-04-09 02:57:37','2021-04-09 02:57:57');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (15,'Pers G-Plasma','2021-04-09 02:58:00','2021-04-09 02:58:02');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (16,'PALS','2021-04-09 02:58:05','2021-04-09 02:58:07');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (17,'Kerohanian Islam','2021-04-09 02:58:12','2021-04-09 02:58:14');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (18,'Basket','2021-04-09 02:58:17','2021-04-09 02:58:19');
insert  into `ukm`(`idUKM`,`namaUKM`,`created_at`,`updated_at`) values (19,'Pramuka',NULL,NULL);

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UKM_idUKM` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('BEM','UKM') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (1,1,'Badan Eksekutif Mahasiswa','adminbem','sekretariat.bempnm@gmail.com','$2y$10$Vb6HyWuPsXC.oYd3ANUEoekpynDmgCOaQfirwRmZhTpCFHD4T9Rfy','BEM','bem.png','ovSeEErEHBcbtAyeoh5Uqk5LEWwdGi7cWzcLPFABge6YIPLPqimRdf4OhlYU','2021-04-09 02:59:25','2021-04-09 02:59:27');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (2,2,'Futsal','adminfutsal','futsal@gmail.com','$2y$10$aw72YDH8PvslsnHiSFl.Ju.3xk5yk8E8HJSBYjjKv4J5JtYrBChZq','UKM','2.png',NULL,'2021-04-09 02:59:45','2021-04-09 11:18:35');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (3,3,'Taekwondo','admintaekwondo','taekwondo@gmail.com','$2y$10$D0VA1Txr6iC7ytXJgDvAA.tTSpMrqJAXyKGdO9X5nb5uxT5ke4uly','UKM','3.png',NULL,'2021-04-09 02:59:59','2021-04-10 07:00:50');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (4,4,'Voli','','','','UKM','4.png',NULL,'2021-04-09 03:00:12','2021-04-09 03:00:14');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (5,5,'Bulutangkis','adminbulutangkis','bulutangkis@gmail.com','$2y$10$n/bzCjrl3Zs5/eG/21y7qedlGO5ceGTgBxNRNF.XOrwRT7Zso367u','UKM','5.png','ZMAcr6dJlsOj0F4K8uCIWs6jrg3q7iZsSnZvmRpBBuPFPZhg5yQ9m39GsLNb','2021-04-09 03:00:26','2021-04-09 06:31:49');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (6,6,'IPSI','','','','UKM','6.png',NULL,'2021-04-09 03:00:38','2021-04-09 03:00:40');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (7,7,'Niknema','','','','UKM','7.png',NULL,'2021-04-09 03:00:56','2021-04-09 03:00:58');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (8,8,'Tari','','','','UKM','8.png',NULL,'2021-04-09 03:01:14','2021-04-09 03:01:16');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (9,9,'Stupa','','','','UKM','9.png',NULL,'2021-04-09 03:01:28','2021-04-09 03:01:30');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (10,10,'Cakra','','','','UKM','10.png',NULL,'2021-04-09 03:01:42','2021-04-09 03:01:44');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (11,11,'Kewirausahaan','','','','UKM','11.png',NULL,'2021-04-09 03:02:00','2021-04-09 03:02:02');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (12,12,'Resimen Mahasiswa','','','','UKM','12.png',NULL,'2021-04-09 03:02:17','2021-04-09 03:02:19');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (13,13,'Musican','','','','UKM','13.png',NULL,'2021-04-09 03:02:33','2021-04-09 03:02:35');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (14,14,'Paduan Suara','','','','UKM','14.png',NULL,'2021-04-09 03:02:50','2021-04-09 03:02:52');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (15,15,'Pers G-Plasma','','','','UKM','15.png',NULL,'2021-04-09 03:03:03','2021-04-09 03:03:05');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (16,16,'PALS','','','','UKM','16.png',NULL,'2021-04-09 03:03:15','2021-04-09 03:03:17');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (17,17,'Kerohanian Islam','','','','UKM','17.png',NULL,'2021-04-09 03:03:33','2021-04-09 03:03:35');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (18,18,'Basket','','','','BEM','18.png',NULL,'2021-04-09 03:03:44','2021-04-09 03:03:46');
insert  into `users`(`id`,`UKM_idUKM`,`name`,`username`,`email`,`password`,`status`,`foto`,`remember_token`,`created_at`,`updated_at`) values (19,19,'Pramuka','','','','UKM','19.png',NULL,'2021-04-09 03:04:30','2021-04-09 03:04:32');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
