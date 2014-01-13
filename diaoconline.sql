-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2014 at 06:55 PM
-- Server version: 5.5.34-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jcbckiod_9fay`
--

-- --------------------------------------------------------

--
-- Table structure for table `cate_new`
--

CREATE TABLE IF NOT EXISTS `cate_new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `cate_new`
--

INSERT INTO `cate_new` (`id`, `name`, `parent`) VALUES
(1, 'Thông tin', 0),
(2, 'Thị trường địa ốc', 1),
(3, 'Hoạt động doanh nghiệp', 1),
(4, 'Chính sách - Quy hoạch', 1),
(5, 'Tài chính - Chứng khoán', 1),
(6, 'Xây dựng', 1),
(7, 'Bất động sản thế giới', 1),
(8, 'Ngoại kiều - Việt kiều', 1),
(9, 'Công nghệ', 1),
(10, 'Thư viện địa ốc', 0),
(11, 'Bản đồ QH sử dụng đất', 10),
(12, 'Bản đồ thành phố', 10),
(13, 'Các biểu mẫu nhà đất', 10),
(14, 'Các loại văn bản', 10),
(15, 'Cafe luật', 0),
(16, 'Hợp thức hóa', 15),
(17, 'Xây dựng hoàn công', 15),
(18, 'Chuyển quyền sở hữu', 15),
(19, 'Thừa kế', 15),
(20, 'Nghĩa vụ tài chính', 15),
(21, 'Tranh chấp', 15),
(22, 'Tái định cư', 15),
(23, 'Yếu tố nước ngoài', 15);

-- --------------------------------------------------------

--
-- Table structure for table `discovery`
--

CREATE TABLE IF NOT EXISTS `discovery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_cate` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `discovery`
--

INSERT INTO `discovery` (`id`, `title`, `content`, `img`, `id_cate`, `create_date`) VALUES
(1, '10 nguyên tắc bài trí nội thất hoàn hảo', 'Bài trí nội thất là công việc đòi hỏi có sự đầu tư về ý tưởng rất nhiều, chứ không đơn thuần là sắp đặt các đồ vật vào nơi mà bạn cho là nó sẽ hợp.\r\n\r\nBài trí nội thất là công việc đòi hỏi có sự đầu tư về ý tưởng rất nhiều, chứ không đơn thuần là sắp đặt các đồ vật vào nơi mà bạn cho là nó sẽ hợp. Cách bài trí hợp lý cũng giúp tạo nên tâm trạng tuyệt vời cho căn phòng cũng như hoàn thiện về các chức năng khác.\r\n\r\nDưới đây là 10 bí quyết giúp bạn sắp xếp đồ đạc một cách thông minh và hài hòa nhất cho không gian sống của bạn:\r\n\r\n1. Tập trung vào chức năng\r\n\r\n\r\nĐôi khi, bạn đòi hỏi các món đồ trang trí phải dễ dàng phù hợp với mục đích của bất kỳ căn phòng nào. Ví dụ, bạn muốn tất cả đồ dùng nhà bếp được sắp xếp gọn gàng, ngăn nắp để bạn có thể tìm thấy và sử dụng dễ dàng khi nấu ăn. Hoặc bạn muốn những cuốn sách luôn sẵn sàng khi bạn học tập hoặc làm việc trong văn phòng. Cân nhắc xem bạn cần gì và ở đâu để bạn có thể thiết kế nội thật cho phù hợp.\r\n\r\n2. Bao quanh không gian\r\n\r\n\r\nKhi nói đến phòng khách, xem xét việc đặt ghế sofa của bạn và những chiếc ghế khác ở trung tâm của căn phòng theo hình tròn hoặc kiểu cách ấm cúng để đảm bảo mọi người dễ dàng trò chuyện được với nhau. Sau đó, phần nội thất còn lại của căn phòng nên được sắp xếp xung quanh khu vực trung tâm này. Ví dụ, tủ và kệ có thể được đặt dọc theo các bức tường.\r\n\r\n3. Thiết kế xung quanh một đồ vật chính\r\n\r\n\r\nMột bí quyết hay để giúp bạn sắp xếp đồ nội thất hoàn hảo là chú trọng vào điểm trung tâm của căn phòng. Đó có thể là lò sưởi, đàn piano, hoặc một bức tranh nghệ thuật chẳng hạn. Cách làm này cũng giúp bạn trang trí luôn bởi vì bạn có thể sắp đặt chỗ ngồi xung quanh điểm trung tâm hoặc sử dụng nó là nguồn cảm hứng chính về màu sắc và kết cấu. Sức hấp dẫn hình ảnh không nhất thiết phải là sự đối lập mà có thể là sự pha trộn màu sắc để tạo nên sự cân bằng và thoải mái.\r\n\r\n4. Giao thông thuận tiện\r\n\r\n\r\nGiao thông là yếu tố cực kỳ quan trọng khi bài trí đồ nội thất, do đó, chúng ta cần đảm bảo đủ không gian đi lại ở giữa đồ nội thất. Kích thước từ 60 – 70 cm là hợp lý nhất. Và ở những khu vực có mật độ giao thông dày hơn thì cần để không gian rộng hơn, ví dụ như xung quanh khu vực bồn rửa bát và các thiết bị nhà bếp.\r\n\r\n5. Chọn đồ nội thất hợp với không gian sống\r\n\r\n\r\nKiểu dáng bàn hình tròn thật sự tuyệt vời cho phòng ăn nhỏ hoặc hình vuông. Tuy nhiên, bạn có thể xem xét cả kiểu bàn ăn buffet, có thể đặt dọc theo các bức tường và không chiếm quá nhiều diện tích. Những chiếc bàn hình chữ nhật phù hợp với rất nhiều không gian và có rất nhiều kích thước chiều dài khác nhau để bạn lựa chọn. Nếu bạn sở hữu đèn chùm tuyệt đẹp, hãy đặt chiếc bàn ngay bên dưới nó vì đây là cách hoàn hảo để làm nó trở nên nổi bật.\r\n\r\n6. Đặt dựa vào tường\r\n\r\n\r\nTủ quần áo thường rất cồng kềnh vì kiểu dáng hình hộp của nó và nếu bạn đặt ở góc hoặc trung tâm căn phòng thì thật là một… thảm họa. Tốt nhất, bạn nên kê những chiếc tủ quần áo dựa vào tường. Cách này không chỉ giúp chúng đứng vững mà còn chừa lại khoảng diện tích rộng rãi để bạn sắp xếp các đồ dùng khác. Bạn có thể đặt những chiếc tủ bên dưới một chiếc gương để tăng thêm hiệu ứng.\r\n\r\n7. Kết hợp hài hòa tranh treo tường và đồ nội thất\r\n\r\n\r\nCố gắng không treo các bức tranh/ảnh của bạn quá cao trên tường vì nó có thể gây ra sự sai lệch về tỷ lệ cho căn phòng. Khi treo một bức tranh phía trên đồ nội thất nào đó thì khoảng cách 20 – 25 cm là lý tưởng, trực quan. Khoảng cách nhỏ này xóa tan đi cảm giác chật chội, đặc biệt là trong những căn phòng có nhiều đồ đạc.\r\n\r\n8. Sắp xếp đối lưng\r\n\r\n\r\nĐừng ngần ngại thử những cách sắp xếp nội thất mới mẻ và sáng tạo. Hai chiếc ghế sofa có thế cung cấp nhiều công năng sử dụng hơn cho căn phòng rộng khi được kê đối lưng vào nhau thay vì kê đối diện. Bạn cũng có thể làm theo cách này với đồ nội thất khác.\r\n\r\nSắp xếp đồ nội thất đối lưng cũng có tác dụng phân chia căn phòng, đặc biệt hoàn hảo đối với những không gian mở rộng lớn.\r\n\r\n9. Thiết kế hình tam giác\r\n\r\n\r\nMô hình tam giác trong thiết kế nội thất dùng để chỉ việc đặt hai chiếc bàn góc bên cạnh một chiếc ghế dài, đi kèm với một bức tranh được treo phía trên nó. Hình tam giác là một cách tốt để đạt được sự cân bằng và đối xứng trong ngôi nhà.\r\n\r\n10. Kết hợp đồ nội thất nhỏ\r\n\r\n\r\nTránh việc rải rác những đồ dùng có kích thước nhỏ khắp phòng vì chúng sẽ tạo ra rất nhiều không gian thừa trống trải. Thay vào đó, bạn nên kết hợp chúng lại với nhau để có được cái nhìn thống nhất hơn.', '0A7-baitri.jpg', 1, 1),
(2, '10 nguyên tắc bài trí nội thất hoàn hảo', 'Bài trí nội thất là công việc đòi hỏi có sự đầu tư về ý tưởng rất nhiều, chứ không đơn thuần là sắp đặt các đồ vật vào nơi mà bạn cho là nó sẽ hợp.\r\n\r\nBài trí nội thất là công việc đòi hỏi có sự đầu tư về ý tưởng rất nhiều, chứ không đơn thuần là sắp đặt các đồ vật vào nơi mà bạn cho là nó sẽ hợp. Cách bài trí hợp lý cũng giúp tạo nên tâm trạng tuyệt vời cho căn phòng cũng như hoàn thiện về các chức năng khác.\r\n\r\nDưới đây là 10 bí quyết giúp bạn sắp xếp đồ đạc một cách thông minh và hài hòa nhất cho không gian sống của bạn:\r\n\r\n1. Tập trung vào chức năng\r\n\r\n\r\nĐôi khi, bạn đòi hỏi các món đồ trang trí phải dễ dàng phù hợp với mục đích của bất kỳ căn phòng nào. Ví dụ, bạn muốn tất cả đồ dùng nhà bếp được sắp xếp gọn gàng, ngăn nắp để bạn có thể tìm thấy và sử dụng dễ dàng khi nấu ăn. Hoặc bạn muốn những cuốn sách luôn sẵn sàng khi bạn học tập hoặc làm việc trong văn phòng. Cân nhắc xem bạn cần gì và ở đâu để bạn có thể thiết kế nội thật cho phù hợp.\r\n\r\n2. Bao quanh không gian\r\n\r\n\r\nKhi nói đến phòng khách, xem xét việc đặt ghế sofa của bạn và những chiếc ghế khác ở trung tâm của căn phòng theo hình tròn hoặc kiểu cách ấm cúng để đảm bảo mọi người dễ dàng trò chuyện được với nhau. Sau đó, phần nội thất còn lại của căn phòng nên được sắp xếp xung quanh khu vực trung tâm này. Ví dụ, tủ và kệ có thể được đặt dọc theo các bức tường.\r\n\r\n3. Thiết kế xung quanh một đồ vật chính\r\n\r\n\r\nMột bí quyết hay để giúp bạn sắp xếp đồ nội thất hoàn hảo là chú trọng vào điểm trung tâm của căn phòng. Đó có thể là lò sưởi, đàn piano, hoặc một bức tranh nghệ thuật chẳng hạn. Cách làm này cũng giúp bạn trang trí luôn bởi vì bạn có thể sắp đặt chỗ ngồi xung quanh điểm trung tâm hoặc sử dụng nó là nguồn cảm hứng chính về màu sắc và kết cấu. Sức hấp dẫn hình ảnh không nhất thiết phải là sự đối lập mà có thể là sự pha trộn màu sắc để tạo nên sự cân bằng và thoải mái.\r\n\r\n4. Giao thông thuận tiện\r\n\r\n\r\nGiao thông là yếu tố cực kỳ quan trọng khi bài trí đồ nội thất, do đó, chúng ta cần đảm bảo đủ không gian đi lại ở giữa đồ nội thất. Kích thước từ 60 – 70 cm là hợp lý nhất. Và ở những khu vực có mật độ giao thông dày hơn thì cần để không gian rộng hơn, ví dụ như xung quanh khu vực bồn rửa bát và các thiết bị nhà bếp.\r\n\r\n5. Chọn đồ nội thất hợp với không gian sống\r\n\r\n\r\nKiểu dáng bàn hình tròn thật sự tuyệt vời cho phòng ăn nhỏ hoặc hình vuông. Tuy nhiên, bạn có thể xem xét cả kiểu bàn ăn buffet, có thể đặt dọc theo các bức tường và không chiếm quá nhiều diện tích. Những chiếc bàn hình chữ nhật phù hợp với rất nhiều không gian và có rất nhiều kích thước chiều dài khác nhau để bạn lựa chọn. Nếu bạn sở hữu đèn chùm tuyệt đẹp, hãy đặt chiếc bàn ngay bên dưới nó vì đây là cách hoàn hảo để làm nó trở nên nổi bật.\r\n\r\n6. Đặt dựa vào tường\r\n\r\n\r\nTủ quần áo thường rất cồng kềnh vì kiểu dáng hình hộp của nó và nếu bạn đặt ở góc hoặc trung tâm căn phòng thì thật là một… thảm họa. Tốt nhất, bạn nên kê những chiếc tủ quần áo dựa vào tường. Cách này không chỉ giúp chúng đứng vững mà còn chừa lại khoảng diện tích rộng rãi để bạn sắp xếp các đồ dùng khác. Bạn có thể đặt những chiếc tủ bên dưới một chiếc gương để tăng thêm hiệu ứng.\r\n\r\n7. Kết hợp hài hòa tranh treo tường và đồ nội thất\r\n\r\n\r\nCố gắng không treo các bức tranh/ảnh của bạn quá cao trên tường vì nó có thể gây ra sự sai lệch về tỷ lệ cho căn phòng. Khi treo một bức tranh phía trên đồ nội thất nào đó thì khoảng cách 20 – 25 cm là lý tưởng, trực quan. Khoảng cách nhỏ này xóa tan đi cảm giác chật chội, đặc biệt là trong những căn phòng có nhiều đồ đạc.\r\n\r\n8. Sắp xếp đối lưng\r\n\r\n\r\nĐừng ngần ngại thử những cách sắp xếp nội thất mới mẻ và sáng tạo. Hai chiếc ghế sofa có thế cung cấp nhiều công năng sử dụng hơn cho căn phòng rộng khi được kê đối lưng vào nhau thay vì kê đối diện. Bạn cũng có thể làm theo cách này với đồ nội thất khác.\r\n\r\nSắp xếp đồ nội thất đối lưng cũng có tác dụng phân chia căn phòng, đặc biệt hoàn hảo đối với những không gian mở rộng lớn.\r\n\r\n9. Thiết kế hình tam giác\r\n\r\n\r\nMô hình tam giác trong thiết kế nội thất dùng để chỉ việc đặt hai chiếc bàn góc bên cạnh một chiếc ghế dài, đi kèm với một bức tranh được treo phía trên nó. Hình tam giác là một cách tốt để đạt được sự cân bằng và đối xứng trong ngôi nhà.\r\n\r\n10. Kết hợp đồ nội thất nhỏ\r\n\r\n\r\nTránh việc rải rác những đồ dùng có kích thước nhỏ khắp phòng vì chúng sẽ tạo ra rất nhiều không gian thừa trống trải. Thay vào đó, bạn nên kết hợp chúng lại với nhau để có được cái nhìn thống nhất hơn.', '0A7-baitri.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `create_date` int(11) NOT NULL,
  `hot` int(11) NOT NULL,
  `id_cate` int(11) NOT NULL,
  `tag_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `create_date`, `hot`, `id_cate`, `tag_key`, `img`) VALUES
(1, 'Hàng triệu tỷ đồng bị vứt ở đồng hoang', 'Trên địa bàn Hà Nội hiện đang xuất hiện hàng trăm dự án bất động sản, hàng ngàn biệt thự, nhà vườn bị bỏ hoang hàng năm trời.\r\nĐứng đầu danh sách các quận, huyện có số dự án “chết” nhiều nhất Hà Nội là huyện Mê Linh với khoảng 50 dự án, có quy mô từ 10 - 100 héc-ta như Hà Phong, River Land, AIC, Phúc Việt,… Hầu hết các dự án trong số này đều được khởi công từ năm 2008 - 2009, nhưng đến nay vẫn đang bị “đắp chiếu”.\r\n\r\nKế đến là huyện Hoài Đức với 14 dự án bỏ hoang. Hầu hết các chủ đầu tư dự án mới chỉ giải phóng xong mặt bằng, không tiếp tục đầu tư xây dựng. Hiện số dự án hoàn thành xong chỉ lác đác vài dự án như Lideco, Bắc An Khánh…\r\n\r\nTuy nhiên, số phận những dự án khu đô thị biệt thự, nhà vườn sau khi hoàn thiện cũng không khá khẩm hơn khi chịu cảnh bị bỏ hoang, không người ở, khiến hàng triệu tỷ đồng “bị chôn” hoang phí.\r\n\r\nTrong khi nhu cầu nhà ở thực sự của người dân vẫn chưa được đáp ứng và rất nhiều địa phương, nhiều hộ nông dân đang thiếu đất trồng, đất canh tác sản xuất, thì tình trạng bỏ hoang vẫn kéo dài năm này quá năm khác đang gây bức xúc dư luận.\r\n\r\nTrước thức trạng trên, Bộ Xây dựng và Bộ Nội vụ đã bán hành Thông tư liên tịch số 20. Theo đó, kể từ ngày 5/1/2014, các dự án bất động sản chậm tiến độ sẽ bị xem xét thu hồi, tránh lãng phí nguồn tài nguyên đất và gây ảnh hưởng đến cuộc sống dân sinh các khu vực có dự án.\r\n\r\nNhiều địa phương như Hà Nội, TP. HCM, Đà Nẵng cũng quyết tâm chỉ đạo kiểm tra, rà soát, thu hồi các dự án triển khai chậm. Đặc biệt, UBND TP. Đà Nẵng vừa có văn bản thống nhất đề xuất của Sở Xây dựng về việc công bố danh sách các dự án chậm triển khai cho dân biết.\r\n', 0, 1, 1, 'Thu hồi dự án, Dự án đắp chiếu, Hàng chục tỷ đồng bỏ hoang, Nhà ở bị bỏ hoang', '6BD-vuthoang.jpg'),
(2, 'Tồn kho, giá BĐS giảm: Những phản biện trái chiều', 'Những con số tồn kho và giá trị BĐS đang cho thấy sự thiếu thống nhất của cơ quan quản lý lẫn cơ sở số liệu.\r\n\r\nNhững ngày đầu năm 2014, dư luận tập trung chú ý tới các báo cáo, tổng kết số liệu, nhận định đưa ra từ cơ quan quản lý. Lần lượt UBND Tp.Hà Nội, Bộ Xây dựng phát đi thông tin tích cực lẫn bi quan về thực trạng BĐS kèm theo các giải pháp, kế hoạch xử lý.\r\n\r\nBộ "lệch pha" Thành ủy\r\n\r\nCuối năm 2013, lãnh đạo UBND Tp. Hà Nội khẳng định chưa có dự án (DA) nhà ở nào trên địa bàn giảm giá và thông tin giảm giá "chỉ có trên các báo cáo". Thậm chí, lãnh đạo Thành ủy Hà Nội còn cho rằng các chính sách vừa qua, đặc biệt là chính sách về NƠXH dù sao cũng chỉ mang tính hỗ trợ. Chỉ vài ngày sau, người đứng đầu Bộ Xây dựng đăng đàn: các dự án BĐS năm 2013 đã giảm giá mạnh, nhiều dự án giảm 50% về mức giá của năm 2006. Giá BĐS sẽ được điều hòa khi nguồn cung nhà xã hội tăng mạnh (!)\r\n\r\nÔng Lê Hoàng Châu, Chủ tịch Hiệp hội BĐS Tp.HCM đưa ra nhiều phân tích khá thuyết phục về sự thiếu thống nhất nêu trên. Cụ thể, con số giá BĐS giảm 40-50% năm 2013 (theo Bộ Xây dựng) là chưa chính xác, nếu xét theo phân loại DA, có giá bán trung bình. Con số này dùng để chỉ các DA cao cấp, ông Châu khẳng định: "Không giảm giá đến 40-50%".\r\n\r\nỞ góc độ dân sinh, quan trọng là "bài toán" an sinh của đại bộ phận người dân lao động tại Thủ đô. Chỉ cần "soi" DA Nam An Khánh (Hoài Đức, Hà Nội) do Sudico làm chủ đầu tư, sẽ thấy câu trả lời. DA có quy mô 234,4 ha, khu A khoảng 189,7 ha, đã hoàn thành khoảng 60%, nhưng đến nay cỏ mọc ngút đầu người; khu B gần 44,6 ha, GPMB được 24 ha, chưa xây dựng hạ tầng kỹ thuật công trình.\r\n\r\nThị trường chứng kiến mức giá sản phẩm DA này giảm tới 50%, nhưng vẫn ế; giá từ 17,8 – 21,5 triệu đồng/m2 đối với các căn biệt thự đơn lập, song lập, liền kề thương mại… song cơ sở hạ tầng xã hội vẫn là con số 0. Những DA kiểu "không hạ tầng xã hội, không xác định thời điểm thực hiện" như Nam An Khánh nằm la liệt tại địa bàn Thủ đô.\r\n\r\nTừ năm 2012, khi thuật ngữ "thị trường đóng băng" bắt đầu được nhắc tới, giới bình luận và các nhà quản lý lẫn cơ quan thống kê luôn đưa ra đánh giá khác nhau về con số tồn kho, giá trị tồn kho BĐS. Tháng cuối cùng của năm 2012, không xuất hiện bất cứ con số tồn kho BĐS ở từng phân khúc cụ thể đến từ cơ quan Nhà nước.\r\n\r\nTồn kho, không chỉ là con số\r\n\r\nThay vào đó, tất cả các con số mà mỗi tổ chức thống kê, bộ phận nghiên cứu đưa ra chỉ là "ước tính" phản ánh một góc thị trường. Có thể nhắc tới một số dẫn chứng: tháng 9/2012, Diễn đàn Kinh tế Mùa thu công bố lượng tồn kho của 2 đầu thị trường Hà Nội và Tp.HCM là 70.000 căn hộ (với nguồn được tổng hợp từ bộ phận nghiên cứu của Dragon Capital và giá trị được ước tính khoảng chừng là 140.000 tỷ đồng). Ít ngày sau, các đại biểu Quốc hội ngỡ ngàng trước con số tồn kho lên tới 1 triệu tỷ đồng.\r\n\r\nVề phía các đơn vị nghiên cứu thị trường như CBRE, hay Savills cũng mỗi người một phách. CBRE thì cho rằng 18.000 căn là số tồn kho ở Tp.HCM, còn Savills Việt Nam là 14.500 căn (thời điểm tháng 10/2012 và trên "định nghĩa"; đây là lượng căn hộ chào bán, nhưng chưa có khách mua).\r\n\r\nỞ một diễn biến khác. Hiệp hội BĐS Việt Nam khẳng định, tính đến cuối quý II/2012, Hà Nội tồn kho trên 100.000 căn hộ, Tp.HCM tồn kho hơn 47.000 căn (tổng cộng là 147.000 căn). Và kết luận cuối cùng, tùy theo cách phân định hàng đã thành phẩm (DA hoàn thành và bàn giao), còn dang dở (chưa hoàn thiện), và mới chỉ giai đoạn xong móng, đưa ra các số liệu khác nhau.\r\n\r\nMột năm sau, tình hình thị trường vẫn nhuốm "màu xám", kèm theo đó vẫn là các con số không đồng nhất, "chưa sát thực tế, chưa đụng đến ngõ ngách thị trường" (theo lời một chuyên gia ngành địa ốc tại Hà Nội). Tháng 8/2013, Bộ Xây dựng công khai báo cáo về số liệu tồn kho tại một số tỉnh, thành trên cả nước. Theo đó, đến hết tháng 6/2013, tổng giá trị tồn kho BĐS khoảng 108.773 tỷ đồng. Tại Hà Nội, tổng số tồn kho là 9.651 căn hộ, nhà ở, tương đương 17.060 tỷ đồng. Tại Tp.HCM, tổng giá trị tồn kho khoảng 26.698 tỷ đồng, lượng căn hộ tồn kho đã giảm 1.877 căn hộ chung cư so, với thời điểm tháng 12/2012.\r\n\r\nĐáng mừng hơn, tới giữa tháng 12/2013, Bộ Xây dựng khẳng định tổng giá trị tồn kho BĐS đạt khoảng 94.458 tỷ đồng. Trong đó, Tp. Hà Nội tồn 6.580 căn chung cư và thấp tầng, giá trị 12.900 tỷ đồng, Tp.HCM tồn kho 7.830 căn chung cư, 0,26 triệu m2 đất nền, trị giá khoảng 17.480 tỷ đồng.\r\n\r\nTuy nhiên, nhận định về con số tồn kho mà Bộ Xây dựng đưa ra lại "vấp" phải nhiều ý kiến phản biện từ dư luận, đặc biệt là giới doanh nghiệp tạo lập BĐS. Điển hình nhất, ông Nguyễn Văn Đực, PGĐ Công ty Địa ốc Đất lành cho rằng: "Con số này có thể gấp 3-5 lần, vì chỉ cần đi kiểm tra quận 7 hoặc quận 2 (Tp. HCM) hàng tồn kho đã gần 7.000 căn hộ".\r\n\r\nÝ chí cơ quan quản lý rất rõ ràng, nhưng nhận thức và tự giác, cũng như sự chuyên nghiệp của doanh nghiệp vẫn còn là điều "xa xỉ". Tồn kho, giá BĐS vì thế cũng chẳng thể cải thiện một sớm một chiều.', 0, 1, 1, ' Giá bất động sản, Bộ Xây dựng, Tồn kho bất động sản, Báo cáo bất động sản, Savills việt namm', 'large-0B5-ton-kho-gia-bds-giam-nhung-phan-bien-trai-chieu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `content`, `img`) VALUES
(1, 'Lexington An Phú', 'Lexington là một dự án gồm 03 tòa tháp căn hộ cao cấp 25 tầng tọa lạc tại phường An Phú, Quận 2, Thành phố Hồ Chí Minh. Do Công ty Cổ phần bất động sản Novaland làm chủ đầu tư', 'thumb-DF0-lexington-an-phu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loai_hinh` int(11) NOT NULL COMMENT '1:chinh chu 2:moi gioi',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `title`, `content`, `price`, `code`, `loai_hinh`) VALUES
(1, 'Cho thuê nguyên căn tòa nhà 521-523 Điện Biên Phủ, Q.Bình Thạnh, ngay cầu Văn Thánh', 'Cho thuê nguyên căn tòa nhà văn phòng tại: 521 - 523 Điện Biên Phủ, P.25, Q.Bình Thạnh. Gồm: 1 trệt, 4 lầu, tổng diện tích: 530m2 (8.2m x 15m). \r\n\r\nVị trí đắc địa, ngay Hàng Xanh, trên trục đường cửa ngõ thành phố, rất thuận tiện mở showroom, chi nhánh công ty, trường học, ngân hàng\r\n\r\nGiá cho thuê: 84 triệu/ tháng (4000 USD), chưa bao gồm VAT. Liên hệ: 090 301 4477.', '84000000', '252888', 1),
(2, 'Cho thuê nguyên căn tòa nhà 521-523 Điện Biên Phủ, Q.Bình Thạnh, ngay cầu Văn Thánh', 'Cho thuê nguyên căn tòa nhà văn phòng tại: 521 - 523 Điện Biên Phủ, P.25, Q.Bình Thạnh. Gồm: 1 trệt, 4 lầu, tổng diện tích: 530m2 (8.2m x 15m). \r\n\r\nVị trí đắc địa, ngay Hàng Xanh, trên trục đường cửa ngõ thành phố, rất thuận tiện mở showroom, chi nhánh công ty, trường học, ngân hàng\r\n\r\nGiá cho thuê: 84 triệu/ tháng (4000 USD), chưa bao gồm VAT. Liên hệ: 090 301 4477.', '84000000', '252888', 2),
(3, 'Cho thuê nguyên căn tòa nhà 521-523 Điện Biên Phủ, Q.Bình Thạnh, ngay cầu Văn Thánh', 'Cho thuê nguyên căn tòa nhà văn phòng tại: 521 - 523 Điện Biên Phủ, P.25, Q.Bình Thạnh. Gồm: 1 trệt, 4 lầu, tổng diện tích: 530m2 (8.2m x 15m). \r\n\r\nVị trí đắc địa, ngay Hàng Xanh, trên trục đường cửa ngõ thành phố, rất thuận tiện mở showroom, chi nhánh công ty, trường học, ngân hàng\r\n\r\nGiá cho thuê: 84 triệu/ tháng (4000 USD), chưa bao gồm VAT. Liên hệ: 090 301 4477.', 'Thương lượng', '252888', 2),
(4, 'Cho thuê nguyên căn tòa nhà 521-523 Điện Biên Phủ', 'Cho thuê nguyên căn tòa nhà văn phòng tại: 521 - 523 Điện Biên Phủ, P.25, Q.Bình Thạnh. Gồm: 1 trệt, 4 lầu, tổng diện tích: 530m2 (8.2m x 15m). \r\n\r\nVị trí đắc địa, ngay Hàng Xanh, trên trục đường cửa ngõ thành phố, rất thuận tiện mở showroom, chi nhánh công ty, trường học, ngân hàng\r\n\r\nGiá cho thuê: 84 triệu/ tháng (4000 USD), chưa bao gồm VAT. Liên hệ: 090 301 4477.', '310000000', '252888', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
