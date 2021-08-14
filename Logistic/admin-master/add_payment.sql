-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 03:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_payment`
--

CREATE TABLE `add_payment` (
  `id` int(222) NOT NULL,
  `date` date NOT NULL,
  `car_num` varchar(222) DEFAULT NULL,
  `cat_name` varchar(255) NOT NULL,
  `dir_name` varchar(255) NOT NULL,
  `salary` int(222) NOT NULL,
  `data` varchar(222) NOT NULL,
  `notes` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_payment`
--

INSERT INTO `add_payment` (`id`, `date`, `car_num`, `cat_name`, `dir_name`, `salary`, `data`, `notes`) VALUES
(71, '2021-01-01', 'DH01', 'قطع غيار', 'عام', 750, 'عمل بويات في ورش الراس ورش الذيل', ''),
(72, '2021-01-01', 'DH01', 'مصنعيات', 'اصلاح كاوتش', 250, 'مصنعية ربيع كاوتش لفك الذيل', ''),
(73, '2021-01-01', 'DH01', 'قطع غيار', 'عام', 550, 'شراء أدوات كهرباء', ''),
(74, '2021-02-05', 'DH01', 'مصنعيات', 'ميكانيكا', 200, 'تظبيط الكاوتش بالكامل وعمل لجرشه للذيل', ''),
(75, '2021-02-20', 'DH01', 'قطع_غيار', 'فلاتر و زيوت', 1500, 'تغير زيت عدد 2 جركن', ''),
(76, '2021-02-20', 'DH01', 'قطع_غيار', 'فلاتر و زيوت', 225, 'تغير فلتر زيت وفلتر جاز', ''),
(77, '2021-02-05', 'DH01', 'قطع_غيار', 'عام', 200, 'تظبيط الكاوتش بالكامل وعمل لجرشه للذيل', ''),
(78, '2021-02-20', 'DH01', 'قطع_غيار', 'فلاتر و زيوت', 1500, 'تغير زيت عدد 2 جركن', ''),
(79, '2021-02-20', 'DH01', 'قطع_غيار', 'عام', 450, 'تغير فلتر زيت وفلتر جاز', ''),
(80, '2021-02-21', 'DH01', 'قطع_غيار', 'عام', 140, 'شراء 4 جراكن مياه مقطره', ''),
(81, '2021-02-20', 'DH01', 'قطع_غيار', 'عام', 400, 'شراء فرده كاوتش', ''),
(82, '2021-02-21', 'DH01', 'مصنعيات', 'ميكانيكا', 1000, 'اصلاح عطل دهب 1 تركيب عمود كرنك', ''),
(83, '2021-03-01', 'DH01', 'قطع_غيار', 'عام', 200, 'شراء فوط وصابون سائل وملمع تابلوه', ''),
(84, '2021-03-15', 'DH01', 'قطع_غيار', 'عام', 735, 'لمبه زئبق شوكه+دويل للفانوس الكبير الاصلى+لمبه ليد+فيشه كبيره بلكو+لمبه 5 وات +حزمه بلاستيك', ''),
(85, '2021-03-15', 'DH01', 'مصنعيات', 'كهرباء', 700, 'كشف على السياره بجهاز الكمبيوتر+توسيع الفيشه وتقسيم الكبل وإصلاح انوار وتغيير لمبات', ''),
(86, '2021-04-05', 'DH01', 'قطع_غيار', 'عام', 2, 'عدد 10 ورد جرنرو', ''),
(87, '2021-04-05', 'DH01', 'قطع_غيار', 'عام', 45, 'فلتر تكرير جاز مربع', ''),
(88, '2021-04-05', 'DH01', 'قطع_غيار', 'عام', 197, 'بستله شحم+وش خلفى للفوانيس عدد 4 مسمار 24+مسمار22+صاموله 22+ورده 22', ''),
(89, '2021-04-05', 'DH01', 'مصنعيات', 'اصلاح كاوتش', 600, 'مصنعية كاوتش عمل فردتين لحام امريكى', ''),
(90, '2021-04-05', 'DH01', 'مصنعيات', 'ميكانيكا', 200, 'مصنعية ميكانيكى تنظيف دوره المياه وتركيب كوبايه لفلتر الجاز وتغير فلتر الجاز وتزويد زيت', ''),
(91, '2021-04-05', 'DH01', 'قطع_غيار', 'عام', 500, 'إعطاء عم السيد لتركيب مساعدين وتنظيف العربيه بالكامل', ''),
(92, '2021-04-05', 'DH01', 'قطع_غيار', 'عام', 150, 'شراء كوباية بتاعت فلتر الجاز', ''),
(93, '2021-04-05', 'DH01', 'قطع_غيار', 'عام', 50, 'مسمار زحافه 30 سم', ''),
(94, '2021-04-09', 'DH01', 'قطع_غيار', 'عام', 50, 'شراء 1 معطر وعلبتين مناديل وملمع تابلوه', ''),
(95, '2021-04-09', 'DH01', 'قطع_غيار', 'عام', 20, 'شراء 4 جلد كاوتش للذيل', ''),
(96, '2021-04-16', 'DH01', 'قطع_غيار', 'عام', 4300, 'تغيير رداتير المياه', ''),
(97, '2021-04-29', 'DH01', 'قطع_غيار', 'فلاتر و زيوت', 1500, 'تغير زيت عدد 2 جركن', ''),
(98, '2021-04-29', 'DH01', 'قطع_غيار', 'فلاتر و زيوت', 225, 'تغير فلتر زيت وفلتر جاز', ''),
(99, '2021-05-20', 'DH01', 'مصنعيات', 'كهرباء', 450, 'كشف كمبيوتر+حل بلف الغيارات تنظيف وتشحيم', ''),
(100, '2021-06-26', 'DH01', 'مصنعيات', 'ميكانيكا', 570, 'عمل بلف ل 6 خط +تنظيف جهاز الدفرانس خراط', ''),
(101, '2021-06-26', 'DH01', 'مصنعيات', 'اصلاح كاوتش', 150, 'حل 6 فرد كاوتش +فردتين دفرانس', ''),
(102, '2021-06-27', 'DH01', 'قطع_غيار', 'عام', 850, 'شراء عدد اطقم اتيال', ''),
(103, '2021-06-29', 'DH01', 'قطع_غيار', 'عام', 850, 'شراء بلف امامى من اتكو', ''),
(104, '2021-06-29', 'DH01', 'قطع_غيار', 'عام', 100, 'فك مسمار وعمل خراطف في الجزء الامامى', ''),
(105, '2021-06-29', 'DH01', 'مصنعيات', 'ميكانيكا', 150, 'مصنعية ميكانيكى لتركيب البلف الامامى حل وتركيب', ''),
(106, '2021-06-29', 'DH01', 'مصنعيات', 'حدادة و عفشة', 150, 'ربط عفشه السياره', ''),
(107, '2021-07-03', 'DH01', 'قطع_غيار', 'عام', 910, 'فانوس بيضاوى+فنار فلاش +فانوس قمره+فانوس شبح+لمبه 5 وات+لمبه بول +وش فانوس امامى', ''),
(108, '2021-07-03', 'DH01', 'مصنعيات', 'كهرباء', 250, 'مصنعية كهرباء تركيب لمبات', ''),
(109, '2021-07-03', 'DH01', 'مصنعيات', 'ميكانيكا', 700, 'لحام خراط لبلى الدفرانس الامامى', ''),
(110, '2021-01-01', 'DH02', 'قطع_غيار', 'عام', 750, 'رش الذيل بأكمله', ''),
(111, '2021-01-01', 'DH02', 'قطع_غيار', 'عام', 125, 'شراء خراطيم لتنك الهواء', ''),
(112, '2021-01-01', 'DH02', 'مصنعيات', 'حدادة و عفشة', 1200, 'مصنعيه شريف الحداد لتركيب قرب وقواعد', ''),
(113, '2021-01-01', 'DH02', 'مصنعيات', 'اصلاح كاوتش', 250, 'مصنعية ربيع لفك كاوتش الرأس', ''),
(114, '2021-01-01', 'DH02', 'قطع_غيار', 'عام', 550, 'شراء أدوات كهرباء', ''),
(115, '2021-02-24', 'DH02', 'مصنعيات', 'اصلاح كاوتش', 240, 'عمل خرم في الكاوتش بتاع الراس وتزويد كاوتش العربه بالكامل', ''),
(116, '2021-02-24', 'DH02', 'قطع_غيار', 'عام', 485, 'شراء جاكمان بالراس', ''),
(117, '2021-01-17', 'DH02', 'مصنعيات', 'كهرباء', 250, 'عمل تتبع للعربيه gps', ''),
(118, '2021-01-31', 'DH02', 'مصنعيات', 'اصلاح كاوتش', 240, 'عمل خرم في الكاوتش بتاع الراس وتزويد كاوتش العربه بالكامل', ''),
(119, '2021-02-26', 'DH02', 'مصنعيات', 'ميكانيكا', 2500, 'تغير اتيال وخرط التنابير بتاعت الذيل', ''),
(120, '2021-02-26', 'DH02', 'مصنعيات', 'ميكانيكا', 700, 'مصنعية ميكانيكا', ''),
(121, '2021-03-01', 'DH02', 'قطع_غيار', 'فلاتر و زيوت', 1500, 'تغير زيت', ''),
(122, '2021-03-01', 'DH02', 'قطع_غيار', 'فلاتر و زيوت', 250, 'تغير فلتر سولار وفلتر جاز', ''),
(123, '2021-03-01', 'DH02', 'مصنعيات', 'اصلاح كاوتش', 200, 'تظبيط الكاوتش وعمل خرم بالقمره', ''),
(124, '2021-03-01', 'DH02', 'مصنعيات', 'كهرباء', 275, 'متر سلك 2 طرف+لمبه 2 بوال+اصلاح انوار فانوس+تغير سوسته', ''),
(125, '2021-03-01', 'DH02', 'قطع_غيار', 'عام', 1200, 'متر سلك 2 طرف+لمبه 2 بوال+اصلاح انوار فانوس+تغير سوسته', ''),
(126, '2021-03-01', 'DH02', 'قطع_غيار', 'عام', 265, 'شراء فانوس+شكرتون+لمبات+حزام بلاستيك', ''),
(127, '2021-03-20', 'DH02', 'قطع_غيار', 'عام', 2400, 'بلف 6 فط استعمال', ''),
(128, '2021-03-20', 'DH02', 'قطع_غيار', 'عام', 1000, 'طقم اصلاح بلف رباعى', ''),
(129, '2021-03-20', 'DH02', 'قطع_غيار', 'عام', 400, 'طقم شمبر للكمبروسر', ''),
(130, '2021-03-20', 'DH02', 'قطع_غيار', 'عام', 250, 'فلتر مكرر هواء', ''),
(131, '2021-03-20', 'DH02', 'قطع_غيار', 'عام', 50, 'جوان كومبروسر', ''),
(132, '2021-03-20', 'DH02', 'قطع_غيار', 'عام', 100, 'خرطوم للذيل اصلى', ''),
(133, '2021-03-20', 'DH02', 'مصنعيات', 'ميكانيكا', 1000, 'مصنعية ميكانيكا', ''),
(134, '2021-03-20', 'DH02', 'مصنعيات', 'كهرباء', 1000, 'مصنعية تنظيف بلف الرباعى مع تغييره+طقم الإصلاح والبرمجه', ''),
(135, '2021-03-19', 'DH02', 'مصنعيات', 'اصلاح كاوتش', 150, 'عمل خرم في الكاوتش بتاع الراس ', ''),
(136, '2021-03-22', 'DH02', 'قطع_غيار', 'عام', 1144, 'فيشه بالدكر+متر سلك+فيوز شوكه+حزمه بلاستيك+ترس مكنه+فلتر هواء+لوكر اصلى+خراطيم+كبسه17/14م', ''),
(137, '2021-03-22', 'DH02', 'مصنعيات', 'كهرباء', 900, 'مصنعية تركيب الفيشه+مع توسيع الخرام في الديل وتوصيل سلك المطبخ+اصلاح موتور الزجاج وإصلاح زرار الباب', ''),
(138, '2021-03-22', 'DH02', 'مصنعيات', 'ميكانيكا', 250, 'مصنعية ميكانيكى في تنظيف الخزانات وتقسيم الخراطيم', ''),
(139, '2021-04-09', 'DH02', 'قطع_غيار', 'عام', 50, 'شراء 1 معطر وعلبتين مناديل وملمع تابلوه', ''),
(140, '2021-04-09', 'DH02', 'مصنعيات', 'اصلاح كاوتش', 50, 'تظبيط الكاوتش', ''),
(141, '2021-04-09', 'DH02', 'قطع_غيار', 'عام', 1500, 'تغير زيت', ''),
(142, '2021-04-10', 'DH02', 'قطع_غيار', 'فلاتر و زيوت', 250, 'تغير فلتر سولار وفلتر جاز', ''),
(143, '2021-05-20', 'DH02', 'قطع_غيار', 'عام', 300, 'شراء خراطيم هواء+خرطوم هواء للذيل', ''),
(144, '2021-04-20', 'DH02', 'مصنعيات', 'كهرباء', 485, 'حل بلف الغيارات وتنظيفه وتركيبه+كشف بلف B.S+زرار واحد شده+كلبس ذكر+غطاء كلبس+مصنعية ضبط نور المطبخ', ''),
(145, '2021-01-01', 'DH03', 'قطع_غيار', 'عام', 300, 'احضار ونش للكاوتش الاستبن', ''),
(146, '2021-01-02', 'DH03', 'قطع_غيار', 'عام', 200, 'عدد علبة لمبات 5', ''),
(147, '2021-01-03', 'DH03', 'قطع_غيار', 'فلاتر و زيوت', 1500, 'تم تغيير عدد 2 جركن زيت', ''),
(148, '2021-01-04', 'DH03', 'قطع_غيار', 'فلاتر و زيوت', 225, 'تم تغيير عدد فلتر جاز وفلتر زيت', ''),
(149, '2021-01-05', 'DH03', 'قطع_غيار', 'عام', 45, 'تركيب فلتر تكرير', ''),
(150, '2021-01-06', 'DH03', 'مصنعيات', 'كهرباء', 300, 'مصنعية تظبيط القراب وتركيب لمبات كهرباء', ''),
(151, '2021-01-07', 'DH03', 'قطع_غيار', 'عام', 750, 'رش الذيل بأكمله', ''),
(152, '2021-03-01', 'DH03', 'مصنعيات', 'اصلاح كاوتش', 100, 'تغير عدد 2 كاوتش 22 في الرأس', ''),
(153, '2021-02-26', 'DH03', 'مصنعيات', 'اصلاح كاوتش', 100, 'تغير عدد 2 كاوتش 22 في الذيل', ''),
(154, '2021-03-01', 'DH03', 'مصنعيات', 'حدادة و عفشة', 530, 'ترصيص الكاوتش وظبط الزوايا', ''),
(155, '2021-03-01', 'DH03', 'مصنعيات', 'اصلاح كاوتش', 420, 'عمل لحام امريكى وتظبيط الكاوتش', ''),
(156, '2021-03-01', 'DH03', 'قطع_غيار', 'عام', 200, 'شراء فوط وصابون سائل وملمع تابلوه', ''),
(157, '2021-03-01', 'DH03', 'قطع_غيار', 'عام', 250, 'تم عمل تجربة سلوك ارينمو في الجرار وتغير فيوز + بلف ارب', ''),
(158, '2021-03-01', 'DH03', 'مصنعيات', 'كهرباء', 400, 'تغير وبرمجه بلف ارب بالجهز', ''),
(159, '2021-03-02', 'DH03', 'مصنعيات', 'كهرباء', 800, 'تم عمل تجربة سلوك ارينمو في الجرار وتغير فيوز + بلف ارب', ''),
(160, '2021-03-11', 'DH03', 'قطع_غيار', 'فلاتر و زيوت', 1500, 'تم تغير عدد 2 جركن زيت', ''),
(161, '2021-03-11', 'DH03', 'قطع_غيار', 'فلاتر و زيوت', 250, 'تم تغير عدد فلتر جاز وفلتر زيت', ''),
(162, '2021-03-24', 'DH03', 'قطع_غيار', 'عام', 3900, 'تم عمل سرفو فتيس', ''),
(163, '2021-03-20', 'DH03', 'قطع_غيار', 'عام', 1100, 'استرجاع رخص مسحوبة', ''),
(164, '2021-04-09', 'DH03', 'قطع_غيار', 'عام', 50, 'شراء 1 معطر وعلبتين مناديل وملمع تابلوه', ''),
(165, '2021-04-16', 'DH03', 'قطع_غيار', 'عام', 1200, 'تم تغير طقم اتيال خلفى وامامى', ''),
(166, '2021-04-16', 'DH03', 'مصنعيات', 'ميكانيكا', 250, 'مصنعية ميكانيكا لتغير الاتيال', ''),
(167, '2021-04-17', 'DH03', 'مصنعيات', 'اصلاح كاوتش', 250, 'فك 4 دوبل كاوتش لتركيب اتيال', ''),
(168, '2021-04-29', 'DH03', 'قطع_غيار', 'فلاتر و زيوت', 1500, 'تم تغير عدد 2 جركن زيت', ''),
(169, '2021-04-29', 'DH03', 'قطع_غيار', 'فلاتر و زيوت', 250, 'تم تغير عدد فلتر جاز وفلتر زيت', ''),
(170, '2021-04-29', 'DH03', 'مصنعيات', 'كهرباء', 1455, 'كشف كمبيوتر +مصنعية حل وتقفيل عمره 3 رشاشات +فونية رشاشات+جلبه رشاش+ضبط رشاش', ''),
(171, '2021-05-20', 'DH03', 'قطع_غيار', 'عام', 70, 'شراء لمبتين للفانوس الواطى', ''),
(172, '2021-06-12', 'DH03', 'قطع_غيار', 'فلاتر و زيوت', 1500, 'تم تغير عدد 2 جركن زيت', ''),
(173, '2021-06-12', 'DH03', 'قطع_غيار', 'عام', 250, 'تم تغير عدد فلتر جاز وفلتر زيت', ''),
(174, '2021-06-20', 'DH03', 'قطع_غيار', 'فلاتر و زيوت', 1600, 'تغير زيت عدد 2 جركن', ''),
(175, '2021-06-20', 'DH03', 'قطع_غيار', 'فلاتر و زيوت', 250, 'تم تغير عدد فلتر جاز وفلتر زيت', ''),
(176, '2021-06-25', 'DH03', 'قطع_غيار', 'عام', 8200, 'تم تغير اسكوانه دبرياج وبيل مارش +تغير رومان بلى وحل الماتور بأكمله', ''),
(177, '2021-06-25', 'DH03', 'مصنعيات', 'ميكانيكا', 1500, 'حل وتركيب الماتور واسطوانه الدبرياج وتركيب رومان بيلى', ''),
(178, '2021-05-29', 'DH03', 'مصنعيات', 'كهرباء', 300, 'كشف كمبيوتر +مصنعية حل وتركيب رشاشات', ''),
(179, '2021-06-29', 'DH03', 'قطع_غيار', 'عام', 1050, 'فونيه رشاشات +جلبه رشاشات', ''),
(180, '2021-06-29', 'DH03', 'مصنعيات', 'كهرباء', 105, 'ضبط رشاش', ''),
(181, '2021-06-28', 'DH03', 'مصنعيات', 'كهرباء', 135, 'كشف كمبيوتر +تكوين مفتاح اضافى', ''),
(182, '2021-01-01', 'DH04', 'قطع_غيار', 'عام', 7150, 'عمل عدد 2 قواعد وتركيب 2 قرب للحموله الزياده', ''),
(183, '2021-01-02', 'DH04', 'مصنعيات', 'كهرباء', 250, 'مصنعية تظبيط القراب وتركيب لمبات ', ''),
(184, '2021-01-03', 'DH04', 'قطع_غيار', 'عام', 550, 'احضار سرينه مرشيدير +أدوات كهرباء', ''),
(185, '2021-01-04', 'DH04', 'قطع_غيار', 'عام', 750, 'رش الذيل بأكمله', ''),
(186, '2021-01-05', 'DH04', 'قطع_غيار', 'عام', 125, 'شراء خراطيم لتنك الهواء', ''),
(187, '2021-01-06', 'DH04', 'مصنعيات', 'حدادة و عفشة', 1200, 'مصنعية شريف الحداد لتركيب قراب وقواعد', ''),
(188, '2021-01-07', 'DH04', 'مصنعيات', 'اصلاح كاوتش', 100, 'مصنعية ربيع لفك كاوتش الرأس', ''),
(189, '2021-01-08', 'DH04', 'قطع_غيار', 'فلاتر و زيوت', 1500, 'تغير زيت', ''),
(190, '2021-01-09', 'DH04', 'قطع_غيار', 'فلاتر و زيوت', 450, 'تغير فلتر زيت وفلتر جاز', ''),
(191, '2021-01-10', 'DH04', 'مصنعيات', 'ميكانيكا', 150, 'تغير فلتر تكرير', ''),
(192, '2021-01-17', 'DH04', 'مصنعيات', 'كهرباء', 250, 'عمل جهاز تتبع', ''),
(193, '2021-01-31', 'DH04', 'قطع_غيار', 'عام', 1650, 'شراء قراب', ''),
(194, '2021-01-31', 'DH04', 'مصنعيات', 'اصلاح كاوتش', 200, 'فك كاوتش الرأس', ''),
(195, '2021-01-25', 'DH04', 'مصنعيات', 'ميكانيكا', 1000, 'فك اتيال الذيل ومصنعية الميكانيكى', ''),
(196, '2021-01-30', 'DH04', 'قطع_غيار', 'عام', 1650, 'تركيب وشراء قرب', ''),
(197, '2021-01-30', 'DH04', 'مصنعيات', 'حدادة و عفشة', 150, 'مصنعية تركيب قرب', ''),
(198, '2021-02-05', 'DH04', 'مصنعيات', 'ميكانيكا', 200, 'تنظيف اجهزه الاتيال', ''),
(199, '2021-01-17', 'DH04', 'قطع_غيار', 'عام', 2500, 'عمل جهاز تتبع', ''),
(200, '2021-01-31', 'DH04', 'قطع_غيار', 'عام', 1650, 'شراء قراب', ''),
(201, '2021-01-31', 'DH04', 'مصنعيات', 'اصلاح كاوتش', 400, 'فك كاوتش الرأس +تنظيف اجهزه الفرامل', ''),
(202, '2021-01-25', 'DH04', 'مصنعيات', 'ميكانيكا', 200, 'فك اتيال الذيل للتنظيف', ''),
(203, '2021-01-27', 'DH04', 'مصنعيات', 'اصلاح كاوتش', 200, 'فك كاوتش الذيل', ''),
(204, '2021-01-30', 'DH04', 'قطع_غيار', 'عام', 1650, 'تركيب وشراء قرب', ''),
(205, '2021-01-30', 'DH04', 'مصنعيات', 'حدادة و عفشة', 150, 'مصنعية تركيب قرب حداد', ''),
(206, '2021-02-10', 'DH04', 'مصنعيات', 'اصلاح كاوتش', 200, 'تظبيط هواء للكاوتش دهب 4', ''),
(207, '2021-02-27', 'DH04', 'مصنعيات', 'حدادة و عفشة', 200, 'مصنعية حداد', ''),
(208, '2021-03-01', 'DH04', 'قطع_غيار', 'فلاتر و زيوت', 1500, 'تغير زيت', ''),
(209, '2021-03-01', 'DH04', 'قطع_غيار', 'فلاتر و زيوت', 450, 'تغير فلتر زيت وفلتر جاز', ''),
(210, '2021-03-01', 'DH04', '', '', 3740, 'مصنعية تغير مساعدين خلف الكابينه', ''),
(211, '2021-03-01', 'DH04', 'قطع_غيار', 'عام', 200, 'شراء فوط وصابون سائل وملمع تابلوه', ''),
(212, '2021-03-01', 'DH04', 'قطع_غيار', 'عام', 50, 'لكور هواء 24/7 اصلى', ''),
(213, '2021-03-20', 'DH04', 'قطع_غيار', 'عام', 50, 'متر خرطوم هواء 17 مم', ''),
(214, '2021-03-20', 'DH04', 'مصنعيات', 'كهرباء', 100, 'مصنعية توصيل الهواء', ''),
(215, '2021-03-20', 'DH04', 'قطع_غيار', 'عام', 40, 'حزمة بلاستيك', ''),
(216, '2021-03-20', 'DH04', 'قطع_غيار', 'عام', 30, 'دوبل واحد بوال', ''),
(217, '2021-03-20', 'DH04', 'قطع_غيار', 'عام', 7, 'لمبة 15 وات', ''),
(218, '2021-03-20', 'DH04', 'قطع_غيار', 'عام', 130, 'فنار فلاشر', ''),
(219, '2021-03-20', 'DH04', 'قطع_غيار', 'عام', 35, 'كابل 2 طرف 5', ''),
(220, '2021-03-20', 'DH04', 'قطع_غيار', 'عام', 20, 'كلبسات وغطيان مسامير', ''),
(221, '2021-03-20', 'DH04', 'قطع_غيار', 'عام', 250, 'مصنعية اصلاح الانوار وتوصيل السراين وتوكيب الثلات وتوصيل السريات + متغير فنار', ''),
(222, '2021-03-26', 'DH04', 'مصنعيات', 'اصلاح كاوتش', 350, 'فك عدد 9 دوبل الذيل والراس', ''),
(223, '2021-03-26', 'DH04', 'قطع_غيار', 'عام', 2120, 'شراء شحم ومزيل صدا وطقم تيل امامى وخلفى وتشحيم الذيل بالكامل', ''),
(224, '2021-03-26', 'DH04', 'مصنعيات', 'ميكانيكا', 2150, 'خرط وتشحيم الذيل بالكامل بالورشه', ''),
(225, '2021-03-26', 'DH04', 'مصنعيات', 'ميكانيكا', 1000, 'فك وتركيب طقم تيل امامى وخلفى وتشحيم الذيل بالكامل', ''),
(226, '2021-03-26', 'DH04', 'مصنعيات', 'اصلاح كاوتش', 500, 'تصليح فردتين كاوتش', ''),
(227, '2021-04-07', 'DH04', 'قطع_غيار', 'عام', 90, 'شراء مسدس هواء', ''),
(228, '2021-04-07', 'DH04', 'قطع_غيار', 'عام', 150, 'شراء فلتر تكرير جاز بكوبايه', ''),
(229, '2021-04-05', 'DH04', 'قطع_غيار', 'عام', 400, 'زنان مرشيدير +فلتر تكرير', ''),
(230, '2021-04-05', 'DH04', 'قطع_غيار', 'فلاتر و زيوت', 1500, 'تغير زيت', ''),
(231, '2021-04-05', 'DH04', 'قطع_غيار', 'فلاتر و زيوت', 450, 'تغير فلتر زيت وفلتر جاز', ''),
(232, '2021-04-05', 'DH04', 'مصنعيات', 'حدادة و عفشة', 50, 'تم عمل مسمار للبطاريه', ''),
(233, '2021-04-09', 'DH04', 'قطع_غيار', 'عام', 50, 'شراء 1 معطر وعلبتين مناديل وملمع تابلوه', ''),
(234, '2021-04-09', 'DH04', 'قطع_غيار', 'عام', 100, 'شراء عدد 2 فانوس نمره', ''),
(235, '2021-04-09', 'DH04', 'مصنعيات', 'اصلاح كاوتش', 200, 'فك وتصليح 4 دوبل كاوتش', ''),
(236, '2021-05-20', 'DH04', 'قطع_غيار', 'عام', 135, 'شراء غطاء بطاريه', ''),
(237, '2021-06-27', 'DH04', 'مصنعيات', 'ميكانيكا', 100, 'تنظيف الحساسات', ''),
(238, '2021-06-26', 'DH04', 'قطع_غيار', 'عام', 530, 'فانوس تمساح اصفر +فانوس اصفر+افيز+فانوس شبكه+فانوس فنار+2 طرف سلك+وش فانوس 7 لمبه+لمبه بول+لمبه h7+لمبة 1 بول 5 وات+لفت شكرتون', ''),
(239, '2021-06-26', 'DH04', 'مصنعيات', 'كهرباء', 250, 'مصنعية تتميم انوار+ تركيب الانوار', ''),
(240, '2021-07-03', 'DH04', 'مصنعيات', 'كهرباء', 1380, 'تركيب 3 جلب +نفر وكبس جلب الشداد+كشف كمبيوتر', ''),
(241, '2021-07-03', 'DH04', 'قطع_غيار', 'عام', 55, 'تركيب 2 لمبه صالون', ''),
(242, '2021-07-03', 'DH04', 'مصنعيات', 'كهرباء', 300, 'مصنعية حل وتركيب الشداد +تربيط العفشة الداخلية', ''),
(243, '2021-12-30', 'DH05', 'قطع_غيار', 'عام', 955, 'شراء أدوات ميكانيكا(سوسته+شحم ازرق+عمه هواء+مزيل صدا)', ''),
(244, '2021-01-02', 'DH05', 'مصنعيات', 'ميكانيكا', 450, 'تشحيم الذيل وتشحيم الراس وتضبيط أجهزة الفرامل وشراء شحم ومصنعية ميكانيكى', ''),
(245, '2021-01-02', 'DH05', 'مصنعيات', 'ميكانيكا', 2700, 'مصنعية تشحيم الذيل بالكامل', ''),
(246, '2021-01-02', 'DH05', 'قطع_غيار', 'فلاتر و زيوت', 450, 'تغير فلتر زيت وفلتر جاز', ''),
(247, '2021-01-02', 'DH05', 'قطع_غيار', 'فلاتر و زيوت', 1500, 'تغير زيت', ''),
(248, '2021-01-02', 'DH05', 'مصنعيات', 'اصلاح كاوتش', 200, 'فك كاوتش الذيل وكاوتش الراس مصنعية (ربيع كاوتش)', ''),
(249, '2021-01-02', 'DH05', 'قطع_غيار', 'عام', 2000, 'عمل جهاز gps', ''),
(250, '2021-01-25', 'DH05', 'قطع_غيار', 'عام', 2000, 'عمل مستلكات ذيل وراس', ''),
(251, '2021-01-30', 'DH05', 'قطع_غيار', 'عام', 1700, 'عمل بويات الراس والذيل', ''),
(252, '2021-01-25', 'DH05', 'قطع_غيار', 'عام', 100, 'وصله للبطاريه', ''),
(253, '2021-02-09', 'DH05', 'قطع_غيار', 'عام', 3900, 'شراء أدوات كهرباء', ''),
(254, '2021-02-09', 'DH05', 'قطع_غيار', 'عام', 600, 'مصاريف تراخيص عم السيد دهب 5', ''),
(255, '2021-02-20', 'DH05', 'قطع_غيار', 'عام', 520, 'شراء قطع غيار ميكانيكا فلتر تكرير مسمار وخراطيم', ''),
(256, '2021-02-20', 'DH05', 'مصنعيات', 'ميكانيكا', 300, 'مصنعية ميكانيكا', ''),
(257, '2021-02-21', 'DH05', 'مصنعيات', 'كهرباء', 200, 'مصنعية كهرباء تركيب فيوزات', ''),
(258, '2021-02-21', 'DH05', 'قطع_غيار', 'عام', 2700, 'تركيب ثلاجه ومطبخ ودولاب', ''),
(259, '2021-02-22', 'DH05', 'قطع_غيار', 'عام', 2500, 'تركيب gps', ''),
(260, '2021-02-23', 'DH05', 'قطع_غيار', 'عام', 3955, 'عده وجنازير', ''),
(261, '2021-02-24', 'DH05', 'مصنعيات', 'كهرباء', 1000, 'ضبط زوايا +ضبط كمبيوتر', ''),
(262, '2021-02-24', 'DH05', 'قطع_غيار', 'عام', 3050, 'عمل سروجى للراس بالكامل', ''),
(263, '2021-02-26', 'DH05', 'قطع_غيار', 'عام', 180, 'شراء برميل مياه', ''),
(264, '2021-02-27', 'DH05', 'قطع_غيار', 'عام', 120, 'شراء 8 متر جنزير', ''),
(265, '2021-03-01', 'DH05', 'سولار', 'سولار', 500, 'ضبط زوايا +ضبط كمبيوتر', ''),
(266, '2021-03-01', 'DH05', 'قطع_غيار', 'عام', 200, 'شراء فوط وصابون سائل وملمع تابلوه', ''),
(267, '2021-03-01', 'DH05', 'قطع_غيار', 'عام', 150, 'طقم شربون وموتور زجاج وطقم سوست اصلاح ماتور زجاج +تركيب فيشه الذيل', ''),
(268, '2021-03-01', 'DH05', 'سولار', 'سولار', 350, 'تركيب بلف للذيل', ''),
(269, '2021-03-24', 'DH05', 'قطع_غيار', 'فلاتر و زيوت', 1500, 'تغير زيت عدد 2 جركن', ''),
(270, '2021-03-24', 'DH05', 'قطع_غيار', 'فلاتر و زيوت', 450, 'تغير فلتر زيت وفلتر جاز', ''),
(271, '2021-03-24', 'DH05', 'مصنعيات', 'اصلاح كاوتش', 50, 'تزويد الكاوتش', ''),
(272, '2021-03-24', 'DH05', 'قطع_غيار', 'عام', 60, 'شراء كلبسات', ''),
(273, '2021-03-27', 'DH05', 'قطع_غيار', 'عام', 320, 'عمل مستلكات بالباب والزجاج', ''),
(274, '2021-04-24', 'DH05', 'قطع_غيار', 'عام', 50, 'شراء 1 معطر وعلبتين مناديل وملمع تابلوه', ''),
(275, '2021-04-23', 'DH05', 'سولار', 'سولار', 50, 'تركيب كلمة دهب', ''),
(276, '2021-04-24', 'DH05', 'قطع_غيار', 'عام', 130, 'تشحيم الذيل بالكامل', ''),
(277, '2021-05-15', 'DH05', 'قطع_غيار', 'عام', 1500, 'تغير زيت عدد 2 جركن', ''),
(278, '2021-05-15', 'DH05', 'قطع_غيار', 'فلاتر و زيوت', 450, 'تغير فلتر زيت وفلتر جاز', ''),
(279, '2021-05-28', 'DH05', 'سولار', 'سولار', 130, 'تركيب لمبه 15 وات +وش فانوس خلفى', ''),
(280, '2021-05-28', 'DH05', 'مصنعيات', 'كهرباء', 50, 'مصنعية تتميم انوار', ''),
(281, '2021-06-20', 'DH05', 'قطع_غيار', 'فلاتر و زيوت', 1600, 'تغير زيت عدد 2 جركن', ''),
(282, '2021-06-20', 'DH05', 'قطع_غيار', 'فلاتر و زيوت', 300, 'تغير فلتر زيت وفلتر جاز', ''),
(283, '2021-06-21', 'DH05', 'مصنعيات', 'كهرباء', 1400, 'انبوبه ضغط فريون+شحن فريون+حل مشكله في السبرتينه', ''),
(284, '2021-06-20', 'DH05', 'مصنعيات', 'كهرباء', 450, 'تركيب فلاتر وتغير زيت وتنظيف فلتر الجاز', ''),
(285, '2021-05-28', 'DH05', 'قطع_غيار', 'عام', 130, 'لمبة 15 وات+وش فانوس', ''),
(286, '2021-05-28', 'DH05', 'مصنعيات', 'كهرباء', 50, 'مصنعية تميم انوار', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_payment`
--
ALTER TABLE `add_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_payment`
--
ALTER TABLE `add_payment`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
