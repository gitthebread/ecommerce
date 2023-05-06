-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 09:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

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
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `cus_firstName` varchar(50) NOT NULL,
  `cus_lastName` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `total` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `cus_firstName`, `cus_lastName`, `email`, `phoneNumber`, `total`, `address`, `status`) VALUES
(1, 'Trần', 'Thị Hoa', 'hoatran@gmail.com', '0922355489', '2.940.000đ', '113/84/81 An Dương Vương, p.An Lạc, q.Bình Tân', 1),
(2, 'Trần', 'Thị Hoa', 'hoatran@gmail.com', '0983115869', '4.990.000đ', '113/84/81 An Dương Vương, p.An Lạc, q.Bình Tân', 1),
(3, 'Lê', 'Thị Cẩm Hà', 'halethicam@gmail.com', '0933255899', '2.360.000đ', '15 đường số 10, KDC An Khang, q.Bình Chánh, TP.HCM', 1),
(4, 'Lê', 'Thị Cẩm Hà', 'lethicamha@gmail.com', '0933255899', '1.580.000đ', '15 đường số 10, KDC An Khang, q.Bình Chánh, TP.HCM', 1),
(5, 'Lê', 'Thị Cẩm Hà', 'halethicam@gmail.com', '0933255899', '1.580.000đ', '15 đường số 10, KDC An Khang, q.Bình Chánh, TP.HCM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`) VALUES
(1, 'Sách kinh tế', 1),
(2, 'Văn học Việt Nam', 1),
(3, 'Văn học nước ngoài', 1),
(4, 'Sách học tiếng Anh', 1),
(5, 'Sách học tiếng Hàn', 1),
(6, 'Sách học tiếng Trung', 1),
(7, 'Truyện tranh', 1),
(11, '',1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_bill`
--

CREATE TABLE `detail_bill` (
  `id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_bill`
--

INSERT INTO `detail_bill` (`id`, `bill_id`, `product_name`, `product_quantity`, `product_color`, `product_size`, `product_price`, `status`) VALUES
(10, 1, 'Binh Thư Yếu Lược', 2, '', 'Thường ', 780000, 1),
(11, 1, 'Here U Are - Tập 4', 2, '', 'Thường ', 680000, 1),
(12, 2, '101+ Mẹo Sinh Tồn Với Tiếng Anh', 3, '', 'Thường ', 750000, 1),
(13, 2, '301 Câu Đàm Thoại Tiếng Hoa (Bản chữ Phồn thể)', 4, '', 'Thường ', 680000, 1),
(14, 3, 'Gia Tộc Murdoch', 3, '', 'Thường ', 780000, 1),
(15, 4, 'Nanh Trắng', 2, '', 'Đặc biệt ', 780000, 1),
(16, 5, '101+ Mẹo Sinh Tồn Với Tiếng Anh', 2, '', 'Thường ', 780000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `type` int(1) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image01` varchar(255) NOT NULL,
  `image02` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `color`, `size`, `price`, `quantity`, `type`, `description`, `category_id`, `image01`, `image02`, `status`) VALUES
(1, 'Rèn Luyện Tư Duy Chiến Lược 1 Phút', '', 'Thường', 95000, 10, 2, 'Tri thức mà bạn học được trong cuốn sách Rèn Luyện Tư Duy Chiến Lược 1 Phút (Bản Đặc Biệt) này bao gồm “suy nghĩ tinh nhanh” và “kiến thức tổng hợp”. Trong đó, “suy nghĩ tinh nhanh” có nghĩa là suy nghĩ một cách thông minh, khôn khéo và nhanh chóng.\r\nNói cách khác, đó là những lí luận, cách thiết lập kế hoạch, kiến thức, cách thức tư duy được bồi dưỡng và đúc kết từ binh pháp và những chiến lược kinh doanh. Trong lúc tiếp thu cách “suy nghĩ tinh nhanh” , thông qua những ví dụ cụ thể từ thực tế, bạn đồng thời sẽ học được một lượng “kiến thức tổng hợp” đầy đủ.\r\nĐó chính là giá trị của cuốn sách này, mặt khác, cuốn sách Rèn Luyện Tư Duy Chiến Lược Trong 1 Phút (Bản Đặc Biệt) này có đầy đủ ví dụ về những doanh nghiệp mà có thể bạn đã biết đến.', 1, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/ren-luyen-tu-duy-chien-luoc-1-phut.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/ren-luyen-tu-duy-chien-luoc-1-phut.jpg', 1),
(2, 'Marketing Giỏi Phải Kiếm Được Tiền', '', 'Thường', 299000, 20, 2, 'Marketing là một khoản đầu tư hay chi phí?\r\nMarketing là tạo ra quảng cáo thắng giải hay bán hàng?\r\nMarketing là một hoạt động “bí ẩn”, “nghệ thuật”, “sáng tạo” và người làm marketing phải có tố chất khác người?\r\nTrong cuốn sách Marketing Giỏi Phải Kiếm Được Tiền Sergio Zyman sẽ ”dạy” cho cả thế giới biết Marketing thực sự có nghĩa gì?\r\nHAI VẤN ĐỀ CỦA MARKETING NGÀY NAY LÀ:\r\n– Tại hầu hết các công ty, marketing đang không hiệu quả và do đó bị coi là một hoạt động không cần thiết. Bất cứ khi nào ngân sách bị siết chặt, marketing là một trong nhưng thứ đầu tiên bị cắt đi chính bởi suy nghĩ rằng nó là chi phí.\r\n– Nhiều năm qua những người làm marketing đã tái định vị và nâng cấp marketing thành nghệ thuật. Họ bị lúng túng bởi vẻ hào nhoáng, những giải thưởng, những buổi diễn thuyết, bay tới bay lui để chụp ảnh trên các quần đảo nhiệt đới, và họ quên mất công việc của Marketer là BÁN HÀNG.\r\nHọ nói với nhau rằng các kết quả của hoạt động marketing là không thể đo đếm trong ngày một ngày hai được, chủ doanh nghiệp phải đo hiệu quả của marketing ở thì tương lai. Còn tương lai là bao nhiêu năm thì không ai có thể trả lời rõ ràng.\r\nNhững cá nhân này, người sắm vai ông chủ khó tính, kẻ đóng vai nghệ sĩ ve sầu mải mê ca hát nhảy múa tất cả đã tạo nên một Marketing bất lực – Một Marketing KHÔNG BÁN ĐƯỢC HÀNG, KHÔNG KIẾM ĐƯỢC TIỀN!\r\nĐó là lý do Sergio Zyman – Cựu Giám đốc Marketing của Coca Cola, một marketer lão làng viết nên cuốn Marketing Giỏi Phải Kiếm Được Tiền. Cuốn sách là tổng hợp của những thập kỷ học tập của Sergio Zyman để cho ra đời những chiến dịch, chiến thuật và quy trình vô cùng ngoạn mục. M ột cuốn sách mà khi lật giở đến trang cuối cùng bạn sẽ hiểu được Marketing thực sự là gì, làm thế nào để Marketing hiệu quả và kiếm được tiền!\r\nRằng, marketing là một khoản đầu tư giá trị nhất của một doanh nghiệp, giúp doanh nghiệp gia tăng về mặt giá trị thương hiệu cũng như kiếm được nhiều tiền vì vậy chỉ có thể tăng đầu tư hoặc giữ nguyên chứ không nên cắt giảm.\r\nNếu điều công ty bạn làm khi không bán được hàng là cắt giảm ngân sách Marketing càng nhiều càng tốt thì bạn toi rồi!\r\nVà những người làm Marketing cần nhớ lại thật nhanh rằng marketing là bán sản phẩm. Marketing không phải là một trò chơi và nó cũng chẳng phải nghệ thuật trang trí kỳ diệu nào cả. Nó là công chuyện kinh doanh, làm ăn thuần túy. Marketing chính là việc lập ra những kế hoạch một cách thấu đáo, có hệ thống và thực thi hiệu quả những hành động nhằm lôi kéo thêm nhiều người mua nhiều sản phẩm của bạn một thường xuyên hơn giúp công ty làm ra thêm tiền.\r\nChính vì lẽ đó, Marketing trong tương lai – là marketing-quay-về-nền-tảng-cơ-bản. Bạn chi tiền để kiếm ra tiền!', 1, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/227/marketing-gioi-phai-kiem-duoc-tien.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/227/marketing-gioi-phai-kiem-duoc-tien.jpg', 1),
(3, 'Thay Đổi - Bí Quyết Thay Đổi Khi Thay Đổi Trở Nên Khó Khăn', '', 'Thường', 110000, 83, 2, 'THAY ĐỔI bàn về cách thức thực hiện sự thay đổi, khi sức ỳ và những thói quen đã trở nên thâm căn cố đế. Toàn bộ “triết lý” của cuốn sách tập trung vào 3 ý chính:\r\n\r\n- Định hướng cho Người Quản Tượng: tác động đến lý trí bằng cách tìm kiếm gương sáng, chỉ rõ mục tiêu.\r\n\r\n- Động viên Con Voi: tác động đến cảm xúc.\r\n\r\n- Tạo dựng Con Đường: phá vỡ môi trường cũ, điều chỉnh môi trường, quy tụ đồng minh để tạo điều kiện cho thay đổi diễn ra.\r\n\r\nCuốn sách đưa ra những ví dụ sinh động - có cả những ví dụ liên quan đến Việt Nam - để minh họa cho ý tưởng. Ngoài ra còn có những bài thực hành để ứng dụng các ý này vào trường hợp thực tế. Sách dễ đọc, dễ hiểu và dễ ứng dụng vào thực tế.', 1, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/thay-doi-bi-quyet-thay-doi.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/thay-doi-bi-quyet-thay-doi.jpg', 1),
(4, 'Quy Luật Của Chiến Lược', '', 'Thường', 145000, 12, 2, 'Trong khoảng thời gian từ 1968 – 1976, Bill Gates, Andy Grove, và Steve Jobs thành lập ba công ty có tác động lớn đến ngành công nghệ cao, tạo ra giá trị hơn 1.000 tỉ đôla Mỹ, và làm thay đổi cuộc sống chúng ta. Họ làm sao đạt được thành tựu đáng kinh ngạc này? Quy Luật Của Chiến Lược lần đầu tiên phân tích tổng hợp về ba nhân vật này – từ thành công đến thất bại, từ điểm chung đến điểm riêng – làm nổi bật những chiến lược sách lược kinh doanh mà họ tiên phong trong xây dựng doanh nghiệp.\r\n\r\nGiáo sư David Yoffie và Michael Cusumano đã theo đuổi nghiên cứu về ba nhà lãnh đạo và ba công ty suốt gần 30 năm, trong quá trình giảng dạy về chiến lược kinh doanh, sáng tạo đột phá, khởi nghiệp tại Trường Kinh doanh Harvard và Trường Quản lý Sloan thuộc Học viện Công nghệ Massachusetts (MIT). Trong quyển sách này, hai giáo sư trình bày việc Gates, Grove, và Jobs đã trở thành những bậc thầy về chiến lược như thế nào? Trong vai trò CEO, cả ba tiếp cận chiến lược và thực thi rất giống nhau – nhưng lại hoàn toàn khác với đối thủ – bằng cách chú trọng đến các quy luật sau:\r\n\r\n•  Nhìn về phía trước, suy luận ngược về phía sau: Họ xác định đích đến cho công ty trong tương lai và “suy luận ngược” để tìm ra đường đến đích.\r\n\r\n•  Đặt cược lớn, nhưng không cược cả công ty: Cả ba người đều đặt cược rất lớn nhưng hiếm khi đưa tiềm lực tài chính công ty đứng trước rủi ro không đáng có.\r\n\r\n•  Xây dựng nền tảng và hệ sinh thái: Người dẫn đầu công nghệ phải thiết lập nền tảng ngành, tạo điều kiện cho các công ty khác tạo ra sản phẩm và dịch vụ bổ trợ, nâng cao giá trị cho nền tảng.', 1, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/quy-luat-cua-chien-luoc-tb-2022.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/quy-luat-cua-chien-luoc-tb-2022.jpg', 1),
(6, 'How Design Makes The World - Sự Thống Trị Của Thiết Kế', '', 'Thường', 110000, 10, 2, 'Mọi thứ chúng ta sử dụng, từ mạng xã hội, đến nhà cửa, đường cao tốc đều do ai đó thiết kế. Nhưng làm thế nào họ quyết định được điều gì là tốt cho ta? Họ đã làm đúng điều gì và họ đã khiến ta thất vọng ở đâu? Và ta có thể học được gì từ các chuyên gia này, nhằm đưa ra những quyết định đúng đắn trong cuộc sống của chính mình?\r\n\r\nTrong Sự Thống Trị Của Thiết Kế, nhà thiết kế kiêm tác giả best – seller Scott Berkun đưa độc giả vào một cuộc hành trình khám phá cách các nhà thiết kế thuộc mọi loại, từ kỹ sư phần mềm đến nhà quy hoạch đô thị, đã thành công và thất bại như thế nào.\r\n\r\nBạn sẽ dám đưa ra những câu hỏi thú vị hơn về những thứ mình mua, sử dụng và chế tạo, đồng thời bạn có thể dễ dàng tận dụng ý tưởng từ những nhà thiết kế vĩ đại để cải thiện cuộc sống hằng ngày.\r\n\r\n“Sau khi đọc Sự Thống Trị Của Thiết Kế, bạn sẽ biết phải cảm ơn ai khi bạn làm ra chiếc bánh mì nướng hoàn hảo, trách cứ ai khi bạn lỡ chuyến bay và chế giễu ai khi bạn thấy Segway chạy trên đường.”\r\n\r\n- Jon Kolko, đối tác tại Modernist Studio và người sáng lập của Austin Center for Design', 1, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/su-thong-tri-cua-thiet-ke.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/su-thong-tri-cua-thiet-ke.jpg', 1),
(8, 'Gia Tộc Murdoch', '', 'Thường, Đặc biệt', 229000, 20, 2, 'Rupert Murdoch là ông trùm truyền thông theo đúng nghĩa trong một nền báo chí và truyền thông tư bản đầy rẫy những ông trùm. Tất cả đều tìm đến lợi nhuận và sử dụng mọi phương tiện của họ để làm giàu. Không ít trong số đó đã làm được hơn thế, khi tác động lên cả các nền chính trị, gây ảnh hưởng đến các cuộc tuyển cử, ủng hộ phe này hoặc dìm phe kia bằng các phương tiện tác động lên dư luận.\r\n\r\nNhưng Murdoch đặc biệt hơn cả, bởi con người siêu hạng theo cánh hữu bảo thủ này có tác động lớn đến hai thị trường báo chí sôi động nhất thế giới là Mỹ và Anh. Ở Mỹ, ông kiểm soát một hệ thống truyền thông lớn thân hữu, với “cái loa” lớn nhất là Fox News, một công cụ chiếm vai trò định hướng thông tin trong nền chính trị Mỹ. Quan trọng hơn cả, ông ủng hộ Donald Trump cả trước, trong và sau nhiệm kỳ Tổng thống của Trump. Ở Anh, tập đoàn của ông sở hữu hai cái loa lớn khác là The Sun và The Times. Ở nhiều nơi khác cũng có dấu chân ông.', 2, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/gia-toc-murdoch.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/gia-toc-murdoch.jpg', 1),
(9, 'Xây Dựng Sự Độc Đáo - Cách Để Khởi Nghiệp Từ Đam Mê', '', 'Đặc biệt', 181000, 13, 2, 'Khi một đam mê biến thành một hoạt động kinh doanh\r\n\r\nChuyện kể rằng Riccardo, một chàng trai trẻ 23 tuổi đang thực tập tại phòng Marketing của một công ty ở Chicago, vào một buổi tối đã mua tên miền từ một nhà cung cấp Mĩ mà trên đó bạn của anh, Chiara Ferragni, dự định đăng bài đăng đầu tiên của The Blonde Salad.\r\n\r\nChỉ 3 năm sau, hai người được mời về chia sẻ kinh nghiệm với những sinh viên ở Harvard. Và đây chỉ là khởi đầu của việc xây dựng một công ty với lợi nhuận hàng triệu euro - nhưng hơn cả, đó là một dự án có tính chất đổi mới, lớn đến mức trở thành một trong những đỉnh cao, giúp thay đổi luật lệ của ngành thời trang ở cấp độ quốc tế.\r\n\r\nỞ thời điểm hiện tại, khi chỉ mới hơn 30 tuổi, Riccardo Pozzoli đã có hàng loạt doanh nghiệp mới trong ngành thời trang, thực phẩm, phong cách sống và mạng xã hội: một câu chuyện về dũng khí, sự sáng tạo và đam mê mà nhờ đó chúng ta có thể diễn giải thời đại của mình theo một góc nhìn mới.\r\n\r\nQuan điểm của Pozzoli về những lĩnh vực kinh doanh ở hiện tại và tương lai là khuyến khích nhưng không bó buộc, thực tế nhưng không mất đi tầm nhìn và chất thơ, rất dễ đọc nhưng giàu thông tin và ý tưởng.\r\n\r\nCùng với Riccardo Pozzoli, trong cuốn sách này, chúng ta sẽ hiểu được:\r\n\r\n•  Thế nào là một nhà khởi nghiệp thực sự.\r\n\r\n•  Cách để biến ước mơ thành một ý tưởng có giá trị, và phát triển ý tưởng đó thành một công ty.\r\n\r\n•  Những việc cần làm trên thực tế khi bạn bắt đầu từ con số 0, và bạn cần dũng khí và sự dẻo dai để xây dựng một dự án chưa được thực hiện.\r\n\r\n•  Cách để bắt đầu lại lần nữa khi cuộc sống khiến chúng ta - hoặc cố gắng ép buộc chúng ta - phải bước sang một trang mới, xây dựng trên những thành công cũng như thất bại', 1, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/xay-dung-su-doc-dao.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/xay-dung-su-doc-dao.jpg', 1),
(10,'Sự Suy Tàn Của Quyền Lực', '', 'Thường', 75000, 91, 2, 'Những nhà lãnh đạo tối cao sẽ luôn sở hữu quyền lực vô hạn như người ta vẫn tưởng hay sao?\r\n\r\nKhông hẳn vậy. Quyền lực đang chuyển dịch - từ các đội quân lớn, ổn định sang các nhóm quân nổi dậy lỏng lẻo, từ các tập đoàn đến các công ty khởi nghiệp lanh lợi, và từ các dinh thự tổng thống sang các quảng trường. Nhưng quyền lực cũng đang thay đổi, trở nên khó sử dụng hơn và dễ mất hơn. Trong Sự Suy Tàn Của Quyền Lực, cựu biên tập viên của Foreign Policy đã phân tích cuộc đấu tranh giữa những tay chơi hạng nặng từng thống trị một thời và những quyền lực vi mô đang thách thức họ trong mọi lĩnh vực của đời sống. Dựa trên nghiên cứu ban đầu, cùng với những kinh nghiệm trong các vấn đề mang tính toàn cầu, Moisés Naím đã giải thích sự kết thúc của quyền lực đang tái thiết thế giới của chúng ta như thế nào.\r\n\r\nNăm 2015, cuốn sách này đã được Mark Zuckerberg lựa chọn để mở đầu chiến dịch “Một năm đọc sách” của mình.', 2, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/su-suy-tan-cua-quyen-luc.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/su-suy-tan-cua-quyen-luc.jpg', 1),
(11, 'Tiếng Việt Giàu Đẹp - Vẻ Đẹp Ngôn Ngữ, Vẻ Đẹp Văn Chương (Tái bản năm 2022)', '', 'Thường', 550000, 100, 1, 'Tập hợp những bài viết nghiên cứu về ngôn ngữ của nhà giáo Lê Xuân Mậu đã đăng trên các báo và tạp chí. Do đó nội dung các bài viết đề cập đến những hiện tượng ngôn ngữ, lời nói khá gần gũi trong xã hội, mang tính ứng dụng cao với những ví dụ cụ thể sinh động. Nội dung được trình bày khá dễ hiểu, giản dị, sinh động, súc tích, ít sử dụng các thuật ngữ khoa học hàn lâm. Các bài viết là những nghiên cứu, phát hiện khá lý thú về một số hiện tượng ngôn ngữ mang tính phổ quát và sức biểu cảm của ngôn ngữ nghệ thuật trong văn chương.', 2, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/ve-dep-ngon-ngu-ve-dep-van-chuong-tb-2022.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/ve-dep-ngon-ngu-ve-dep-van-chuong-tb-2022.jpg', 1),
(12, 'Binh Thư Yếu Lược', '', 'Thường', 195000, 10, 1, 'Là bộ sách quân sự đầu tiên của dân tộc Việt Nam do Hưng Đạo đại vương Trần Quốc Tuấn viết vào thế kỷ XIII. Những tư tưởng quân sự trong \"Binh thư yếu lược\" chủ yếu là tư tưởng của Tôn Vũ và Ngô Khởi mà Trần Hưng Đạo đã vận dụng một cách sáng tạo vào hoàn cảnh Việt Nam lúc bấy giờ. Bộ sách là sự kết hợp giữa lý luận và thực tiễn với những chiến lược, chiến thuật quân sự độc đáo... đã àm nên chiến thắng vẻ vang cho dân tộc. Đặc biệt, nhà quân sự lỗi lạc này đã nhấn mạnh: \"Phải khoan dùng sức dân để làm kế sâu rễ bền gốc, đó là thượng sách giữ nước, không còn gì hơn\". Đến nay tư tưởng ấy vẫn còn nguyễn giá trị.', 2, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/binh-thu-yeu-luoc.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/binh-thu-yeu-luoc.jpg', 1),
(13, 'Danh Tác Văn Học Việt Nam - Đời Thừa (Tái bản năm 2022)', '', 'Thường', 69000, 12, 1, 'Trong mảng sáng tác về đề tài tiểu tư sản của Nam Cao, truyện ngắn Đời Thừa có một vị trí đặc biệt . Đời Thừa đã ghi lại chân thật hình ảnh buồn thảm của người tri thức tiểu tư sản nghèo, nhà văn Nam Cao đã phác hoạ rõ nét hình ảnh vừa bi vừa hài của lớp người này trở nên đầy ám ảnh. Giá trị của Đời Thừa không phải chỉ ở chỗ đã miêu tả chân thật cuộc sống nghèo khổ, bế tắc của người  trí thức tiểu tư sản nghèo, đã viết về người tiểu tư sản không phải với ngòi bút vuốt ve, thi vị hoá, mà còn vạch ra cả những thói xấu của họ...', 2, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/danh-tac-van-hoc-viet-nam-doi-thua-tb-2022.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/danh-tac-van-hoc-viet-nam-doi-thua-tb-2022.jpg', 1),
(14, 'Thời Gian Trong Mắt Tôi', '', 'Thường', 160000, 10, 1, 'Thời Gian Trong Mắt Tôi là cuốn hồi ký và những ghi chép, bài báo của Nhà giáo Nhân dân - Bác sĩ Trần Hữu Nghiệp (1911-2006) do chính ông viết và đã được Nxb Vãn nghệ Thành phố Hồ Chí Minh in, phát hành năm 1993 với số lượng hạn chế.\r\n\r\nTrong Thời Gian Trong Mắt Tôi, ông đã chuyển tải, ghi lại những tháng ngày sôi động, trong sáng, nhiệt huyết của một TRÍ THỨC TÂY HỌC, để lại tất cả để đi theo Cách mạng, phục vụ nhân dân, chiến sĩ trong dòng chảy của cuộc đấu tranh giải phóng dân tộc trọn vẹn 60 năm của cuộc đời mình: Cho đến khi Ông nhắm mắt xuôi tay, 2006. Ông được ví như cây đa trong ngành Y, là “máy cái” trong công cuộc xây dựng và đào tạo cán bộ cho ngành Y tế Cách mạng miền Nam trong suốt hai cuộc kháng chiến chống Pháp, chống Mỹ.', 2, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/thoi-gian-trong-mat-toi.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/thoi-gian-trong-mat-toi.jpg', 1),
(15, 'Sát Nhân Liên Hoàn Kế', '', 'Thường', 154000, 12, 2, 'Những tưởng vụ án ngày 28.3 khép lại, Chu Sĩ Khiêm đã có thể an tâm nghỉ hưu nhưng hóa ra tất cả mới chỉ trải qua một nửa màn kịch. Ông cùng không ngờ những án mạng liên tiếp có liên quan mật thiết với bí mật năm xưa của ông. Sau khi mọi chuyện được làm sáng tỏ, cuối cùng, ông đã tìm ra hung thủ thực sự nhưng đồng thời lại phải chấp nhận một sự thật đau lòng…', 3, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/235/sat-nhan-lien-hoan-ke-tap-1.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/235/sat-nhan-lien-hoan-ke-tap-1.jpg', 1),
(16, 'Nanh Trắng', '', 'Đặc biệt', 140000, 9, 2, 'Jack London là một trong những nhà văn hiện thực hàng đầu nước Mỹ với “33 đầu sách cùng rất nhiều truyện ngắn và mẩu tin trên báo”. Ông được đánh giá là người không biết mệt mỏi cùng khả năng sáng tạo phi thường, vốn sống phong phú. Tất cả đều được thể hiện rõ nét qua những trang viết của ông.\r\n\r\nSau sự thành công của cuốn sách best-seller Tiếng gọi nơi hoang dã, Jack London tiếp tục cho ra đời cuốn Nanh Trắng và được đón nhận rất lớn từ độc giả.\r\n\r\nNanh Trắng là một tác phẩm kinh điển của nhà văn Jack London kể về hành trình phiêu lưu đầy “bão tố” của một chú chó mang trong mình dòng máu chỉ ba phần tư là sói và phần còn lại là “chó nhà”.  Và chú chó ấy có tên là Nanh Trắng, sống trong vùng Yukon của Canada, trong thời kì người ta đổ xô đi tìm vàng Klondike vào cuối thế kỷ 19.\r\n\r\nNếu Tiếng gọi nơi hoang dã kể về chú chó Buck kéo xe đã bị bản năng hoang dã biến thành một chú chó sói, thì Nanh Trắng lại kể về một chú chó cùng tên cuốn sách với ba phần tư dòng máu là chó sói nhưng đã được thuần hóa bằng lòng yêu thương của con người để trở thành chó nhà. Dù có nội dung đảo ngược nhau nhưng cả hai tác phẩm nổi bật nhất này của Jack London đều hướng đến, đều miêu tả sự khắc nghiệt, tàn bạo trong tự nhiên, cũng như thái độ tàn độc hoặc yêu thương của con người đã tác động tới sự thay đổi bản chất của những chú chó.\r\n\r\nDưới ngòi bút táo bạo của Jack London, tiểu thuyết Nanh Trắng đã miêu tả và lột tả rõ nét sự tàn nhẫn, độc ác của thiên nhiên đối với con người. Đồng thời nội dung cuốn tiểu thuyết này cũng chứa đựng nhiều bài học quý giá về tình mẫu tử, tình bạn và cả tình người đoàn kết vượt qua nghịch cảnh. Mọi thứ diễn ra rất tự nhiên, chân thật và đầy tính nhân văn. Và tất nhiên, đáng chú ý nhất vẫn là hành trình lớn lên của sói Nanh Trắng, từ một chú chó sói hoang dã trở thành một chú chó nhà anh hùng.', 3, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/nanh-trang.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/nanh-trang.jpg', 1),
(17, 'Bức Họa Múa Rối Xương (Bộ 2 tập)', '', 'Thường, Đặc biệt', 2790000, 12, 2, 'Trở về từ chuyến hành trình kinh hoàng ở nước Nga xa xôi, Lâm Bán Hạ và Tống Khinh La ngay lập tức phải đương đầu với một vụ án mới.\r\n\r\nBảy thiếu niên bốc đồng đã rủ nhau khám phá bí ẩn đằng sau những cái chết bất ngờ trên chuyến tàu lượn siêu tốc tại một công viên giải trí.\r\n\r\nThời khắc cánh cửa gỉ sét mở ra cũng là lúc họ vô tình bước qua ranh giới giữa thực và ảo. Sau lớp sương mù dày đặc, thứ đang lặng lẽ đón chờ họ chỉ có sự tuyệt vọng chết chóc.\r\n\r\nTàu lượn lao vun vút trên đường ray, giọng nói méo mó trong loa phát thanh thốt ra một câu thông báo đơn giản.\r\n\r\nCứ thế, trò chơi sinh tử điên rồ đã chính thức bắt đầu…', 3, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/235/buc-hoa-mua-roi-xuong-bo-2c.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/235/buc-hoa-mua-roi-xuong-bo-2c.jpg', 1),
(18, 'YBM TOEIC Reading 1000 - Tập 1', '', 'Thường', 229000, 8, 1, 'Bắt kịp xu hướng ra đề thi TOEIC theo định dạng mới, bộ sách YBM TOEIC Reading 1000 (gồm 2 cuốn) cho thấy rõ những thay đổi trong phần thi Đọc. Mỗi cuốn trong bộ sách cung cấp 1000 câu hỏi bám sát đề thi thật, được cập nhật mới nhất, phù hợp với người học thuộc các trình độ khác nhau (band 500+ và 700+). Phần giới thiệu ở những trang đầu (giải đáp thắc mắc liên quan đến kỳ thi TOEIC, phân tích xu hướng ra đề theo định dạng mới, bảng quy đổi điểm,…) tóm lược những thông tin chắt lọc và quan trọng về TOEIC. Phần phía sau cuốn sách đưa ra lời giải thích đáp án chi tiết, cho thấy điểm vượt trội của tài liệu này so với các cuốn sách luyện đề khô khan khác. Với những hướng dẫn cụ thể và rõ ràng, người học chắc chắn sẽ không còn bỡ ngỡ trước những đổi mới của bài thi TOEIC, tự tin bước vào phòng thi và chinh phục điểm số cao như kỳ vọng.\r\n\r\nBộ sách YBM TOEIC Reading 100 gồm 2 cuốn: Tập 1 hướng tới đối tượng có mong muốn chinh phục band điểm 400-650 (mức điểm 450 là yêu cầu tốt nghiệp cao đẳng; mức điểm 650 là yêu cầu chung đối với sinh viên tốt nghiệp Đại học hệ đào tạo 4-5 năm, nhân viên, trưởng nhóm tại các doanh nghiệp có yếu tố nước ngoài). Tập 2 dành cho band điểm 650+ (có khả năng giao tiếp tiếng Anh tốt).\r\n\r\nƯU ĐIỂM NỔI BẬT\r\n\r\n- Về thương hiệu\r\n\r\nYBM là nhà xuất bản lớn nhất nhì Hàn Quốc, từng xuất bản các tài liệu học tiếng Anh (đặc biệt là sách luyện thi TOEIC) nổi tiếng, được nhiều người luyện thi ở Việt Nam biết tới. YBM đã trở thành thương hiệu có tên tuổi trong mảng sách học tiếng Anh.\r\n\r\n- Về nội dung\r\n\r\nMỗi cuốn sách gói gọn nội dung chính trong 10 test bám sát cấu trúc của bài thi TOEIC định dạng mới, kịp thời cập nhật những điểm thay đổi, bao gồm:\r\n\r\n+ Số lượng câu hỏi của Part 5 giảm, đồng thời tăng số lượng câu hỏi trong Part 6 và 7.\r\n\r\n+ Tỷ lệ câu hỏi về ngữ pháp tăng lên so với câu hỏi về từ vựng.\r\n\r\n+ Dạng bài ba đoạn văn, hình thức chuỗi tin nhắn được bổ sung thêm trong Part 7.\r\n\r\n+ Các dạng câu hỏi mới cũng được thiết kế và lồng ghép hợp lý: câu hỏi chọn câu thích hợp để điền vào chỗ trống, câu hỏi nắm bắt ý đồ, câu hỏi chọn vị trí của câu cho sẵn.\r\n\r\n- Về hình thức\r\n\r\n+ Sách được trình bày rõ ràng, khoa học theo hai phần chính là đề thi và giải thích đáp án, giúp người luyện thi tiện chấm điểm, tra cứu và tự sửa lỗi.\r\n\r\n+ Phần đề thi được sắp xếp và thiết kế tương đối giống đề thi thật, giúp người học dễ hình dung trong quá trình làm bài.\r\n\r\n- Về tính ứng dụng\r\n\r\nBộ sách phù hợp cho mục đích tự học. Mỗi bài test có phần đáp án giải thích rõ ràng từng câu và dịch nghĩa toàn bộ văn bản. Mọi hoạt động chấm điểm, tra cứu đáp án và sửa lỗi, người học đều có thể tự làm.', 4, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/185/ybm-toeic-reading-1000-tap-1.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/185/ybm-toeic-reading-1000-tap-1.jpg', 1),
(19, 'YBM TOEIC Reading 1000 - Tập 2 (Tái bản năm 2022)', '', 'Thường', 259000, 5, 1, 'Bắt kịp xu hướng ra đề thi TOEIC theo định dạng mới, bộ sách YBM TOEIC Reading 1000 (gồm 2 cuốn) cho thấy rõ những thay đổi trong phần thi Đọc. Mỗi cuốn trong bộ sách cung cấp 1000 câu hỏi bám sát đề thi thật, được cập nhật mới nhất, phù hợp với người học thuộc các trình độ khác nhau (band 500+ và 700+). Phần giới thiệu ở những trang đầu (giải đáp thắc mắc liên quan đến kỳ thi TOEIC, phân tích xu hướng ra đề theo định dạng mới, bảng quy đổi điểm,…) tóm lược những thông tin chắt lọc và quan trọng về TOEIC. Phần phía sau cuốn sách đưa ra lời giải thích đáp án chi tiết, cho thấy điểm vượt trội của tài liệu này so với các cuốn sách luyện đề khô khan khác. Với những hướng dẫn cụ thể và rõ ràng, người học chắc chắn sẽ không còn bỡ ngỡ trước những đổi mới của bài thi TOEIC, tự tin bước vào phòng thi và chinh phục điểm số cao như kỳ vọng.\r\n\r\nBộ sách YBM TOEIC Reading 100 gồm 2 cuốn: Tập 1 hướng tới đối tượng có mong muốn chinh phục band điểm 400-650 (mức điểm 450 là yêu cầu tốt nghiệp cao đẳng; mức điểm 650 là yêu cầu chung đối với sinh viên tốt nghiệp Đại học hệ đào tạo 4-5 năm, nhân viên, trưởng nhóm tại các doanh nghiệp có yếu tố nước ngoài). Tập 2 dành cho band điểm 650+ (có khả năng giao tiếp tiếng Anh tốt).\r\n\r\nƯU ĐIỂM NỔI BẬT\r\n\r\n- Về thương hiệu\r\n\r\nYBM là nhà xuất bản lớn nhất nhì Hàn Quốc, từng xuất bản các tài liệu học tiếng Anh (đặc biệt là sách luyện thi TOEIC) nổi tiếng, được nhiều người luyện thi ở Việt Nam biết tới. YBM đã trở thành thương hiệu có tên tuổi trong mảng sách học tiếng Anh.\r\n\r\n- Về nội dung\r\n\r\nMỗi cuốn sách gói gọn nội dung chính trong 10 test bám sát cấu trúc của bài thi TOEIC định dạng mới, kịp thời cập nhật những điểm thay đổi, bao gồm:\r\n\r\n+ Số lượng câu hỏi của Part 5 giảm, đồng thời tăng số lượng câu hỏi trong Part 6 và 7.\r\n\r\n+ Tỷ lệ câu hỏi về ngữ pháp tăng lên so với câu hỏi về từ vựng.\r\n\r\n+ Dạng bài ba đoạn văn, hình thức chuỗi tin nhắn được bổ sung thêm trong Part 7.\r\n\r\n+ Các dạng câu hỏi mới cũng được thiết kế và lồng ghép hợp lý: câu hỏi chọn câu thích hợp để điền vào chỗ trống, câu hỏi nắm bắt ý đồ, câu hỏi chọn vị trí của câu cho sẵn.\r\n\r\n- Về hình thức\r\n\r\n+ Sách được trình bày rõ ràng, khoa học theo hai phần chính là đề thi và giải thích đáp án, giúp người luyện thi tiện chấm điểm, tra cứu và tự sửa lỗi.\r\n\r\n+ Phần đề thi được sắp xếp và thiết kế tương đối giống đề thi thật, giúp người học dễ hình dung trong quá trình làm bài.\r\n\r\n- Về tính ứng dụng\r\n\r\nBộ sách phù hợp cho mục đích tự học. Mỗi bài test có phần đáp án giải thích rõ ràng từng câu và dịch nghĩa toàn bộ văn bản. Mọi hoạt động chấm điểm, tra cứu đáp án và sửa lỗi, người học đều có thể tự làm.', 4, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/ybm-toeic-reading-100-tap-2.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/ybm-toeic-reading-100-tap-2.jpg', 1),
(20, '101+ Mẹo Sinh Tồn Với Tiếng Anh', '', 'Thường', 269000, 4, 1, 'Tiếng Anh len lỏi trong mọi ngóc ngách của cuộc sống thường nhật, trong khi bạn vẫn nghĩ tiếng Anh khó?\r\n\r\nKhi bắt đầu, nếu bạn chưa nói được tiếng Anh, đừng tự ti, vì không ai giỏi tiếng Anh ngay từ đầu.\r\n\r\nNhưng chính người bản xứ nói tiếng Anh chỉ dùng các từ quen thuộc trong cuộc sống hằng ngày, tương tự như của chúng ta. Vậy nên cách học tiếng Anh hiệu quả nhất chính là sử dụng những từ ngữ gần gũi trong cuộc sống. Và tất cả nhiệm vụ trong 101+ MẸO SINH TỒN VỚI TIẾNG ANH đều rất thông dụng, với hơn một trăm tình huống hội thoại gần gũi thực tế như tìm nhà thuê, đi xe buýt, đi máy bay, giao tiếp công sở, đi ăn nhà hàng, du lịch, tham gia các hoạt động xã hội,… sẽ giúp bạn cải thiện trình độ tiếng Anh và làm chủ kỹ năng đàm thoại bằng tiếng Anh; đồng thời khám phá những bí mật của ngôn ngữ này trong đời sống.\r\n\r\n101+ MẸO SINH TỒN VỚI TIẾNG ANH sẽ dành cho bất cứ ai, ở bất cứ đâu!\r\n\r\nSách được phát hành bởi thương hiệu sách trẻ Wavebooks với sứ mệnh trở thành người bạn đồng hành tin cậy cho quá trình phát triển kỹ năng và tâm hồn người Việt trẻ.\r\n\r\n#wavebooks #HyunjeongYoo #kynangsong #azvietnam #sachhocngoaingu #sachhoctienganh', 4, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/101-meo-sinh-ton-tieng-anh.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/236/101-meo-sinh-ton-tieng-anh.jpg', 1),
(21, 'Học Tiếng Anh Cùng Truyện Ngụ Ngôn Aesop - Con Quạ Và Những Chiếc Lông (Song ngữ Anh-Việt)', '', 'Thường', 40000, 5, 0, 'Nhà giáo dục lừng danh Maria Montessori từng nói: “Giáo dục ngày nay không nên quá chú trọng việc truyền thụ kiến thức thuần túy, mà phải đi theo một con đường khác. Giáo dục phải hướng tới mục tiêu giải phóng tất cả tiềm năng của con người.”\r\n\r\nThấu hiểu điều đó, bộ sách Học Tiếng Anh Cùng Truyện Ngụ Ngôn Aesop được phát hành với kỳ vọng tối ưu hóa tất cả tiềm năng ngoại ngữ của trẻ và giúp trẻ hình thành nhân cách trong sáng, tốt đẹp từ sớm. Bộ sách có rất nhiều điểm độc đáo, thú vị:\r\n\r\n- Những câu chuyện ngụ ngôn kinh điển, thâm thúy và sâu sắc.\r\n\r\n- Song ngữ Anh - Việt, tranh minh họa sống động đi kèm với file nghe, nhãn dán, đảm bảo sự lôi cuốn và không gây nhàm chán.\r\n\r\n- Đầy đủ các dạng bài tập để rèn luyện toàn diện 4 kỹ năng nghe - nói - Đọc - viết.\r\n\r\nTin rằng bộ sách sẽ là công cụ hữu ích cho các bạn nhỏ trong việc trau dồi vốn tiếng Anh, thấu hiểu các bài học đạo đức và thỏa sức “học mà chơi, chơi mà học”.', 4, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/130/hoc-tieng-anh-cung-truyen-ngu-ngon-aesop-con-qua-va-nhung-chiec-long.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/130/hoc-tieng-anh-cung-truyen-ngu-ngon-aesop-con-qua-va-nhung-chiec-long.jpg', 1),
(22, '6.000 Từ Vựng Y Học Song Ngữ Hàn-Việt', '', 'Thường', 100000, 10, 1, 'Đây là quyển từ vựng y học song ngữ Hàn - Việt đầu tiên tập hợp khá đầy đủ các khái niệm dịch tễ, tên các loại bệnh, triệu chứng, tên các loại thiết bị y tế, cơ quan y tế, hệ thống phòng ban của bệnh viện, cơ quan phòng chống dịch, phương pháp trị liệu, y học truyền thống và hiện đại...', 5, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/181/6000-tu-vung-y-hoc-song-ngu-han-viet.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/181/6000-tu-vung-y-hoc-song-ngu-han-viet.jpg', 1),
(23, '301 Câu Đàm Thoại Tiếng Hoa (Bản chữ Phồn thể)', '', 'Thường', 62000, 12, 1, '301 Câu Đàm Thoại Tiếng Hoa Bản Chữ Phồn Thể. Giáo Trình Tiếng Trung Quốc Cho Người Nước Ngoài Phổ Biến Nhất Thế Giới.\r\n\r\nXin trân trọng giới thiệu!', 6, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/171/301_cau_dam_thoai_tieng_hoa_ban_chu_phon_the.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/171/301_cau_dam_thoai_tieng_hoa_ban_chu_phon_the.jpg', 1),
(24, 'Giáo Trình Hán Ngữ Boya Sơ Cấp - Tập 1 (Tái bản)', '', 'Thường', 160000, 10, 1, 'Quyển sách này là \"Quyển sơ cấp đầu tiên\" - một bộ phận trong hệ thống \"Giáo trình Hán ngữ Boya\" sơ cấp, một cuốn sách đầy tinh tế và chọn lọc, cung cấp cho người học ở trình độ xuất phát một lượng kiến thức cơ bản về từ ngữ và các hạng mục ngữ pháp sơ cấp. Giáo trình này có thể nhanh chóng nâng cao trình độ của người học, như tăng lượng từ hội, củng cố tri thức, dùng ngữ pháp sâu hơn và nâng cao khả năng giao tiếp.\r\n\r\nTrọng tâm của cuốn sách là công năng huấn luyện ngôn ngữ và tuyển chọn ngữ liệu tự nhiên xoay quanh sự hứng thú của người học. Trong đó công năng huấn luyện ngôn ngữ gồm những loại như trần thuật, miêu tả, thuyết minh và luận thuật. Và mỗi công năng liên quan tới nhiều mặt: ví dụ như công năng trần thuật bao gồm : trần thuật sự trải nghiệm học tập của bản thân, trải nghiệm tìm việc trần thuật sự việc theo tuần tự thời gian, trần thuật kết hợp với bình luận...\r\n\r\nCuốn sách \"Giáo trình Hán ngữ Boya sơ cấp\" gồm 2 quyển (sơ cấp I và II), mỗi phần chia lầm nhiều chủ đề (đơn nguyên), mỗi chủ đề sẽ có các bài học. Trước mỗi chủ đề sẽ có phần ôn tập giúp người đọc nhớ lại kiến thức bài cũ. Sau mỗi chủ đề là bài tập để người đọc luyện tập và thực hành. Nội dung các bài trong mỗi chủ đề có liên quan đến nhau. Điểm ngôn ngữ của các bài bao gồm: Giải thích giản yếu, Câu ví dụ và Bài tập, mỗi điểm ngôn ngữ yêu cầu học sinh căn cứ vào câu ví dụ tổng kết quy luật kết cấu rồi điền vào chỗ trống sau các câu ví dụ.\r\n\r\nBài tập của các chủ đề gồm nhiều tầng kiến thức, từ kết cấu âm tiết chữ Hán, ngữ tố, từ hội cho đến các bài văn, giúp học sinh củng cố, hấp thu và vận dụng kết cấu ngôn ngữ của chủ đề. Phần cuối mỗi chủ đề đều có bài đọc và viết bài tập. Bài đọc tái hiện từ hội và điểm ngôn ngữ trong mỗi chủ đề. Chủ yếu là luyện tập năng lực viết bài cho học sinh, ngoài ra còn luyện cho học sinh kỹ năng ứng dụng kết cấu ngôn ngữ trong mỗi chủ đề.', 6, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/181/giao-trinh-han-ngu-boya-so-cap-tap-1-tb.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/181/giao-trinh-han-ngu-boya-so-cap-tap-1-tb.jpg', 1),
(25, 'Giáo Trình Hán Ngữ Boya Sơ Cấp - Tập 2 (Sách bài tập kèm đáp án)', '', 'Thường', 66000, 2, 1, 'Quyển sách này là \"Quyển sơ cấp thứ hai\" - một bộ phận trong hệ thống \"Giáo trình Hán ngữ Boya\" sơ cấp, một cuốn sách đầy tinh tế và chọn lọc, cung cấp cho người học ở trình độ xuất phát một lượng kiến thức cơ bản về từ ngữ và các hạng mục ngữ pháp sơ cấp. Giáo trình này có thể nhanh chóng nâng cao trình độ của người học, như tăng lượng từ hội, củng cố tri thức, dùng ngữ pháp sâu hơn và nâng cao khả năng giao tiếp.\r\n\r\nTrọng tâm của cuốn sách là công năng huấn luyện ngôn ngữ và tuyển chọn ngữ liệu tự nhiên xoay quanh sự hứng thú của người học. Trong đó công năng huấn luyện ngôn ngữ gồm những loại như trần thuật, miêu tả, thuyết minh và luận thuật. Và mỗi công năng liên quan tới nhiều mặt: ví dụ như công năng trần thuật bao gồm : trần thuật sự trải nghiệm học tập của bản thân, trải nghiệm tìm việc trần thuật sự việc theo tuần tự thời gian, trần thuật kết hợp với bình luận...\r\n\r\nCuốn sách \"Giáo trình Hán ngữ Boya sơ cấp\" gồm 2 quyển (sơ cấp I và II), mỗi phần chia lầm nhiều chủ đề (đơn nguyên), mỗi chủ đề sẽ có các bài học. Trước mỗi chủ đề sẽ có phần ôn tập giúp người đọc nhớ lại kiến thức bài cũ. Sau mỗi chủ đề là bài tập để người đọc luyện tập và thực hành. Nội dung các bài trong mỗi chủ đề có liên quan đến nhau. Điểm ngôn ngữ của các bài bao gồm: Giải thích giản yếu, Câu ví dụ và Bài tập, mỗi điểm ngôn ngữ yêu cầu học sinh căn cứ vào câu ví dụ tổng kết quy luật kết cấu rồi điền vào chỗ trống sau các câu ví dụ.\r\n\r\nBài tập của các chủ đề gồm nhiều tầng kiến thức, từ kết cấu âm tiết chữ Hán, ngữ tố, từ hội cho đến các bài văn, giúp học sinh củng cố, hấp thu và vận dụng kết cấu ngôn ngữ của chủ đề. Phần cuối mỗi chủ đề đều có bài đọc và viết bài tập. Bài đọc tái hiện từ hội và điểm ngôn ngữ trong mỗi chủ đề. Chủ yếu là luyện tập năng lực viết bài cho học sinh, ngoài ra còn luyện cho học sinh kỹ năng ứng dụng kết cấu ngôn ngữ trong mỗi chủ đề.', 6, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/149/giao-trinh-han-ngu-boya-so-cap-bai-tap-kem-dap-an-tap-2.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/149/giao-trinh-han-ngu-boya-so-cap-bai-tap-kem-dap-an-tap-2.jpg', 1),
(26, 'Nhóc Miko - Tập 36', '', 'Thường', 35000, 12, 0, 'Miko là cô nhóc lớp 6 vô cùng hoạt bát, khỏe khoắn. Ngày nào cũng rộn ràng, náo nhiệt cùng gia đình và bạn bè xung quanh ☆ Trong những chuỗi ngày ấy, Mari rốt cuộc lại đóng vai thần tình yêu Cupid để tác hợp cho Miko và Tappei...!?♥ Và thế là tình cảm của hai cô cậu trở thành tâm điểm chú ý ★ Tập này còn đầy ắp những câu chuyện về cô nhóc Miko đáng yêu, như chạy tiếp sức trong hội thao cuối cùng của thời tiểu học, câu chuyện đau xót của Rinka hay những chuyện bí mật của con gái chúng mình! Lại còn bài phát biểu cực kỳ quan trọng nữa chứ!!!??? Trời ơi? Muốn đọc quá đi ~!!! ', 7, 'https://nhasachphuongnam.com/images/detailed/244/nhoc-miko-co-be-nhi-nhanh-tap-36.jpg', 'https://nhasachphuongnam.com/images/detailed/244/nhoc-miko-co-be-nhi-nhanh-tap-36.jpg', 1),
(27, 'Sa Vào Ánh Hào Quang Của Người - Tập 4', '', 'Đặc biệt', 165000, 12, 2, 'Sa Vào Ánh Hào Quang Của Người - Tập 4 Sa vào ánh hào quang của người 4 – Chờ ngày đôi ta gặp lại nhau “Phải dốc hết sức mình mới có thể xứng với anh.” … Thư Vân và Đồng Dương, hai con người với hai số phận trái ngược, tình cờ gặp gỡ rồi thu hút lẫn nhau. Nhưng khi cả hai mới chỉ vừa thổ lộ tình cảm thì đã phải đối mặt với bao chuyện khó khăn. Bệnh tình của ông nội Đồng Dương trở nặng khiến cậu muốn bỏ thi chung kết tranh suất biểu diễn tại Vienna để chăm sóc ông. Mỗi ngày với Đồng Dương đều là sự giày vò, Thư Vân chẳng biết làm gì ngoài việc ở bên cậu ấy. Nhưng vào ngày thi chung kết, một sự việc bất ngờ xảy đến buộc hai người phải lựa chọn hai con đường khác nhau. Thư Vân bị gọi quay về gia tộc còn Đồng Dương dự định bảo lưu tạm nghỉ học. Thư Vân có cả tương lai xán lạn còn trước mắt Đồng Dương dường như chỉ toàn bế tắc, mỏi mệt.', 7, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/247/sa-vao-anh-hao-quang-cua-nguoi-tap-4-02.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/247/sa-vao-anh-hao-quang-cua-nguoi-tap-4-02.jpg', 1),
(28, 'Here U Are - Tập 4', '', 'Thường, Đặc iệt', 115000, 14, 2, 'Here U Are 4 - Những cảm xúc không thể che giấu “Có phải anh hơi thích tôi rồi, đúng không?” … Áp lực từ hiện thực cuộc sống và những định kiến xã hội với người đồng tính khiến Ngu Dương trở nên lo sợ, không dám kéo Lê Hoán cùng mình bước vào con đường đầy chông gai này. Thế nhưng trước sự chân thành của Lê Hoán, anh dần dần không thể kiềm chế được tình cảm của mình. Ngu Dương chủ động bắt chuyện và gặp gỡ Lê Hoán, muốn biết nhiều hơn về đàn em kiệm lời này, càng muốn ở bên cậu ấy thêm chút nữa… Trong chuyến dã ngoại của trường, hai người đã có một khoảng thời gian vui vẻ bên nhau. Tưởng rằng Ngu Dương lúc này đã mở lòng, bắt đầu đón nhận tình cảm của Lê Hoán thì những kí ức không vui trước kia khiến anh chùn bước. Hiểu lầm lại nối tiếp hiểu lầm, Lê Hoán chỉ vừa chạm được đến trái tim Ngu Dương đã lại bị anh đẩy ra xa.', 7, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/239/here-u-are-tap-4.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/239/here-u-are-tap-4.jpg', 1),
(29, 'Yêu Thầm -  Tập 1', '', 'Đặc biệt', 120000, 10, 1, 'Yêu Thầm Thời học sinh bạn đã bao giờ crush ai chưa? Cậu bạn cùng bàn? Lớp trưởng học giỏi? Hay một anh khóa trên điển trai? ... Chắc hẳn rất nhiều người trong chúng ta đều từng có một thời thầm thương trộm nhớ ai đó. Giống như cô bạn nhỏ nhắn Bách Linh và cậu hot boy An Dư Triết thầm thích nhau mà không hay vậy. “Yêu thầm” là câu chuyện tuổi mới lớn với những ngại ngùng, quan tâm vô tình và ghen tuông nho nhỏ, khiến màu sắc cuộc sống của đôi bạn trẻ trở nên tươi đẹp và muôn màu hơn. Đồng thời bộ truyện cũng giúp người đọc trải nghiệm những cung bậc cảm xúc ngọt ngào, lãng mạn, đôi khi trầm lắng nhưng lại ngây ngô ngốc nghếch của cả hai.', 7, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/226/yeu-tham.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/226/yeu-tham.jpg', 1)
(30, 'Bé Khỏe Mạnh Hơn! - Ăn Uống Đầy Đủ', '', 'Thường', 40000, 10, 0, 'Bảo rất thích đá bóng. Ước mơ lớn nhất của cậu là trở thành ngôi sao bóng đá. Thế nhưng Gia Bảo lại bị suy dinh dưỡng bởi cậu rất lười ăn và kén ăn, đặc biệt là không chịu ăn rau. Gia Bảo phải làm sao để cải thiện cân nặng của mình và đá bóng thật khoẻ nhỉ? Mời bạn khám phá trong cuốn sách này nhé! Bé nên làm gì để có cơ thể khỏe mạnh và vóc dáng cao lớn hơn? Phải làm sao để bé bớt kén ăn, có sức đề kháng tốt và phòng tránh bệnh cận thị? Mời bé và cha mẹ tìm đọc 5 cuốn trong bộ sách BÉ KHỎE MẠNH HƠN! để trang bị những kiến thức cơ bản về sức khỏe. Cả gia đình hãy cùng nhau nuôi dưỡng thói quen sinh hoạt lành mạnh nhé!', 7, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/248/be-khoe-manh-hon-an-uong-day-du.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/248/be-khoe-manh-hon-an-uong-day-du.jpg', 1),
(31, 'Cùng Bé Lớn Khôn – Berry Và Dolly - Tình Bạn Tuyệt Vời', '', 'Thường', 87000, 2, 0, 'Nằm trong series truyện thiếu nhi BOGYÓ ÉS BABÓCA nổi tiếng của Hungary do nữ tác giả Bartos Erika viết lời và vẽ minh họa. 3 tập Berry & Dolly xoay quanh những câu chuyện hàng ngày của đôi bạn thân – cậu bé ốc sên Berry và cô bé cánh cam Dolly.', 7, 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/248/berry-va-dolly-tinh-ban-tuyet-voi.jpg', 'https://nhasachphuongnam.com/images/thumbnails/500/500/detailed/248/berry-va-dolly-tinh-ban-tuyet-voi.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `status`) VALUES
(0, '5 đến 13 tuổi', 1),
(1, '13 đến 18 tuổi', 1),
(2, 'Trên 18 tuổi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `gender` varchar(3) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `role` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstName`, `lastName`, `email`, `phoneNumber`, `gender`, `image`, `role`) VALUES
(3, 'doantranbadat', 'fa29c0a3c9e73f871cd841c47654b65a', 'Đoàn Trần Bá', 'Đạt', 'badatdoan@gmail.com', '0977420748', 'Nam', '../../src/img/admin/admin1.jpg', 'R2'),
(4, 'trantienphat', '1e72671bd67e530f571e7a9438cb7710', 'Trần Tiến', 'Phát', 'phattran@gmail.com', '0933255899', 'Nam', NULL, 'R1'),
(5, 'doantranquocviet', 'eb55ee14a52a057619747546d03beacc', 'Đoàn Trần Quốc', 'Việt', 'vietdoan@gmail.com', '0963555879', 'Nam', NULL, 'R1'),
(6, 'tranthihoa', '8fb6ad556437ac90195a417927abdf5c', 'Trần Thị', 'Hoa', 'kimhoabbt@gmail.com', '0933255479', 'Nữ', NULL, 'R1'),
(7, 'nguyenthibichkieu', 'a1527fb5f9fd8288a187c7f287cbed01', 'Nguyễn Thị Bích', 'Kiều', 'kieunguyen@gmail.com', '0933555899', 'Nữ', '../../src/img/admin/admin3.jpg', 'R2'),
(8, 'quachlenhatquang', '20b47b63787af01f7b09fce7438ddb67', 'Quách Lê Nhật', 'Quang', 'quachquang@gmail.com', '0943533899', 'Nam', '../../src/img/admin/admin4.jpg', 'R2'),
(9, 'nguyenphuongduy', '49a659f5e92241a47d9e5760485fdc0d', 'Nguyễn Phương', 'Duy', 'phuongduynhatnheo@gmail.com', '0933255869', 'Nam', NULL, 'R1'),
(10, 'sangnguyen2205', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Văn ', 'Sáng', 'sangnguyen@gmail.com', '0922355488', 'Nam', NULL, 'R1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_id` (`bill_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `detail_bill`
--
ALTER TABLE `detail_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD CONSTRAINT `detail_bill_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`type`) REFERENCES `type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
