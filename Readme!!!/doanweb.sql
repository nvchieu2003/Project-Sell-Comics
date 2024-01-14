-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 10:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doanweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `baoloi`
--

CREATE TABLE `baoloi` (
  `hoten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `noidungbaoloi` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baoloi`
--

INSERT INTO `baoloi` (`hoten`, `email`, `sodienthoai`, `noidungbaoloi`, `id`) VALUES
('Danh Nguyễn Ánh Thư', 'dnathu.tt115@kgc.edu.vn', 385613069, 'Tôi không thể chọn số lượng đơn hàng được', 1),
('Nguyễn Huỳnh Thảo Như', 'nntnhu.tt115@kgc.edu.vn', 12345678, 'Web khá thân thiện và dễ sử dụng cho tôi', 26),
('Nguyễn Thành Trung', 'nttrung.tt115@kgc.edu.vn', 98765755, 'Web đôi khi bị giật lag!!\r\nÍt truyện, cần cập nhật thêm.', 27),
('Nguyễn Huỳnh Thảo Như', 'hajhgfdsa@gmail.com', 1, 'dởm', 28);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `tenmg` varchar(255) NOT NULL,
  `theloai` varchar(255) NOT NULL,
  `image` varchar(150) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gopy`
--

CREATE TABLE `gopy` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gopy`
--

INSERT INTO `gopy` (`id`, `user`, `noidung`) VALUES
(25, 'thu', 'hayyyy quaasssss à'),
(26, 'nvc', 'sản phẩm đẹp quá'),
(27, 'nvc', 'Mãi đỉnhhhhhhh'),
(28, 'nvc', 'Cũng okee'),
(29, 'nvc', 'okeeellaaa'),
(30, 'nvc', 'okeeellaaa'),
(31, 'nvc', 'được bạn ơi'),
(33, 'thu', 'Sản phẩm chất lượng lắm nhaaa'),
(34, 'hnhu', 'cũn đc'),
(35, 'nvc', 'hơi lag');

-- --------------------------------------------------------

--
-- Table structure for table `manga`
--

CREATE TABLE `manga` (
  `id` int(11) NOT NULL,
  `theloai` varchar(70) NOT NULL,
  `tenmg` varchar(100) NOT NULL,
  `image` varchar(130) NOT NULL,
  `gia` int(11) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manga`
--

INSERT INTO `manga` (`id`, `theloai`, `tenmg`, `image`, `gia`, `mota`) VALUES
(1, 'Tình cảm, học đường', 'Sổ tay bạch liên hoa lừa người', 'image/72.jpg', 200, '<table width=\"779\" height=\"664\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\">\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Tên Manga:</div></td>\r\n			<td width=\"523\"><div align=\"left\">Sổ tay bạch liên hoa lừa người</div></td>\r\n		</tr>\r\n        <br>\r\n<tr></tr>\r\n		<tr align=\"center\" style=\"margin-top: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Thể loại:</div></td>\r\n			<td><div align=\"left\">Tình cảm, học đường</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-top: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Xuất xứ</div></td>\r\n			<td><div align=\"left\">Trung Quốc</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-top: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Nh&agrave; xuất bản:</div></td>\r\n			<td><div align=\"left\">Kim Đồng</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Trạng th&aacute;i:</div></td>\r\n			<td><div align=\"left\">C&ograve;n h&agrave;ng (1023)</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Nh&agrave; b&aacute;n h&agrave;ng:</div></td>\r\n			<td><div align=\"left\">The Star Of Begin</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Địa điểm:</div></td>\r\n			<td><div align=\"left\">Rạch Gi&aacute; - Ki&ecirc;n Giang</div></td>\r\n		</tr>\r\n<tr></tr><br><br><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\" valign=\"top\">\r\n<br>\r\n			<td width=\"243\"><div align=\"left\">T&oacute;m Tắt Truyện:</div></td><br>\r\n			<td width=\"500\"><div align=\"left\"> ...Y&ecirc;u để viết về t&igrave;nh y&ecirc;u của con người chứ kh&ocirc;ng phải viết về c&aacute;i t&igrave;nh y&ecirc;u ri&ecirc;ng biệt ấy. C&oacute; lẽ xuất ph&aacute;t từ tư tưởng, quan niệm ấy, cộng với lối viết &quot;tưng tửng&quot;, nhất l&agrave; c&aacute;i kiểu xưng h&ocirc; &quot;&ocirc;ng&quot; v&agrave; &quot;em&quot; v&ocirc; c&ugrave;ng đặc biệt, vừa h&agrave;i hước vừa th&acirc;n t&igrave;nh, Đo&agrave;n Thạch Biền đ&atilde; chinh phục kh&ocirc;ng &iacute;t độc giả qua nhiều năm th&aacute;ng bằng những trang viết v&ocirc; c&ugrave;ng s&acirc;u lắng, trong đ&oacute; c&oacute; V&iacute; dụ ta y&ecirc;u nhau, T&ocirc;i thương m&agrave; em đ&acirc;u c&oacute; hay v&agrave; T&igrave;nh nhỏ l&agrave;m sao qu&ecirc;n.<br /> Nh&agrave; văn Đo&agrave;n Thạch Biền (b&uacute;t danh kh&aacute;c: Nguyễn Thanh Trịnh) t&ecirc;n khai sinh l&agrave; Phạm Đức Thịnh, sinh ng&agrave;y 10 th&aacute;ng 5 năm 1948, qu&ecirc; qu&aacute;n ở Nam Định. &Ocirc;ng dạy học, l&agrave;m b&aacute;o v&agrave; viết văn tại miền Nam từ trước năm 1975, nguy&ecirc;n ph&oacute;ng vi&ecirc;n b&aacute;o Người Lao Động, Thư k&yacute; to&agrave; soạn b&aacute;o Du Lịch Th&agrave;nh phố Hồ Ch&iacute; Minh; s&aacute;ng lập v&agrave; thực hiện tập san &Aacute;o Trắng, đỡ đầu cho nhiều c&acirc;y b&uacute;t trẻ mới v&agrave;o nghề. Đo&agrave;n Thạch Biền l&agrave; hội vi&ecirc;n Hội Nh&agrave; văn TP. Hồ Ch&iacute; Minh, hiện l&agrave; Uỷ vi&ecirc;n Chi hội Nh&agrave; văn Việt Nam tại Th&agrave;nh phố Hồ Ch&iacute; Minh. Một số t&aacute;c phẩm đ&atilde; xuất bản: V&iacute; dụ ta y&ecirc;u nhau, Bất ngờ ph&iacute;a tr&aacute;i tim, Phượng y&ecirc;u, Đừng đốt ch&aacute;y b&ocirc;ng hồng, T&ocirc;i thương m&agrave; em đ&acirc;u c&oacute; hay, T&ocirc;i hay m&agrave; em đ&acirc;u c&oacute; thương... (tập truyện ngắn); T&igrave;nh nhỏ l&agrave;m sao qu&ecirc;n, M&ugrave;a h&egrave; khắc nghiệt (truyện vừa); Những ng&agrave;y tươi đẹp (truyện d&agrave;i); Đ&ecirc;m của cỏ (tập kịch ngắn).</div></td>\r\n		</tr>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n		  <td>&nbsp;</td>\r\n		  <td>&nbsp;</td>\r\n	  </tr>\r\n</table>'),
(2, 'Tình cảm', 'Thời ngây thơ', 'image/73.jpg', 200, '<table width=\"779\" height=\"664\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\">\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Tên Manga:</div></td>\r\n			<td width=\"523\"><div align=\"left\">Thời ngây thơ</div></td>\r\n		</tr>\r\n        <br>\r\n<tr></tr>\r\n		<tr align=\"center\" style=\"margin-top: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Thể loại:</div></td>\r\n			<td><div align=\"left\">Tình cảm</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-top: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Xuất xứ</div></td>\r\n			<td><div align=\"left\">Hàn Quốc</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-top: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Nh&agrave; xuất bản:</div></td>\r\n			<td><div align=\"left\">Kim Đồng</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Trạng th&aacute;i:</div></td>\r\n			<td><div align=\"left\">C&ograve;n h&agrave;ng (1023)</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Nh&agrave; b&aacute;n h&agrave;ng:</div></td>\r\n			<td><div align=\"left\">The Star Of Begin</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Địa điểm:</div></td>\r\n			<td><div align=\"left\">Rạch Gi&aacute; - Ki&ecirc;n Giang</div></td>\r\n		</tr>\r\n<tr></tr><br><br><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\" valign=\"top\">\r\n<br>\r\n			<td width=\"243\"><div align=\"left\">T&oacute;m Tắt Truyện:</div></td><br>\r\n			<td width=\"500\"><div align=\"left\"> ...Thẩm Úc sau khi chết, ngoài ý muốn thấy một quyển sách, lúc đó Thẩm Úc bị nhốt ở một nơi xám xịt không rõ là nơi nào, chán đến chết.Xuất phát từ nhàm chán mà mở ra đồ vật duy nhất trong không gian ngoại trừ chính mình.\r\nĐó là một cuốn thoại bản, hành văn có hơi cụt ngủn,Thẩm Úc thử xem toàn bộ cuốn thoại bản, trong đầu không khỏi nảy ra hàng vạn câu thô tục.\r\nTrong thoại bản, hắn là một người chuyên môn làm việc ác, gây trở ngại cho tình cảm của vai chính, mà trong thoại bản vai chính lại là thứ đệ-người bị hắn đưa vào hậu cung của bạo quân-Thẩm Thanh Nhiên, còn công chính lại là Việt Vương Thương Quân Việt.\r\nVai chính Thẩm Thanh Nhiên mang theo trí nhớ đời trước mà đến, còn chưa kịp làm gì đã bị vai ác Thẩm Úc thiết kế đưa vào hậu cung của bạo quân, Cùng người yêu chia xa lại bị bạo quân tra tấn Thẩm Thanh Nhiên tính cách có thay đổi lớn, sau đó lại trải qua đủ chuyện cuối cùng thoát khỏi hoàng cung, cùng người yêu gặp lại, lại phát hiện bên cạnh người yêu đã có người khác.Người kia không ai khác ngoài kẻ thù của hắn- Thẩm Úc, Thẩm Thanh Nhiên âm thầm ly gián quan hệ của Thẩm Úc và Việt Vương.Vào đêm trước lúc Việt Vương đăng cơ dụ dỗ Việt Vương diệt trừ Thẩm Úc,rồi hai người trải qua cuộc sống tốt đẹp trọn đời.\r\nĐương nhiên, đây chỉ là kết cục trong sách, Thẩm Úc kiếp trước đã khiến Việt Vương chôn cùng.\r\nThoại bản lấy góc nhìn của Thẩm Thanh Nhiên để viết,nên rất nhiều việc so với trí nhớ Thẩm Úc không giống nhau.Giống là Thẩm Úc vì giúp Việt Vương đoạt quyền, trên tay dính đầy máu tươi.Điều này không được nhắc đến trong thoại bản.Còn việc Việt Vương xem hắn như một thế thân, Thẩm Úc bày tỏ chính mình cũng không biết từ khi nào mình lại biến thành thế thân.\r\nTưởng tượng đến việc Thương Quân Việt đem hắn trở thành thế thân của Thẩm Thanh Nhiên,Thẩm Úc liền ghê tởm đến không chịu được, chút tình cảm cuối cùng dành cho Việt Vương cũng hóa thành hư ảo..</div></td>\r\n		</tr>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n		  <td>&nbsp;</td>\r\n		  <td>&nbsp;</td>\r\n	  </tr>\r\n</table>'),
(3, 'Tình cảm', 'Vụng trộm', 'image/74.jpg', 200, ''),
(4, 'Phiêu lưu, hành động', 'Xin lỗi', 'image/71.jpg', 175, ''),
(5, 'Tình cảm, đấu tranh', 'Hai thế giới', 'image/64.jpg', 180, ''),
(6, 'Lịch sử, đời thường', 'Tiệm đồ cổ Crush', 'image/65.jpg', 200, ''),
(7, 'Phiêu lưu, hài hước', 'One Piece', 'image/6..jpg.jpg', 50, '<table width=\"779\" height=\"664\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\">\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Tên Manga:</div></td>\r\n			<td width=\"523\"><div align=\"left\">One Piece/div></td>\r\n		</tr>\r\n        <br>\r\n<tr></tr>\r\n		<tr align=\"center\" style=\"margin-top: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Thể loại:</div></td>\r\n			<td><div align=\"left\">Phiêu lưu, hài hước</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-top: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Xuất xứ</div></td>\r\n			<td><div align=\"left\">Nhật Bản</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-top: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Nh&agrave; xuất bản:</div></td>\r\n			<td><div align=\"left\">Kim Đồng</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Trạng th&aacute;i:</div></td>\r\n			<td><div align=\"left\">C&ograve;n h&agrave;ng (1023)</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Nh&agrave; b&aacute;n h&agrave;ng:</div></td>\r\n			<td><div align=\"left\">The Star Of Begin</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Địa điểm:</div></td>\r\n			<td><div align=\"left\">Rạch Gi&aacute; - Ki&ecirc;n Giang</div></td>\r\n		</tr>\r\n<tr></tr><br><br><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\" valign=\"top\">\r\n<br>\r\n			<td width=\"243\"><div align=\"left\">T&oacute;m Tắt Truyện:</div></td><br>\r\n			<td width=\"500\"><div align=\"left\"> ...Được Shanks truyền cảm hứng, Luffy quyết định sẽ khởi hành chuyến phiêu lưu nhắm đến mục đích trở thành Vua Hải Tặc. Đầu cuộc hành trình, cậu gặp Coby - cậu nhóc nhút nhát nhưng muốn trở thành Hải Quân. Họ cùng nhau vào thị trấn, gặp được Hải Quân Morgan Tay Rìu, con trai ông là Helmeppo và Thợ săn tiền thưởng Roronoa Zoro. Luffy và thuyền viên đầu tiên là Zoro đến thị trấn Orange. Tại đây họ gặp Nami - một miêu tặc và cực kỳ ghét hải tặc. Cả 3 hợp nhất để đánh bại Buggy the Clown, giải phóng thị trấn khỏi sự lộng hành của hắn. Sau khi Nami vào vai đồng đội với Luffy và Zoro với tư cách là hoa tiêu của băng, cả 3 đến một hòn đảo để tìm một chiếc thuyền. Tại đây, họ gặp một anh chàng chuyên nói dối tên là Usopp. Khi một âm mưu hiểm độc bị lộ tẩy, sự can đảm của Usopp được bộc lộ, cả nhóm Mũ Rơm cùng Usopp sẵn sàng để đánh bại băng hải tặc Mèo Đen. Usopp trở thành xạ thủ của băng Mũ Rơm. Trong hành trình tìm một đầu bếp cho băng, cả nhóm đã đến nhà hàng trên biển Baratie. Tuy nhiên, nhà hàng này đã bị băng hải tặc khét tiếng Don Krieg tấn công. Don Krieg vừa trở về từ Grand Line và muốn chiếm Baratie để làm phương tiện quay lại...Sau hai năm, nhóm Mũ Rơm cuối cùng đã có thể bắt đầu chuyến hành trình đến Đảo Người Cá. Khi một cư dân người cá tiên đoán rằng Luffy là kẻ phá hủy hòn đảo, nhóm Mũ Rơm lại rơi vào rắc rối. Sự việc tệ hơn khi một liên minh giữa Hody jones và Vander Decken IX được thiết lập nhằm đảo chính và tấn công vương quốc Ryugu...</div></td>\r\n		</tr>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n		  <td>&nbsp;</td>\r\n		  <td>&nbsp;</td>\r\n	  </tr>\r\n</table>'),
(8, 'Manwa, hành động', 'Trận chiến sinh tử', 'image/66.jpg', 180, ''),
(9, 'Trinh thám, hành động', 'Thám tử lừng danh Conan', 'image/75.jpg', 50, '<table width=\"779\" height=\"664\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\">\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Tên Manga:</div></td>\r\n			<td width=\"523\"><div align=\"left\">Thám tử lừng danh Conan</div></td>\r\n		</tr>\r\n        <br>\r\n<tr></tr>\r\n		<tr align=\"center\" style=\"margin-top: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Thể loại:</div></td>\r\n			<td><div align=\"left\">Trinh thám, hành động</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-top: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Xuất xứ</div></td>\r\n			<td><div align=\"left\">Nhật bản</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-top: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Nh&agrave; xuất bản:</div></td>\r\n			<td><div align=\"left\">Kim Đồng</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Trạng th&aacute;i:</div></td>\r\n			<td><div align=\"left\">C&ograve;n h&agrave;ng (1023)</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Nh&agrave; b&aacute;n h&agrave;ng:</div></td>\r\n			<td><div align=\"left\">The Star Of Begin</div></td>\r\n		</tr>\r\n<tr></tr><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n			<td width=\"243\"><div align=\"left\">Địa điểm:</div></td>\r\n			<td><div align=\"left\">Rạch Gi&aacute; - Ki&ecirc;n Giang</div></td>\r\n		</tr>\r\n<tr></tr><br><br><br>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\" valign=\"top\">\r\n<br>\r\n			<td width=\"243\"><div align=\"left\">T&oacute;m Tắt Truyện:</div></td><br>\r\n			<td width=\"500\"><div align=\"left\"> ...Mở đầu câu truyện, cậu học sinh trung học 17 tuổi Shinichi Kudo bị biến thành cậu bé Conan Edogawa. Shinichi trong phần đầu củaThám tử lừng danh Conan được miêu tả là một thám tử học đường xuất sắc. Trong một lần đi chơi công viên \"Miền Nhiệt đới\" với cô bạn từ thuở nhỏ Ran Mori, cậu tình cờ chứng kiến vụ một án giết người, Kishida - một hành khách trong trò chơi Chuyến tàu tốc hành đã bị giết một cách dã man. Cậu đã giúp cảnh sát làm sáng tỏ vụ án. Trên đường về nhà, cậu vô tình phát hiện một vụ làm ăn mờ ám của những người đàn ông mặc toàn đồ đen. Khi chúng phát hiện ra cậu, Shinichi đã bị đánh ngất đi. Sau đó những người đàn ông áo đen đó đã cho cậu uống một thứ thuốc độc chưa qua thử nghiệm là Apotoxin-4869 (APTX 4869) với mục đích thủ tiêu cậu. Tuy nhiên chất độc đã không giết chết Kudo. Khi tỉnh lại, cậu bàng hoàng nhận thấy mình đã bị teo nhỏ lại thành hình dạng của một cậu học sinh tiểu học.\r\n\r\nTheo lời khuyên của Tiến sĩ Hiroshi Agasa, Shinichi đã che giấu tung tích, để tránh việc Tổ chức Áo đen có thể phát hiện ra rằng cậu vẫn còn sống. Khi Ran hỏi tên cậu, Shinichi đã ghép \"Conan\" trong tên của Sir Arthur Conan Doyle và \"Edogawa\" trong tên của Edogawa Rampo, buột miệng nói ra tên mình là \"Conan Edogawa\". Tiến sĩ Agasa đã nói Conan là một người cháu của mình, nhưng hiện ông đang quá bận rộn không thể chăm sóc cho chú bé nên đã nhờ Ran trông nom Conan giúp mình. Ran nhận lời và từ đó Conan sống tại nhà của Ran tức văn phòng thám tử Mori, vừa che giấu thân phận vừa điều tra tung tích của Tổ chức Áo đen và tìm kiếm thuốc giải độc.\r\n\r\nCha của Ran, Kogoro Mori (Richard Moore) là một thám tử bất tài. Từ khi Conan giúp ông phá án, ông trở nên rất nổi tiếng với biệt danh \"Mori ngủ gật\". Vì bộ dạng bé nhỏ của Conan, cảnh sát chẳng mấy khi để tâm tới những phán đoán, suy luận của cậu bé. Conan, bằng cách bắn súng gây mê để cho ông Mori ngủ say, sau đó sử dụng thiết bị đổi giọng nói là chiếc nơ gắn trên cổ áo để giả giọng ông, đã giúp cảnh sát phá rất nhiều vụ án dưới danh nghĩa Mori. Cũng có lúc cậu gợi ý và dẫn dắt ông Mori tìm ra chìa khóa của vụ án hay phá án dưới danh nghĩa của Suzuki Sonoko, bạn thân của Ran.\r\n\r\nMột số nhân vật quan trọng khác xuất hiện về sau là cha mẹ của Shinichi, Yusaku (Booker) và Yukiko Kudo (Vivian), Heiji Hattori, một thám tử đến từ Osaka, Siêu trộm Kid, nhà sáng chế ra thuốc APTX 4869 - Sherry ( người của Tổ chức Áo đen, cũng bị biến thành một đứa trẻ sau khi uống chính loại thuốc độc mình đã sáng chế ra với hy vọng chạy trốn khỏi tổ chức), các thành viên của Tổ chức Áo đen: Gin, Vodka, Tequila, Calvados, Pisco, Vermouth, Kir, Chianti, Köln, Bourborn và một \"ông trùm\" bí ẩn chỉ được nhắc đến rất mơ hồ.\r\n\r\nĐể duy trì vỏ bọc bên ngoài, Conan đi học ở trường Tiểu học Teitan và kết bạn với ba đứa trẻ ở trường, Genta Kojima, Mitsuhiko Tsuburaya, và Ayumi Yoshida, lập ra Đội thám tử nhí lớp 1B(Detective Boys/Shōnen Tantei-dan - trong bản gốc). Bộ tứ đã có nhiều cuộc phiêu lưu với nhau và ba đứa trẻ đã cho thấy khả năng làm trợ lý thám tử ở tuổi của chúng. Sau này, Ai Haibara - tức Sherry cũng trở thành thành viên của đội thám tử nhí này.\r\n\r\nTrải qua nhiều vụ án, Conan khám phá ra rằng FBI và CIA cũng đang truy đuổi Tổ chức Áo đen. Cùng với các thành viên Áo đen đang dần dần lộ mặt, truyện xuất hiện thêm một số điệp viên của FBI và CIA như Shuichi Akai, Jodie Starling, James Black, Mizunashi Rena...</div></td>\r\n		</tr>\r\n		<tr align=\"center\" style=\"margin-bottom: 15px\">\r\n		  <td>&nbsp;</td>\r\n		  <td>&nbsp;</td>\r\n	  </tr>\r\n</table>'),
(10, 'Hành động, tình cảm', 'Bong bóng nước', 'image/67.jpg', 170, ''),
(11, 'Truyện màu, trinh thám', 'Phép thuật gương', 'image/68.jpg', 190, ''),
(12, 'Tình cảm, Drama', 'Người thép', 'image/69.jpg', 210, ''),
(13, 'Hành động', 'Cô gái nhảy cao', 'image/70.jpg', 170, ''),
(14, 'Bạn bè, Tình cảm', 'Tìm lại vương quốc', 'image/76.jpg', 185, ''),
(15, 'Chuyển sinh', 'Người chơi hồi quy', 'image/14.jpg.jpg', 170, ''),
(16, 'Gia đình', 'Ông trùm nấu ăn', 'image/77.jpg', 170, ''),
(17, 'Hành động', 'Chú thuật hồi chiến', 'image/16.jpg', 200, ''),
(18, 'Phiêu lưu, mạo hiểm', 'Thanh gươm diệt quỷ', 'image/17.jpg', 200, ''),
(19, 'Lịch sử, viễn tưởng', 'Gửi em, người bất tử', 'image/18.jpg', 200, ''),
(20, 'Tình cảm, học đường', 'Truyền thuyết Hyouka', 'image/19.jpg', 170, ''),
(21, 'Tình cảm', 'Thổ thần tập sự', 'image/20.jpg', 180, ''),
(22, 'Hành động', 'Người khổng lồ', 'image/21.jpg', 200, ''),
(23, 'Phiêu lưu, hài hước', 'Black Clouver', 'image/22.jpg', 50, ''),
(24, 'Phiêu lưu, hành động', 'Thuyết kiếm sư', 'image/23.jpg', 180, ''),
(25, 'Lịch sử, hành động', 'Inuyasha', 'image/24.jpg', 50, ''),
(26, 'Tình cảm, xuyên không', 'Your name?', 'image/25.jpg', 170, ''),
(27, 'Truyện màu, học đường', 'Tôi muốn ăn tủy cùng cậu', 'image/26.jpg', 190, ''),
(28, 'Tình cảm', 'Lướt sóng cùng em', 'image/27.jpg', 210, ''),
(29, 'Tình cảm, học đường', 'Dáng hình âm thanh', 'image/28.jpg', 170, ''),
(30, 'Bạn bè, tình cảm', 'Hydory', 'image/29.jpg', 185, ''),
(31, 'Tình cảm, học đường', 'Hoàng tử lang sói', 'image/30.jpg', 170, ''),
(32, 'Chuyển sinh, hành động', 'Ván bài sinh tử', 'image/31.jpg', 170, ''),
(33, 'Hành động, viễn tưởng', 'Chiến tranh Titan', 'image/32.jpg', 100, ''),
(34, 'Phiêu lưu', '7 viên ngọc rồng', 'image/33.jpg', 120, ''),
(35, 'Hành động, gia đình', 'SPY x Family', 'image/34.jpg', 180, ''),
(36, 'Tình cảm', 'Đứa con của thời tiết', 'image/35.jpg', 200, ''),
(37, 'Tình cảm, hài hước', 'Khi nàng thơ yêu', 'image/36.jpg', 70, ''),
(38, 'Viễn tưởng, movie', 'Công chúa tàn nhang', 'image/37.jpg', 150, ''),
(39, 'Khoa học', 'Gia đình sói', 'image/38.jpg', 50, ''),
(40, 'Tình cảm', 'Tôi đeo mặt nạ mèo', 'image/39.jpg', 150, ''),
(41, 'Gia đình, lịch sử', 'Mộ đom đóm', 'image/40.jpg', 200, ''),
(42, 'Viễn tưởng, khoa học', 'nhớ tôi', 'image/41.jpg', 130, ''),
(43, 'Tình cảm, lịch sử', 'Sóng vỗ', 'image/42.jpg', 100, ''),
(44, 'Viễn tưởng, phiêu lưu', 'Movie RED', 'image/43.jpg', 200, ''),
(45, 'Viễn tưởng', 'Doraemon:Cuộc chiến hành tinh tí hon', 'image/44.jpg', 150, ''),
(46, 'Lịch sử, gia đình', 'Vùng đất linh hồn', 'image/45.jpg', 180, ''),
(47, 'Hành động', 'Ngạ quỷ', 'image/46.jpg', 160, ''),
(48, 'Trinh thám', 'Death Note', 'image/47.jpg', 80, ''),
(49, 'Trinh thám', 'Phù thủy nhỏ', 'image/48.jpg', 170, ''),
(50, 'Gia đình', 'Về nhà thôi', 'image/49.jpg', 150, ''),
(51, 'Tình cảm, hài hước', '600 ngày cùng cậu', 'image/50.jpg', 100, ''),
(52, 'Viễn tưởng, phiêu lưu', 'Swot Art Online', 'image/51.jpg', 180, ''),
(53, 'Võ thuật, hành động', 'One Punch Man', 'image/52.jpg', 70, ''),
(54, 'Tình cảm, bạn bè', 'Tháng 4 là lời nói dối của em', 'image/53.jpg', 140, ''),
(55, 'Hành động', 'Chiến thôi', 'image/54.jpg', 100, ''),
(56, 'Tình cảm, lịch sử', 'Nàng công chúa tóc đỏ', 'image/55.jpg', 160, ''),
(57, 'Gia đình', 'Đầu bếp Soma', 'image/56.jpg', 80, ''),
(58, 'Viễn tưởng, tình cảm', '12 con giáp', 'image/57.jpg', 120, ''),
(59, 'Tình cảm, lịch sử', 'Cuốn theo chiều gió', 'image/58.jpg', 150, ''),
(60, 'Âm nhạc, hành động', 'Dets of Testyni', 'image/59.jpg', 130, ''),
(61, 'Bạn bè', 'Chỉ có thể là bạn', 'image/60.jpg', 140, ''),
(62, 'Khoa học, lịch sử', 'DR.Stone', 'image/61.jpg', 200, ''),
(63, 'Gia đình', 'Về nhà thôi 2', 'image/62.jpg', 150, ''),
(64, 'Tình cảm', 'Thế giới diệu kì', 'image/63.jpg', 120, '');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `ghichu` varchar(15) NOT NULL,
  `tendn` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `hoten`, `email`, `matkhau`, `ghichu`, `tendn`) VALUES
(22, 'Nguyễn Văn Chiều', 'nvchieu.tt115@kgc.edu.vn', '202cb962ac59075b964b07152d234b70', '', 'nvc'),
(23, 'Nguyễn Ngọc Minh Thư', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', '', 'thu'),
(26, 'Chieu', 'hajhgfdsa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 'chieuadmin'),
(27, 'Minh Thư', 'jfgjdghdgfadg@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 'thuadmin'),
(28, 'nguyễn huỳnh thảo như', 'hnhu@gmail.com', '289dff07669d7a23de0ef88d2f7129e7', '', 'hnhu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baoloi`
--
ALTER TABLE `baoloi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gopy`
--
ALTER TABLE `gopy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baoloi`
--
ALTER TABLE `baoloi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `gopy`
--
ALTER TABLE `gopy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `manga`
--
ALTER TABLE `manga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
