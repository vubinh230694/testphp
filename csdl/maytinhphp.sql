-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2018 at 03:21 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maytinhphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `mota` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`id`, `name`, `mota`) VALUES
(1, 'Máy tính HP', ''),
(2, 'Máy tính TOSHIBA', ''),
(3, 'Máy tính LENOVO', ''),
(4, 'Máy tính ACER', ''),
(5, 'Máy tính MACBOOK', '');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `tennguoimua` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `hangduocmua` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `tennguoimua`, `email`, `diachi`, `dienthoai`, `noidung`, `hangduocmua`) VALUES
(14, 'hoàng thành trung', 'thtrung665@gmail.com', 'Thái nguyên', '01646669097', 'cần mua', ' 34[|||]5[|||||]');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `thuocdanhmuc` int(11) NOT NULL,
  `tensp` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `gia` text COLLATE utf8_vietnamese_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `chitiet` text COLLATE utf8_vietnamese_ci NOT NULL,
  `motangan` text COLLATE utf8_vietnamese_ci NOT NULL,
  `noibat` varchar(11) COLLATE utf8_vietnamese_ci NOT NULL,
  `moi` varchar(11) COLLATE utf8_vietnamese_ci NOT NULL,
  `thuonghieu` varchar(11) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `thuocdanhmuc`, `tensp`, `gia`, `hinhanh`, `chitiet`, `motangan`, `noibat`, `moi`, `thuonghieu`) VALUES
(65, 1, 'Laptop HP Probook 440 G2 LED Backlit', '14790000', '3769b46b7d22e48819e8b74901c9e2.jpg', 'Máy tính xách tay HP Probook 440 G2 là dòng máy tính xách tay thích hợp cho doanh nghiệp và những người làm văn phòng. Do đó, ngoài cấu hình tốt, thiết kế bền bỉ, máy tính xách tay HP Probook 440 G2 còn có khả năng bảo mật toàn diện giúp bạn luôn yên tâm về dữ liệu của mình.\r\n\r\nMặc dù vẫn giữ bộ khung truyền thống như các dòng laptop HP khác, nhưng máy tính xách tay HP Probook 440 G2 đã được chải chuốt nhiều hơn các sản phẩm trước đây cả về thiết kế tổng thể lẫn cân nặng cũng như độ mỏng để máy tính xách tay HP Probook 440 G2 mang dáng vẻ thời trang hơn. Máy tính xách tay HP Probook 440 G2 được gia công chắc chắn, các bản lề và khớp nối hoàn thiện tỉ mỉ, bền vững. Lớp vỏ bằng nhựa cứng kết hợp phần viền bằng nhôm sáng bóng cũng tạo điểm nhấn cho máy tính xách tay HP Probook 440 G2 và giúp giảm thiểu hư hỏng do va đập, đồng thời cũng giảm trọng lượng của tính xách tay HP Probook 440 G2, giúp bạn di chuyển dễ dàng hơn.\r\n\r\nMọi hình ảnh trên máy tính xách tay HP Probook 440 G2 sẽ hiện lên sắc nét ngay trước mắt bạn nhờ màn hình 14inch độ phân giải chuẩn HD 1366x768 pixels. Công nghệ chống chói Anti glare LED Backlit giúp tăng độ tương phản và cho màu sắc tươi sáng, trung thực hơn giúp bạn xem phim và đọc tài liệu rõ nét ngay cả khi bạn làm việc trong văn phòng hay đang ngồi ở nơi có nhiều ánh sáng mặt trời. Không chỉ có màn hình sắc nét, máy tính xách tay HP Probook 440 G2 còn được trang bị hệ thống loa 2.0 công nghệ High Definition Audio sống động đem lại cho bạn những giây phút giải trí đúng nghĩa với các bộ phim HD sắc nét cùng âm thanh trung thực nhất.				\r\n								\r\n				', 'Bộ vi xử lý :Intel Core i505200U 2.2 GHz (3MB L3 Cache upto 2.7 GHz)\r\nBộ nhớ RAM :4 GB (DDR3 Bus 1600 MHz)\r\nĐồ họa :Intel HD Graphics\r\nỔ đĩa cứng :500 GB (HDD)\r\nMàn hình :14 inch (HD LED, 1366 x 768 pixels)\r\nHệ điều hành :Free DOS', 'co', 'co', 'hp'),
(66, 5, 'Apple Macbook Air MMGF2 13.3 Inch', '20900000', '6ce9cb66bb4b845f086141f9d94b5f.jpg', 'Bên cạnh việc ra mắt MacBook 12 mới thì Apple cũng nâng cấp luôn MacBook Air phiên bản 13\", bằng cách nâng cấp RAM từ 4 GB lên thành 8GB và hệ điều hành OS X El Capitan. Trước đó nếu muốn lên 8GB RAM thì người dùng phải bỏ ra thêm 100 USD còn bây giờ thì nó đã trở thành cấu hình tiêu chuẩn với giá bán không thay đổi nhiều. MacBook Air 11\" vẫn giữ nguyên mức RAM cũ là 4 GB.\r\n\r\nVới mức RAM mới, MacBook Air 13\" sẽ có tính cạnh tranh cao hơn so với các đối thủ và đây cũng chính là dung lượng RAM mặc định của MacBook Pro Retina 15\" vài năm trước đây (bây giờ đã là 16GB). Các thông số khác bao gồm: màn hình 13.3\" độ phân giải như cũ 1440x900, ổ lưu trữ SSD PCIe 256GB, CPU Intel Core i5 hai nhân 1.6 GHz, card đồ họa Intel HD Graphics 6000, nặng 1,35 kg và pin lướt web 12 tiếng và cả hệ điều hành OS X El Capitan với hiệu suất ứng dụng nhanh và mượt hơn các bản trước.				\r\n				', 'Bảo hành 24 Tháng tại Canon Lê Bảo Minh\r\nMiễn phí vận chuyển\r\nMiễn phí đổi trả trong vòng 7 ngày', 'co', 'co', 'Apple'),
(67, 2, 'Laptop Toshiba Satellite GeForce 710M C40 14-Inch', '9000000', 'satellite-c75-b7180-600-01.jpg', 'Cắt giảm để phù hợp với bạn\r\n\r\nTận hưởng mọi tính năng mà bạn cần có, trong một thân máy bền và có kiểu dáng đẹp với Satellite C40 14inch mới. Hiện tại với công nghệ tăng cường âm thanh V2 của Toshiba, tạo ra một trải nghiệm máy tính nhỏ gọn với hiệu ứng âm thanh tối đa.\r\n\r\nBộ xử lý đồ hoạ nVidia GeForce 710M\r\n\r\nHiệu quả hình ảnh nhanh với NVIDIA® GeForce® bộ xử lý đồ hoạ lên đến 2GB VRAM và pin thông minh có tuổi thọ cao.\r\n\r\nBộ tăng tốc HD của Toshiba\r\n\r\nTăng truy cập vào các ứng dụng và các chương trình yêu thích của bạn nhanh hơn lên đến 60%, công nghệ của bộ tăng tốc HDD của Toshiba giúp bộ nhớ hệ thống phản ứng nhanh hơn.\r\n\r\nTăng cường âm thanh của Toshiba\r\n\r\nCông nghệ âm thanh độc quyền của Toshiba tự động tăng cường chất lượng âm thanh dựa trên đặc điểm loa tạo ra âm thanh sắc nét, rõ ràng.\r\n\r\nGiám sát sức khoẻ PC\r\n\r\nBộ giám sát sức khoẻ PC của Toshiba phát hiện thông minh và thông báo cho bạn biết về các vấn đề nhờ đó bạn sẽ không bao giờ rơi vào tình trạng bị lúng túng.\r\n\r\nTiện ích chia Màn hình\r\n\r\nGiờ đây, bạn có thể thực hiện được nhiều công việc chỉ bằng một cái nhấp chuột đơn giản. Ghi chú hoặc gửi tin nhắn cho bạn bè trong khi đang xem phim, tất cả đều có thể được thực hiện cùng một lúc!\r\n\r\n				\r\n				', 'Tận hưởng mọi tính năng mà bạn cần có, trong một thân máy bền và có kiểu dáng đẹp với Satellite C40 14inch mới. Hiện tại với công nghệ tăng cường âm thanh V2 của Toshiba, tạo ra một trải nghiệm máy tính nhỏ gọn với hiệu ứng âm thanh tối đa.', 'co', 'co', 'Toshiba'),
(68, 4, 'Laptop Acer Nitro VN7-571G-550V', '17000000', '50f5f6800e36d45de8b677f46cda0c.jpg', 'Laptop Acer Intro VN7-571G-550V thuộc dòng máy cao cấp có cấu hình xử lý mạnh mẽ của hãng Acer, máy tính xách tay được trang bị bộ vi xử lý thế hệ thứ 5 mới Intel Core i5, bộ nhớ 4GB và lưu trữ được nhiều dữ liệu hơn với ổ cứng 1TB.\r\n\r\nMáy tính xách tay Acer Intro VN7-571G-550V có thiết kế thanh lịch với 4 góc máy được vát mỏng về phía trước tạo cảm giác thanh mảnh hơn, sở hữu màn hình rộng 15.6 inch Full HD cho bạn có những trải nghiệm tuyệt vời hơn với màn hình rộng.\r\n\r\nĐặc điểm nổi bật:\r\n\r\n- Bộ xử lý siêu mạnh với CPU Intel Core i5, Ram 4GB, HDD 1TB\r\n\r\n- Thiết kế sang trọng, mỏng đẹp\r\n\r\n- Màn hình laptop 15.6 inch đạt chuẩn Full HD\r\n\r\n- Cổng kết nối USB 3.0 cho tốc độ truyền dữ liệu nhanh hơn\r\n\r\n- Bàn phím thiết kế hiện đại cho người dùng đánh máy dễ dàng hơn\r\n\r\n- Tuochpad có kích thước rộng cho bạn thoải mái di chuyển và có độ nhạy cao				\r\n				', 'Bảo hành 24 Tháng tại Canon Lê Bảo Minh\r\nMiễn phí vận chuyển\r\nMiễn phí đổi trả trong vòng 7 ngày', 'co', 'co', 'Acer'),
(69, 3, 'Laptop Lenovo Yoga 3 Pro 16.5 Inch', '31990000', '22ee9824f7b334bd4bbbf9bcac9dfe.jpg', 'Hãng Lenovo vừa tung ra thị trường sản phẩm máy tính xách tay Yoga 3 Pro thuộc phân khúc laptop cao cấp.\r\n\r\nNgười xưa đã có nói \"tiền nào của nấy\", quả thật vậy, laptop Yoga 3 Pro mang cái giá mà hiếm người có thể bỏ ra để sở hữu, nhưng bù lại, máy được tích hợp những tinh hoa công nghệ tiên tiến, phần cứng thuộc hàng \"khủng\" và thiết kế đẳng cấp siêu mỏng, siêu nhẹ và sang trọng.\r\n\r\nĐặc điểm nổi bật:\r\n\r\n- Chip Intel Core M thế hệ mới\r\n\r\n- Nhanh hơn, nhỏ gọn hơn\r\n\r\n- Laptop 13.3 inch độ phân giải QHD\r\n\r\n- Cảm ứng đa điểm, hiển thị sắc nét\r\n\r\n- Thiết kế độc đáo, sang trọng\r\n\r\n- Bẻ gập linh hoạt, phù hợp với nhiều tư thế\r\n\r\n- Ổ cứng SSD 256GB\r\n\r\n- Cho tốc độ truy xuất dữ liệu cao và nhiều tính năng tiện ích\r\n\r\n- Máy tính RAM 4GB\r\n\r\n- Cho những tác vụ đa nhiệm được mượt mà, trơn tru\r\n\r\n', 'Bảo hành 24 Tháng tại Canon Lê Bảo Minh\r\nMiễn phí vận chuyển\r\nMiễn phí đổi trả trong vòng 7 ngày', 'co', 'co', 'Lenovo'),
(70, 1, 'Laptop HP GS73 6RF Stealth Pro 070XVN', '48390000', '11-5e530495-b729-4217-b9b7-9f14ed5d5219.jpg', 'Tốc độ xử lý mạnh mẽ\r\n\r\nLaptop MSI GS73 6RF Stealth Pro 070XVN với bộ vi xử lý Intel Core I7-6700HQ mang đến hiệu năng tối đa, giúp bạn có thể tận hưởng mọi trò chơi như thật ở mức thiết lập cao nhất.\r\n\r\nCard đồ họa NVIDIA® GeForce® GTX 1060\r\nVới card đồ họa NVIDIA® GeForce® GTX 1060 mới nhất hiện nay, có bộ nhớ chuẩn DDR5 lên đến 6GB cho bạn những giờ phút trải nghiệm tuyệt với với game 3D, phim HD, thiết kế đồ họa.\r\n\r\nLaptop MSI GS73 6RF Stealth Pro 070XVN\r\n\r\n \r\n\r\nBộ nhớ RAM 16GB, Ổ cứng HDD 1TB + SSD 256GB\r\nLaptop MSI GS73 6RF Stealth Pro 070XVN được trang bị với bộ nhớ RAM lên đến 16GB, ổ cứng HDD 1TB + SSD 256GB cho tốc độ xử lý vượt trội, thao tác nhanh và chính xác hơn. Ngoài ra, bộ nhớ còn cho phép bạn nâng cấp lên phù hợp với nhu cầu của bạn, làm tăng hiệu suất máy lên đến 20% và hiệu quả năng lượng hơn 30%.\r\n\r\nMàn hình 17.3 inches, độ phân giải full HD\r\nMàn hình laptop được thiết kế với kích thước 17.3 inches cùng độ phân giải full HD 1920 x 1080 Pixels là sự lựa chọn lý tưởng dành cho những game thủ, đáp ứng tốt yêu cầu làm phim, chỉnh sửa hình ảnh, thực hiện các bài thuyết trình…\r\n\r\nLaptop MSI GS73 6RF Stealth Pro 070XVN\r\n\r\nBàn phím có đèn led\r\nLaptop MSI GS73 6RF Stealth Pro 070XVN có bàn phím công thái học, hành trình 2.5mm, điều này cho phép bạn thao tác khi đánh máy hoặc chơi game dễ dàng. Phím chống bóng mờ đảm bảo lệnh của bạn được thực thi chính xác ngay lập tức.\r\n\r\nLaptop MSI GS73 6RF Stealth Pro 070XVN\r\n\r\nNhiều cổng kết nối\r\nVới nhiều cổng như 3 x USB 3.0; USB 2.0; Type-C; RJ45 Ethernet; mini Display Port (v1.2); HDMI™ v1.4a; Mic-in; Headphone-out (HiFi / SPDIF) laptop sẽ hỗ trợ bạn dễ dàng hơn với việc kết nối các thiết bị điện tử.\r\n\r\nLaptop MSI GS73 6RF Stealth Pro 070XVN\r\n\r\n', 'Sku:  5302733741188_1\r\n\r\nThương hiệu:  MSI\r\n\r\nChip: Intel Core I7-6700HQ 2.5 up to 3.5 GHz\r\n\r\nRAM: DDR4 16GB\r\n\r\nỔ cứng: HDD 1TB + SSD 256GB\r\n\r\nChipset đồ họa: NVIDIA® GeForce® GTX 1060 with 6GB DDR5\r\n\r\nMàn hình: 17.3 Inches\r\n\r\nHệ điều hành: Free Dos\r\n\r\nPin: 3Cell', 'co', 'co', 'Hp'),
(71, 5, 'Laptop Macbook Pro Intel HD Graphics 6000', '25000000', '443ee277cc3fb4e68bf92f87666c5b.jpg', 'Bên cạnh việc ra mắt MacBook 12 mới thì Apple cũng nâng cấp luôn MacBook Air phiên bản 13\", bằng cách nâng cấp RAM từ 4 GB lên thành 8GB và hệ điều hành OS X El Capitan. Trước đó nếu muốn lên 8GB RAM thì người dùng phải bỏ ra thêm 100 USD còn bây giờ thì nó đã trở thành cấu hình tiêu chuẩn với giá bán không thay đổi nhiều. MacBook Air 11\" vẫn giữ nguyên mức RAM cũ là 4 GB.\r\n\r\n\r\nVới mức RAM mới, MacBook Air 13\" sẽ có tính cạnh tranh cao hơn so với các đối thủ và đây cũng chính là dung lượng RAM mặc định của MacBook Pro Retina 15\" vài năm trước đây (bây giờ đã là 16GB). Các thông số khác bao gồm: màn hình 13.3\" độ phân giải như cũ 1440x900, ổ lưu trữ SSD PCIe 256GB, CPU Intel Core i5 hai nhân 1.6 GHz, card đồ họa Intel HD Graphics 6000, nặng 1,35 kg và pin lướt web 12 tiếng và cả hệ điều hành OS X El Capitan với hiệu suất ứng dụng nhanh và mượt hơn các bản trước.', 'Bảo hành 24 Tháng tại Canon Lê Bảo Minh\r\nMiễn phí vận chuyển\r\nMiễn phí đổi trả trong vòng 7 ngày', 'co', 'co', 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `thongtinquantri`
--

CREATE TABLE `thongtinquantri` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thongtinquantri`
--

INSERT INTO `thongtinquantri` (`id`, `taikhoan`, `matkhau`) VALUES
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongtinquantri`
--
ALTER TABLE `thongtinquantri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `thongtinquantri`
--
ALTER TABLE `thongtinquantri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
