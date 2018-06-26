-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 26, 2018 lúc 04:39 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dtc_pandafood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2018_06_04_181000_pdf_groups', 1),
(11, '2018_06_04_184103_pdf_users', 1),
(12, '2018_06_05_090158_pdf_shippers', 1),
(13, '2018_06_05_090448_pdf_slides', 1),
(14, '2018_06_05_091026_pdf_blogs', 1),
(15, '2018_06_06_095418_pdf_categories', 2),
(19, '2018_06_08_181531_pdf_products', 3),
(20, '2018_06_13_113509_pdf_information', 4),
(21, '2018_06_24_022102_pdf_orders', 5),
(22, '2018_06_24_022802_pdf_orderdetails', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pdf_blogs`
--

CREATE TABLE `pdf_blogs` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blog_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blog_description` text COLLATE utf8_unicode_ci NOT NULL,
  `blog_content` text COLLATE utf8_unicode_ci NOT NULL,
  `blog_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pdf_blogs`
--

INSERT INTO `pdf_blogs` (`blog_id`, `blog_title`, `blog_slug`, `blog_description`, `blog_content`, `blog_img`, `user_id`, `created_at`, `updated_at`) VALUES
(4, '5 LỢI ÍCH THIẾT THỰC KHI ÁP DỤNG CHẾ ĐỘ ĂN CHAY', '5-loi-ich-thiet-thuc-khi-ap-dung-che-do-an-chay', '<p>Việc &aacute;p dụng chế độ ăn chay c&oacute; thể l&agrave; một c&aacute;ch tuyệt vời để cải thiện sức khoẻ. Chế độ ăn chay c&oacute; li&ecirc;n quan đến việc ti&ecirc;u thụ nhiều chất xơ, axit folic, vitamin C v&agrave; E, magi&ecirc;, chất b&eacute;o chưa b&atilde;o h&ograve;a v&agrave; v&ocirc; số hợp chất tự nhi&ecirc;n c&oacute; nguồn gốc thực vật (phytochemical). Cũng ch&iacute;nh v&igrave; thế những người ăn chay thường c&oacute; lượng cholesterol thấp, kh&ocirc;ng bị b&eacute;o ph&igrave;, huyết &aacute;p thấp hơn v&agrave; giảm nguy cơ mắc c&aacute;c bệnh tim mạch.</p>\r\n\r\n<p>C&ugrave;ng Sunfood kh&aacute;m ph&aacute; một số lợi &iacute;ch kh&aacute;c của việc &aacute;p dụng chế độ ăn chay đối với sức khỏe người.</p>\r\n', '<h2 style=\"text-align:justify\">1. C&oacute; thể cải thiện T&acirc;m trạng</h2>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Ăn chay tâm trạng tốt hơn\" src=\"http://file.hstatic.net/1000198833/file/i-thuc-pham-an-ngay-hom-nay-se-giup-ban-cam-thay-tot-hon-vao-ngay-mai-_large.png\" /></p>\r\n\r\n<p style=\"text-align:justify\">Axit Arachidonic l&agrave; một chất c&oacute; trong c&aacute;c thức ăn nguồn gốc động vật v&igrave; vậy chế độ ăn chay kh&ocirc;ng c&oacute; axit arachidonic. Điều n&agrave;y c&oacute; thể c&oacute; lợi, v&igrave; nghi&ecirc;n cứu đ&atilde; chỉ ra mối li&ecirc;n hệ giữa axit arachidonic v&agrave; rối loạn t&acirc;m trạng. C&aacute;c nh&agrave; nghi&ecirc;n cứu tại Đại học Benedictine đ&atilde; tiến h&agrave;nh một th&iacute; nghiệm v&agrave; chỉ ra rằng việc hạn chế c&aacute;c thức ăn c&oacute; nguồn gốc động vật c&oacute; thể cải thiện t&acirc;m trạng con người.</p>\r\n\r\n<p style=\"text-align:justify\">Th&ecirc;m v&agrave;o đ&oacute;, Viện Nghi&ecirc;n cứu Y khoa v&agrave; Sức khoẻ Nghề nghiệp Croatia tiến h&agrave;nh điều tra sức khoẻ t&acirc;m thần giữa những người ăn chay v&agrave; ph&aacute;t hiện họ c&oacute; nguy cơ bị bệnh về thần kinh thấp hơn.</p>\r\n\r\n<h2 style=\"text-align:justify\">2. C&oacute; thể Giảm nguy cơ bệnh tiểu đường</h2>\r\n\r\n<p style=\"text-align:justify\">Theo Trường Y tế C&ocirc;ng cộng Loma Linda, chế độ ăn chay c&oacute; li&ecirc;n quan đến việc giảm đ&aacute;ng kể tỷ lệ mắc bệnh tiểu đường. Th&ocirc;ng tin do Trường Y khoa Đại học George Washington c&ocirc;ng bố cũng khẳng định rằng chế độ ăn chay mang lại lợi &iacute;ch quan trọng cho việc quản l&yacute; bệnh tiểu đường v&agrave; thậm ch&iacute; c&oacute; thể l&agrave;m giảm khả năng ph&aacute;t triển ph&aacute;t triển của bệnh đi một nửa.</p>\r\n\r\n<h2 style=\"text-align:justify\">3. Giảm nguy cơ ph&aacute;t triển đục thủy tinh thể</h2>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Ăn rau củ quả sạch\" src=\"http://file.hstatic.net/1000198833/file/60_large.png\" /></p>\r\n\r\n<p style=\"text-align:justify\">C&aacute;c nghi&ecirc;n cứu do Ph&ograve;ng Y học l&acirc;m s&agrave;ng của Nuffield thuộc Đại học Oxford đ&atilde; chỉ ra mối li&ecirc;n hệ chặt chẽ giữa nguy cơ mắc bệnh đục thuỷ tinh thể v&agrave; chế độ ăn uống, theo đ&oacute; những người ăn nhiều thịt c&aacute; c&oacute; tỉ lệ rủi ro mắc bệnh đục thủy tinh thể cao hơn l&agrave; nh&oacute;m người ăn chay.</p>\r\n\r\n<h2 style=\"text-align:justify\">4. Giảm nguy cơ đột quỵ v&agrave; bệnh b&eacute;o ph&igrave;</h2>\r\n\r\n<p style=\"text-align:justify\">Tất nhi&ecirc;n lu&ocirc;n c&oacute; những ngoại lệ, nhưng một chế độ ăn &iacute;t hoặc kh&ocirc;ng c&oacute; thịt c&aacute; thay v&agrave;o đ&oacute; l&agrave; lượng rau xanh sạch sẽ g&oacute;p phần giảm cholesteron xấu nguy&ecirc;n nh&acirc;n ch&iacute;nh g&acirc;y ra động quỵ . B&ecirc;n cạnh đ&oacute; thực phẩm chay lu&ocirc;n &iacute;t calo hơn v&igrave; thế&nbsp; người ăn chay c&oacute; khả năng giảm c&aacute;c nguy cơ bị b&eacute;o ph&igrave;</p>\r\n\r\n<h2 style=\"text-align:justify\">5. Giảm nguy cơ sỏi thận.</h2>\r\n\r\n<p style=\"text-align:justify\">Trung t&acirc;m Y tế Langone của Đại học New York khẳng định rằng việc loại bỏ sự ti&ecirc;u thụ protein động vật thay v&agrave;o đ&oacute; l&agrave; sử dụng thức ăn rau củ sẽ dẫn đến pH nước tiểu cao hơn; trong khi pH nước tiểu thấp l&agrave; một trong những l&yacute; do h&igrave;nh th&agrave;nh sỏi thận.</p>\r\n\r\n<p style=\"text-align:justify\">N&ecirc;n lựa chọn những&nbsp;cửa h&agrave;ng thực phẩm sạch uy t&iacute;n&nbsp;để&nbsp;mua rau củ quả&nbsp;cho chế độ ăn chay đảm bảo an to&agrave;n.</p>\r\n\r\n<p style=\"text-align:justify\">Cửa h&agrave;ng thực phẩm sạch PandaFood&nbsp;- Cho mỗi ng&agrave;y tươi s&aacute;ng!</p>\r\n', '1_9ca63c687c784a2eb2c6d17170d3d772_large.jpg', 1, '2018-06-16 07:50:33', '2018-06-16 07:56:19'),
(5, 'CANH CHUA CÁ DÌA CHUẨN HƯƠNG VỊ MIỀN TRUNG', 'canh-chua-ca-dia-chuan-huong-vi-mien-trung', '<p style=\"text-align:justify\">C&aacute; d&igrave;a c&aacute;i t&ecirc;n đậm chất qu&ecirc; của người d&acirc;n Trung bộ. Mặc d&ugrave; hiện nay đ&atilde; kh&aacute; phổ biến ở nhiều nơi nhưng mỗi lần nhắc đến canh chua c&oacute; lẽ sẽ c&oacute; rất nhiều người d&acirc;n miền Trung nghĩ ngay đến hương vị canh chua c&aacute; d&igrave;a ng&agrave;y xưa mẹ nấu. Canh mang vị chua ngọt đậm đ&agrave; của me, bạc h&agrave;, thơm, rau m&ugrave;i, c&agrave; chua với vị thịt c&aacute; thơm m&agrave; kh&ocirc;ng tanh.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">C&ugrave;ng PandaFood&nbsp;tham khảo c&aacute;ch l&agrave;m m&oacute;n canh hấp dẫn n&agrave;y nh&eacute;!</p>\r\n', '<h2 style=\"text-align:justify\">Chuẩn bị nguy&ecirc;n liệu:</h2>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Nguyên liệu\" src=\"http://file.hstatic.net/1000198833/file/nguyenlieu_large.png\" /></p>\r\n\r\n<p style=\"text-align:justify\">C&aacute; d&igrave;a: 500g</p>\r\n\r\n<p style=\"text-align:justify\">Me: 2 quả</p>\r\n\r\n<p style=\"text-align:justify\">Thơm: 1/4 quả</p>\r\n\r\n<p style=\"text-align:justify\">C&agrave; chua: 3 quả</p>\r\n\r\n<p style=\"text-align:justify\">Bạc h&agrave;: 2 t&eacute;p</p>\r\n\r\n<p style=\"text-align:justify\">Gừng, tỏi kh&ocirc;, th&igrave; l&agrave;, ớt, h&agrave;nh l&aacute;</p>\r\n\r\n<p style=\"text-align:justify\">Gia vị: bột n&ecirc;m, bột canh, hạt ti&ecirc;u</p>\r\n\r\n<h2 style=\"text-align:justify\">Sơ chế nguy&ecirc;n liệu nấu canh chua c&aacute; d&igrave;a</h2>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Sơ chế\" src=\"http://file.hstatic.net/1000198833/file/so-che_large.png\" /></p>\r\n\r\n<p style=\"text-align:justify\">Đầu ti&ecirc;n bạn l&agrave;m sạch c&aacute; d&igrave;a bằng c&aacute;ch cắt bỏ hết đường ch&eacute;o từ ph&iacute;a dưới v&acirc;y ở đến gần hết phần miệng c&aacute;, rồi mổ bụng, d&ugrave;ng dao gạt bỏ hết ph&agrave;n ruột c&aacute;. Sau đ&oacute; bạn mang rửa lại c&aacute; d&igrave;a c&ugrave;ng với nước muối pha lo&atilde;ng, vớt ra v&agrave; để r&aacute;o nước</p>\r\n\r\n<p style=\"text-align:justify\">Gừng, tỏi bạn b&oacute;c vỏ, d&ugrave;ng dao băm nhỏ. Ớt rửa sạch v&agrave; th&aacute;i miếng nhỏ. H&agrave;nh, th&igrave; l&agrave; bạn nhặt v&agrave; rửa sạch rồi th&aacute;i nhỏ</p>\r\n\r\n<p style=\"text-align:justify\">Sau đ&oacute; bạn tiến h&agrave;nh ướp c&aacute; d&igrave;a c&ugrave;ng với gia vị gồm: một ch&uacute;t muối, hạt n&ecirc;m v&agrave; tỏi, gừng tươi d&ugrave;ng dao băm nhỏ trong khoảng chừng 30 ph&uacute;t cho c&aacute; d&igrave;a c&oacute; thể ngấm đều gia vị.</p>\r\n\r\n<p style=\"text-align:justify\">Sơ chế dứa, me v&agrave; c&agrave; chua</p>\r\n\r\n<p style=\"text-align:justify\">Dứa bạn d&ugrave;ng dao gọt sạch vỏ, cắt bỏ hết phần mắt, rồi d&ugrave;ng dao th&aacute;i miếng vừa ăn</p>\r\n\r\n<p style=\"text-align:justify\">Me v&agrave; c&agrave; chua bạn đều mang rửa sạch, c&agrave; chua bạn d&ugrave;ng dao bổ m&uacute;i cau.</p>\r\n\r\n<h2 style=\"text-align:justify\">Qu&aacute; tr&igrave;nh nấu canh chua c&aacute; d&igrave;a</h2>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Chế biến canh chua cá dìa\" src=\"http://file.hstatic.net/1000198833/file/che-bien_large.png\" /></p>\r\n\r\n<p style=\"text-align:justify\">Đun s&ocirc;i một lượng nước lọc sao cho đủ ăn, rồi cho c&aacute;c nguy&ecirc;n liệu gồm: tr&aacute;i me, dứa v&agrave; c&agrave; chua v&agrave;o nấu c&ugrave;ng rồi cho th&ecirc;m v&agrave;i l&aacute;t ớt v&agrave;o</p>\r\n\r\n<p style=\"text-align:justify\">Nấu canh chua c&aacute; d&igrave;a</p>\r\n\r\n<p style=\"text-align:justify\">Sau đ&oacute; bạn cho tiếp c&aacute; d&igrave;a v&agrave; c&aacute;c loại gia vị đ&atilde; ướp c&ugrave;ng với c&aacute; v&agrave;o, n&ecirc;m th&ecirc;m một ch&uacute;t gia vị. Đun s&ocirc;i nồi canh c&aacute; l&ecirc;n trong khoảng chừng 10 ph&uacute;t</p>\r\n\r\n<p style=\"text-align:justify\">Tiếp đ&oacute; bạn thả hết h&agrave;nh l&aacute;, th&igrave; l&agrave; th&aacute;i nhỏ v&agrave;o nấu c&ugrave;ng, n&ecirc;m th&ecirc;m ch&uacute;t nước mắm, hạt n&ecirc;m sao cho vừa miệng rồi tắt bếp</p>\r\n\r\n<h2 style=\"text-align:justify\">Thưởng thức th&ocirc;i n&agrave;o!</h2>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><img src=\"http://file.hstatic.net/1000198833/file/1388575078-canh-rieu-ca-dia10_grande.png\" /></p>\r\n\r\n<p style=\"text-align:justify\">Cuối c&ugrave;ng bạn vớt tr&aacute;i me ra một chiếc b&aacute;t, d&ugrave;ng th&igrave;a dằm n&aacute;t rồi lọc bỏ hết phần b&atilde;, lấy nước cốt me đổ lại nồi canh v&agrave; d&ugrave;ng th&igrave;a khuấy đều</p>\r\n\r\n<p style=\"text-align:justify\">Vậy l&agrave; bạn đ&atilde; c&oacute; m&oacute;n canh chua c&aacute; d&igrave;a đặc trưng của người miền Trung với vị chua thanh ngọt m&aacute;t v&agrave; thơm lừng của m&oacute;n canh n&agrave;y m&agrave; bất k&igrave; ai cũng sẽ cảm nhận vị ngon ngất ng&acirc;y v&agrave; kh&ocirc;ng thể cưỡng lại nổi nh&eacute;.</p>\r\n\r\n<p style=\"text-align:justify\">Ch&uacute;c bạn th&agrave;nh c&ocirc;ng với m&oacute;n&nbsp;<strong>canh chua c&aacute; d&igrave;a</strong>&nbsp;si&ecirc;u hấp dẫn của m&igrave;nh.</p>\r\n', '1388575078-canh-rieu-ca-dia10_grande.png', 1, '2018-06-16 07:59:45', '2018-06-16 08:01:50'),
(6, 'TẠI SAO KHÔNG NÊN SỬ DỤNG THỰC PHẨM BIẾN ĐỔI GEN (GMO)', 'tai-sao-khong-nen-su-dung-thuc-pham-bien-doi-gen-gmo', '<p style=\"text-align:justify\">Rất nhiều người nghĩ rằng thực phẩm biến đổi gen ho&agrave;n to&agrave;n giống c&aacute;ch lai tạo tự nhi&ecirc;n m&agrave; h&agrave;ng ng&agrave;n năm nay &ocirc;ng cha ta vẫn sử dụng nhưng chỉ l&agrave; r&uacute;t ngắn thời gian v&agrave; ổn định giống qua c&aacute;c đời sau. C&ugrave;ng PandaFood t&igrave;m hiểu thực hư của quan điểm n&agrave;y v&agrave; r&uacute;t ra những đ&uacute;c kết kinh nghiệm về việc c&oacute; n&ecirc;n sử dụng thực phẩm biến đổi gen (GMO) hay kh&ocirc;ng nh&eacute;.</p>\r\n', '<h2 style=\"text-align:justify\">Thực phẩm biến đổi gen (GMO) l&agrave; g&igrave;?</h2>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"GMO\" src=\"http://file.hstatic.net/1000198833/file/1_large.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">GMO (Genetically Modified Organism) l&agrave; phương ph&aacute;p sử dụng c&ocirc;ng nghệ sinh học hiện đại tạo ra giống mới dựa tr&ecirc;n sự kết hợp ADN của những giống lo&agrave;i kh&aacute;c nhau nhằm đạt được những phẩm chất mong muốn như khả năng chống s&acirc;u bệnh, cỏ dại hay tăng h&agrave;m lượng chất dinh dưỡng. V&iacute; dụ phối hợp gen di truyền từ vi khuẩn Bacillus thuringiensis với bắp ng&ocirc; để tạo ra giống ng&ocirc; chống với s&acirc;u bệnh, hay n&oacute;i c&aacute;ch kh&aacute;c l&agrave; cấy một loại thuốc trừ s&acirc;u sinh học v&agrave;o c&acirc;y ng&ocirc; v&agrave; loại thuốc trừ s&acirc;u n&agrave;y sẽ kh&ocirc;ng bị tan đi theo thời gian.</p>\r\n\r\n<h2 style=\"text-align:justify\">Giống lai tự nhi&ecirc;n c&oacute; g&igrave; kh&aacute;c GMO?</h2>\r\n\r\n<p style=\"text-align:justify\">Đ&oacute; l&agrave; sự kết hợp giữa hai c&aacute; thể tương th&iacute;ch c&ugrave;ng họ hoặc c&ugrave;ng lo&agrave;i để cho ra đời giống mới c&oacute; những ưu điểm của cả hai giống cũ. V&iacute; dụ một giống l&uacute;a c&oacute; khả năng chống mặn lai với một giống l&uacute;a c&oacute; năng suất cao cho cho ra một giống l&uacute;a mới c&oacute; cả 2 ưu điểm tr&ecirc;n. Tuy nhi&ecirc;n kh&aacute;c với&nbsp;<strong>thực phẩm biến đổi gen GMO</strong>, ưu điểm của giống mới n&agrave;y kh&ocirc;ng thể duy tr&igrave; tiếp tục ở những đời sau.</p>\r\n\r\n<h2 style=\"text-align:justify\">Những nguy cơ khi sử dụng thực phẩm biến đổi gen GMO</h2>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Biến đổi gen thực phẩm\" src=\"http://file.hstatic.net/1000198833/file/diem-mat-thuc-pham-gmo-pho-bien-trong-mam-com-viet-hinh-8_large.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Cho đến nay vẫn chưa c&oacute; bằng chứng cụ thể về việc sử dụng thực phẩm GMO tuy nhi&ecirc;n, c&oacute; một số ảnh hưởng tiềm ẩn đến sức khỏe khi đưa một gen mới v&agrave;o trong cơ thể.</p>\r\n\r\n<h3 style=\"text-align:justify\">Dị ứng thực phẩm</h3>\r\n\r\n<p style=\"text-align:justify\">Theo Trung t&acirc;m th&ocirc;ng tin c&ocirc;ng nghệ sinh học quốc gia Mỹ (NCBI) dị ứng ảnh hưởng đến khoảng 5% trẻ em v&agrave; 2% người trưởng th&agrave;nh ở Hoa Kỳ v&agrave; l&agrave; một mối đe dọa sức khoẻ cộng đồng đ&aacute;ng kể. C&aacute;c phản ứng dị ứng ở người xảy ra khi một protein b&igrave;nh thường kh&ocirc;ng độc hại x&acirc;m nhập v&agrave;o cơ thể v&agrave; k&iacute;ch th&iacute;ch phản ứng miễn dịch. Nếu protein mới trong thực phẩm biến đổi gen xuất ph&aacute;t từ một nguồn g&acirc;y ra dị ứng ở người hoặc nguồn m&agrave; chưa bao giờ được sử dụng l&agrave;m thực phẩm cho con người th&igrave; c&oacute; thể phản ứng miễn dịch ở người sẽ xảy ra.</p>\r\n\r\n<h3 style=\"text-align:justify\">Tăng độc t&iacute;nh</h3>\r\n\r\n<p style=\"text-align:justify\">Nếu c&aacute;c gen kh&aacute;c trong c&acirc;y bị hư hỏng trong qu&aacute; tr&igrave;nh ch&egrave;n &eacute;p một đoạn m&atilde; gen mới, n&oacute; c&oacute; thể l&agrave;m cho c&acirc;y trồng biến đổi v&agrave; &nbsp;sản xuất ra c&aacute;c chất độc. Chẳng hạn, khoai t&acirc;y được nu&ocirc;i cấy chủ yếu để tăng sức đề kh&aacute;ng của bệnh đ&atilde; tạo ra mức glycoalkaloids cao hơn (theo GEO-PIE).</p>\r\n\r\n<h3 style=\"text-align:justify\">Kh&aacute;ng kh&aacute;ng sinh</h3>\r\n\r\n<p style=\"text-align:justify\">Trong những năm gần đ&acirc;y, c&aacute;c chuy&ecirc;n gia y tế cho biết lượng vi khuẩn kh&aacute;ng kh&aacute;ng sinh đang tăng trong cơ thể người. Vi khuẩn ph&aacute;t triển kh&aacute;ng thuốc kh&aacute;ng sinh bằng c&aacute;ch tạo ra gen kh&aacute;ng thuốc kh&aacute;ng sinh th&ocirc;ng qua đột biến tự nhi&ecirc;n. Trong khi đ&oacute; để nhận biết m&atilde; gen mới c&oacute; hợp nhất với bộ gen của c&aacute; thể cần biến đổi kh&ocirc;ng, c&aacute;c nh&agrave; sinh vật học đ&atilde; nu&ocirc;i c&aacute; thể mới n&agrave;y trong dung dịch chứa gen kh&aacute;ng kh&aacute;ng sinh nhằm kiểm tra sự hoạt động của gen mới, nếu c&acirc;u sống s&oacute;t chứng tỏ gen mới đ&atilde; được hợp nhất. Điều n&agrave;y mang lại 1 rủi ro, trong qu&aacute; tr&igrave;nh hợp nhất gen, c&oacute; thể gen kh&aacute;ng kh&aacute;ng sinh cũng đ&atilde; được hợp nhất trong sản phẩm mới, v&agrave; người sử dụng sản phẩm đ&oacute; sẽ c&oacute; nguy cơ kh&aacute;ng kh&aacute;ng sinh (theo một nghi&ecirc;n cứu của trường y tế cộng đồng&nbsp;bang Minnesota).</p>\r\n\r\n<p style=\"text-align:justify\">Ngo&agrave;i ra, giống biến đổi gen GMO cũng c&oacute; thể l&agrave; nguy&ecirc;n nh&acirc;n g&acirc;y ra mất c&acirc;n bằng sinh học bởi những t&aacute;c động của n&oacute; đối với những lo&agrave;i kh&aacute;c.</p>\r\n\r\n<h2 style=\"text-align:justify\">Vậy c&oacute; n&ecirc;n sử dụng thực phẩm GMO?</h2>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Trái cây GMO\" src=\"http://file.hstatic.net/1000198833/file/gmo-hero_large.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Thực phẩm biến đổi gen GMO được xem l&agrave; một bước tiến của c&ocirc;ng nghệ sinh học, tuy nhi&ecirc;n ở thời điểm hiện tại, n&oacute; vẫn c&ograve;n tồn đọng rất nhiều vấn đề chưa được giải quyết, v&igrave; vậy người ti&ecirc;u d&ugrave;ng n&ecirc;n c&acirc;n nhắc kỹ trước khi lựa chọn những thực phẩm c&oacute; nguồn gốc GMO, tốt nhất vẫn n&ecirc;n sử dụng những thực phẩm được nu&ocirc;i trồng theo phương thức truyền thống, những sản phẩm tự nhi&ecirc;n hoặc sản xuất theo hướng hữu cơ để lu&ocirc;n đảm bảo sức khỏe cho bản th&acirc;n v&agrave; gia đ&igrave;nh.</p>\r\n', 'su_nguy_hiem_cua_thuc_pham_bien_doi_gen_3_fqit_large.png', 1, '2018-06-16 08:03:34', '2018-06-16 08:03:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pdf_categories`
--

CREATE TABLE `pdf_categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pdf_categories`
--

INSERT INTO `pdf_categories` (`category_id`, `category_title`, `category_slug`, `created_at`, `updated_at`) VALUES
(14, 'Trái cây Việt Nam', 'trai-cay-viet-nam', '2018-06-16 08:33:12', '2018-06-16 08:33:12'),
(15, 'Trái cây nhập khẩu', 'trai-cay-nhap-khau', '2018-06-16 08:33:27', '2018-06-16 08:33:27'),
(16, 'Rau - Củ - Quả', 'rau-cu-qua', '2018-06-16 08:34:16', '2018-06-16 08:34:16'),
(17, 'Thịt heo, bò sạch', 'thit-heo-bo-sach', '2018-06-16 08:35:09', '2018-06-16 08:35:09'),
(18, 'Hải sản sạch', 'hai-san-sach', '2018-06-16 08:35:56', '2018-06-16 08:35:56'),
(19, 'Thực phẩm khô', 'thuc-pham-kho', '2018-06-16 08:36:30', '2018-06-16 08:36:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pdf_groups`
--

CREATE TABLE `pdf_groups` (
  `group_id` int(10) UNSIGNED NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pdf_groups`
--

INSERT INTO `pdf_groups` (`group_id`, `group_name`) VALUES
(1, 'Quản trị viên'),
(2, 'Khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pdf_information`
--

CREATE TABLE `pdf_information` (
  `info_id` int(10) UNSIGNED NOT NULL,
  `info_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_imgmain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_imgtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_googleplus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_embedcode` text COLLATE utf8_unicode_ci NOT NULL,
  `info_owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pdf_information`
--

INSERT INTO `pdf_information` (`info_id`, `info_name`, `info_title`, `info_phone`, `info_email`, `info_address`, `info_imgmain`, `info_imgtitle`, `info_facebook`, `info_googleplus`, `info_embedcode`, `info_owner`, `info_keywords`, `info_description`, `created_at`, `updated_at`) VALUES
(1, 'PandaFood', 'Cửa hàng thực phẩm sạch PandaFood', '(+84) 0166-397-1006', 'pandafoodshopvn@gmail.com', '15 Ngô Thì Nhậm', 'lgpdf.png', 'lgpandafood.png', '', '', '', 'DoubleTC', 'pandafood, thuc pham, thuc pham sach, cua hang thuc pham sach', 'Cửa hàng thực phẩm sạch PandaFood chuyên cung các loại thực phẩm sạch có chất lượng tốt, nguồn gốc rõ ràng', NULL, '2018-06-24 17:25:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pdf_orderdetails`
--

CREATE TABLE `pdf_orderdetails` (
  `detail_id` int(10) UNSIGNED NOT NULL,
  `detail_qty` int(11) NOT NULL,
  `detail_price` int(11) NOT NULL,
  `detail_subtotal` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pdf_orderdetails`
--

INSERT INTO `pdf_orderdetails` (`detail_id`, `detail_qty`, `detail_price`, `detail_subtotal`, `product_id`, `order_id`, `created_at`, `updated_at`) VALUES
(15, 7, 70000, 490000, 23, 39, '2018-06-24 20:28:10', '2018-06-24 20:28:10'),
(16, 4, 29000, 116000, 17, 40, '2018-06-25 06:40:48', '2018-06-25 06:40:48'),
(17, 3, 23000, 69000, 12, 40, '2018-06-25 06:40:48', '2018-06-25 06:40:48'),
(18, 7, 129000, 903000, 14, 41, '2018-06-25 06:53:52', '2018-06-25 06:53:52'),
(19, 4, 70000, 280000, 23, 41, '2018-06-25 06:53:52', '2018-06-25 06:53:52'),
(20, 5, 42000, 210000, 16, 42, '2018-06-25 08:39:54', '2018-06-25 08:39:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pdf_orders`
--

CREATE TABLE `pdf_orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_total` int(11) NOT NULL,
  `order_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_receivetime` timestamp NULL DEFAULT NULL,
  `order_methodpayment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_billoflanding` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `shipper_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pdf_orders`
--

INSERT INTO `pdf_orders` (`order_id`, `order_total`, `order_name`, `order_phone`, `order_address`, `order_note`, `order_receivetime`, `order_methodpayment`, `order_status`, `order_billoflanding`, `user_id`, `shipper_id`, `created_at`, `updated_at`) VALUES
(39, 490000, 'Hoàng Công Thành', '01663971006', '15 Ngô Thì Nhậm, P. Quang Trung, ', '', '2018-06-28 20:28:10', 'Thanh toán tiền mặt khi nhận hàng', '0', NULL, 1, 0, '2018-06-24 20:28:10', '2018-06-24 20:28:10'),
(40, 185000, 'Hoàng Công Thành', '01663971006', '15 Ngô Thì Nhậm, P. Quang Trung, TP. Thái Bình', '', '2018-06-29 06:40:48', 'Thanh toán tiền mặt khi nhận hàng', '0', NULL, 2, 0, '2018-06-25 06:40:48', '2018-06-25 06:40:48'),
(41, 1183000, 'Hoàng Công Thành', '01663971006', '15 Ngô Thì Nhậm, P. Quang Trung, TP. Thái Bình', '', '2018-06-29 06:53:52', 'Thanh toán tiền mặt khi nhận hàng', '0', NULL, 2, 0, '2018-06-25 06:53:52', '2018-06-25 06:53:52'),
(42, 210000, 'Hoàng Công Thành', '01663971006', '15 Ngô Thì Nhậm, P. Quang Trung, TP. Thái Bình', '', '2018-06-29 08:39:54', 'Thanh toán tiền mặt khi nhận hàng', '0', NULL, 2, 0, '2018-06-25 08:39:54', '2018-06-25 08:39:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pdf_products`
--

CREATE TABLE `pdf_products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_promotion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_condition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_featured` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pdf_products`
--

INSERT INTO `pdf_products` (`product_id`, `product_name`, `product_slug`, `product_unit`, `product_price`, `product_promotion`, `product_condition`, `product_featured`, `product_img`, `product_description`, `product_content`, `category_id`, `created_at`, `updated_at`) VALUES
(11, 'Bơ Booth', 'bo-booth', 'kg', 79000, '', '1', '1', 'bobooth.jpg', 'Bơ Booth xuất xứ Đắc Lắc- Sản phẩm được cung cấp bởi Thực phẩm an toàn PandaFood', '<p>Bơ Booth xuất xứ Đắc Lắc- Sản phẩm được cung cấp bởi Thực phẩm an to&agrave;n PandaFood</p>\r\n', 14, '2018-06-16 08:39:25', '2018-06-16 08:41:56'),
(12, 'Chuối Gold Đà Lạt', 'chuoi-gold-da-lat', 'kg', 23000, '', '1', '1', 'chuoigo_420.jpg', 'Chuối Gold Đà Lạt, sản phẩm được cung cấp bởi Thực phẩm an toàn PandaFood', '<p>Chuối Gold Đ&agrave; Lạt, sản phẩm được cung cấp bởi Thực phẩm an to&agrave;n PandaFood</p>\r\n', 14, '2018-06-16 08:46:43', '2018-06-16 08:46:43'),
(13, 'Bưởi da xanh', 'buoi-da-xanh', 'kg', 89000, '', '1', '1', 'buoi_da_xanh2_master.jpg', 'Bưởi da xanh là loại trái cây thuộc cùng họ với cam,quýt. Đây là loại trái cây hình tròn, võ màu xanh, ruột màu hồng, mọng nước, ăn bưởi có mùi thơm, vị hơi chua pha lẫn ngọt thanh. Ăn bưởi da xanh có nhiều tác dụng có lợi cho sức khỏe và được người tiêu dùng đánh giá là loại trái cây lành nhất trong thế giới hoa quả.  Chính vì thế mà vài năm trở lại đây bưởi da xanh là loại trái cây không thể thiếu trong các gia đình sau bữa ăn, làm thức uống hàng ngày và cũng là loại trái cây thay thế cho trái dưa hấu để cúng trong những ngày tết cổ truyền của Việt Nam.', '<p style=\"text-align:justify\">Bưởi da xanh&nbsp;c&oacute; nguồn gốc từ &ocirc;ng s&aacute;u Lu&ocirc;ng, một người n&ocirc;ng d&acirc;n ở ấp An Thuận, x&atilde; Mỹ Thạnh An, th&agrave;nh phố Bến Tre. Từ một người ch&aacute;u ruột của &ocirc;ng S&aacute;u Lu&ocirc;ng kể lại rằng: v&agrave;o những năm 1940 sau một lần đi ăn đ&aacute;m giỗ ở x&atilde; Ti&ecirc;n Thũy (H&agrave;m Lu&ocirc;ng).&nbsp; Sau khi ăn miếng bưởi &ocirc;ng S&aacute;u qu&aacute; bất ngờ với vị ngon của loại tr&aacute;i c&acirc;y n&agrave;y v&agrave; cố t&igrave;nh lấy hạt bỏ v&agrave;o t&uacute;i v&agrave; đem về nh&agrave; ương l&ecirc;n v&agrave; trồng tại vườn nh&agrave;. Sau v&agrave;i năm trồng th&igrave; c&acirc;y đ&atilde; cho tr&aacute;i v&agrave; c&oacute; vị ngon, ngọt như &ocirc;ng đ&atilde; từng ăn. Thế l&agrave; c&acirc;y bưởi được nh&acirc;n giống ra cho một số người th&acirc;n quen của &ocirc;ng bằng c&aacute;ch chiếc c&agrave;nh. Dần theo thời gian th&igrave; bưởi da xanh được nh&acirc;n rộng khắp cả nước&nbsp; như ng&agrave;y h&ocirc;m nay v&agrave; thường được gọi với t&ecirc;n bưởi da xanh Bến Tre.</p>\r\n\r\n<p style=\"text-align:justify\">Bưởi da xanh l&agrave; loại tr&aacute;i c&acirc;y thuộc c&ugrave;ng họ với cam,qu&yacute;t. Đ&acirc;y l&agrave; loại tr&aacute;i c&acirc;y h&igrave;nh tr&ograve;n, v&otilde; m&agrave;u xanh, ruột m&agrave;u hồng, mọng nước, ăn bưởi c&oacute; m&ugrave;i thơm, vị hơi chua pha lẫn ngọt thanh. Ăn bưởi da xanh c&oacute; nhiều t&aacute;c dụng c&oacute; lợi cho sức khỏe v&agrave; được người ti&ecirc;u d&ugrave;ng đ&aacute;nh gi&aacute; l&agrave; loại tr&aacute;i c&acirc;y l&agrave;nh nhất trong thế giới hoa quả. Ch&iacute;nh v&igrave; thế m&agrave; v&agrave;i năm trở lại đ&acirc;y bưởi da xanh l&agrave; loại tr&aacute;i c&acirc;y kh&ocirc;ng thể thiếu trong c&aacute;c gia đ&igrave;nh sau bữa ăn, l&agrave;m thức uống h&agrave;ng ng&agrave;y v&agrave; cũng l&agrave; loại tr&aacute;i c&acirc;y thay thế cho tr&aacute;i dưa hấu để c&uacute;ng trong những ng&agrave;y tết cổ truyền của Việt Nam.</p>\r\n', 14, '2018-06-16 08:48:04', '2018-06-16 08:48:04'),
(14, 'Cam Cara Mỹ', 'cam-cara-my', 'kg', 129000, '', '1', '1', 'cam-cara_be56c53a95f8497db96939a99aa18f92_master.jpg', 'Cam ruột đỏ không hạt Mỹ thuộc giống Cara Cara có vị ngọt đặc biệt, hương thơm của cam ruột đỏ dễ làm người ta liên tưởng đến hương bưởi. Với đặc trưng nhiều nước và vị ngọt khá lạ, Cam ruột đỏ được ưa chuộng hơn nhiều so với người anh em Navel.\r\n\r\nThuộc giống Cara cara, lớp vỏ của cam ruột đỏ không hạt dễ làm người ta liên tưởng tới cam navel, nhưng khác với navel, cam cara cara không hề có phần “rốn” và nếu để ý kỹ, các bạn sẽ thấy phần vỏ trơn láng của cam ruột đỏ không hạt hơi có sắc hồng.', '<h4 style=\"text-align:justify\">CAM CARA RUỘT ĐỎ</h4>\r\n\r\n<h4 style=\"text-align:justify\">LỢI &Iacute;CH KHI ĂN CAM CAM CARA RUỘT ĐỎ</h4>\r\n\r\n<h4 style=\"text-align:justify\">► Chống l&atilde;o h&oacute;a da</h4>\r\n\r\n<p style=\"text-align:justify\">Trong quả cam cara ruột đỏ chứa h&agrave;m lượng vitamin C rất lớn 130% nhu cầu vitamin C h&agrave;ng ng&agrave;y n&ecirc;n rất tốt cho da, chống l&atilde;o h&oacute;a rất th&iacute;ch hợp cho người mệt mỏi v&igrave; tăng cường sức đề kh&aacute;ng</p>\r\n\r\n<h4 style=\"text-align:justify\">► Ngăn ngừa ung thư</h4>\r\n\r\n<p style=\"text-align:justify\">Chất Lycopene l&agrave; một loại chất chống oxy h&oacute;a gi&uacute;p ngăn ngừa c&aacute;c bệnh ung thư v&agrave; gi&uacute;p hệ tim mạch lu&ocirc;n khỏe mạnh</p>\r\n\r\n<h4 style=\"text-align:justify\">►Ph&ograve;ng chống t&aacute;o b&oacute;n</h4>\r\n\r\n<p style=\"text-align:justify\">Chất xơ trong cam gi&uacute;p ph&ograve;ng chống t&aacute;o b&oacute;n, gi&uacute;p hệ ti&ecirc;u h&oacute;a khỏe mạnh, gi&uacute;p l&agrave;n da lu&ocirc;n khỏe khoắn</p>\r\n\r\n<p style=\"text-align:justify\">Ngo&agrave;i ra trong cam cara n&agrave;y c&ograve;n chứa nhiều chất dinh dưỡng kh&aacute;c như vitamin A,B, canxi, Magie, sắt, đồng, iot..</p>\r\n', 15, '2018-06-16 08:50:52', '2018-06-16 08:50:52'),
(15, 'Lê Nâu Hàn Quốc', 'le-nau-han-quoc', 'kg', 89000, '', '1', '1', 'le-han-quoc-01_master.jpg', 'Lê nâu Hàn Quốc là hoa quả nhập khẩu có dáng quả tròn to, kích thước lớn, mỗi quả nặng từ 600- 750 gram. Vỏ khá mỏng, mịn và có màu vàng nâu nhạt, khi bổ ra có màu trắng mọng nước.', '<p style=\"text-align:justify\">L&ecirc; n&acirc;u H&agrave;n Quốc&nbsp;l&agrave;&nbsp;hoa quả nhập khẩu&nbsp;c&oacute; d&aacute;ng quả tr&ograve;n to, k&iacute;ch thước lớn, mỗi quả nặng từ 600- 750 gram. Vỏ kh&aacute; mỏng, mịn v&agrave; c&oacute; m&agrave;u v&agrave;ng n&acirc;u nhạt, khi bổ ra c&oacute; m&agrave;u trắng mọng nước.</p>\r\n\r\n<p style=\"text-align:justify\">L&ecirc; n&acirc;u H&agrave;n Quốc kh&ocirc;ng những thơm ngon m&agrave; c&ograve;n c&oacute; nhiều t&aacute;c dụng chữa bệnh m&agrave; nhiều người chưa biết đến:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h4 style=\"text-align:justify\">Ngăn ngừa bệnh tiểu đường.</h4>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Trong l&ecirc; n&acirc;u c&oacute; chứa nhiều chất xơ dễ h&ograve;a tan n&ecirc;n ngăn ngừa được sự ph&aacute;t triển của bệnh tiểu đường.&nbsp;Đối với c&aacute;c bệnh nh&acirc;n bệnh tiểu đường th&igrave; l&ecirc; n&acirc;u vừa l&agrave; loại tr&aacute;i c&acirc;y ngon miệng lại vừa chữa bệnh rất tốt.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h4 style=\"text-align:justify\">Thanh nhiệt, giải độc, tăng cường sức khỏe.</h4>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">L&agrave; loại tr&aacute;i c&acirc;y c&oacute; nhiều vitamin A, E, C, nước, l&ecirc; n&acirc;u gi&uacute;p tăng cường sức khỏe, bổ sung dưỡng chất, nước cho cơ thể. Đặc biệt, đối với những người lao động nặng hoặc vận động nhiều th&igrave; việc ăn l&ecirc; n&acirc;u H&agrave;n Quốc thường xuy&ecirc;n sẽ v&ocirc; c&ugrave;ng tốt.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h4 style=\"text-align:justify\">L&agrave;m đẹp da</h4>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Thường xuy&ecirc;n ăn l&ecirc; n&acirc;u sẽ gi&uacute;p l&agrave;n da căng mịn, s&aacute;ng b&oacute;ng do được bổ sung vitamin E v&agrave; nước từ quả l&ecirc;.B&ecirc;n cạnh đ&oacute;, chị em c&oacute; thể sử dụng l&ecirc; n&acirc;u để l&agrave;m mặt nạ dưỡng da gi&uacute;p căng da, giảm nếp nhăn, ngăn ngừa mụn, giảm độ nhờn v&agrave; trắng da.</p>\r\n\r\n<p style=\"text-align:justify\">L&ecirc; n&acirc;u H&agrave;n Quốc&nbsp;l&agrave; sản phẩm rất được người d&acirc;n h&agrave;n Quốc y&ecirc;u th&iacute;ch. Đến nay, sản phẩm n&agrave;y đ&atilde; xuất hiện nhiều ở Việt Nam v&agrave; ng&agrave;y c&agrave;ng được người ti&ecirc;u d&ugrave;ng ưa chuộng.&nbsp;H&atilde;y bổ sung sản phẩm n&agrave;y&nbsp;v&agrave;o thực đơn hằng ng&agrave;y để đảm bảo sức khỏe cho cả gia đ&igrave;nh, đặc biệt l&agrave; trẻ nhỏ v&agrave; người lao động với cường độ cao.</p>\r\n', 15, '2018-06-16 08:51:57', '2018-06-16 08:51:57'),
(16, 'Cải thìa hữu cơ', 'cai-thia-huu-co', 'kg', 42000, '', '1', '1', 'cai_thia2_672037c7f4fe42ecb4a4befa050520a2_master.jpg', '• Cải thìa là loại rau rất gần gũi với các món ăn của người Việt Nam. Rau giòn, vị ngon, ngọt.\r\n• Cải thìa có chứa folate, kali và calci giúp xương chắc khỏe.\r\n• Các chất thuộc nhóm carotenoid trong cải thìa có tác dụng như chất làm chậm quá trình oxi hóa và giảm việc hình thành những nguồn gốc có hại trong cơ thể.', '<p style=\"text-align:justify\"><strong>GIỚI THIỆU</strong><br />\r\n&bull; Cải th&igrave;a l&agrave; loại rau rất gần gũi với c&aacute;c m&oacute;n ăn của người Việt Nam. Rau gi&ograve;n, vị ngon, ngọt.<br />\r\n<strong>C&Ocirc;NG DỤNG</strong><br />\r\n&bull; Cải th&igrave;a c&oacute; chứa folate, kali v&agrave; calci gi&uacute;p xương chắc khỏe.<br />\r\n&bull; C&aacute;c chất thuộc nh&oacute;m carotenoid trong cải th&igrave;a c&oacute; t&aacute;c dụng như chất l&agrave;m chậm qu&aacute; tr&igrave;nh oxi h&oacute;a v&agrave; giảm việc h&igrave;nh th&agrave;nh những nguồn gốc c&oacute; hại trong cơ thể.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Đặc điểm:</strong>&nbsp;Rau gi&ograve;n, vị ngon, ngọt.<br />\r\nC&aacute;ch bảo quản: Bảo quản ở nhiệt độ 5-12&deg;C. C&oacute; thể bảo quản đến 15 ng&agrave;y.<br />\r\nLƯỢNG D&Ugrave;NG<br />\r\n&bull; Cải th&igrave;a cung cấp rất &iacute;t calories v&igrave; vậy c&oacute; thể ăn bao nhi&ecirc;u t&ugrave;y th&iacute;ch.<br />\r\n<strong>C&Aacute;CH D&Ugrave;NG</strong><br />\r\n&bull; N&ecirc;n x&agrave;o cải th&igrave;a để giữ lượng vitamin C v&agrave; folate trong rau.<br />\r\n&bull; Nước luộc cải cũng c&oacute; thể d&ugrave;ng l&agrave;m canh v&igrave; chứa nhiều chất kho&aacute;ng; x&aacute;c rau sẽ mất bớt những chất n&agrave;y trong qu&aacute; tr&igrave;nh đun nấu.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sản phẩm được cung cấp bởi Pandafood, được bảo hiểm 100% từ bảo hiểm thực phẩm Prudential.</p>\r\n', 16, '2018-06-16 08:54:17', '2018-06-16 08:54:17'),
(17, 'Bầu Hữu Cơ', 'bau-huu-co', 'kg', 29000, '', '1', '1', 'bau-11_14adb4c84c6546c49269594969cd2790_master.jpg', 'Bầu thường được chế biến kèm các món xào, hay đơn giản chỉ để nấu canh, luộc chấm thôi cũng rất ngon. Có điều mà chúng ta ít biết đó là mọi bộ phận của cây bầu như lá, tua cuốn, hoa, rễ bầu... đều có tác dụng chữa bệnh kỳ diệu.\r\n\r\nBầu Hữu Cơ là sản phẩm được cung cấp bởi Cửa hàng thực phẩm sạch Pandafood.', '<p style=\"text-align:justify\">Trong bữa cơm h&agrave;ng ng&agrave;y, ch&uacute;ng ta đ&atilde; từng bắt gặp m&oacute;n ăn từ quả bầu. N&oacute; thường được chế biến k&egrave;m c&aacute;c m&oacute;n x&agrave;o, hay đơn giản chỉ để nấu canh, luộc chấm th&ocirc;i cũng rất ngon. C&oacute; điều m&agrave; ch&uacute;ng ta &iacute;t biết đ&oacute; l&agrave; mọi bộ phận của c&acirc;y bầu như l&aacute;, tua cuốn, hoa, rễ bầu... đều c&oacute; t&aacute;c dụng chữa bệnh kỳ diệu.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Quả bầu, trái bầu cung cấp bởi sunfood\" src=\"http://file.hstatic.net/1000198833/file/bau23_large.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Với vị ngọt, t&iacute;nh lạnh, quả bầu c&oacute; t&aacute;c dụng giải nhiệt, giải độc, lợi tiểu, chữa đ&aacute;i dắt, đ&aacute;i đường... L&aacute; bầu cũng được coi l&agrave; một thực phẩm đẩy l&ugrave;i cơn đ&oacute;i. Với những ai bị r&ocirc;m, mụn, nhọt, tua cuốn bầu cũng l&agrave; một vị thuốc hay.</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>Quả bầu c&oacute; t&aacute;c dụng giảm c&acirc;n</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Trong quả bầu chứa nhiều chất xơ, vitamin cũng như chứa nhiều canxi, nước, magie, sắt&hellip; v&agrave; chứa rất &iacute;t calo. Ăn quả bầu gi&uacute;p bạn giảm c&acirc;n hiệu quả. Bạn c&oacute; thể chế biến th&agrave;nh nước &eacute;p để uống h&agrave;ng ng&agrave;y, hoặc đơn giản chỉ luộc v&agrave; chấm ăn cũng rất hữu &iacute;ch cho việc giảm c&acirc;n.</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>L&agrave;m sạch ruột, ngừa ung thư, chống t&aacute;o b&oacute;n nhờ quả bầu</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Trong quả bầu c&oacute; nhiều chất xơ kh&ocirc;ng h&ograve;a tan, c&oacute; t&aacute;c dụng l&agrave;m sạch ruột, gi&uacute;p cho việc ti&ecirc;u h&oacute;a thuận lợi hơn, tr&aacute;nh được t&igrave;nh trạng t&aacute;o b&oacute;n. Ăn quả bầu cũng l&agrave; c&aacute;ch gi&uacute;p bạn ph&ograve;ng ngừa ung thư, giảm việc t&iacute;ch tụ nồng độ axit v&agrave; t&iacute;ch lũy kh&iacute; trong ruột.</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>Quả bầu l&agrave;m chậm qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a t&oacute;c</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Từ l&acirc;u quả bầu đ&atilde; được xem l&agrave; phương thuốc điều trị t&oacute;c bạc. Mỗi ng&agrave;y chỉ cần một ly nước bầu sẽ gi&uacute;p bạn &quot;đảo ng&oacute;i&quot; cho m&aacute;i t&oacute;c hoa r&acirc;m của m&igrave;nh.</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>Gi&uacute;p ph&ograve;ng ngừa v&agrave; điều trị mất ngủ</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Nếu thường xuy&ecirc;n bị cảm gi&aacute;c mất ngủ, bạn c&oacute; thể uống nước bầu, v&igrave; n&oacute; c&oacute; t&aacute;c dụng gi&uacute;p bạn c&oacute; được giấc ngủ s&acirc;u hơn.</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>Duy tr&igrave; l&agrave;n da khỏe mạnh</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Ai cũng mong muốn m&igrave;nh sở hữu l&agrave;n da s&aacute;ng m&agrave;u v&agrave; khỏe mạnh. Chỉ bằng c&aacute;ch bổ sung th&ecirc;m nhiều bầu trong khẩu phần ăn h&agrave;ng ng&agrave;y sẽ gi&uacute;p bạn l&agrave;m được điều đ&oacute;. Uống nước bầu thường xuy&ecirc;n sẽ gi&uacute;p bạn bổ sung c&aacute;c vitamin thiết yếu, gi&uacute;p kh&ocirc;i phục lại sức sống cho l&agrave;n da. Nước bầu cũng gi&uacute;p trẻ h&oacute;a tế b&agrave;o da thậm ch&iacute; c&ograve;n điều tiết sản xuất dầu ngăn chặn mụn ph&aacute;t triển.</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>Trị vi&ecirc;m gan, sỏi đường niệu, huyết &aacute;p cao</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Bạn h&atilde;y lấy 500g quả bầu tươi, rửa sạch vắt lấy nước cốt v&agrave; trộn đều với 250ml mật ong, mỗi ng&agrave;y uống 2 lần, mỗi lần 30 - 50ml cũng gi&uacute;p hỗ trợ điều trị hiệu quả bệnh vi&ecirc;m gan, sỏi đường niệu, huyết &aacute;p cao.</p>\r\n', 16, '2018-06-16 08:55:44', '2018-06-16 08:55:44'),
(18, 'Ba rọi bò Mỹ', 'ba-roi-bo-my', 'kg', 200000, '', '1', '1', 'baroibomy1_master.jpg', 'Thịt bò Mỹ nổi tiếng khắp thế giới nhờ hương vị và vân mỡ đặc trưng cũng như khả năng cung ứng linh hoạt hơn và chuyên biệt hơn, nhờ vào hệ thống sản xuất, chế biến và phân phối thịt hiệu quả nhất thế giới.', '<p style=\"text-align:justify\">Thịt b&ograve; Mỹ nổi tiếng khắp thế giới nhờ hương vị v&agrave; v&acirc;n mỡ đặc trưng cũng như khả năng cung ứng linh hoạt hơn v&agrave; chuy&ecirc;n biệt hơn, nhờ v&agrave;o hệ thống sản xuất, chế biến v&agrave; ph&acirc;n phối thịt hiệu quả nhất thế giới. Thịt b&ograve; Mỹ l&agrave; sự lựa chọn tốt nhất v&igrave; ch&uacute;ng ta biết c&oacute; thể tin tưởng v&agrave;o hệ thống ti&ecirc;u chuẩn chất lượng lu&ocirc;n được duy tr&igrave; ở mức cao. Thịt b&ograve; được nhập khẩu trực tiếp, theo ti&ecirc;u chuẩn của Bộ N&ocirc;ng Nghiệp Hoa Kỳ (USDA). Tất cả đều thuộc ph&acirc;n hạng Cao Cấp.</p>\r\n\r\n<p style=\"text-align:justify\">M&oacute;n B&ograve; Mỹ cuộn nấm kim ch&acirc;m&nbsp;<br />\r\nTrụng sơ nấm kim ch&acirc;m trong nước s&ocirc;i khoảng 30 gi&acirc;y. Sau đ&oacute; lấy ra dĩa, th&ecirc;m một &iacute;t muối cho vừa ăn.<br />\r\nTrải l&aacute;t ba rọi b&ograve; ra, bỏ nấm kim ch&acirc;m v&agrave;o v&agrave; cuộn lại. Bạn c&oacute; thể d&ugrave;ng tăm xi&ecirc;n qua để giữ thịt b&ograve; v&agrave; nấm, hoặc d&ugrave;ng nấm kim ch&acirc;m để buộc miếng b&ograve; lại.<br />\r\nĐun n&oacute;ng một &iacute;t dầu ăn tr&ecirc;n chảo, sau đ&oacute; chi&ecirc;n thịt b&ograve; cuộn nấm kim ch&acirc;m cho đến khi v&agrave;ng gi&ograve;n.&nbsp;<br />\r\nNgon hơn khi d&ugrave;ng với sốt v&agrave; phục vụ khi m&oacute;n ăn c&ograve;n n&oacute;ng.</p>\r\n', 17, '2018-06-16 08:57:00', '2018-06-16 08:57:00'),
(19, 'Sườn bò Mỹ có xương', 'suon-bo-my-co-xuong', 'kg', 413000, '', '1', '1', 'suon_bo_my_master.jpg', 'Thịt bò Mỹ nổi tiếng khắp thế giới nhờ hương vị và vân mỡ đặc trưng cũng như khả năng cung ứng linh hoạt hơn và chuyên biệt hơn, nhờ vào hệ thống sản xuất, chế biến và phân phối thịt hiệu quả nhất thế giới. Thịt bò Mỹ là sự lựa chọn tốt nhất vì chúng ta biết có thể tin tưởng vào hệ thống tiêu chuẩn chất lượng luôn được duy trì ở mức cao. ', '<p>Thịt b&ograve; Mỹ nổi tiếng khắp thế giới nhờ hương vị v&agrave; v&acirc;n mỡ đặc trưng cũng như khả năng cung ứng linh hoạt hơn v&agrave; chuy&ecirc;n biệt hơn, nhờ v&agrave;o hệ thống sản xuất, chế biến v&agrave; ph&acirc;n phối thịt hiệu quả nhất thế giới. Thịt b&ograve; Mỹ l&agrave; sự lựa chọn tốt nhất v&igrave; ch&uacute;ng ta biết c&oacute; thể tin tưởng v&agrave;o hệ thống ti&ecirc;u chuẩn chất lượng lu&ocirc;n được duy tr&igrave; ở mức cao.&nbsp;</p>\r\n', 17, '2018-06-16 08:58:37', '2018-06-16 08:58:37'),
(20, 'CÁ BÒ DA', 'ca-bo-da', 'gói', 263000, '', '1', '1', 'ca-bo-da-sach-1_master.png', '', '<p><strong>C&aacute; B&ograve; Da&nbsp;</strong>được cung cấp bởi&nbsp;cửa h&agrave;ng thực phẩm sạch Pandafood&nbsp;l&agrave; một lo&agrave;i c&aacute; nước mặn, c&oacute; vẻ ngo&agrave;i xấu x&iacute;, nhưng khi qua chế biến lại c&oacute; m&ugrave;i thơm quyến rũ khiến thực kh&aacute;ch kh&oacute; l&ograve;ng cưỡng lại được.</p>\r\n\r\n<p><img alt=\"Cá bò da, được cung cấp bởi cửa hàng thực phẩm sạch Sunfood, sản phẩm đảm bảo an toàn chất lượng và được bảo hiểm 100%\" src=\"http://file.hstatic.net/1000198833/file/ca-bo-da-sach-sunfood_large.png\" /></p>\r\n\r\n<h2>M&oacute;n ăn từ C&aacute; B&ograve; da</h2>\r\n\r\n<p>Nhắc tới c&aacute; b&ograve; da mọi người đều nghĩ ngay tới m&oacute;n nướng muối ớt. C&aacute; b&ograve; da nướng than, c&aacute; b&ograve; da nướng muối ớt, nướng l&aacute; chuối, nướng giấy bạc... Tuy nhi&ecirc;n, c&aacute; b&ograve; da c&ograve;n rất nổi tiếng với nhiều m&oacute;n ăn kh&aacute;c như lẩu, canh chua, đặc biệt l&agrave; m&oacute;n Gỏi c&aacute; b&ograve; da.</p>\r\n\r\n<p><strong>C&aacute; b&ograve; da nguy&ecirc;n con</strong>&nbsp;(từ 0,5kg đến 2,0kg). con c&agrave;ng lớn ăn c&agrave;ng ngon.</p>\r\n\r\n<h2>C&aacute;ch l&agrave;m m&oacute;n canh chua c&aacute; b&ograve; da ngon đ&uacute;ng điệu</h2>\r\n\r\n<p>Nguy&ecirc;n liệu:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>C&aacute; b&ograve; da 1 con&nbsp;</li>\r\n	<li>C&agrave; chua: 2 quả</li>\r\n	<li>Dọc m&ugrave;ng (bạc h&agrave;): 2 lạng</li>\r\n	<li>Bột m&igrave;: 1 lạng</li>\r\n	<li>Dứa thơm: nửa quả</li>\r\n	<li>Đậu bắp&nbsp;</li>\r\n	<li>Gi&aacute; đỗ</li>\r\n	<li>Nước mắm</li>\r\n	<li>Đường</li>\r\n	<li>Bột n&ecirc;m</li>\r\n	<li>Me vắt: nửa lạng</li>\r\n	<li>H&agrave;nh t&iacute;m, h&agrave;nh l&aacute;, ớt tr&aacute;i</li>\r\n	<li>Rau thơm</li>\r\n</ul>\r\n\r\n<p>C&aacute;ch l&agrave;m</p>\r\n\r\n<ul>\r\n	<li>Bước 1: C&aacute; b&ograve; da mua tại cửa h&agrave;ng thực phẩm sạch Sunfood, r&atilde; đ&ocirc;ng Cho c&aacute; b&ograve; da v&agrave;o khay sau đ&oacute; thoa phần bột m&igrave; l&ecirc;n m&igrave;nh c&aacute; rồi vuốt dọc từ đầu đến đu&ocirc;i c&aacute; cho sạch nhớt, rửa c&aacute; lại bằng nước lạnh thật sạch. Cắt kh&uacute;c vừa ăn hoặc cắt l&agrave;m đ&ocirc;i.</li>\r\n	<li>Bước 2: Bạc h&agrave; tước vỏ, cắt kh&uacute;c vừa ăn, b&oacute;p sạch với ch&uacute;t muối. C&agrave; chua bổ m&uacute;i cau, thơm th&aacute;i l&aacute;t. Đậu bắp cắt bỏ cuống, th&aacute;i l&aacute;t vừa ăn.</li>\r\n	<li>Bước 3: Phi thơm h&agrave;nh t&iacute;m với &nbsp;dầu ăn, đổ c&agrave; chua v&agrave;o x&agrave;o ch&iacute;n v&agrave; n&ecirc;m th&ecirc;m một muỗng canh nước mắm. Chế nước s&ocirc;i ngập mặt c&agrave; chua v&agrave; n&ecirc;m gia vị, đường cho vừa khẩu vị.</li>\r\n	<li>Bước 4: Vắt me cho ra t&ocirc;, chế nước d&ugrave;ng c&aacute; v&agrave;o khuấy cho me tan rồi đổ từ từ nước me v&agrave;o nồi nước d&ugrave;ng. Cho thơm v&agrave;o nồi để thơm tiết ra chất l&agrave;m ngọt v&agrave; thơm nước d&ugrave;ng.</li>\r\n	<li>Cuối c&ugrave;ng cho c&aacute; v&agrave;o nồi, đun lửa nhỏ chừng 15 ph&uacute;t. C&aacute; ch&iacute;n vớt ra để ri&ecirc;ng. Th&ecirc;m bạc h&agrave;, đậu bắp v&agrave;o nấu chừng 3 ph&uacute;t cho mềm rồi cho gi&aacute; đỗ v&agrave;o. Canh s&ocirc;i, cho c&aacute; lại v&agrave;o nồi, rắc h&agrave;nh, rau thơm th&aacute;i nhỏ l&ecirc;n v&agrave; tắt bếp.</li>\r\n	<li>\r\n	<p>M&oacute;n canh c&aacute; b&ograve; da nấu chua c&oacute; vị ngọt của nước d&ugrave;ng c&aacute;, chua nhẹ của dứa v&agrave; thơm của h&agrave;nh, rau thơm sẽ chinh phục c&aacute;c bạn ngay trong lần đầu thưởng thức. C&aacute;c bạn c&oacute; thể d&ugrave;ng canh c&aacute; b&ograve; da nấu chua với b&uacute;n hoặc với cơm. Ăn k&egrave;m rau sống v&agrave; nước mắm cay rất ngon nh&eacute;!</p>\r\n	K&iacute;nh ch&uacute;c qu&yacute; kh&aacute;ch c&oacute; một bữa ăn thật ngon miệng c&ugrave;ng gia đ&igrave;nh!</li>\r\n</ul>\r\n', 18, '2018-06-16 09:00:24', '2018-06-16 09:00:24'),
(21, 'Hạt chia', 'hat-chia', 'gói', 359000, '', '1', '1', 'hat_chia_sabal_master.jpg', 'Hạt Chia: Sản phẩm được cung cấp bởi Thực phẩm an toàn PandaFood\r\n\r\nHạt chia có nguồn acid béo thiết yếu Omega-3 vượt trội, hàm lượng Natri thấp, hàm lượng protein, chất béo, chất xơ và chất chống oxy hóa cao. Hạt có hàm lượng đạm 19-23%, nguồn vitamin B dồi dào, canxi cao gấp 6 lần sữa, chất xơ cao gấp 1,6 lần lúa mạch, nồng độ lipid trong hạt cũng rất cao.', '<p style=\"text-align:justify\">Hạt Chia: Sản phẩm được cung cấp bởi Thực phẩm an to&agrave;n PandaFood</p>\r\n\r\n<p style=\"text-align:justify\">Hạt chia c&oacute; nguồn acid b&eacute;o thiết yếu Omega-3 vượt trội, h&agrave;m lượng Natri thấp, h&agrave;m lượng protein, chất b&eacute;o, chất xơ v&agrave; chất chống oxy h&oacute;a cao. Hạt c&oacute; h&agrave;m lượng đạm 19-23%, nguồn vitamin B dồi d&agrave;o, canxi cao gấp 6 lần sữa, chất xơ cao gấp 1,6 lần l&uacute;a mạch, nồng độ lipid trong hạt cũng rất cao.</p>\r\n', 19, '2018-06-16 09:01:47', '2018-06-16 09:01:47'),
(22, 'Hạt Sen', 'hat-sen', 'kg', 50000, '', '1', '1', 'hat_sen_3a26efff9b1043f887bb42291b94ea6b_master.jpg', 'Hạt sen sau khi thu hoạch sẽ được lột vỏ và xử lý vệ sinh. Sau đó đưa vào buồng Sấy thăng hoa trong môi trường chân không với tác nhân dầu, cho ra sản phẩm Hạt Sen Sấy vẫn giữ được màu sắc tự nhiên, không biến dạng, không caramel hóa, không bị thấm dầu với độ giòn vừa phải và hương vị hạt sen vẫn được bảo quản sau khi sấy.', '<p style=\"text-align:justify\">Hạt sen sau khi thu hoạch sẽ được lột vỏ v&agrave; xử l&yacute; vệ sinh. Sau đ&oacute; đưa v&agrave;o buồng Sấy thăng hoa trong m&ocirc;i trường ch&acirc;n kh&ocirc;ng với t&aacute;c nh&acirc;n dầu, cho ra sản phẩm&nbsp;Hạt Sen Sấy&nbsp;vẫn giữ được m&agrave;u sắc tự nhi&ecirc;n, kh&ocirc;ng biến dạng, kh&ocirc;ng caramel h&oacute;a, kh&ocirc;ng bị thấm dầu với độ gi&ograve;n vừa phải v&agrave; hương vị hạt sen vẫn được bảo quản sau khi sấy.</p>\r\n\r\n<p style=\"text-align:justify\">Hạt sen cung cấp cho cơ thể những dưỡng chất cần thiết như protit, lipit, gluxit, canxi, photpho, sắt,&hellip;</p>\r\n\r\n<p style=\"text-align:justify\">Hạt sen rất gi&agrave;u c&aacute;c vitamin B1, vitamin B2, vitamin PP, vitamin C&hellip;</p>\r\n\r\n<p style=\"text-align:justify\">H&agrave;m lượng mỡ b&atilde;o h&ograve;a, natri v&agrave; cholesterol trong hạt sen rất thấp.</p>\r\n\r\n<p style=\"text-align:justify\">Hạt sen c&oacute; t&aacute;c dụng tăng cường chức năng tỳ vị, đảm bảo dinh dưỡng cho cơ thể, điều h&ograve;a sự thu nạp thức ăn.</p>\r\n\r\n<p style=\"text-align:justify\">bổ sung chất kho&aacute;ng, chất xơ v&agrave; đặc biệt ph&ugrave; hợp với chế độ ăn ki&ecirc;ng.</p>\r\n\r\n<p style=\"text-align:justify\">Ăn hạt sen chữa mất ngủ, thiếu m&aacute;u, k&eacute;n ăn, l&agrave;m đẹp da, chống l&atilde;o h&oacute;a</p>\r\n\r\n<p style=\"text-align:justify\">Hạt sen c&ograve;n gi&agrave;u h&agrave;m lượng kaempferol, một chất flavonoid tự nhi&ecirc;n rất hữu &iacute;ch, c&oacute; t&aacute;c dụng ngăn ngừa vi&ecirc;m nhiễm, đặc biệt l&agrave; t&aacute;c dụng chống vi&ecirc;m c&aacute;c m&ocirc; lợi, nhất l&agrave; ở nh&oacute;m người cao ni&ecirc;n.</p>\r\n\r\n<p style=\"text-align:justify\">Sản phẩm n&ecirc;n bảo quản nơi kh&ocirc; r&aacute;o, tho&aacute;ng m&aacute;t v&agrave; giữ k&iacute;n gi&oacute; khi sử dụng.</p>\r\n', 19, '2018-06-16 09:02:44', '2018-06-16 09:02:44'),
(23, 'Hồng sấy dẻo', 'hong-say-deo', 'Gói 250g', 70000, '', '1', '1', 'hong-say-deo_b8bae8f006ee46879e056e3e19e69285_master.jpg', 'Đặc sản Đà Lạt-Hồng sấy dẻo-được cung cấp bởi thực phẩm an toàn PandaFood\r\n\r\n', '<p style=\"text-align:justify\">Hồng l&agrave; một trong top 4 loại tr&aacute;i c&acirc;y được b&igrave;nh chọn l&agrave; ngon nhất v&agrave; l&agrave; sản phẩm độc đ&aacute;o của v&ugrave;ng đất Đ&agrave; Lạt.</p>\r\n\r\n<p style=\"text-align:justify\">Sản phẩm hồng sấy dẻo được l&agrave;m từ tr&aacute;i hồng cũng l&agrave; một đặc sản được y&ecirc;u th&iacute;ch của kh&aacute;ch du lịch khi đến Đ&agrave; Lạt. C&oacute; hai loại l&agrave; hồng sấy nguy&ecirc;n tr&aacute;i v&agrave; hồng sấy nửa tr&aacute;i (c&ograve;n gọi l&agrave; hồng dẻo miếng)</p>\r\n\r\n<p style=\"text-align:justify\">Để l&agrave;m ra hồng sấy dẻo, phải chọn lựa những tr&aacute;i hồng thật ch&iacute;n, như vậy khi ăn sẽ kh&ocirc;ng bị ch&aacute;t.</p>\r\n\r\n<p style=\"text-align:justify\">Hồng được gọt vỏ rửa sạch, để miếng hồng l&agrave;m ra c&oacute; m&agrave;u sắc rất đỏ đẹp, kh&ocirc;ng bị đen.&nbsp;Sau đ&oacute; tr&aacute;i hồng được đưa v&agrave;o l&ograve; sấy trong nhiều giờ, để hồng được ngon v&agrave; kh&ocirc; đều người sấy phải thường xuy&ecirc;n lật tr&aacute;i hồng. T&ugrave;y theo thời gian sấy sẽ cho ra l&ograve; hồng sấy dẻo hay hồng sấy kh&ocirc; đ&aacute;p ứng nhu cầu của từng kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p style=\"text-align:justify\">Sản phẩm được cung cấp bởi PandaFood</p>\r\n', 19, '2018-06-16 09:04:10', '2018-06-16 09:04:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pdf_shippers`
--

CREATE TABLE `pdf_shippers` (
  `shipper_id` int(10) UNSIGNED NOT NULL,
  `shipper_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipper_phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pdf_shippers`
--

INSERT INTO `pdf_shippers` (`shipper_id`, `shipper_name`, `shipper_phone`) VALUES
(0, 'Đang cập nhật', 0),
(1, 'Viettel Post', 19008095);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pdf_slides`
--

CREATE TABLE `pdf_slides` (
  `slide_id` int(10) UNSIGNED NOT NULL,
  `slide_line1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slide_line2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slide_line3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slide_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slide_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pdf_slides`
--

INSERT INTO `pdf_slides` (`slide_id`, `slide_line1`, `slide_line2`, `slide_line3`, `slide_url`, `slide_img`) VALUES
(3, 'Slide 1 Dòng 1', 'Slide 1 Dòng 2', 'Slide 1 Dòng 3', 'http://pandafood.com/', 'image_placeholder.jpg'),
(4, 'Slide2 Dòng 1', 'Slide 2 Dòng 2', 'Slide 2 Dòng 3', 'http://pandafood.com', 'image_placeholder.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pdf_users`
--

CREATE TABLE `pdf_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pdf_users`
--

INSERT INTO `pdf_users` (`user_id`, `user_name`, `user_password`, `user_email`, `user_fullname`, `user_phone`, `user_address`, `group_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$SkMsPhsk5qK/Zd/fyTn5je7ifAtlHW65BPQm2RQC6jfpqdI0ACbhK', 'doubletcgaming@gmail.com', 'Hoàng Công Thành', 1663971006, '15 Ngô Thì Nhậm, P. Quang Trung, ', 1, 'nx2Wi8sjjpzKcMyANrSjplIVEk8WsfdSzZLN5u0paBIVS8MMRK7EM3tXnAoW', NULL, '2018-06-25 22:45:21'),
(2, 'khach', '$2y$10$GuDgxoRwpj1r5bpPonSnOe7NM/3j6W0LPmELjhe7hFl8bVHKXPNRm', 'superchip1020@gmail.com', 'Hoàng Công Thành', 1663971006, '15 Ngô Thì Nhậm, P. Quang Trung, TP. Thái Bình', 2, 'kaUGSFFVql8eYWPfDY9XXIbTZIBJwYMPUPYsxGbeLN4OHnniaxcubgDQZ5ce', NULL, '2018-06-25 22:46:34'),
(4, 'admin2', '$2y$10$DnGOkK/2Wxnm9kRDS9vcsuhpeFgf.YKl5voqmWp2tTEGFwqeAPg7u', 'doubletc@gmail.com', 'Hoàng Công', 1663971006, '15 Ngô Thì Nhậm, P. Quang Trung', 2, 'b6O1aGHjgv55WRdXqNPV3iAwXP87zWfWBN028U4ulCg3oVERmrLdCxZFVQhC', NULL, '2018-06-11 01:27:13'),
(5, 'thanhqttb', '$2y$10$SkMsPhsk5qK/Zd/fyTn5je7ifAtlHW65BPQm2RQC6jfpqdI0ACbhK', 'thanhqttb@yahoo.com', 'Hoàng Công Thành', 1663971006, '15 Ngô Thì Nhậm, P. Quang Trung', 2, 'yynjaAWZ4d2d5yvBDXVJlZwWnBAiqvT1fVvQFVxEdfq0oBeI4kzNjR3pUvID', '2018-06-11 04:44:55', '2018-06-20 15:27:26'),
(6, 'thanhqttb2', '$2y$10$C6eEjvWhBKAZpIYoLV7YnuHnThdfA9UcRmNF970HEiLs8lnmNcSMa', 'thanhqttb2@yahoo.com', 'Hoàng Công Thành', 1663971006, 'Vĩnh Hưng, Hoàng Mai', 2, NULL, '2018-06-20 18:01:53', '2018-06-20 18:01:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Chỉ mục cho bảng `pdf_blogs`
--
ALTER TABLE `pdf_blogs`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `pdf_blogs_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `pdf_categories`
--
ALTER TABLE `pdf_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `pdf_groups`
--
ALTER TABLE `pdf_groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Chỉ mục cho bảng `pdf_information`
--
ALTER TABLE `pdf_information`
  ADD PRIMARY KEY (`info_id`);

--
-- Chỉ mục cho bảng `pdf_orderdetails`
--
ALTER TABLE `pdf_orderdetails`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `pdf_orderdetails_product_id_foreign` (`product_id`),
  ADD KEY `pdf_orderdetails_order_id_foreign` (`order_id`);

--
-- Chỉ mục cho bảng `pdf_orders`
--
ALTER TABLE `pdf_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `pdf_orders_user_id_foreign` (`user_id`),
  ADD KEY `pdf_orders_shipper_id_foreign` (`shipper_id`);

--
-- Chỉ mục cho bảng `pdf_products`
--
ALTER TABLE `pdf_products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `pdf_products_product_name_unique` (`product_name`),
  ADD KEY `pdf_products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `pdf_shippers`
--
ALTER TABLE `pdf_shippers`
  ADD PRIMARY KEY (`shipper_id`);

--
-- Chỉ mục cho bảng `pdf_slides`
--
ALTER TABLE `pdf_slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Chỉ mục cho bảng `pdf_users`
--
ALTER TABLE `pdf_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `pdf_users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `pdf_users_user_email_unique` (`user_email`),
  ADD KEY `pdf_users_group_id_foreign` (`group_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `pdf_blogs`
--
ALTER TABLE `pdf_blogs`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `pdf_categories`
--
ALTER TABLE `pdf_categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `pdf_groups`
--
ALTER TABLE `pdf_groups`
  MODIFY `group_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `pdf_information`
--
ALTER TABLE `pdf_information`
  MODIFY `info_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `pdf_orderdetails`
--
ALTER TABLE `pdf_orderdetails`
  MODIFY `detail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `pdf_orders`
--
ALTER TABLE `pdf_orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `pdf_products`
--
ALTER TABLE `pdf_products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `pdf_shippers`
--
ALTER TABLE `pdf_shippers`
  MODIFY `shipper_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `pdf_slides`
--
ALTER TABLE `pdf_slides`
  MODIFY `slide_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `pdf_users`
--
ALTER TABLE `pdf_users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `pdf_blogs`
--
ALTER TABLE `pdf_blogs`
  ADD CONSTRAINT `pdf_blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `pdf_users` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `pdf_orderdetails`
--
ALTER TABLE `pdf_orderdetails`
  ADD CONSTRAINT `pdf_orderdetails_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `pdf_orders` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdf_orderdetails_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `pdf_products` (`product_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `pdf_orders`
--
ALTER TABLE `pdf_orders`
  ADD CONSTRAINT `pdf_orders_shipper_id_foreign` FOREIGN KEY (`shipper_id`) REFERENCES `pdf_shippers` (`shipper_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdf_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `pdf_users` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `pdf_products`
--
ALTER TABLE `pdf_products`
  ADD CONSTRAINT `pdf_products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `pdf_categories` (`category_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `pdf_users`
--
ALTER TABLE `pdf_users`
  ADD CONSTRAINT `pdf_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `pdf_groups` (`group_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
