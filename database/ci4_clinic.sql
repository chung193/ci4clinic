-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 02:11 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `show_in_menu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_id`, `title`, `slug`, `content`, `show_in_menu`) VALUES
(5, 8, 'Tin khuyến mại', '', '<p>Tin khuyến mại</p>\r\n', 0),
(6, 8, 'Tin tuyển dụng', '', '<p>Tin tuyển dụng</p>\r\n', 0),
(7, 0, 'Về chúng tôi', '', '<p>Giới thiệu về chúng tôi</p>\r\n', 1),
(8, 0, 'Tin tức', 'tin-tuc', '<p>Tin tức</p>\r\n', 0),
(9, 8, 'Chuyện của những đôi mắt khỏe', 'chuyen-cua-nhung-doi-mat-khoe', '<p>Chuyện của những đôi mắt khỏe</p>\r\n', 0),
(10, 0, 'dịch vụ', 'dich-vu', '<p>dịch vụ</p>\r\n', 1),
(11, 0, 'Hướng dẫn khách hàng', 'huong-dan-khach-hang', '<p>Hướng dẫn khách hàng</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `banner` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `ratio` int(11) NOT NULL,
  `money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `title`, `description`, `from_date`, `to_date`, `banner`, `slug`, `ratio`, `money`) VALUES
(1, 'Mã mặc định', 'Mã mặc định', '2022-09-26', '2023-09-26', 'special-dollar-one-only-deal-sale-banner_1017-31784.jpg', 'ma-mac-dinh', 0, 0);

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
(1, 'Phòng khám bác sĩ Chính', 'logo.png', '246 Đường Đà Nẵng, Cầu Tre, Ngô Quyền, Hải Phòng', '0123456789', 'sale@phongkhambacsichinh.com', 'favicon.png');

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
(11, 'site_mail', 'sale@macstorehaiphong.com');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `publishat` datetime NOT NULL,
  `createdat` datetime NOT NULL,
  `updateat` datetime NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `authorid`, `title`, `description`, `slug`, `published`, `publishat`, `createdat`, `updateat`, `content`) VALUES
(1, 1, 'Giới thiệu', 'Giới thiệu', 'gioi-thieu', 1, '2022-10-28 19:37:15', '2022-10-28 19:37:15', '2022-10-28 19:37:15', '<p>Giới thiệu</p>\r\n'),
(2, 1, 'Liên hệ', 'Liên hệ', 'lien-he', 1, '2022-10-28 19:37:25', '2022-10-28 19:37:25', '2022-10-28 19:37:25', '<p>Liên hệ</p>\r\n'),
(3, 1, 'Chính sách đổi trả', 'Chính sách đổi trả', 'chinh-sach-doi-tra', 1, '2022-10-28 19:37:58', '2022-10-28 19:37:58', '2022-10-28 19:37:58', '<p>Chính sách đổi trả</p>\r\n'),
(4, 1, 'Hướng dẫn đặt hàng', 'Hướng dẫn đặt hàng', 'huong-dan-dat-hang', 1, '2022-10-28 19:38:13', '2022-10-28 19:38:13', '2022-10-28 19:38:13', '<p>Hướng dẫn đặt hàng</p>\r\n');

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
  `img` varchar(600) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `authorid`, `parentid`, `title`, `description`, `slug`, `published`, `publishat`, `createdat`, `updateat`, `content`, `trash`, `img`, `view`) VALUES
(12, 1, 7, 'Giới thiệu chung', 'Giới thiệu chung', 'gioi-thieu-chung-1', 1, '2022-11-10 21:15:07', '2022-11-10 01:40:37', '2022-11-10 21:15:07', '<h3>1/GIỚI THIỆU CHUNG:</h3>\r\n\r\n<p>Được thành lập vào năm 2004, trải qua 17 năm hình thành phát triển, với 8 Bệnh viện và 2 Trung tâm nhãn khoa, Phòng khám trải dài khắp 3 miền trên toàn quốc, Hệ thống Bệnh viện Mắt Sài Gòn tự hào là Hệ thống Bệnh viện chuyên khoa Mắt lớn nhất Việt Nam. Quy tụ đội ngũ hơn 500 Bác sĩ, Nhân viên Y tế giỏi chuyên môn, giàu kinh nghiệm; cùng cơ sở vật chất, thiết bị y khoa hiện đại nhập khẩu trực tiếp từ Mỹ, Châu Âu và tâm nguyện toàn tâm, toàn lực chăm sóc thị lực đôi mắt Việt; thương hiệu Mắt Sài Gòn đã trở thành lựa chọn tin cậy của gia đình Việt trên khắp cả nước trong việc khám, điều trị, phục hồi và chăm sóc sức khỏe đôi mắt. Đến nay, Hệ thống Bệnh viện Mắt Sài Gòn thăm khám cho hơn 3.4 triệu khách hàng và phẫu thuật thành công mang lại đôi mắt sáng khỏe cho hơn 660.000 bệnh nhân. Ngoài ra, bệnh viện cũng là nơi tiếp nhận và điều trị thành công những ca bệnh khó từ các đơn vị bệnh viện khác.</p>\r\n\r\n<h3>2/SỨ MỆNH:</h3>\r\n\r\n<p>Dẫn đầu ngành Mắt cho người dân Việt Nam bằng cách ứng dụng những kỹ thuật tiên tiến, là nơi có chất lượng y khoa chuẩn mực, nơi làm việc thân thiện, năng động và môi trường luôn học tập tiến bộ cho các bác sĩ điều dưỡng và mọi nhân viên, nhằm đưa lại kết quả điều trị tốt nhất.</p>\r\n\r\n<h3>3/GIÁ TRỊ CỐT LÕI:</h3>\r\n\r\n<p>Trong năm 2021, MSG đã định hình 06 giá trị cốt lõi, gọi tắt là P-CARES, là nền tảng và chuẩn mực cho mọi hoạt động, bao gồm:</p>\r\n\r\n<p><strong>Patient Centricity &ndash; Bệnh nhân là trung tâm</strong></p>\r\n\r\n<p>Chúng ta đồng hành cùng bệnh nhân, nỗ lực thấu hiểu nhu cầu của bệnh nhân và cung cấp những giải pháp tốt nhất, hiệu quả nhất cho bệnh nhân. Mọi hoạt động của chúng ta đều đặt lợi ích của bệnh nhân lên hàng đầu.</p>\r\n\r\n<p><strong>Compliance &ndash; Tuân thủ các quy định &amp; chuẩn mực</strong></p>\r\n\r\n<p>Chúng ta suy nghĩ điều đúng và làm điều đúng. Mọi hành động của chúng ta đều hướng đến sự chính trực và minh bạch trên phương châm bệnh nhân là trung tâm và sử dụng các chính sách, chuẩn mực của Tập đoàn làm định hướng hoạt động.</p>\r\n\r\n<p><strong>Accountability &ndash; Tinh thần trách nhiệm</strong></p>\r\n\r\n<p>Chúng ta chịu trách nhiệm với người bệnh, với đồng nghiệp, với tổ chức, với bản thân chúng ta và với các kết quả của chính mình tạo ra. Chúng ta trân trọng và thực hiện đúng các cam kết với người bệnh và với nhau vì mục tiêu chung.</p>\r\n\r\n<p><strong>Respect &ndash; Tôn trọng &amp; đoàn kết</strong></p>\r\n\r\n<p>Chúng ta trân trọng sự đa dạng và các giá trị, phẩm giá của mỗi người. Chúng ta luôn cố gắng để thấu hiểu và lắng nghe một cách tích cực những mối quan tâm và quan điểm của người khác. Cùng nhau, chúng ta hợp tác giải quyết các vấn đề trên cơ sở tôn trọng các cá nhân.</p>\r\n\r\n<p><strong>Excellence &ndash; Chuẩn mực xuất sắc</strong></p>\r\n\r\n<p>Chúng ta luôn tìm kiếm những cách thức mới và tốt hơn để không ngừng phát triển và cải tiến liên tục. Chúng ta tập trung vào những điều tích cực và những hành động có thể thực hiện để phát triển hướng đến những chuẩn mực xuất sắc.</p>\r\n\r\n<p><strong>Sympathy &ndash; Sự thấu cảm</strong></p>\r\n\r\n<p>Chúng ta thấu hiểu bằng trái tim và yêu thương bằng hành động. Chúng ta luôn đặt mình vào vị trí của người khác để cảm nhận những gì người khác cảm nhận và thấu hiểu những điều người khác suy nghĩ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>4/TẦM NHÌN:</strong></h3>\r\n\r\n<p>Trở thành hệ thống bệnh viện chuyên khoa Mắt ngoài công lập hàng đầu tại Việt Nam được cộng đồng tín nhiệm trên cơ sở cung cấp dịch vụ Y tế chất lượng cao và dịch vụ chăm sóc khách hàng tốt nhất.</p>\r\n\r\n<h3><strong>LỊCH SỬ HÌNH THÀNH:</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.matsaigon.com/ve-chung-toi/gioi-thieu-chung/\">2004</a></p>\r\n\r\n<p><a href=\"https://www.matsaigon.com/ve-chung-toi/gioi-thieu-chung/\">2006</a></p>\r\n\r\n<p><a href=\"https://www.matsaigon.com/ve-chung-toi/gioi-thieu-chung/\">2008</a></p>\r\n\r\n<p><a href=\"https://www.matsaigon.com/ve-chung-toi/gioi-thieu-chung/\">2010</a></p>\r\n\r\n<p><a href=\"https://www.matsaigon.com/ve-chung-toi/gioi-thieu-chung/\">2012</a></p>\r\n\r\n<p><a href=\"https://www.matsaigon.com/ve-chung-toi/gioi-thieu-chung/\">2013</a></p>\r\n\r\n<p><a href=\"https://www.matsaigon.com/ve-chung-toi/gioi-thieu-chung/\">2016</a></p>\r\n\r\n<p><a href=\"https://www.matsaigon.com/ve-chung-toi/gioi-thieu-chung/\">2018</a></p>\r\n\r\n<h2>1/4/2004</h2>\r\n\r\n<p>Bệnh viện Mắt Sài Gòn Lê Thị Riêng &ndash; Bệnh viện đầu tiên thuộc hệ thống Mắt Sài Gòn ra đời tại địa chỉ số 100 Lê Thị Riêng, Phường Phạm Ngũ Lão, Quận 1, TP.Hồ Chí Minh.</p>\r\n', 0, '', 0),
(13, 1, 5, 'Cô Gái Trung Hoa “Lương Bích Hữu” Và Hành Trình Xóa Cận', 'Bích Hữu hạnh phúc chia sẻ: “Sau nhiều năm làm bạn với cặp kính cận, giờ Hữu đã có thể say bye với nó. Mắt Hữu giờ sáng rực như viên kim cương vậy đó, nhìn gì cũng rõ.”\r\n\r\n', 'co-gai-trung-hoa-luong-bich-huu-va-hanh-trinh-xoa-can-1', 1, '2022-11-10 08:36:29', '2022-11-10 08:31:58', '2022-11-10 08:36:29', '<p><strong>Trên fanpage của mình, Lương Bích Hữu chia sẻ với fan:</strong></p>\r\n\r\n<p>Hôm bữa thấy có nhiều bạn hỏi Hữu xóa cận ở đâu? Có đau ko? Sau khi m.ổ xong nghỉ dưỡng 3 ngày là Hữu có thể sử dụng lại điện thoại, máy tính, làm việc bình thường nhưng vẫn hạn chế để mắt được nghỉ ngơi nhanh hồi phục hơn nên là sau hơn 1 tháng m.ổ cận Hữu thấy mọi thứ okay nên lên chia sẻ kinh nghiệm cho các bạn về quá trình Hữu phẫu thuật. Điều đặc biệt nằm ở cuối bài viết/loạt hình, mọi người nhớ xem hết nhé!</p>\r\n\r\n<p>Đối với Hữu, đôi mắt rất quan trọng nên đã tìm hiểu kĩ và chọn m.ổ mắt cận ở Trung tâm nhãn khoa Eagle Eye Centre VietNam (EEC), đây là sự hợp tác hoàn hảo giữa chuẩn mực chất lượng y tế của Singapore &ndash; quốc gia đứng thứ 2 trong Top 16 quốc gia có hệ thống y tế tốt nhất thế giới và kinh nghiệm dày dặn của bác sĩ đầu ngành tại Hệ Thống Bệnh Viện Mắt Sài Gòn</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><img alt=\"\" src=\"https://www.matsaigon.com/wp-content/uploads/214835260_2890721261169819_2873633423773087008_n.jpg\" /></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Vì công việc Hữu bận rộn không có nhiều thời gian nên Hữu rất thích EEC có quy trình &ldquo;Zero Waiting Time&rdquo; với hệ thống đặt lịch khám và phẫu thuật không chờ. Vừa vô là Hữu được phục vụ liền luôn. Hữu cảm thấy quy trình nhanh, cam kết khám 100 phút, phẫu thuật 10-15 phút là đúng y chang! Không phải nhanh là ẩu nha, bác sĩ và điều dưỡng rất kỹ, tư vấn rất tận tình luôn. Mới đầu là thấy hài lòng rồi á.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><img alt=\"\" src=\"https://www.matsaigon.com/wp-content/uploads/214978612_2890723974502881_67479982402659111_n-1024x681.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" src=\"https://www.matsaigon.com/wp-content/uploads/214738429_2890726737835938_5588932364231675033_n-1024x681.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" src=\"https://www.matsaigon.com/wp-content/uploads/214860002_2890722121169733_8774352138603321694_n-1.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" src=\"https://www.matsaigon.com/wp-content/uploads/214791777_2890725414502737_5655379274983701730_n-1024x648.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" src=\"https://www.matsaigon.com/wp-content/uploads/215035631_2890723061169639_7535735101777560832_n-1024x732.jpg\" /></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Khi Hữu đến EEC được Thạc sĩ/Bác sĩ Lê Nguyễn Huy Cường trưởng khoa Lasik trực tiếp thăm khám và phẫu thuật cho Hữu. Bác rất chu đáo, tận tình tư vấn. Bác sĩ Cường nhìn rất là phúc hậu, thân thiện. Bác tư vấn lâu, rất dễ hiểu, giải thích cho Hữu biết các phương pháp có ưu điểm khác nhau thế nào, phương pháp nào phù hợp với mắt của Hữu. Nghe mấy bạn điều dưỡng giới thiệu bác sĩ có hơn 17 năm kinh nghiệm, phẫu thuật cho 20.000 ca rồi đó nên Hữu rất yên tâm, tin tưởng ở bác và Hữu quyết định chọn phương pháp ReLEx Smile tại vì có nhiều ưu điểm quá:</p>\r\n\r\n<p>&ndash; Ít nguy cơ tái cận nhất trong các phương pháp.</p>\r\n\r\n<p>&ndash; Thời gian hồi phục nhanh, hậu phẫu nhẹ nhàng, sau 2h là hết các triệu chứng khó chịu.</p>\r\n\r\n<p>&ndash; Ít nguy cơ khô mắt, viêm nhiễm nhất trong các phương pháp.</p>\r\n\r\n<p>&ndash; Vết phẫu thuật siêu nhỏ 2-4mm giúp bảo tồn cấu trúc giác mạc.&nbsp;</p>\r\n\r\n<p>Bác sĩ Cường cũng giới thiệu cho Hữu biết máy móc nào sẽ sử dụng m.ổ mắt cận cho Hữu. Hữu xem thấy máy khám và m.ổ đều rất xịn, mới. Máy m.ổ là Visumax đời 2020, dòng máy hiện đại nhất trên thế giới. EEC Vietnam là đơn vị duy nhất có máy này đó nha! Từ nhỏ đến lớn, đây là lần đầu Hữu m.ổ mắt nên Hữu cũng lo và hồi hộp, mà nguyên ekip từ bác sĩ đến điều dưỡng đều dễ thương. Bác sĩ thì trước khi làm gì cũng nói cho mình biết, để mình đỡ lo, thỉnh thoảng trấn an &ldquo;ko sao đâu, sắp xong rồi, em làm rất tốt&rdquo;. Còn điều dưỡng thì cho mình 1 con gấu bông cầm nè, đỡ mình nằm xuống, đứng lên, nắm tay mình lúc thấy mình hồi hộp quá nữa. Đến lúc m.ổ thì bác sĩ thao tác rất nhanh, mắt có hơi căng tức 1 chút nhưng tuyệt đối không đau! M.ổ xong Hữu rất ưng và cảm thấy quá trình m.ổ rất ấn tượng vì máy móc &amp; sự dễ thương của ekip mổ.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><img alt=\"\" src=\"https://www.matsaigon.com/wp-content/uploads/214996545_2890725087836103_6255879369697258707_n-1024x659.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" src=\"https://www.matsaigon.com/wp-content/uploads/214819959_2890728231169122_6955323050419395237_n-1024x681.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" src=\"https://www.matsaigon.com/wp-content/uploads/215332928_2890729941168951_9210672416835536082_n-723x1024.jpg\" /></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Ngoài sự tận tình chăm sóc, Hữu được trải nghiệm chất lượng dịch vụ chuẩn Sing đúng là 5 sao nên làm Hữu cảm thấy rất hài lòng ở chỗ là:</p>\r\n\r\n<p>&ndash; Ngày mổ có xe đón mình tới phòng khám và đưa về nè.</p>\r\n\r\n<p>&ndash; Tất cả các lần tái khám trong 1 năm đều miễn phí.</p>\r\n\r\n<p>&ndash; Hữu được tặng 1 bộ quà rất dễ thương. Có gấu bông &amp; kính đeo mắt ban đêm. Thường các nơi khác họ cho mình cái kính nhựa, phải đeo lúc ngủ, cấn lắm (trước khi quyết định chọn EEC thì Hữu cũng đã tham khảo review các nơi khác rồi nhé). Hữu đeo kính của EEC mềm, thoải mái.</p>\r\n\r\n<p>&ndash; Đặc biệt nữa là chính sách đồng hành đến tận 3 năm lận nha. Nếu trong trường hợp ai bị tái cận do cơ địa thì EEC sẽ chiếu laser bổ sung miễn phí 100% luôn. Tiết kiệm chi phí quá trời.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.matsaigon.com/wp-content/uploads/214961013_2890731627835449_3749510866381845595_n-1-768x1024.jpg\" /></p>\r\n\r\n<p>Hữu xin chân thành cám ơn đội ngũ y bác sỹ Trung tâm nhãn khoa Eagle Eye Centre Vietnam đã giúp Hữu lấy lại thị lực mà Hữu hằng mong ước.</p>\r\n', 0, '214961013_2890731627835449_3749510866381845595_n-1-768x1024.webp', 0),
(14, 1, 5, 'Ca Sĩ Nguyên Hà – Giọng Ca Của Thanh Xuân Chính Thức Nói Lời Tạm Biệt “Kính Cận”', 'Ca Sĩ Nguyên Hà – Giọng Ca Của Thanh Xuân Chính Thức Nói Lời Tạm Biệt “Kính Cận”\r\n', 'ca-si-nguyen-ha-giong-ca-cua-thanh-xuan-chinh-thuc-noi-loi-tam-biet-kinh-can-', 1, '2022-11-10 09:01:15', '2022-11-10 09:01:15', '2022-11-10 09:01:15', '<p>Xuất phát là sinh viên kiến trúc, cặp kiếng cận dường như trở thành 1 phần chẳng thể thiếu trong suốt quãng đời sinh viên của Hà. Mắt Hà cận gần 4 độ và kèm loạn thị</p>\r\n\r\n<p>Kể từ khi duyên &ldquo;nghề chọn người&rdquo; &ndash; chính thức bước chân vào con đường ca hát chuyên nghiệp, cặp kính lại mang đến nhiều bất tiện cho Hà mỗi lần make up đi diễn hay những lúc bước ra dưới ánh đèn sân khấu.</p>\r\n\r\n<p>Hà cũng chia sẻ: Mấy anh chị em trong nghề cũng bảo không nên lạm dụng đeo kính áp tròng nữa vì rất dễ làm xước hay rách giác mạc nên Hà cũng bắt đầu lo.</p>\r\n\r\n<p>Vốn là người chỉnh chu và có cá tính âm nhạc riêng, Nguyên Hà luôn mong muốn cống hiến trọn vẹn cũng như mang đến những hình ảnh đẹp nhất trong mắt người hâm mộ.</p>\r\n\r\n<p>Thế là từ đó, Hà đã quyết tâm sắp xếp lại công việc, đi xóa cận ngay và luôn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.matsaigon.com/wp-content/uploads/185399208_2855333261375286_8193988703261842241_n.jpg\" /></p>\r\n\r\n<p>Qua sự giới thiệu của bạn bè, đồng nghiệp thân cận đã từng mổ cận, Hà đã tin tưởng và lựa chọn Bệnh viện Mắt Sài Gòn để phẫu thuật xóa cận với ReLEx SMILE &ndash;&nbsp; phương pháp phẫu thuật hiện đại nhất trên thị trường hiện nay.</p>\r\n\r\n<p>Dưới sự thăm khám tận tình của Bác sĩ Trưởng khoa Phẫu thuật khúc xạ Trương Công Minh, rất may mắn là giác mạc của Hà phù hợp với phương pháp SMILE.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><img alt=\"\" src=\"https://www.matsaigon.com/wp-content/uploads/186474617_2855334578041821_2230926643512474381_n.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" src=\"https://www.matsaigon.com/wp-content/uploads/186491315_2855334528041826_3142330777621031312_n.jpg\" /></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Chỉ sau 3 ngày nghỉ ngơi, thị lực của Hà đã phục hồi rất tốt ở mức 10/10 rồi.</p>\r\n\r\n<p>Một lần nữa Chúc mừng Nguyên Hà đã cầm chắc tấm vé đến thế giới tầm nhìn full HD.</p>\r\n', 0, '314120431_123378993882778_97909100783360007_n.jpg', 0),
(15, 1, 7, 'HỆ THỐNG BỆNH VIỆN', 'Là hệ thống bệnh viện chuyên khoa mắt ngoài công lập lớn nhất Việt Nam, hệ thống Mắt Sài Gòn hiện có 8 bệnh viện từ Bắc vào Nam, thuận tiện cho nhu cầu khám và điều trị của khách hàng ở khắp mọi miền đất nước.\r\n', 'he-thong-benh-vien-1', 1, '2022-11-10 21:16:39', '2022-11-10 21:16:05', '2022-11-10 21:16:39', '<p>Là hệ thống bệnh viện chuyên khoa mắt ngoài công lập lớn nhất Việt Nam, hệ thống Mắt Sài Gòn hiện có 8 bệnh viện từ Bắc vào Nam, thuận tiện cho nhu cầu khám và điều trị của khách hàng ở khắp mọi miền đất nước.<br />\r\n&nbsp;</p>\r\n', 0, '9002_zzlx.jpg', 0),
(16, 1, 7, 'Đội ngũ bác sĩ', 'Đội ngũ bác sĩ', 'doi-ngu-bac-si', 1, '2022-11-10 21:17:25', '2022-11-10 21:17:25', '2022-11-10 21:17:25', '<p>Đội ngũ bác sĩ</p>\r\n', 0, '', 0),
(17, 1, 7, 'TRANG THIẾT BỊ', 'TRANG THIẾT BỊ\r\n', 'trang-thiet-bi', 1, '2022-11-10 21:17:51', '2022-11-10 21:17:51', '2022-11-10 21:17:51', '<h1>TRANG THIẾT BỊ</h1>\r\n', 0, 'wp6520311-ipad-4k-wallpapers.jpg', 0),
(18, 1, 7, 'THƯ VIỆN HÌNH & VIDEO', 'THƯ VIỆN HÌNH & VIDEO\r\n', 'thu-vien-hinh-video', 1, '2022-11-10 21:18:20', '2022-11-10 21:18:20', '2022-11-10 21:18:20', '<h1>THƯ VIỆN HÌNH &amp; VIDEO</h1>\r\n', 0, '', 0),
(19, 1, 10, 'khám mắt', 'khám mắt', 'kham-mat-1', 1, '2022-11-10 22:41:38', '2022-11-10 21:19:11', '2022-11-10 22:41:38', '<p>khám mắt</p>\r\n', 0, 'bac-si-chuyen-nganh-thiet-bi-noi-soi-hien-dai-1-1024x683.jpeg', 0),
(21, 1, 10, 'Điều trị tật khúc xạ', 'Điều trị tật khúc xạ', 'dieu-tri-tat-khuc-xa-1', 1, '2022-11-10 22:42:06', '2022-11-10 21:21:17', '2022-11-10 22:42:06', '<p>Điều trị tật khúc xạ</p>\r\n', 0, 'KEO_5821-1.jpg', 0),
(22, 1, 10, 'Đục thủy tinh thể', 'Đục thủy tinh thể', 'duc-thuy-tinh-the-1', 1, '2022-11-10 22:42:41', '2022-11-10 21:21:31', '2022-11-10 22:42:41', '<p>Đục thủy tinh thể</p>\r\n', 0, 'benh_vien_K_co_so_Phan_CHu_Trinh_1_.jpg', 0),
(23, 1, 10, 'Lé mắt', 'Lé mắt', 'le-mat-1', 1, '2022-11-10 22:43:12', '2022-11-10 21:21:40', '2022-11-10 22:43:12', '<p>Lé mắt</p>\r\n', 0, 'kinh-nghiem-mo-phong-kham-tu-nhan-700x467.jpg', 0),
(24, 1, 10, 'Bệnh về mắt khác', 'Bệnh về mắt khác', 'benh-ve-mat-khac-1', 1, '2022-11-10 22:43:38', '2022-11-10 21:22:01', '2022-11-10 22:43:38', '<p>Bệnh về mắt khác</p>\r\n', 0, 'Thu-Tuc-Dieu-Kien-Mo-Phong-Kham-Phau-Thuat-Tham-My-2021.jpg', 0),
(25, 1, 11, 'Thông tin thanh toán', 'Thông tin thanh toán', 'thong-tin-thanh-toan', 1, '2022-11-10 21:27:58', '2022-11-10 21:27:58', '2022-11-10 21:27:58', '<p>Thông tin thanh toán</p>\r\n', 0, '', 0),
(26, 1, 11, 'Thông tin bảo hiểm', 'Thông tin bảo hiểm', 'thong-tin-bao-hiem', 1, '2022-11-10 21:28:21', '2022-11-10 21:28:21', '2022-11-10 21:28:21', '<p>Thông tin bảo hiểm</p>\r\n', 0, '', 0),
(27, 1, 11, 'Bí quyết mắt khỏe', 'Bí quyết mắt khỏe', 'bi-quyet-mat-khoe', 1, '2022-11-10 21:28:35', '2022-11-10 21:28:35', '2022-11-10 21:28:35', '<p>Bí quyết mắt khỏe</p>\r\n', 0, '', 0),
(28, 1, 10, 'Phẫu thuật ghép giác mạc', 'Phẫu thuật ghép giác mạc', 'phau-thuat-ghep-giac-mac', 1, '2022-11-10 22:40:11', '2022-11-10 22:40:11', '2022-11-10 22:40:11', '<p>Phẫu thuật ghép giác mạc</p>\r\n', 0, '9002_zzlx_1.jpg', 0);

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
(112, 10, 'shopcategory', 'Laptop', 'Các dòng máy tính phục vụ văn phòng, dùng cho thiết kế đồ họa hoặc kiến trúc sư'),
(113, 11, 'shopcategory', 'Laptop gaming', 'Các dòng máy tính cho game thủ'),
(114, 12, 'shopcategory', 'Robot hút bụi', 'Robot hút bụi'),
(115, 13, 'shopcategory', 'Máy lọc nước', 'Máy lọc nước'),
(116, 48, 'product', 'Imac 2014', 'Imac 2014'),
(117, 49, 'product', 'Fujisu lifebook uh75/k', 'Fujisu lifebook uh75/k'),
(118, 50, 'product', 'HP Gaming 15-CX0054TX', 'HP Gaming 15-CX0054TX'),
(119, 51, 'product', 'Nec Lavie', 'Nec Lavie'),
(120, 52, 'product', 'Toshiba T75 (trắng)', 'Toshiba T75 (trắng)'),
(121, 53, 'product', 'Fujisu lifebook nh77/cd', 'Fujisu lifebook nh77/cd'),
(122, 54, 'product', 'Imac 2010 21inch', 'Imac 2010 21inch'),
(123, 55, 'product', 'Imac 2010 27inch', 'Imac 2010 27inch'),
(124, 56, 'product', 'Nec Lavie PC-GN16CJSAA', 'Nec Lavie PC-GN16CJSAA'),
(125, 57, 'product', 'Fujitsu MV Biblo', 'Fujitsu MV Biblo'),
(126, 58, 'product', 'Toshiba T75/AWS', 'Toshiba T75/AWS'),
(127, 59, 'product', 'Toshiba core2', 'Toshiba core2'),
(128, 60, 'product', 'Case Mac Pro', 'Case Mac Pro'),
(129, 61, 'product', 'Dell 5458', 'Dell 5458'),
(130, 62, 'product', 'Nec Lavie PC-GN16', 'Nec Lavie PC-GN16'),
(131, 63, 'product', 'Imac late 2013', 'Imac late 2013'),
(132, 64, 'product', 'HP Envy 17', 'HP Envy 17'),
(133, 65, 'product', 'Nec Lavie đen', 'Nec Lavie đen'),
(134, 66, 'product', 'Nec Lavie LS150', 'Nec Lavie LS150'),
(135, 67, 'product', 'Nec Lavie LX850/L', 'Nec Lavie LX850/L'),
(136, 68, 'product', 'Toshiba B65', 'Toshiba B65'),
(137, 69, 'product', 'HP Probook 450 G7', 'HP Probook 450 G7'),
(138, 70, 'product', 'HP Probook 450 G3', 'HP Probook 450 G3'),
(139, 71, 'product', 'Nec Versapro PK-VK22', 'Nec Versapro PK-VK22'),
(140, 72, 'product', 'Tosshiba B65/y', 'Tosshiba B65/y'),
(141, 73, 'product', 'Tosshiba B65/r', 'Tosshiba B65/r'),
(142, 74, 'product', 'Dell Inspiron 15 7567 Gaming', 'Dell Inspiron 15 7567 Gaming'),
(143, 75, 'product', 'MSI GP75 Leopard 9SD', 'MSI GP75 Leopard 9SD'),
(144, 76, 'product', 'Fujisu LIFEBOOK AH53/E3', 'Fujisu LIFEBOOK AH53/E3'),
(145, 77, 'product', 'MouseComputer BC-GTUNEI77G16N1', 'MouseComputer BC-GTUNEI77G16N1'),
(146, 78, 'product', 'Lenovo Legion Y7000', 'Lenovo Legion Y7000'),
(147, 79, 'product', 'Dell G3', 'Dell G3'),
(148, 80, 'product', 'THIRDWAVE GALLERIA QSF960HE', 'THIRDWAVE GALLERIA QSF960HE'),
(149, 81, 'product', 'Acer Nitro 5 AN515-52', 'Acer Nitro 5 AN515-52'),
(150, 82, 'product', 'GR1650RGF-T THIRDWAVE Thirdwave', 'GR1650RGF-T THIRDWAVE Thirdwave'),
(151, 83, 'product', 'Dell XPS 9310', 'Dell XPS 9310'),
(152, 84, 'product', '', ''),
(153, 85, 'product', 'Laptop Workstation Cũ HP Zbook 15 G3 - Intel Core i7 / Xeon', 'Laptop Workstation Cũ HP Zbook 15 G3 - Intel Core i7 / Xeon'),
(154, 1, 'page', 'Giới thiệu', 'Giới thiệu'),
(155, 2, 'page', 'Liên hệ', 'Liên hệ'),
(156, 3, 'page', 'Chính sách đổi trả', 'Chính sách đổi trả'),
(157, 4, 'page', 'Hướng dẫn đặt hàng', 'Hướng dẫn đặt hàng'),
(158, 5, 'category', 'Tin khuyến mại', 'Tin khuyến mại'),
(159, 6, 'category', 'Tin tuyển dụng', 'Tin tuyển dụng'),
(160, 7, 'category', 'Giới thiệu về chúng tôi', 'Giới thiệu về chúng tôi'),
(161, 8, 'category', 'Tin tức', 'Tin tức'),
(162, 12, 'post', 'Giới thiệu chung', 'Giới thiệu chung'),
(163, 13, 'post', 'Cô Gái Trung Hoa “Lương Bích Hữu” Và Hành Trình Xóa Cận', 'Cô Gái Trung Hoa “Lương Bích Hữu” Và Hành Trình Xóa Cận'),
(164, 14, 'post', 'Ca Sĩ Nguyên Hà – Giọng Ca Của Thanh Xuân Chính Thức Nói Lời Tạm Biệt “Kính Cận”', 'Ca Sĩ Nguyên Hà – Giọng Ca Của Thanh Xuân Chính Thức Nói Lời Tạm Biệt “Kính Cận”'),
(165, 9, 'category', 'Chuyện của những đôi mắt khỏe', 'Chuyện của những đôi mắt khỏe'),
(166, 15, 'post', 'HỆ THỐNG BỆNH VIỆN', 'HỆ THỐNG BỆNH VIỆN'),
(167, 16, 'post', 'Đội ngũ bác sĩ', 'Đội ngũ bác sĩ'),
(168, 17, 'post', 'TRANG THIẾT BỊ', 'TRANG THIẾT BỊ\r\n'),
(169, 18, 'post', 'THƯ VIỆN HÌNH & VIDEO', 'THƯ VIỆN HÌNH & VIDEO\r\n'),
(170, 10, 'category', 'dịch vụ', 'dịch vụ'),
(171, 19, 'post', 'khám mắt', 'khám mắt'),
(172, 20, 'post', 'Khám mắt', 'Khám mắt'),
(173, 21, 'post', 'Điều trị tật khúc xạ', 'Điều trị tật khúc xạ'),
(174, 22, 'post', 'Đục thủy tinh thể', 'Đục thủy tinh thể'),
(175, 23, 'post', 'Lé mắt', 'Lé mắt'),
(176, 24, 'post', 'Bệnh về mắt khác', 'Bệnh về mắt khác'),
(177, 11, 'category', 'Hướng dẫn khách hàng', 'Hướng dẫn khách hàng'),
(178, 25, 'post', 'Thông tin thanh toán', 'Thông tin thanh toán'),
(179, 26, 'post', 'Thông tin bảo hiểm', 'Thông tin bảo hiểm'),
(180, 27, 'post', 'Bí quyết mắt khỏe', 'Bí quyết mắt khỏe'),
(181, 28, 'post', 'Phẫu thuật ghép giác mạc', 'Phẫu thuật ghép giác mạc');

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
(1, 'Mang thế giới công nghệ đến với bạn', 'Macstore', 'https://www.facebook.com/vudinhchung193/', 'Screenshot_at_Feb_05_11-02-08.png'),
(2, 'Giảm 20% tất cả các sản phẩm', 'Mùa tựu trường', 'https://www.facebook.com/vudinhchung193/', 'Screenshot_at_Feb_05_11-02-58.png');

-- --------------------------------------------------------

--
-- Table structure for table `ui`
--

CREATE TABLE `ui` (
  `id` int(11) NOT NULL,
  `text_top_header` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ui`
--

INSERT INTO `ui` (`id`, `text_top_header`) VALUES
(1, 'Để  đặt hàng gọi ngay(0123) 456789');

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
(1, 'admin', 'admin', 'admin', 'chunghello193@gmail.com', '$2y$10$5JvFVM5SODATHcB58gRkrOgSPEZQqX7f/PgD493Q14.welZ464kMe', 'hi iam superadmin', '2022-11-10 21:11:53', '2022-03-20 05:03:04', '279525083_1618945645158258_4266030711208860908_n.jpg', 'admin', '', 0, '0000-00-00 00:00:00', 'chung193', 1, ''),
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
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ui`
--
ALTER TABLE `ui`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
