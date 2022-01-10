-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:4306
-- Thời gian đã tạo: Th1 09, 2022 lúc 04:51 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `carfault`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi`
--

CREATE TABLE `cauhoi` (
  `id` int(11) NOT NULL,
  `cauhoi` varchar(1000) DEFAULT NULL,
  `trongso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cauhoi`
--

INSERT INTO `cauhoi` (`id`, `cauhoi`, `trongso`) VALUES
(1, 'Hãng xe', 1),
(2, 'Mẫu xe', 1),
(3, 'Đời xe', 1),
(4, 'Lỗi liên quan đến hệ thống Phanh', 6),
(5, 'Tuổi thọ má phanh', 5),
(6, 'Xe bị cản khi thả phanh', 5),
(7, 'Mức dầu phanh', 5),
(8, 'Tuổi thọ acquy', 5),
(9, 'Tuổi thọ bugi', 5),
(10, 'Tiếng động lạ trong khoang máy', 5),
(11, 'Mức xăng của bầu phao', 5),
(12, 'Tuổi thọ máy phát điện', 5),
(13, 'Đèn pha ô tô', 5),
(14, 'Ổ cắm cấp điện không', 5),
(15, 'Tiếng kêu lạ lúc đề của ô tô', 5),
(16, 'Ô tô khi đi đường phẳng', 5),
(17, 'Khung xe khi qua đường nhấp nhô', 5),
(18, 'Tình trạng lốp', 5),
(19, 'Lỗi liên quan đến hệ thống Động Cơ', 6),
(20, 'Lỗi liên quan đến hệ thống Điện', 6),
(21, 'Lỗi liên quan đến hệ thống Khí Thải', 6),
(22, 'Lỗi liên quan đến hệ thống Truyền Lực', 6),
(23, 'Lỗi liên quan đến hệ thống Chuyển Động', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cautraloi`
--

CREATE TABLE `cautraloi` (
  `id` int(11) NOT NULL,
  `cautraloi` varchar(1000) DEFAULT NULL,
  `idcauhoi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cautraloi`
--

INSERT INTO `cautraloi` (`id`, `cautraloi`, `idcauhoi`) VALUES
(1, 'Toyota', 1),
(2, 'Honda', 1),
(3, 'KIA', 1),
(4, 'Cadillac', 1),
(5, 'Vios', 2),
(6, 'Camry', 2),
(7, 'CRV', 2),
(8, 'Civic', 2),
(9, 'Morning', 2),
(10, 'Land Cruiser', 2),
(11, 'Yaris', 2),
(12, 'Serato', 2),
(13, 'CTS', 2),
(14, '2009', 3),
(15, '2010', 3),
(16, '2011', 3),
(17, '2012', 3),
(18, '2013', 3),
(19, '2014', 3),
(20, '2015', 3),
(21, '2016', 3),
(22, '2017', 3),
(23, 'Phanh bị kêu', 4),
(24, 'Phanh bị nặng', 4),
(25, 'xe mất phanh, đạp không ăn', 4),
(26, 'Rung giật khi đạp phanh', 4),
(27, 'Phanh bó', 4),
(28, 'Khi phanh xe, xe bị kéo lệch về một bên', 4),
(29, 'Nhỏ hơn 100000km', 5),
(30, 'Lớn hơn 100000km', 5),
(31, 'Nhỏ hơn 100000km', 5),
(32, 'Lớn hơn 100000km', 5),
(33, 'Nhỏ hơn 100000km', 5),
(34, 'Lớn hơn 100000km', 5),
(35, 'Nhỏ hơn 100000km', 5),
(36, 'Lớn hơn 100000km', 5),
(37, 'Nhỏ hơn 100000km', 5),
(38, 'Nhỏ hơn 100000km', 5),
(39, 'Nhỏ hơn 100000km', 5),
(40, 'không', 6),
(41, 'có', 6),
(42, 'bình thường', 7),
(43, 'thấp', 7),
(44, 'Lớn hơn 5 năm', 8),
(45, 'Nhỏ hơn 5 năm', 8),
(46, 'Lớn hơn 7 năm', 9),
(47, 'Nhỏ hơn 7 năm', 9),
(48, 'Có', 10),
(49, 'Không', 10),
(50, 'Tiêu chuẩn', 11),
(51, 'Cao', 11),
(52, 'Thấp', 11),
(53, 'Động cơ không nổ', 19),
(54, 'Động cơ có hiện tượng chết máy', 19),
(55, 'Động cơ nóng bất thường', 19),
(56, 'Chevrolet', 1),
(57, 'Ford', 1),
(58, 'Dodge', 1),
(59, 'Hyundai', 1),
(60, 'Audi', 1),
(61, 'Malibu', 2),
(62, 'F-150', 2),
(63, 'Durange', 2),
(64, 'Elantra', 2),
(65, 'A7 Quattro', 2),
(66, 'Suzuki', 1),
(67, 'Innova', 2),
(68, 'Swift', 2),
(69, 'Xe chết hoàn toàn', 20),
(70, 'Còi điện, xi nhan không hoạt động khi cần sử dụng', 20),
(71, 'Xe khó nổ khi đề', 20),
(72, 'Xe không nổ khi đề', 20),
(73, 'Lớn hơn 10 năm', 12),
(74, 'Nhỏ hơn 10 năm', 12),
(75, 'Không sáng', 13),
(76, 'Yếu, chập chờn', 13),
(77, 'Bình thường', 13),
(78, 'Không cấp điện', 14),
(79, 'Chập chờn', 14),
(80, 'Bình thường', 14),
(81, 'Không có', 15),
(82, 'Tiếng tanh tách liên tục', 15),
(83, 'Hiện tượng va đập bánh răng bất thường ở phía động cơ, nghe rất chói tai.', 15),
(84, 'Soluto', 2),
(85, 'i10', 2),
(86, 'Tucson', 2),
(87, 'Khói thải màu trắng và dày như đám mây', 21),
(88, 'Khói thải màu xanh', 21),
(89, 'Khí thải màu đen', 21),
(90, 'Khí thải màu xám', 21),
(91, 'Khí thải có mùi cháy, khét', 21),
(92, 'Xe bị trượt số,nhảy số', 22),
(93, 'Xe khó vào số, không vào số được', 22),
(94, 'Bàn đạp ly hợp bị rung', 22),
(95, 'Chảy dầu hộp số', 22),
(96, 'Hộp số ồn và rung khi hoạt động', 22),
(97, 'Xe ồn khi về Mo', 22),
(98, 'Bàn đạp ly hợp nặng', 22),
(99, 'Xe khó vào số lùi', 22),
(100, 'Trục các đăng bị kêu', 22),
(101, 'Xe bị đánh lái lệch hướng', 23),
(102, 'Xe di chuyển xóc hơn', 23),
(103, 'Bề mặt lốp biến dạng không đều', 23),
(104, 'xe lảo đảo', 16),
(105, 'bình thường', 16),
(106, 'giao động bình thường', 17),
(107, 'giao động không bình thường', 17),
(108, 'không giao động', 17),
(109, 'Bình thường', 18),
(110, 'Mòn hai bên', 18),
(111, 'Mòn chính giữa', 18),
(112, 'Mòn lệch một bên', 18),
(113, 'Biến dạng hình chén', 18),
(114, 'Lõm chéo', 18),
(115, 'Nứt và chửa lốp', 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ketluan`
--

CREATE TABLE `ketluan` (
  `id` int(11) NOT NULL,
  `hethong` varchar(1000) DEFAULT NULL,
  `nguyenhan` varchar(1000) DEFAULT NULL,
  `suachua` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ketluan`
--

INSERT INTO `ketluan` (`id`, `hethong`, `nguyenhan`, `suachua`) VALUES
(1, 'Phanh', 'mâm phanh lỏng', 'siết lại mâm phanh'),
(2, 'Phanh', 'má phanh mòn', 'thay má phanh'),
(3, 'Phanh', 'thiếu dầu phanh', 'đổ thêm dầu phanh'),
(4, 'Phanh', 'má phanh biến dạng', 'thay má phanh'),
(5, 'Phanh', 'trợ lực phanh hỏng', 'thay thế trợ lực phanh'),
(6, 'Phanh', 'mất áp suất dầu phanh do đường ống rách', 'thay đường ống'),
(7, 'Phanh', 'má phanh mòn', 'thay má phanh'),
(8, 'Phanh', 'thiếu dầu phanh', 'đổ thêm dầu'),
(9, 'Phanh', 'má phanh cong vênh', 'thay má phanh'),
(10, 'Phanh', 'má phanh bị rỉ sét', 'Vệ sinh, bảo dưỡng má phanh'),
(11, 'Phanh', 'mâm phanh lỏng; thiếu dầu phanh', 'siết lại mâm phanh; đổ thêm dầu'),
(12, 'Phanh', 'Phanh bánh xe bị kẹt do trục cam tác động', 'Chạc xoay và điều chỉnh mòn có thể hàn đắp gia công lại hoặc thay thế cả trục'),
(13, 'Phanh', 'Áp suất lốp và độ mòn của hai bánh xe phải và trái không giống nhau.', 'Thay thế lốp mòn.'),
(14, 'Phanh', 'má phanh mòn; thiếu dầu phanh', 'thay má phanh; đổ thêm dầu'),
(15, 'Phanh', 'mâm phanh lỏng; phanh bánh xe bị kẹt do trục cam tác động', 'siết lại mâm phanh; chạc xoay và điều chỉnh mòn có thể hàn đắp gia công lại hoặc thay thế cả trục.'),
(16, 'Phanh', 'trợ lực phanh hỏng; Phanh bánh xe bị kẹt do trục cam tác động', 'thay thế trợ lực phanh; chạc xoay và điều chỉnh mòn có thể hàn đắp gia công lại hoặc thay thế cả trục.'),
(17, 'Phanh', 'mất áp suất dầu phanh do đường ống rách; phanh bánh xe bị kẹt do trục cam tác động', 'thay đường  ống; chạc xoay và điều chỉnh mòn có thể hàn đắp gia công lại hoặc thay thế cả trục.'),
(18, 'Phanh', 'má phanh bị bẩn, rỉ sét; phanh bánh xe bị kẹt do trục cam tác động', 'Vệ sinh, bảo dưỡng má phanh; chạc xoay và điều chỉnh mòn có thể hàn đắp gia công lại hoặc thay thế cả trục.'),
(19, 'Phanh', 'Áp suất lốp và độ mòn của hai bánh xe phải và trái không giống nhau; Phanh bánh xe bị kẹt do trục cam tác động', 'Thay thế lốp mòn; Chạc xoay và điều chỉnh mòn có thể hàn đắp gia công lại hoặc thay thế cả trục.'),
(20, 'Phanh', 'Áp suất lốp và độ mòn của hai bánh xe phải và trái không giống nhau; thiếu dầu phanh', 'Thay thế lốp mòn;  thêm dầu phanh'),
(21, 'Phanh', 'má phanh bị bẩn, rỉ sét; thiếu dầu phanh', 'Vệ sinh, bảo dưỡng má phanh; thêm dầu phanh'),
(22, 'Phanh', 'mất áp suất dầu phanh do đường ống rách; thiếu dầu phanh', 'thay đường  ống; thêm dầu phanh'),
(23, 'Phanh', 'trợ lực phanh hỏng; thiếu dầu phanh', 'thay thế trợ lực phanh; thêm dầu phanh'),
(24, 'Động cơ', 'Bugi bám bụi than', 'thay Bugi'),
(25, 'Động cơ', 'Ắc quy chết', 'thay Ắc quy'),
(26, 'Động cơ', 'Ắc quy hết điện', 'kích Ắc quy'),
(27, 'Động cơ', 'gãy bánh răng trục cam', 'thay bánh răng'),
(28, 'Động cơ', 'Két nước bị bẩn', 'thay nước trong két'),
(29, 'Động cơ', 'nhiên liệu tràn qua ống phun khiến động cơ tiêu thụ quá nhiều nhiên liệu', 'Kiểm tra và điều chỉnh bộ chế hòa khí'),
(30, 'Động cơ', 'hỗn hợp cháy bị loãng khiến cho hỗn hợp cháy đậm', 'kiểm tra và điều chỉnh bộ chế hòa khí'),
(31, 'Động cơ', 'Bugi bám bụi than+acquy chết', 'thay Bugi+thay acquy'),
(32, 'Điện', 'máy phát điện hỏng', 'thay máy phát điện'),
(33, 'Điện', 'Acquy chết', 'thay thế accquy'),
(34, 'Điện', 'dây cáp nối đến các thiết bị, bị lỗi', 'thay thế hệ thống dây'),
(35, 'Điện', 'Hỏng cầu chì', 'Kiểm tra cả 2 hộp cầu chì bên trong và bên ngoài'),
(36, 'Điện', 'Bình ắc quy ô tô yếu hoặc hết bình', 'Kiểm tra và sạc điện bình ắc quy.'),
(37, 'Điện', 'Rơ le hoạt động không tốt', 'Kiểm tra và sửa chữa rơ le.'),
(38, 'Điện', 'iện tượng vả đề do IC đánh lửa không đúng thời điểm hoặc đặt cam sai sau khi tiến hành bảo dưỡng.', 'Kiểm tra lại hệ thống IC đánh lửa và cam sai.'),
(39, 'Điện', 'Máy phát điện hỏng hoặc ắc quy chết giữa đường', 'Thay thế ắc quy và máy phát điện.'),
(40, 'Khí thải', 'ống xả tích tụ hơi nước', 'đi 1 lúc sẽ hết'),
(41, 'Khí thải', 'Xe rò rỉ dầu, hao dầu', 'chuyển sang sử dụng loại dầu có nhiều nhớt'),
(42, 'Khí thải', 'động cơ đã đốt quá nhiều nhiên liệu', 'chỉnh lại bộ chế hòa khí'),
(43, 'Khí thải', 'Nước làm mát bị dính dầu', 'thay nước làm mát'),
(44, 'Khí thải', 'Dầu bị rò rỉ chảy xung quanh động cơ', 'thay gioăng dầu'),
(45, 'Truyền lực', 'Đĩa ma sát bị dính dầu', 'vệ sinh bảo dưỡng đĩa ma sát'),
(46, 'Truyền lực', 'Bộ ly hợp bị hỏng', 'thay bộ ly hợp'),
(47, 'Truyền lực', 'Bộ ly hợp bị hỏng', 'thay bộ ly hợp'),
(48, 'Truyền lực', 'Phớt bị vênh khi va chạm mạnh, gioăng bị dãn', 'Đặt lại phớt, thay gioăng'),
(49, 'Truyền lực', 'Bánh răng trong hộp số hỏng.', 'thay bánh răng'),
(50, 'Truyền lực', 'vòng bi và bánh răng trong hộp số bị mòn', 'thay vòng bi và bánh răng'),
(51, 'Truyền lực', 'Cơ cấu điều khiển ly hợp thiếu dầu, mỡ bôi trơn', 'bảo dưỡng cơ cấu điều khiển ly hợp'),
(52, 'Truyền lực', 'Dây cáp chuyển số bị điều chỉnh sai', 'Điều chỉnh lại dây cáp chuyển số'),
(53, 'Truyền lực', 'vòng bi ổ đỡ bằng cao su đang bị nứt hoặc bị mòn.', 'thay vòng bi'),
(54, 'Chuyển động', 'Bánh xe bị đảo', 'Cân lại bánh xe'),
(55, 'Chuyển động', 'Các giảm xóc đàn hồi không đều', 'Thay giảm xóc'),
(56, 'Chuyển động', 'Các giảm xóc đàn hồi không đều, Bánh xe bị đảo', 'Thay giảm xóc,Cân lại bánh xe'),
(57, 'Chuyển động', 'Giảm xóc mất đàn hồi', 'Thay giảm xóc'),
(58, 'Chuyển động', 'Lốp xe quá căng', 'xả bớt hơi trong lốp'),
(59, 'Chuyển động', 'Thường xuyên đi xe lốp non', 'Thay lốp'),
(60, 'Chuyển động', 'Thường xuyên đi xe lốp quá căng', 'Thay lốp'),
(61, 'Chuyển động', 'Góc nghiêng của bánh lái có vấn đề, khiến lốp nghiêng ra ngoài hoặc vào trong', 'Thay lốp, Chỉnh lại góc nghiêng bánh lái'),
(62, 'Chuyển động', 'Hệ thống treo đã bị hỏng hoặc ăn mòn', 'Thay lốp, thay lò xo treo'),
(63, 'Chuyển động', 'Hệ dẫn động cầu trước do độ chụm của bánh xe chưa chuẩn', 'Thay lốp, Chỉnh lại hệ thống dẫn động cầu trước'),
(64, 'Chuyển động', 'Thường xuyên đi vào ổ gà, ổ vịt, đường xấu', 'Thay lốp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `mota` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `motacase`
--

CREATE TABLE `motacase` (
  `id` int(11) NOT NULL,
  `idcase` int(11) DEFAULT NULL,
  `idcautraloi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `motacase`
--

INSERT INTO `motacase` (`id`, `idcase`, `idcautraloi`) VALUES
(1, 1, 1),
(2, 1, 5),
(3, 1, 20),
(4, 1, 23),
(5, 1, 29),
(6, 1, 40),
(7, 1, 42),
(8, 2, 1),
(9, 2, 6),
(10, 2, 16),
(11, 2, 23),
(12, 2, 30),
(13, 2, 40),
(14, 2, 42),
(15, 3, 2),
(16, 3, 7),
(17, 3, 17),
(18, 3, 24),
(19, 3, 31),
(20, 3, 40),
(21, 3, 43),
(22, 4, 2),
(23, 4, 8),
(24, 4, 19),
(25, 4, 24),
(26, 4, 32),
(27, 4, 40),
(28, 4, 42),
(29, 5, 3),
(30, 5, 9),
(31, 5, 15),
(32, 5, 24),
(33, 5, 33),
(34, 5, 40),
(35, 5, 42),
(36, 6, 3),
(37, 6, 9),
(38, 6, 15),
(39, 6, 25),
(40, 6, 33),
(41, 6, 40),
(42, 6, 42),
(43, 7, 1),
(44, 7, 10),
(45, 7, 15),
(46, 7, 25),
(47, 7, 34),
(48, 7, 40),
(49, 7, 42),
(50, 8, 1),
(51, 8, 11),
(52, 8, 15),
(53, 8, 25),
(54, 8, 35),
(55, 8, 40),
(56, 8, 43),
(57, 9, 3),
(58, 9, 12),
(59, 9, 18),
(60, 9, 26),
(61, 9, 36),
(62, 9, 40),
(63, 9, 42),
(64, 10, 4),
(65, 10, 13),
(66, 10, 20),
(67, 10, 26),
(68, 10, 37),
(69, 10, 40),
(70, 10, 42),
(71, 11, 1),
(72, 11, 5),
(73, 11, 20),
(74, 11, 23),
(75, 11, 29),
(76, 11, 40),
(77, 11, 43),
(78, 12, 4),
(79, 12, 13),
(80, 12, 20),
(81, 12, 27),
(82, 12, 37),
(83, 12, 41),
(84, 12, 42),
(85, 13, 4),
(86, 13, 13),
(87, 13, 21),
(88, 13, 28),
(89, 13, 38),
(90, 13, 40),
(91, 13, 42),
(92, 14, 1),
(93, 14, 5),
(94, 14, 20),
(95, 14, 23),
(96, 14, 34),
(97, 14, 40),
(98, 14, 43),
(99, 15, 1),
(100, 15, 5),
(101, 15, 20),
(102, 15, 23),
(103, 15, 29),
(104, 15, 41),
(105, 15, 42),
(106, 16, 1),
(107, 16, 5),
(108, 16, 20),
(109, 16, 24),
(110, 16, 37),
(111, 16, 41),
(112, 16, 42),
(113, 17, 1),
(114, 17, 5),
(115, 17, 21),
(116, 17, 25),
(117, 17, 39),
(118, 17, 41),
(119, 17, 42),
(120, 18, 1),
(121, 18, 5),
(122, 18, 20),
(123, 18, 26),
(124, 18, 33),
(125, 18, 41),
(126, 18, 42),
(127, 19, 1),
(128, 19, 5),
(129, 19, 20),
(130, 19, 28),
(131, 19, 33),
(132, 19, 41),
(133, 19, 42),
(134, 20, 1),
(135, 20, 5),
(136, 20, 20),
(137, 20, 28),
(138, 20, 33),
(139, 20, 40),
(140, 20, 43),
(141, 21, 1),
(142, 21, 5),
(143, 21, 19),
(144, 21, 26),
(145, 21, 33),
(146, 21, 40),
(147, 21, 43),
(148, 22, 1),
(149, 22, 5),
(150, 22, 17),
(151, 22, 25),
(152, 22, 39),
(153, 22, 40),
(154, 22, 43),
(155, 23, 1),
(156, 23, 5),
(157, 23, 18),
(158, 23, 24),
(159, 23, 37),
(160, 23, 40),
(161, 23, 43),
(162, 24, 56),
(163, 24, 61),
(164, 24, 18),
(165, 24, 53),
(166, 24, 45),
(167, 24, 46),
(168, 24, 48),
(169, 24, 50),
(170, 25, 57),
(171, 25, 62),
(172, 25, 20),
(173, 25, 53),
(174, 25, 44),
(175, 25, 47),
(176, 25, 49),
(177, 25, 50),
(178, 26, 58),
(179, 26, 63),
(180, 26, 18),
(181, 26, 53),
(182, 26, 45),
(183, 26, 47),
(184, 26, 49),
(185, 26, 50),
(186, 27, 59),
(187, 27, 64),
(188, 27, 17),
(189, 27, 54),
(190, 27, 45),
(191, 27, 47),
(192, 27, 48),
(193, 27, 50),
(194, 28, 60),
(195, 28, 65),
(196, 28, 19),
(197, 28, 55),
(198, 28, 45),
(199, 28, 47),
(200, 28, 49),
(201, 28, 50),
(202, 29, 60),
(203, 29, 65),
(204, 29, 19),
(205, 29, 55),
(206, 29, 45),
(207, 29, 47),
(208, 29, 49),
(209, 29, 51),
(210, 30, 60),
(211, 30, 65),
(212, 30, 19),
(213, 30, 55),
(214, 30, 45),
(215, 30, 47),
(216, 30, 49),
(217, 30, 52),
(218, 31, 56),
(219, 31, 61),
(220, 31, 18),
(221, 31, 53),
(222, 31, 44),
(223, 31, 46),
(224, 31, 48),
(225, 31, 50),
(226, 32, 1),
(227, 32, 67),
(228, 32, 14),
(229, 32, 69),
(230, 32, 45),
(231, 32, 73),
(232, 32, 75),
(233, 32, 78),
(234, 32, 81),
(235, 33, 1),
(236, 33, 5),
(237, 33, 15),
(238, 33, 69),
(239, 33, 44),
(240, 33, 74),
(241, 33, 76),
(242, 33, 79),
(243, 33, 81),
(244, 34, 66),
(245, 34, 68),
(246, 34, 14),
(247, 34, 70),
(248, 34, 45),
(249, 34, 74),
(250, 34, 77),
(251, 34, 80),
(252, 34, 81),
(253, 35, 66),
(254, 35, 68),
(255, 35, 15),
(256, 35, 70),
(257, 35, 45),
(258, 35, 74),
(259, 35, 75),
(260, 35, 78),
(261, 35, 81),
(262, 36, 60),
(263, 36, 65),
(264, 36, 16),
(265, 36, 71),
(266, 36, 44),
(267, 36, 74),
(268, 36, 76),
(269, 36, 80),
(270, 36, 81),
(271, 37, 66),
(272, 37, 68),
(273, 37, 14),
(274, 37, 71),
(275, 37, 45),
(276, 37, 74),
(277, 37, 77),
(278, 37, 80),
(279, 37, 82),
(280, 38, 1),
(281, 38, 5),
(282, 38, 15),
(283, 38, 72),
(284, 38, 45),
(285, 38, 74),
(286, 38, 77),
(287, 38, 80),
(288, 38, 83),
(289, 39, 66),
(290, 39, 68),
(291, 39, 14),
(292, 39, 72),
(293, 39, 44),
(294, 39, 73),
(295, 39, 75),
(296, 39, 78),
(297, 39, 81),
(298, 40, 3),
(299, 40, 9),
(300, 40, 14),
(301, 40, 87),
(302, 41, 3),
(303, 41, 84),
(304, 41, 17),
(305, 41, 88),
(306, 42, 59),
(307, 42, 85),
(308, 42, 18),
(309, 42, 89),
(310, 43, 59),
(311, 43, 86),
(312, 43, 17),
(313, 43, 90),
(314, 44, 59),
(315, 44, 86),
(316, 44, 17),
(317, 44, 91),
(318, 45, 3),
(319, 45, 9),
(320, 45, 14),
(321, 45, 92),
(322, 46, 3),
(323, 46, 84),
(324, 46, 14),
(325, 46, 93),
(326, 47, 3),
(327, 47, 9),
(328, 47, 14),
(329, 47, 94),
(330, 48, 3),
(331, 48, 84),
(332, 48, 17),
(333, 48, 95),
(334, 49, 59),
(335, 49, 85),
(336, 49, 18),
(337, 49, 96),
(338, 50, 56),
(339, 50, 61),
(340, 50, 18),
(341, 50, 97),
(342, 51, 57),
(343, 51, 62),
(344, 51, 20),
(345, 51, 98),
(346, 52, 58),
(347, 52, 63),
(348, 52, 18),
(349, 52, 99),
(350, 53, 59),
(351, 53, 64),
(352, 53, 17),
(353, 53, 100),
(354, 54, 56),
(355, 54, 61),
(356, 54, 18),
(357, 54, 101),
(358, 54, 104),
(359, 54, 106),
(360, 54, 109),
(361, 55, 57),
(362, 55, 62),
(363, 55, 20),
(364, 55, 101),
(365, 55, 105),
(366, 55, 107),
(367, 55, 109),
(368, 56, 58),
(369, 56, 63),
(370, 56, 18),
(371, 56, 101),
(372, 56, 104),
(373, 56, 107),
(374, 56, 109),
(375, 57, 59),
(376, 57, 64),
(377, 57, 17),
(378, 57, 102),
(379, 57, 105),
(380, 57, 108),
(381, 57, 109),
(382, 58, 60),
(383, 58, 65),
(384, 58, 19),
(385, 58, 102),
(386, 58, 105),
(387, 58, 106),
(388, 58, 109),
(389, 59, 3),
(390, 59, 9),
(391, 59, 14),
(392, 59, 103),
(393, 59, 105),
(394, 59, 106),
(395, 59, 110),
(396, 60, 3),
(397, 60, 84),
(398, 60, 17),
(399, 60, 103),
(400, 60, 105),
(401, 60, 106),
(402, 60, 111),
(403, 61, 59),
(404, 61, 85),
(405, 61, 18),
(406, 61, 103),
(407, 61, 104),
(408, 61, 106),
(409, 61, 112),
(410, 62, 3),
(411, 62, 9),
(412, 62, 14),
(413, 62, 103),
(414, 62, 104),
(415, 62, 106),
(416, 62, 113),
(417, 63, 58),
(418, 63, 63),
(419, 63, 14),
(420, 63, 103),
(421, 63, 104),
(422, 63, 106),
(423, 63, 114),
(424, 64, 59),
(425, 64, 64),
(426, 64, 14),
(427, 64, 103),
(428, 64, 104),
(429, 64, 106),
(430, 64, 115);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cautraloi`
--
ALTER TABLE `cautraloi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcauhoi` (`idcauhoi`);

--
-- Chỉ mục cho bảng `ketluan`
--
ALTER TABLE `ketluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `motacase`
--
ALTER TABLE `motacase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcase` (`idcase`),
  ADD KEY `idcautraloi` (`idcautraloi`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `cautraloi`
--
ALTER TABLE `cautraloi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT cho bảng `ketluan`
--
ALTER TABLE `ketluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `motacase`
--
ALTER TABLE `motacase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=431;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cautraloi`
--
ALTER TABLE `cautraloi`
  ADD CONSTRAINT `cautraloi_ibfk_1` FOREIGN KEY (`idcauhoi`) REFERENCES `cauhoi` (`id`);

--
-- Các ràng buộc cho bảng `motacase`
--
ALTER TABLE `motacase`
  ADD CONSTRAINT `motacase_ibfk_1` FOREIGN KEY (`idcase`) REFERENCES `ketluan` (`id`),
  ADD CONSTRAINT `motacase_ibfk_2` FOREIGN KEY (`idcautraloi`) REFERENCES `cautraloi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
