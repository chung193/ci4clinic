-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 01:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `text_main` varchar(255) NOT NULL,
  `text_sub` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `location` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_id`, `title`, `slug`) VALUES
(1, 0, 'Tin tức', 'tin-tuc'),
(2, 1, 'Tin khuyến mại', 'tin-khuyen-mai'),
(3, 1, 'Tin tuyển dụng', 'tin-tuyen-dung'),
(4, 1, 'Tin truyền thông', 'tin-truyen-thong'),
(5, 1, 'Chuyện của những đôi mắt khỏe', 'chuyen-cua-nhung-doi-mat-khoe'),
(6, 0, 'Dịch vụ', 'dich-vu'),
(7, 6, 'Khám mắt', 'kham-mat'),
(8, 6, 'Điều trị tật khúc xạ', 'dieu-tri-tat-khuc-xa'),
(9, 6, 'Phẫu thuật khúc xạ', 'phau-thuat-khuc-xa'),
(10, 6, 'Phẫu thuật ghép giác mạc', 'phau-thuat-ghep-giac-mac'),
(11, 6, 'Tạo hình thẩm mỹ', 'tao-hinh-tham-my');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `logo`, `address`, `phone`, `email`, `favicon`) VALUES
(1, 'Phòng khám bác sĩ Chính', 'logo.png', '12 Lạch Tray, Hải Phòng', '0123456789', 'bschinh@gmail.com', 'favicon.png');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`, `value`) VALUES
(1, 'mail_protocol', 'smtp'),
(2, 'mail_SMTPHost', 'host07.emailserver.vn'),
(3, 'mail_SMTPPort', '465'),
(4, 'mail_SMTPCrypto', 'ssl'),
(5, 'site_status', '0'),
(6, 'site_title', 'Phòng khám bác sĩ Chính'),
(7, 'site_metatitle', 'Phòng khám bác sĩ Chính'),
(8, 'site_description', 'Phòng khám bác sĩ Chính'),
(9, 'mail_user', 'sale@macstorehaiphong.com'),
(10, 'mail_password', 'chung193a@'),
(11, 'site_mail', 'sale@phongkhambschinh.com');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `publishat` datetime NOT NULL,
  `createdat` datetime NOT NULL,
  `updateat` datetime NOT NULL,
  `content` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `authorid`, `cat_id`, `title`, `description`, `slug`, `published`, `publishat`, `createdat`, `updateat`, `content`, `img`) VALUES
(1, 1, 1, 'Giới thiệu chung', 'Giới thiệu chung', 'gioi-thieu-chung', 1, '2022-11-14 12:11:15', '2022-11-14 12:11:15', '2022-11-14 12:11:15', '<p>Giới thiệu chung</p>\r\n', ''),
(2, 1, 1, 'Hệ thống bệnh viện', 'Hệ thống bệnh viện', 'he-thong-benh-vien', 1, '2022-11-14 12:11:18', '2022-11-14 12:11:18', '2022-11-14 12:11:18', '<p>Hệ thống bệnh viện</p>\r\n', ''),
(3, 1, 1, 'Đội ngũ bác sĩ', 'Đội ngũ bác sĩ', 'doi-ngu-bac-si', 1, '2022-11-14 12:11:30', '2022-11-14 12:11:30', '2022-11-14 12:11:30', '<p>Đội ngũ bác sĩ</p>\r\n', ''),
(4, 1, 1, 'Trang thiết bị', 'Trang thiết bị', 'trang-thiet-bi', 1, '2022-11-14 12:11:26', '2022-11-14 12:11:26', '2022-11-14 12:11:26', '<p>Trang thiết bị</p>\r\n', ''),
(5, 1, 1, 'Thư viện hình ảnh & video', 'Thư viện hình ảnh & video', 'thu-vien-hinh-anh-video', 1, '2022-11-14 12:11:22', '2022-11-14 12:11:22', '2022-11-14 12:11:22', '<p>Thư viện hình ảnh &amp; video</p>\r\n', ''),
(6, 1, 1, 'Chính sách và quyền riêng tư', 'Chính sách và quyền riêng tư', 'chinh-sach-va-quyen-rieng-tu', 1, '2022-11-14 12:11:11', '2022-11-14 12:11:11', '2022-11-14 12:11:11', '<p>Chính sách và quyền riêng tư</p>\r\n', ''),
(7, 1, 3, 'Khám mắt', 'Khám mắt', 'kham-mat', 1, '2022-11-14 17:41:51', '2022-11-14 17:41:51', '2022-11-14 17:41:51', '<p>Khám mắt</p>\r\n', '9002_zzlx.jpg'),
(8, 1, 3, 'Điều trị tật khúc xạ', 'Điều trị tật khúc xạ', 'dieu-tri-tat-khuc-xa', 1, '2022-11-14 17:48:42', '2022-11-14 17:48:42', '2022-11-14 17:48:42', '<p>Điều trị tật khúc xạ</p>\r\n', 'Thu-Tuc-Dieu-Kien-Mo-Phong-Kham-Phau-Thuat-Tham-My-2021.jpg'),
(9, 1, 3, 'Phẫu thuật khúc xạ', 'Phẫu thuật khúc xạ', 'phau-thuat-khuc-xa', 1, '2022-11-14 17:49:32', '2022-11-14 17:49:32', '2022-11-14 17:49:32', '<p>Phẫu thuật khúc xạ</p>\r\n', 'KEO_5821-1.jpg'),
(10, 1, 3, 'Phẫu thuật ghép giác mạc', 'Phẫu thuật ghép giác mạc', 'phau-thuat-ghep-giac-mac', 1, '2022-11-14 17:49:59', '2022-11-14 17:49:59', '2022-11-14 17:49:59', '<p>Phẫu thuật ghép giác mạc</p>\r\n', 'bac-si-chuyen-nganh-thiet-bi-noi-soi-hien-dai-1-1024x683.jpeg'),
(11, 1, 3, 'Tạo hình thẩm mỹ', 'Tạo hình thẩm mỹ', 'tao-hinh-tham-my', 1, '2022-11-14 17:50:15', '2022-11-14 17:50:15', '2022-11-14 17:50:15', '<p>Tạo hình thẩm mỹ</p>\r\n', 'benh_vien_K_co_so_Phan_CHu_Trinh_1_.jpg'),
(12, 1, 3, 'Phẫu thuật ghép giác mạc', 'Phẫu thuật ghép giác mạc', 'phau-thuat-ghep-giac-mac-1', 1, '2022-11-14 17:55:11', '2022-11-14 17:55:11', '2022-11-14 17:55:11', '<p>Phẫu thuật ghép giác mạc</p>\r\n', '9002_zzlx_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pagecat`
--

CREATE TABLE `pagecat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pagecat`
--

INSERT INTO `pagecat` (`id`, `name`) VALUES
(1, 'Về chúng tôi'),
(2, 'Hướng dẫn khách hàng'),
(3, 'Dịch vụ');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `parentid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `publishat` datetime NOT NULL,
  `createdat` datetime NOT NULL,
  `updateat` datetime NOT NULL,
  `content` text NOT NULL,
  `trash` int(11) NOT NULL,
  `img` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `authorid`, `parentid`, `title`, `description`, `slug`, `published`, `publishat`, `createdat`, `updateat`, `content`, `trash`, `img`) VALUES
(1, 1, 5, 'Mặt đồng hồ Apple bị trầy thì có nên đi đánh bóng không anh em?', '', 'mat-dong-ho-apple-bi-tray-thi-co-nen-di-danh-bong-khong-anh-em-', 1, '2022-11-14 10:35:10', '2022-11-14 10:35:10', '2022-11-14 10:35:10', '<article class=\"jsx-2265512871 content\"><div class=\"jsx-1755978857 tinhtefact-container\"><div style=\"background-image:linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,1)), url(https://photo2.tinhte.vn/data/attachment-files/2022/11/6205244_Apple_Watch-1.jpg)\" class=\"jsx-1755978857 fact-background\"></div><div class=\"jsx-1755978857 imgContainer\"><div href=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6205244_Apple_Watch-1.jpg\" role=\"button\" class=\"jsx-1755978857 imgWrapper\"><div class=\"jsx-1755978857 fact-image\"><img src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6205244_Apple_Watch-1.jpg\" alt=\"Mặt đồng hồ Apple bị trầy thì có nên đi đánh bóng không anh em?\" class=\"jsx-1755978857 img\"/></div></div><div class=\"jsx-1755978857 body\"><div><div class=\"jsx-1268062893 xfBodyContainer\"><div data-author=\"\" class=\"jsx-1268062893 xfBody  highlightLinkOnDarkBackground\"><span class=\"xf-body-paragraph\">Mặt đồng hồ Apple bị dính bẩn, trày thì có nên đi đánh bóng không anh em?<br />  <br /> Cái Apple Watch S5 Ceramic của mình bị sước và dính bẩn mà những lau chùng bình thường mình làm nó không đi được. Sử dụng hàng ngày cũng ít nhìn thấy nó, nhưng trong vài tình huống khi màn hình tối và góc ánh sáng chiếu vào như mình cố chụp hình cho anh em thì thấy được.<br />  <br /> - Mình định hỏi anh em sử dụng đồng hồ là liệu có nên mang nó đi đánh bóng hay không?<br />  <br /> - Đánh bóng có giải quyết được các vết đó không?<br />  <br /> - Đánh bóng xong về sau nó có dễ trày hơn không?<br />  <br /> Cám ơn anh em</span></div></div></div></div></div></div></article>', 0, '6205244_Apple_Watch-1.jpg'),
(2, 1, 1, 'Những lợi ích của DCIM đối với người quản lý Trung tâm dữ liệu là gì?...', '', 'nhung-loi-ich-cua-dcim-doi-voi-nguoi-quan-ly-trung-tam-du-lieu-la-gi--1', 1, '2022-11-14 10:37:11', '2022-11-14 10:35:18', '2022-11-14 10:37:11', '<div>\r\n<div>&nbsp;</div>\r\n\r\n<div>\r\n<div href=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6205912_8ab0831bf7a5a63a53021717ce8aca87.png\" role=\"button\">\r\n<div><img alt=\"Những lợi ích của DCIM đối với người quản lý Trung tâm dữ liệu là gì?...\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6205912_8ab0831bf7a5a63a53021717ce8aca87.png\" /></div>\r\n</div>\r\n\r\n<div>\r\n<div>\r\n<div>\r\n<div><!--<link rel=\"stylesheet\" href=\"https://tinhte.vn/css.php?css=bdlinkexpander&style=85&dir=LTR&d=1668058344\" />-->Những lợi ích của DCIM đối với người quản lý Trung tâm dữ liệu là gì? <a href=\"https://tinhte.vn/thread/nhung-loi-ich-cua-dcim-doi-voi-nguoi-quan-ly-trung-tam-du-lieu-la-gi.3519231/\">https://tinhte.vn/thread/nhung-loi-ich-cua-dcim-doi-voi-nguoi-quan-ly-trung-tam-du-lieu-la-gi.3519231/</a><!-- bdLinkExpander (url,1,czoxNDk6ImE6Mjp7czozOiJ1cmwiO3M6MTAyOiJodHRwczovL3Rpbmh0ZS52bi90aHJlYWQvbmh1bmctbG9pLWljaC1jdWEtZGNpbS1kb2ktdm9pLW5ndW9pLXF1YW4tbHktdHJ1bmctdGFtLWR1LWxpZXUtbGEtZ2kuMzUxOTIzMS8iO3M6NDoidHlwZSI7czo0OiJsaW5rIjt9Ijs=) --> <a href=\"https://tinhte.vn/thread/nhung-loi-ich-cua-dcim-doi-voi-nguoi-quan-ly-trung-tam-du-lieu-la-gi.3519231/\"> </a>\r\n\r\n<div>\r\n<div><a href=\"https://tinhte.vn/thread/nhung-loi-ich-cua-dcim-doi-voi-nguoi-quan-ly-trung-tam-du-lieu-la-gi.3519231/\"><img src=\"https://imgproxy.k7.tinhte.vn/eGsK3HS3S113MXdkvWmdKCzQWep--VfmFwfjdn-j5u0/rs:fill:120:120:0/plain/https://photo2.tinhte.vn/data/attachment-files/2022/05/5989600_1.png\" style=\"height:120px; width:120px\" /> </a></div>\r\n\r\n<div>\r\n<p><a href=\"https://tinhte.vn/thread/nhung-loi-ich-cua-dcim-doi-voi-nguoi-quan-ly-trung-tam-du-lieu-la-gi.3519231/\">Những lợi ích của DCIM đối với người quản lý Trung tâm dữ liệu là gì?</a></p>\r\n\r\n<div><a href=\"https://tinhte.vn/thread/nhung-loi-ich-cua-dcim-doi-voi-nguoi-quan-ly-trung-tam-du-lieu-la-gi.3519231/\">Vì DCIM thu hẹp khoảng cách giữa CNTT và quản lý cơ sở, một giải pháp DCIM lý tưởng cho phép ra quyết định thông minh hơn và hiệu quả được tối ưu hóa bằng cách sử dụng các công nghệ đã được chứng minh. Dưới đây là một số ví dụ cụ thể về phần mềm&hellip;</a></div>\r\n\r\n<div><a href=\"https://tinhte.vn/thread/nhung-loi-ich-cua-dcim-doi-voi-nguoi-quan-ly-trung-tam-du-lieu-la-gi.3519231/\">tinhte.vn </a></div>\r\n</div>\r\n</div>\r\n<a href=\"https://tinhte.vn/thread/nhung-loi-ich-cua-dcim-doi-voi-nguoi-quan-ly-trung-tam-du-lieu-la-gi.3519231/\"> </a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 0, '6205912_8ab0831bf7a5a63a53021717ce8aca87.png'),
(3, 1, 1, 'Metaverse Decentraland? Hơn tỷ đô đổ vào phát triển nhưng có lúc chỉ có 38 người hoạt động', '', 'metaverse-decentraland-hon-ty-do-do-vao-phat-trien-nhung-co-luc-chi-co-38-nguoi-hoat-dong-1', 1, '2022-11-14 10:37:02', '2022-11-14 10:35:23', '2022-11-14 10:37:02', '<div>\r\n<div>\r\n<div>\r\n<div><!--<link rel=\"stylesheet\" href=\"https://tinhte.vn/css.php?css=bdlinkexpander&style=85&dir=LTR&d=1668058344\" /><script src=\"https://tinhte.vn/js/bdLinkExpander/script.min.js?_v=084e41cb\"></script>-->Không chỉ có <a href=\"https://tinhte.vn/tag/meta\">Meta</a> đổ hàng núi tiền vào giấc mơ <a href=\"https://tinhte.vn/tag/metaverse\">Metaverse</a> mà còn có 1 số hãng nữa cũng đang chi cả tỷ đô vào nền tảng này. Một trong số đó là <a href=\"https://tinhte.vn/tag/decentraland\">Decentraland</a> được phát triển từ 2015 với mục đích mua bán đất trên đó bằng <a href=\"https://tinhte.vn/tag/tien-ao\">tiền ảo</a> và <a href=\"https://tinhte.vn/tag/nft\">NFT</a> các thể loại. Tuy nhiên kết quả có vẻ không khả thi bởi theo công ty phân tích số liệu DappRadar thì có thời điểm chỉ có 38 người dùng hoạt động trong 1 ngày, siêu thấp nếu so với khoảng tiền đầu tư hơn 1,2 tỷ đô được đổ vào đây.<br />\r\n<br />\r\nPhía bên nhà phát triển Decentraland đã phản hồi lại sau khi nhận được tin này. Họ đưa lý do là DappRadar đã không dò theo số người dùng mà chỉ dò theo số người có tương tác với hệ thống. Đáng lẽ họ phải dò theo số người đăng nhập và chat với bạn bè thì mới đúng. Nếu tính theo số này thì mỗi ngày hệ thống có trung bình 8 nghìn người hoạt động. Tuy nhiên kể cả con số 8 nghìn người cũng không phải là cái gì quá hoành tráng nếu tính số tiền đổ ra. Và nếu tính theo số lần giao dịch thì còn đáng xấu hổ bởi từng đó lượt người chỉ có 38 giao dịch trong 1 ngày.<br />\r\n<br />\r\n<a href=\"https://twitter.com/decentraland/status/1578454103692546048?s=20&amp;t=kLZdqj-AKlla5kt3liXsKg\" target=\"_blank\">https://twitter.com/decentraland/status/1578454103692546048?s=20&amp;t=kLZdqj-AKlla5kt3liXsKg</a><!-- bdLinkExpander (url,1,czoxMzU6ImE6Mjp7czozOiJ1cmwiO3M6ODk6Imh0dHBzOi8vdHdpdHRlci5jb20vZGVjZW50cmFsYW5kL3N0YXR1cy8xNTc4NDU0MTAzNjkyNTQ2MDQ4P3M9MjAmdD1rTFpkcWotQUtsbGE1a3QzbGlYc0tnIjtzOjQ6InR5cGUiO3M6NDoibGluayI7fSI7) -->\r\n<div>\r\n<blockquote>\r\n<p>Let&#39;s have a look at some of September&#39;s data:<br />\r\n<br />\r\n56,697 MAU<br />\r\n1,074 Users interacting with smart contracts<br />\r\n1,732 minted Emotes<br />\r\n6,315 sold Wearables<br />\r\n300 Creators received royalties<br />\r\n161 created Community Events<br />\r\n148 DAO Proposals</p>\r\n&mdash; Decentraland (@decentraland) <a href=\"https://twitter.com/decentraland/status/1578454103692546048?ref_src=twsrc%5Etfw\">October 7, 2022</a></blockquote>\r\n</div>\r\n<br />\r\n<br />\r\nDecentraland còn cố vớt vát bằng cách chia sẻ chỉ trong tháng 9 họ có thêm hơn 1 nghìn người dùng có tương tác bằng các hợp đồng này nọ. Nhưng điều này không thể khỏa lấp được sự thật là Metaverse của Decentraland nói riêng và nói rộng ra là toàn bộ các dạng metaverse khác có vẻ không là thứ khiến người ta hứng thú nữa.<br />\r\n<br />\r\n<strong>Tham khảo </strong><a href=\"https://futurism.com/the-byte/metaverse-decentraland-report-active-users?fbclid=IwAR1rG7HKIB-O02yF7hK5ZoNXhpWwwoyEWRxPNrb1HlkPBur5qmBDXWzBqsc\" target=\"_blank\"><strong>Futurism</strong></a></div>\r\n</div>\r\n</div>\r\n</div>\r\n', 0, 'default.jpg'),
(4, 1, 1, 'Review Cục gạch như Nokia chạy Android 11,Tiktok+Facebook+Chơi Game, Qin F21S Pro', '', 'review-cuc-gach-nhu-nokia-chay-android-11-tiktok-facebook-choi-game-qin-f21s-pro-1', 1, '2022-11-14 10:37:19', '2022-11-14 10:35:49', '2022-11-14 10:37:19', '<div>\r\n<div>\r\n<div>\r\n<div><!--<link rel=\"stylesheet\" href=\"https://tinhte.vn/css.php?css=bdimage&style=85&dir=LTR&d=1668058344\" />-->Đây là <a href=\"https://tinhte.vn/tag/review\">review</a> về Cục gạch như <a href=\"https://tinhte.vn/tag/nokia\">Nokia</a> chạy <a href=\"https://tinhte.vn/tag/android\">Android</a> 11,Tiktok+Facebook+Chơi Game, Qin F21S Pro của mình.Mình mua nó với giá 2tr6. Hi vọng phần review sẽ hữu ích cho bạn nào muốn mua nhé, nếu bạn có câu hỏi gì thì hãy comment vô bài này nha.<br />\r\n&nbsp;\r\n<h2><strong>Thông tin chung về Cục gạch như Nokia chạy Android 11,Tiktok+Facebook+Chơi Game, Qin F21S Pro:</strong></h2>\r\n<br />\r\nXin chào anh em, sau một năm sử dụng con cục gạch thần thánh này, hôm nay muốn chia sẻ ae ít cảm nhận về nó trong quá trình sử dụng: &quot;Qin AI Life F21S Pro từ Xiaomi&quot;<br />\r\n<br />\r\nThực sự lời đầu tiên phải nói, đây là một con điện thoại cục gạch tốt nhất trong tầm giá. Ban đầu mua chỉ để chống chế đi làm, tại công ty mình chỉ cho dùng basic phone. Nên mình đã lùng sục cả tháng trời để tìm 1 con điện thoại lên đc facebook, zalo, mà chạy 4G. Rồi tìm thấy con này còn hơn cả kỳ vọng, với ngoại hình không khác gì những con Nokia hoài niệm, em nó đã dễ dàng vượt qua vòng kiểm duyệt của công ty<br />\r\nNHƯNG ẩn sâu bên trong là hệ điều hành Android 11, với Ram 4Gb, Rom 64 Gb, được trang bị con chip xử lý là Media Tek A22. Không chỉ là lướt web, xem phim mà còn chơi game nhẹ mượt luôn. Nhưng mà nhu cầu của mình chỉ để liên hệ. Nên em này chủ yếu dùng để check tin nhắn facebook, zalo, insta, wechat... gọi video call và giải trí cơ bản. Với body nhỏ gọn như này thì máy chạy siêu mượt, mình chưa thấy giật lác bao giờ. Cộng thêm cục pin 2150 mAh thì 2 ngày mình mới sạc 1 lần, nếu dùng ít thì 3, 4 ngày.<br />\r\nEm này thì mình mua giá 2tr2 trên Aliexpress, ship mất 1 tháng, qua hải quan mất thêm 300k thuế phí. Nếu mua qua trung gian thì ko mất mà mình lười nên tự book luôn. Cảm giác hồi hộp chờ thông quan hải quan như chờ vợ đẻ ae ạ ship có 5 ngày mà thông quan 3 tuần lận.</div>\r\n\r\n<div>\r\n<p>Quảng cáo</p>\r\n\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div>\r\n<div><br />\r\nMáy đến từ nhà Xiaomi nên được trau chuốt khá tỉ mỉ, ngay từ hộp đựng cho mình cảm giác đang đập hộp 1 sản phẩm iphone vây phụ kiện đi kèm trừ tai nghe thì không thiếu 1 cái gì luôn. Một bộ sạc, 1 ốp lưng trong, 1 ốp lưng đen, que chọc sim, miếng dán kính mềm, miếng dán kính cứng, 2 tấm lau màn dán kính. Nói chung là khá ưng<br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204890_image.jpg\" /><br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204975_image.jpg\" /><br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204977_image.jpg\" /><br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204978_image.jpg\" /><br />\r\n<br />\r\n&nbsp;\r\n<h2><strong>Thiết kế, ngoại hình</strong></h2>\r\n<br />\r\n● Về ngoại hình thì em này siêu nhỏ gọn, màn hình 2.8 inch, bàn phím T9.<br />\r\n<br />\r\n● Cầm nắm thao tác khá dễ dàng, không phải sử dụng 2 tay như 1 số smartphone màn to. Dễ dàng bỏ túi, rút ra bấm phím call là nghe điện thoại trong tích tắc. Có thể cài các phím tắt tới camera, âm lượng,... bằng cách ấn giữ phím được cài. Khá là tiện lợi.</div>\r\n\r\n<div>\r\n<p>Quảng cáo</p>\r\n\r\n<div>\r\n<div>\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div>\r\n<div><br />\r\n● Vỏ bằng nhựa nhám cầm cho cảm giác chắc tay ko bị tuột, pin liền nên thiết kế nguyên khối khá cứng cáp không thấy các khe hở lắp ráp.<br />\r\n<br />\r\n● Máy trang bị 1 cổng USB Type C, tiện lợi cho việc dùng chung sạc và kết nối dữ liệu.<br />\r\n<br />\r\n● Máy chỉ có 1 loa trước, đúng nhu cầu nghe gọi như mình.<br />\r\n<br />\r\n● Máy 1 sim và không có thẻ nhớ, có 2 bản Rom 32 Gb và 64 Gb, mình mua 64 cho thoải mái<br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204886_image.jpg\" /><br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204888_image.jpg\" /></div>\r\n\r\n<div>\r\n<p>Quảng cáo</p>\r\n\r\n<div>\r\n<div>\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div>\r\n<div>&nbsp;\r\n<h2><strong>Màn hình</strong></h2>\r\n<br />\r\n● Màn hình khá sắc nét, mình thấy khá tương đồng với màu sắc con samsung A71 mình đang dùng. Độ sáng ở mức đủ dùng, ra ngoài nắng nhìn vẫn khá tốt. Buổi tối thì có chế độ đêm chống ánh sáng xanh như các điện thoại Android khác.<br />\r\n<br />\r\n● Điểm nhấn đáng đồng tiền bát gạo là màn hình cảm ứng, thực sự rất tiện lợi khi sử dụng các app android, nếu chỉ có bàn phím T9 thì thao tác trượt, cuộn trang, bấm rất khó khăn. Cảm ứng khá ok nha ae, mình hay nhắn tin bằng bàn phím ảo thấy việc bố trí ký tự và phản hồi cảm ứng khá mượt, nhanh và chính xác.<br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204891_image.jpg\" /><br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204892_image.jpg\" /><br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204893_image.jpg\" /><br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204903_image.jpg\" /><br />\r\n<br />\r\n&nbsp;\r\n<h2><strong>Camera</strong></h2>\r\n<br />\r\n2 camera luôn nha ae, chụp da mịn màng luôn cứ nghĩ cục gạch thì cam vớ vẩn thôi cơ mà chụp văn bản linh tinh thấy cũng nét phết. Cam trước 2MP, cam sau 5MP. Cam trước bố trí hơi dị dị, ở cạnh phím thăng, đúng kiểu trá hình ẩn cam. Chụp góc thấp nên hơi nọng cằm. Chủ yếu để call video trong vài trường hợp cần thiết chứ chắc ae mua đều về đều làm máy sơ cua cả.<br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204895_image.jpg\" /><br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204896_image.jpg\" /><br />\r\n<br />\r\n&nbsp;\r\n<h2><strong>Sức mạnh &amp; Hiệu năng</strong></h2>\r\n<br />\r\nVới nhu cầu làm máy sơ cua thì em này không có gì phải chế luôn. Cấu hình khủng trong thân hình bé nhỏ thì mượt như sunsilk<br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204901_image.jpg\" /><br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204904_image.jpg\" /><br />\r\n<br />\r\n&nbsp;\r\n<h2><strong>Thời gian dùng pin</strong></h2>\r\n<br />\r\nPin 2150 mAh tha hồ lướt web nha ae, mình còn hay dùng để phát wifi cho mấy con smartphone to. Dùng đã lắm 2 ngày mới sạc, còn phát wifi thì ngày sạch 1 lần. Các ver sau nếu tăng dung lượng pin và có chức năng sạc ngược làm cục sạc dự phòng thì sắm em này quá ok luôn.<br />\r\nÀ sạc cũng nhanh lắm gần tiếng là đầy rồi.<br />\r\n<br />\r\nTới đây ae nào có nhu cầu sắm cho mình 1 em máy sơ cua nhỏ gọn, mùa đông đeo găng tay vẫn thao tác nhắn tin nghe gọi zalo mess lướt tóp tóp thì múc ngay e nó thôi. Hiện tại đã ra mắt bản nâng cấp F22 cấu hình cũng như kích thước to hơn em này 1 chút. Nhưng cá nhân mình thấy em này bàn phím đẹp và dễ bấm hơn, nhắm mắt cũng nhắn tin được.<br />\r\n<br />\r\nÀ để UP ROM unlock full app store và bấm T9 Tiếng việt ae search youtube hoặc ib mình nhé. Bản quốc tế hơn 3tr thì ae ko cần làm gì à. Mình mua bản nội địa Trung nên chỉ có app trung, mode lại Rom là ok ngay.<br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204897_image.jpg\" /><br />\r\n<br />\r\n<img alt=\"image.jpg\" src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204898_image.jpg\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n', 0, '6204890_image.jpg'),
(5, 1, 5, 'Review Apple phát triển công cụ tìm kiếm riêng, có thể sẽ là đối thủ của Google sau 4 năm', '', 'review-apple-phat-trien-cong-cu-tim-kiem-rieng-co-the-se-la-doi-thu-cua-google-sau-4-nam', 1, '2022-11-14 10:36:01', '2022-11-14 10:36:01', '2022-11-14 10:36:01', '<article class=\"jsx-2265512871 content\"><div class=\"jsx-2265512871\"><div><div class=\"jsx-1268062893\"><div data-author=\"Anh Dũng2k\" class=\"jsx-1268062893 xfBody big\"><!--<link rel=\"stylesheet\" href=\"https://tinhte.vn/css.php?css=bdimage&amp;style=85&amp;dir=LTR&amp;d=1668058344\" />--><span class=\"xf-body-paragraph\">Đây là <a href=\"https://tinhte.vn/tag/review\" class=\"Tinhte_XenTag_TagLink\">review</a> về Apple phát triển công cụ tìm kiếm riêng, có thể sẽ là đối thủ của Google sau 4 năm của mình. Hi vọng phần review sẽ hữu ích cho bạn nào muốn mua nhé, nếu bạn có câu hỏi gì thì hãy comment vô bài này nha.<br /> <br /> </span><h2 class=\"TinhteMods_HeadingTag TinhteMods_HeadingTagH2\"><b>Thông tin chung về Apple phát triển công cụ tìm kiếm riêng, có thể sẽ là đối thủ của Google sau 4 năm</b></h2><span class=\"xf-body-paragraph\"><br /> Theo thông tin của The Information, Apple đang tìm cách cải thiện tính năng tìm kiếm có tên là Spotlight đang được hỗ trợ trên iOS và macOS. Tuy nhiên, vẫn còn nhiều năm nữa hãng mới có thể tung ra một sản phẩm tối ưu nhất để cạnh tranh với Google.<br /> Báo cáo cho rằng công nghệ tìm kiếm của Apple đang phải đối mặt với sự thất bại. Cùng quay trở lại năm 2018, khi đó Apple đã mua lại công ty khởi nghiệp chuyên về mảng AI có tên là Laserlike, được thành lập bởi ba kỹ sư của Google.<br /> <br /> Cụ thể, công ty Laserlike sẽ đề xuất các trang web dựa trên sở thích và lịch sử duyệt web của người dùng. Thế nhưng, giờ đây những người sáng lập của Laserlike đã quay trở lại Google.<br /> <br /> </span> 	  <span class=\"bdImage_attachImage\" style=\"width:800px\"> 	<span class=\"inner\" style=\"padding-bottom:52.500000%\"> 		  		<img  			 alt=\"sery.jpg\" 			 data-height=\"420\" 			 src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204937_sery.jpg\" 			 data-width=\"800\" />   	</span> </span>   	 <span class=\"xf-body-paragraph\"> </div><div class=\"jsx-1268062893 in-article-promo false\"><p class=\"jsx-1268062893 in-article-promo-title\">Quảng cáo</p><div class=\"jsx-611178211 pro-container  withBorder\"><div class=\"jsx-611178211\"><ins class=\"adsbygoogle\" style=\"display:block;text-align:center;width:100%\" data-ad-format=\"fluid\" data-ad-layout=\"in-article\" data-ad-client=\"ca-pub-4328742155432872\" data-ad-slot=\"6128343434\"></ins></div></div></div></div><div class=\"jsx-1268062893\"><div data-author=\"Anh Dũng2k\" class=\"jsx-1268062893 xfBody big\"><br /> <br /> <br /> </span><h2 class=\"TinhteMods_HeadingTag TinhteMods_HeadingTagH2\"><b>Những thứ mình thích</b></h2><span class=\"xf-body-paragraph\"><br /> Siri trợ lý ảo giúp người dùng tra cứu thông tin một cách nhanh chóng và thuận tiện nhất <br /> Mặc dù, nhóm tìm kiếm của Apple được cho là có ít nhất 200 nhân viên, hỗ trợ công nghệ tìm kiếm Spotlight, Siri đồng thời đề xuất các câu trả lời do ‌Siri‌ cung cấp. Nhưng, The Information cho biết hãng vẫn còn ít nhất 4 năm nữa mới có thể tung ra ứng dụng thay thế Google.<br /> <br /> Theo đó, Google phải trả cho Apple khoảng 15 tỷ USD mỗi năm để duy trì &quot;vị trí&quot; là công cụ tìm kiếm mặc định trên các thiết bị của Apple. Việc Apple phát triển tính năng để cạnh tranh với Google có thể là &quot;đòn bẩy&quot; lớn đem lại lợi cho mình trong các cuộc đàm phán định kỳ với Google.<br /> <br /> Hơn nữa, Apple đang tập trung phát triển công nghệ tìm kiếm cho Apple Music và App Store. Hiện hãng đang sử dụng công nghệ tìm kiếm để tạo dữ liệu cho các nhóm của Apple phát triển các ứng dụng sử dụng xử lý ngôn ngữ tự nhiên, chẳng hạn như ứng dụng dịch thuật.<br /> Apple Music cũng được hỗ trợ công nghệ tìm kiếm của Apple<br /> Ngoài ra, công nghệ còn sử dụng các đoạn tweet trên Twitter để xác định các sự kiện đáng tin nhất sẽ hiển thị trong thanh kết quả cũng như đề xuất các bài báo của Apple News. Một trong những việc ưu tiên hàng đầu của Apple là cải thiện Spotlight có thể xử lý các yêu cầu từ người dùng &quot;gấp 100 lần&quot; so với hiện nay.<br /> <br /> Bạn cảm thấy công nghệ tìm kiếm của Apple như thế nào? Hãy để lại bình luận bên dưới nhé!<br /> <br /> </span> 	  <span class=\"bdImage_attachImage\" style=\"width:800px\"> 	<span class=\"inner\" style=\"padding-bottom:56.250000%\"> 		  		<img  			 alt=\"musi.jpg\" 			 data-height=\"450\" 			 src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204952_musi.jpg\" 			 data-width=\"800\" />   	</span> </span>   	 <span class=\"xf-body-paragraph\"><br />  </div><div class=\"jsx-1268062893 in-article-promo false\"><p class=\"jsx-1268062893 in-article-promo-title\">Quảng cáo</p><div class=\"jsx-611178211 pro-container  withBorder\"><div class=\"jsx-611178211\"><div class=\"micro  hidden-xs\" style=\"min-height:90px\"><zone id=\"kmd65vl1\"></zone></div><div class=\"micro visible-xs\" style=\"min-height:250px\"><zone id=\"kmd65c33\"></zone></div></div></div></div></div><div class=\"jsx-1268062893\"><div data-author=\"Anh Dũng2k\" class=\"jsx-1268062893 xfBody big\"><br /> <br /> </span><h2 class=\"TinhteMods_HeadingTag TinhteMods_HeadingTagH2\"><b>Những thứ mình không thích</b></h2><span class=\"xf-body-paragraph\"><br /> <br /> <br /> </span><h2 class=\"TinhteMods_HeadingTag TinhteMods_HeadingTagH2\"><b>Nên mua hay không?</b></h2></div></div></div></div></article>', 0, '6204937_sery.jpg'),
(6, 1, 5, 'Thử nghiệm độc lập cho thấy ứng dụng Apple theo dõi người dùng dù họ đã bật bảo mật thông tin', '', 'thu-nghiem-doc-lap-cho-thay-ung-dung-apple-theo-doi-nguoi-dung-du-ho-da-bat-bao-mat-thong-tin', 1, '2022-11-14 10:36:08', '2022-11-14 10:36:08', '2022-11-14 10:36:08', '<article class=\"jsx-2265512871 content\"><div class=\"jsx-2265512871\"><div><div class=\"jsx-1268062893\"><div data-author=\"Hassler\" class=\"jsx-1268062893 xfBody big\"><!--<link rel=\"stylesheet\" href=\"https://tinhte.vn/css.php?css=bdimage,bdlinkexpander&amp;style=85&amp;dir=LTR&amp;d=1668058344\" /><script src=\"https://tinhte.vn/js/bdLinkExpander/script.min.js?_v=084e41cb\"></script>--><span class=\"xf-body-paragraph\"><a href=\"https://tinhte.vn/tag/apple\" class=\"Tinhte_XenTag_TagLink\">Apple</a> từ iOS14.5 đã giới thiệu các chức năng bảo mật được quảng cáo rất mạnh và tôn trọng thông tin của người dùng. Tuy nhiên trong 1 thử nghiệm độc lập từ công ty phần mềm Mysk thì Apple vẫn thu thập cực kỳ chi tiết các thông tin người dùng, kể cả khi đã tắt theo dõi. Điều này ngược lại hoàn toàn những gì Apple mô tả về cách thức bảo mật thông tin mà họ đưa ra.<br />  <br /> Trong settings của <a href=\"https://tinhte.vn/tag/iphone\" class=\"Tinhte_XenTag_TagLink\">iPhone</a> có một tuỳ chọn tắt mở công cụ <a href=\"https://tinhte.vn/tag/analytics\" class=\"Tinhte_XenTag_TagLink\">Analytics</a> của iPhone, hứa hẹn có thể chặn việc gửi các thông tin ghi nhận được đi lên server của Apple để phân tích. Tuy nhiên trong nghiên cứu này 1 loạt dữ liệu thu thập được từ những phần mềm gốc của iPhone như <a href=\"https://tinhte.vn/tag/app-store\" class=\"Tinhte_XenTag_TagLink\">App Store</a>, Apple Music, Apple TV, Books và Stocks vẫn được ghi lại để phân tích bất kể iPhone Analytics được mở hay tắt. Nhóm chuyên gia cũng khẳng định đây không phải là chuyện “Giờ ứng dụng nào chả theo dõi người dùng, thêm cái nữa thì có sao”. Bởi những gì họ kiểm tra dữ liệu phân tích trên Google Chrome và Microsoft Edge đều cho thấy không hề có dữ liệu nào được gửi đi khi chức năng analytic đã được tắt.<br />  <br /> Ví dụ như App Store, nó sẽ ghi nhận hầu như tất cả các tương tác của người dùng như gõ lên đâu, tìm ứng dụng nào, đã xem quảng cáo nào, cách thức tìm ứng dụng và thời gian để màn hình ở trong ứng dụng đó là bao lâu. Các thông tin khác như số ID, đời máy đang dùng, độ phân giải màn hình là bao nhiêu, ngôn ngữ đang sử dụng là tiếng nước nào, kết nối vào mạng qua wifi hay 4G... cũng được ghi lại. Như ở ứng dụng Stocks các thông tin về danh sách cổ phiếu, tên cổ phiếu và dạng cổ phiếu được tìm kiếm cùng với thời gian tìm sẽ gửi đến địa chỉ <a href=\"https://stocks-analytics-events.apple.com/analyticseventsv2/async\" target=\"_blank\" class=\"externalLink\">https://stocks-analytics-events.apple.com/analyticseventsv2/async</a><!-- bdLinkExpander (url,1,czoxMTE6ImE6Mjp7czozOiJ1cmwiO3M6NjU6Imh0dHBzOi8vc3RvY2tzLWFuYWx5dGljcy1ldmVudHMuYXBwbGUuY29tL2FuYWx5dGljc2V2ZW50c3YyL2FzeW5jIjtzOjQ6InR5cGUiO3M6NDoibGluayI7fSI7) -->. Phía Mysk chia sẻ dù đã tắt tất cả các lựa chọn, bao gồm cả quảng cáo hướng người dùng, các gợi ý mang tính cá nhân hay chia sẻ cách người dùng sử dụng dữ liệu... nhưng vẫn có 1 số lượng thông tin nhất định vẫn được chia sẻ.. Tuy nhiên cũng có 1 số dữ liệu được lưu lại tại máy mà không gửi đi đâu như thông tin trong Health và Wallet.<!-- bdLinkExpander (bdLinkExpander_Helper_Expander,1,aTowOw==) --><br />  <br /> </span>   	       	<div class=\"LinkExpander direct expanded type-ratio\" data-type=\"ratio\"> 		 			 				<div class=\"LinkExpander_Ratio\" style=\"padding-bottom: 56.25%;\"><iframe width=\"800\" height=\"450\" src=\"https://www.youtube.com/embed/8JxvH80Rrcw?wmode=opaque\" frameborder=\"0\" allowfullscreen></iframe></div> 			 		 	</div> <span class=\"xf-body-paragraph\"><br /> <i>Đoạn video cho thấy App Store đang thu thập thông tin của người dùng</i><br />   </div><div class=\"jsx-1268062893 in-article-promo false\"><p class=\"jsx-1268062893 in-article-promo-title\">Quảng cáo</p><div class=\"jsx-611178211 pro-container  withBorder\"><div class=\"jsx-611178211\"><ins class=\"adsbygoogle\" style=\"display:block;text-align:center;width:100%\" data-ad-format=\"fluid\" data-ad-layout=\"in-article\" data-ad-client=\"ca-pub-4328742155432872\" data-ad-slot=\"6128343434\"></ins></div></div></div></div><div class=\"jsx-1268062893\"><div data-author=\"Hassler\" class=\"jsx-1268062893 xfBody big\"><br /> Trong thử nghiệm họ cho chạy 2 thiết bị khác nhau. Đầu tiên là chiếc iPhone đã được jailbreak chạy iOS14.6 với khả năng giải mã và phân tích tất cả dữ liệu được gửi đi. Đây là bản nâng cấp ngay sau khi ứng dụng dò vết App Tracking Transparency được giới thiệu trong <a href=\"https://tinhte.vn/tag/ios\" class=\"Tinhte_XenTag_TagLink\">iOS</a> 14.5 để xem có thực sự nó có chặn việc gửi không tin khi chọn &quot;Ask app not to track?&quot; không. Chiếc iPhone còn lại chạy iOS16, là phiên bản mới ra mắt gần đây và chưa được jailbreak. Kết luận là cả 2 máy đều gửi những gói dữ liệu tương tự nhau đến các địa chỉ web của Apple. Với bản 16 thì chưa xem biết dữ liệu bị gửi đi là gì do chưa jailbreak được mà thôi.<br />  <br /> <a href=\"https://twitter.com/mysk_co/status/1588308341780262912?s=20&amp;t=dopehhRnuSEmyOnsNGabZg\" target=\"_blank\" class=\"externalLink\">https://twitter.com/mysk_co/status/1588308341780262912?s=20&amp;t=dopehhRnuSEmyOnsNGabZg</a><!-- bdLinkExpander (url,1,czoxMzA6ImE6Mjp7czozOiJ1cmwiO3M6ODQ6Imh0dHBzOi8vdHdpdHRlci5jb20vbXlza19jby9zdGF0dXMvMTU4ODMwODM0MTc4MDI2MjkxMj9zPTIwJnQ9ZG9wZWhoUm51U0VteU9uc05HYWJaZyI7czo0OiJ0eXBlIjtzOjQ6ImxpbmsiO30iOw==) -->   	       	<div class=\"LinkExpander direct expanded type-twitter is-oembed\" data-type=\"twitter\"> 		 			 				<blockquote class=\"twitter-tweet\"><p lang=\"en\" dir=\"ltr\">????<br>1/5<br>The recent changes that Apple has made to App Store ads should raise many <a href=\"https://twitter.com/hashtag/privacy?src=hash&amp;ref_src=twsrc%5Etfw\">#privacy</a> concerns. It seems that the <a href=\"https://twitter.com/hashtag/AppStore?src=hash&amp;ref_src=twsrc%5Etfw\">#AppStore</a> app on iOS 14.6 sends every tap you make in the app to Apple.????This data is sent in one request: (data usage &amp; personalized ads are off)<a href=\"https://twitter.com/hashtag/CyberSecurity?src=hash&amp;ref_src=twsrc%5Etfw\">#CyberSecurity</a> <a href=\"https://t.co/1pYqdagi4e\">pic.twitter.com/1pYqdagi4e</a></p>&mdash; Mysk ???????????????? (@mysk_co) <a href=\"https://twitter.com/mysk_co/status/1588308341780262912?ref_src=twsrc%5Etfw\">November 3, 2022</a></blockquote> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>  			 		 	</div> <br />  <br /> Bảo mật từng là 1 trong những điểm mạnh mà Apple sử dụng để phân biệt công nghệ của mình với các đối thủ trên thị trường. Nếu anh em còn nhớ thì Apple còn cho treo biển quảng cáo to đùng về độ bảo mật của iPhone với câu khẳng định “Privacy. That’s iPhone.” ở nhiều nơi trên thế giới. Nhưng trong thời gian gần đây các lỗi liên quan đến bảo mật đang xuất hiện ngày càng nhiều trong các sản phẩm của hãng. Lý do có thể do họ đang dần dần chuyển đổi sang hướng xây dựng 1 đế chế quảng cáo ẩn trong các dịch vụ của mình. Điển hình nhất là việc bắt đầu có quảng cáo tại trang App Store của hãng. Vậy nên mạng lưới quảng cáo của Apple cũng sẽ chạy dựa vào thông tin cá nhân của người dùng như cách Google và Meta đang làm mà thôi.<br />  <br /> </span> 	  <span class=\"bdImage_attachImage\" style=\"width:1280px\"> 	<span class=\"inner\" style=\"padding-bottom:56.250000%\"> 		  		<img  			 alt=\"apple.jpg\" 			 data-height=\"720\" 			 src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6201359_apple.jpg\" 			 data-width=\"1280\" />   	</span> </span>   	 <span class=\"xf-body-paragraph\"><br />  <br />  <br /> Apple có vẻ chơi kiểu nước đôi bởi họ có kiểu định nghĩa nếu người dùng kết nối dữ liệu vào những dịch vụ của công ty khác thì là lấy dữ liệu. Còn khi Apple thu thập dữ liệu theo định nghĩa của Apple thì lại không phải là lấy dữ liệu. Theo đúng như cách họ chia sẻ trên trang web của công ty: Nền tảng quảng cáo của Apple không theo dõi người dùng, nghĩa là không liên kết người dùng hay dữ liệu thu thập được từ các ứng dụng ở trên máy với các dữ liệu thu thập được từ bên thứ 3 với mục đích quảng cáo đích hoặc phân tích chạy quảng cáo. Nó cũng không chia sẻ dữ liệu và thông tin người dùng với các bên chuyên mua bán dữ liệu.<br />  <br /> Tất nhiên với người dùng thông thường thì không thể biết được Apple sẽ làm gì với những dữ liệu này. Nhưng với 1 công ty đang có tiếng là đi đầu trong bảo mật thông tin người dùng và luôn chỉ trích các đối thủ về bảo mật thì việc này không vui tí nào.<br />  <br /> <b>Tham khảo </b><a href=\"https://www.apple.com/legal/privacy/data/en/apple-advertising/\" target=\"_blank\" class=\"externalLink\"><b>Apple</b></a><b>, </b><a href=\"https://gizmodo.com/apple-iphone-analytics-tracking-even-when-off-app-store-1849757558\" target=\"_blank\" class=\"externalLink\"><b>Gizmodo</b></a></span></div></div></div></div></article>', 0, '6201359_apple.jpg'),
(7, 1, 5, 'Top 5 trò chơi gây stress cho người chơi nhất, Mario Kart đứng đầu bảng', '', 'top-5-tro-choi-gay-stress-cho-nguoi-choi-nhat-mario-kart-dung-dau-bang', 1, '2022-11-14 10:36:15', '2022-11-14 10:36:15', '2022-11-14 10:36:15', '<article class=\"jsx-2265512871 content\"><div class=\"jsx-2265512871\"><div><div class=\"jsx-1268062893\"><div data-author=\"Hassler\" class=\"jsx-1268062893 xfBody big\"><!--<link rel=\"stylesheet\" href=\"https://tinhte.vn/css.php?css=bdimage&amp;style=85&amp;dir=LTR&amp;d=1668058344\" />--><span class=\"xf-body-paragraph\">Một nghiên cứu mới về các trò chơi làm nhịp tim của người chơi bị đẩy lên mức cao nhất trong vòng 30 phút vừa được trang web chuyên về <a href=\"https://tinhte.vn/tag/game\" class=\"Tinhte_XenTag_TagLink\">game</a> BonusFinder chia sẻ. Nhịp tim bị đẩy nhanh có thể do phản ứng của cơ thể khi bị <a href=\"https://tinhte.vn/tag/stress\" class=\"Tinhte_XenTag_TagLink\">stress</a> và làm tăng lượng adrealine trong máu, vậy nên đây là 1 dấu hiệu để xác định 1 người có bị stress hay không.<br />  <br /> </span><h2 class=\"TinhteMods_HeadingTag TinhteMods_HeadingTagH2\"><b><a href=\"https://tinhte.vn/tag/mario-kart\" class=\"Tinhte_XenTag_TagLink\">Mario Kart</a></b></h2> <br />  	  <span class=\"bdImage_attachImage\" style=\"width:960px\"> 	<span class=\"inner\" style=\"padding-bottom:66.666667%\"> 		  		<img  			 alt=\"MarioKart.jpeg\" 			 data-height=\"640\" 			 src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204701_MarioKart.jpeg\" 			 data-width=\"960\" />   	</span> </span>   	 <span class=\"xf-body-paragraph\"><br />  <br /> Theo đó trò chơi làm người chơi phát khùng nhất là Mario Kart. Thoạt đầu nghe có vẻ là lạ bởi nhìn giao diện của trò này rất vui tươi, không hề có những kiểu doạ ma kinh dị hay đánh vào tâm lý như mấy game kiểu The Evil Within, Resident Evil hay hack não như Sudoku... Nhưng nếu đã lao vào vòng đua thì ai cũng sẽ có cảm giác không an toàn bởi trong lúc đua ai cũng có thể khi thì ăn chuối, khi ăn vỏ rùa, rồi lại bị sét đánh hay phun mực vào mặt bất cứ lúc nào.<br />  <br /> </span><h2 class=\"TinhteMods_HeadingTag TinhteMods_HeadingTagH2\"><b><a href=\"https://tinhte.vn/tag/fifa\" class=\"Tinhte_XenTag_TagLink\">FIFA</a></b></h2> <br />  	  <span class=\"bdImage_attachImage\" style=\"width:980px\"> 	<span class=\"inner\" style=\"padding-bottom:56.224490%\"> 		  		<img  			 alt=\"fifa23.jpg\" 			 data-height=\"551\" 			 src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204702_fifa23.jpg\" 			 data-width=\"980\" />   	</span> </span>   	 <span class=\"xf-body-paragraph\"> </div><div class=\"jsx-1268062893 in-article-promo false\"><p class=\"jsx-1268062893 in-article-promo-title\">Quảng cáo</p><div class=\"jsx-611178211 pro-container  withBorder\"><div class=\"jsx-611178211\"><ins class=\"adsbygoogle\" style=\"display:block;text-align:center;width:100%\" data-ad-format=\"fluid\" data-ad-layout=\"in-article\" data-ad-client=\"ca-pub-4328742155432872\" data-ad-slot=\"6128343434\"></ins></div></div></div></div><div class=\"jsx-1268062893\"><div data-author=\"Hassler\" class=\"jsx-1268062893 xfBody big\"><br /> Đứng thứ 2 là trò chơi giả lập bóng đá FIFA. Điều này cũng chính xác bởi tính hơn thua khi đối đầu trực tiếp với các đối thủ, nhất là khi chơi online hay nhiều khi các giả eSport với mức tiền thưởng cực cao cũng sẽ làm stress tăng theo tỷ lệ thuận, nhất là khi càng vào sâu trong giải. Việc người chơi thót tim mỗi khi đối phương suýt ghi được bàn, hay ức chế khi mãi không phá được thế phòng thủ hoặc bị thua 1 cách tức tưởi chắc chắn sẽ làm nhịp tim của người chơi tăng cao hơn bình thường.<br />  <br />  <br /> </span><h2 class=\"TinhteMods_HeadingTag TinhteMods_HeadingTagH2\"><b><a href=\"https://tinhte.vn/tag/call-of-duty\" class=\"Tinhte_XenTag_TagLink\">Call of Duty</a></b></h2> <br />  	  <span class=\"bdImage_attachImage\" style=\"width:960px\"> 	<span class=\"inner\" style=\"padding-bottom:56.250000%\"> 		  		<img  			 alt=\"Callofduty.jpeg\" 			 data-height=\"540\" 			 src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204703_Callofduty.jpeg\" 			 data-width=\"960\" />   	</span> </span>   	 <span class=\"xf-body-paragraph\"><br />  <br /> Một tượng đài trong dòng game FPS với tốc độ xử lý cực cao và cốt truyện hấp dẫn chắc chắn sẽ làm tim chúng ta đập nhanh hơn rồi. Cảm giác trở thành 1 phần lịch sử rồi thay đổi nó, hay bị ức chế khi cố chơi ở chế độ khó rồi hở ra là bị Mission Failed chắc chắn sẽ đẩy cung bậc cảm xúc của người chơi lên cao.<br />  <br /> </span><h2 class=\"TinhteMods_HeadingTag TinhteMods_HeadingTagH2\"><b><a href=\"https://tinhte.vn/tag/dark-souls-4\" class=\"Tinhte_XenTag_TagLink\">Dark Souls</a></b></h2><span class=\"xf-body-paragraph\"> <br /> <b> 	  <span class=\"bdImage_attachImage\" style=\"width:1024px\"> 	<span class=\"inner\" style=\"padding-bottom:68.457031%\"> 		  		<img  			 alt=\"darksouls.jpg\" 			 data-height=\"701\" 			 src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204706_darksouls.jpg\" 			 data-width=\"1024\" />   	</span> </span>   	 </b><br />  <br /> Trò chơi đơn, offline và CỰC KỲ ức chế. Anh em nào chơi trò này rồi thì chắc cũng đồng ý với độ cù nhây của nó bởi nhiều khi vài thằng quái quèn nó cũng xử được mình để rồi lại phải lọ mọ đi lại tốn rất nhiều thời gian.<br />  <br /> </span><h2 class=\"TinhteMods_HeadingTag TinhteMods_HeadingTagH2\"><b><a href=\"https://tinhte.vn/tag/fortnite\" class=\"Tinhte_XenTag_TagLink\">Fortnite</a></b></h2> 	  <span class=\"bdImage_attachImage\" style=\"width:980px\"> 	<span class=\"inner\" style=\"padding-bottom:56.224490%\"> 		  		<img  			 alt=\"fortnite.jpeg\" 			 data-height=\"551\" 			 src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204707_fortnite.jpeg\" 			 data-width=\"980\" />   	</span> </span>   	 <span class=\"xf-body-paragraph\"><br />  <br />   </div><div class=\"jsx-1268062893 in-article-promo false\"><p class=\"jsx-1268062893 in-article-promo-title\">Quảng cáo</p><div class=\"jsx-611178211 pro-container  withBorder\"><div class=\"jsx-611178211\"><div class=\"micro  hidden-xs\" style=\"min-height:90px\"><zone id=\"kmd65vl1\"></zone></div><div class=\"micro visible-xs\" style=\"min-height:250px\"><zone id=\"kmd65c33\"></zone></div></div></div></div></div><div class=\"jsx-1268062893\"><div data-author=\"Hassler\" class=\"jsx-1268062893 xfBody big\"><br /> Cũng như FIFA, với những game được dùng để thi đấu thì điều hiển nhiên nó sẽ làm cảm xúc của người chơi tăng cao. Chưa kể đây là game bắn súng, sự phấn khích khi giải quyết được đối thủ và đứng đầu bảng xếp hạng hay sự cay cú khi phải theo dõi game theo ghost mode chắc chắn sẽ đem lại nhiều cảm xúc cho người chơi.<br />  <br /> </span> 	  <span class=\"bdImage_attachImage\" style=\"width:960px\"> 	<span class=\"inner\" style=\"padding-bottom:105.312500%\"> 		  		<img  			 alt=\"960x0.jpg\" 			 data-height=\"1011\" 			 src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204710_960x0.jpg\" 			 data-width=\"960\" />   	</span> </span>   	 <br />  	  <span class=\"bdImage_attachImage\" style=\"width:960px\"> 	<span class=\"inner\" style=\"padding-bottom:106.458333%\"> 		  		<img  			 alt=\"banhmy35.jpg\" 			 data-height=\"1022\" 			 src=\"https://photo2.tinhte.vn/data/attachment-files/2022/11/6204713_banhmy35.jpg\" 			 data-width=\"960\" />   	</span> </span>   	 <span class=\"xf-body-paragraph\"><br />  <br /> Anh em còn thấy game nào dễ làm mình phát khùng hơn những game được theo dõi ở trên không?<br />  <br /> <b>Tham khảo </b><a href=\"https://www.forbes.com/sites/paultassi/2022/11/09/mario-kart-call-of-duty-ranked-among-the-most-stressful-video-games/?sh=1ce414ff2859\" target=\"_blank\" class=\"externalLink\"><b>Forbes</b></a></span></div></div></div></div></article>', 0, '6204701_MarioKart.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `content_type` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `content_id`, `content_type`, `meta_title`, `meta_description`) VALUES
(1, 1, 'category', 'Tin tức', 'Tin tức'),
(2, 2, 'category', 'Tin khuyến mại', 'Tin khuyến mại'),
(3, 3, 'category', 'Tin tuyển dụng', 'Tin tuyển dụng'),
(4, 4, 'category', 'Tin truyền thông', 'Tin truyền thông'),
(5, 5, 'category', 'Chuyện của những đôi mắt khỏe', 'Chuyện của những đôi mắt khỏe'),
(6, 1, 'page', 'Giới thiệu chung', 'Giới thiệu chung'),
(7, 2, 'page', 'Hệ thống bệnh viện', 'Hệ thống bệnh viện'),
(8, 3, 'page', 'Đội ngũ bác sĩ', 'Đội ngũ bác sĩ'),
(9, 4, 'page', 'Trang thiết bị', 'Trang thiết bị'),
(10, 5, 'page', 'Thư viện hình ảnh & video', 'Thư viện hình ảnh & video'),
(11, 6, 'page', 'Chính sách và quyền riêng tư', 'Chính sách và quyền riêng tư'),
(12, 1, 'post', 'Mặt đồng hồ Apple bị trầy thì có nên đi đánh bóng không anh em?', 'Mặt đồng hồ Apple bị trầy thì có nên đi đánh bóng không anh em?'),
(13, 2, 'post', 'Những lợi ích của DCIM đối với người quản lý Trung tâm dữ liệu là gì?...', 'Những lợi ích của DCIM đối với người quản lý Trung tâm dữ liệu là gì?...'),
(14, 3, 'post', 'Metaverse Decentraland? Hơn tỷ đô đổ vào phát triển nhưng có lúc chỉ có 38 người hoạt động', 'Metaverse Decentraland? Hơn tỷ đô đổ vào phát triển nhưng có lúc chỉ có 38 người hoạt động'),
(15, 4, 'post', 'Review Cục gạch như Nokia chạy Android 11,Tiktok+Facebook+Chơi Game, Qin F21S Pro', 'Review Cục gạch như Nokia chạy Android 11,Tiktok+Facebook+Chơi Game, Qin F21S Pro'),
(16, 5, 'post', 'Review Apple phát triển công cụ tìm kiếm riêng, có thể sẽ là đối thủ của Google sau 4 năm', 'Review Apple phát triển công cụ tìm kiếm riêng, có thể sẽ là đối thủ của Google sau 4 năm'),
(17, 6, 'post', 'Thử nghiệm độc lập cho thấy ứng dụng Apple theo dõi người dùng dù họ đã bật bảo mật thông tin', 'Thử nghiệm độc lập cho thấy ứng dụng Apple theo dõi người dùng dù họ đã bật bảo mật thông tin'),
(18, 7, 'post', 'Top 5 trò chơi gây stress cho người chơi nhất, Mario Kart đứng đầu bảng', 'Top 5 trò chơi gây stress cho người chơi nhất, Mario Kart đứng đầu bảng'),
(19, 6, 'category', 'Dịch vụ', 'Dịch vụ'),
(20, 7, 'category', 'Khám mắt', 'Khám mắt'),
(21, 8, 'category', 'Điều trị tật khúc xạ', 'Điều trị tật khúc xạ'),
(22, 9, 'category', 'Phẫu thuật khúc xạ', 'Phẫu thuật khúc xạ'),
(23, 10, 'category', 'Phẫu thuật ghép giác mạc', 'Phẫu thuật ghép giác mạc'),
(24, 11, 'category', 'Tạo hình thẩm mỹ', 'Tạo hình thẩm mỹ'),
(25, 7, 'page', 'Khám mắt', 'Khám mắt'),
(26, 8, 'page', 'Điều trị tật khúc xạ', 'Điều trị tật khúc xạ'),
(27, 9, 'page', 'Phẫu thuật khúc xạ', 'Phẫu thuật khúc xạ'),
(28, 10, 'page', 'Phẫu thuật ghép giác mạc', 'Phẫu thuật ghép giác mạc'),
(29, 11, 'page', 'Tạo hình thẩm mỹ', 'Tạo hình thẩm mỹ'),
(30, 12, 'page', 'Phẫu thuật ghép giác mạc', 'Phẫu thuật ghép giác mạc');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `main_title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `sub_title`, `main_title`, `url`, `img`) VALUES
(1, '', '', 'https://www.facebook.com/', '5.-Banner-WEB-PC-1024x439@2x.jpg'),
(2, '', '', 'https://www.facebook.com/', 'Banner-web-01-2.jpg'),
(3, '', '', 'https://www.facebook.com/', 'banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`id`, `email`) VALUES
(1, 'chungvd.it@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ui`
--

CREATE TABLE `ui` (
  `id` int(11) NOT NULL,
  `text_top_header` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` text NOT NULL,
  `lastlogin` datetime NOT NULL,
  `registered` datetime NOT NULL,
  `userimage` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `token_active` tinyint(4) NOT NULL,
  `token_date` datetime DEFAULT NULL,
  `nicename` varchar(255) NOT NULL,
  `is_superadmin` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `middlename`, `lastname`, `email`, `password`, `profile`, `lastlogin`, `registered`, `userimage`, `role`, `token`, `token_active`, `token_date`, `nicename`, `is_superadmin`, `slug`) VALUES
(1, 'admin', 'admin', 'admin', 'chunghello193@gmail.com', '$2y$10$5JvFVM5SODATHcB58gRkrOgSPEZQqX7f/PgD493Q14.welZ464kMe', 'hi iam superadmin', '2022-11-15 06:24:35', '2022-03-20 05:03:04', '279525083_1618945645158258_4266030711208860908_n.jpg', 'admin', '', 0, '0000-00-00 00:00:00', 'chung193', 1, ''),
(2, 'Edam', 'Steven', 'Mark', 'chung.vu.cnt.193@gmail.com', '$2y$10$S3hLoxEN0KSG12.8ELHmguA2Fy4H8R5.nP38Xj8mPEkK.W/vG587C', 'bla bla', '2022-10-18 21:56:09', '0000-00-00 00:00:00', '12391998_804010869707575_1321261564253395576_n.jpg', 'admin', '', 0, '0000-00-00 00:00:00', 'Chung193', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagecat`
--
ALTER TABLE `pagecat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ui`
--
ALTER TABLE `ui`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pagecat`
--
ALTER TABLE `pagecat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ui`
--
ALTER TABLE `ui`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
