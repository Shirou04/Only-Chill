<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/detail.css">
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/all.css">
    <title>Trang chủ</title>
</head>
<style>
    body {
        margin: auto; 
        font-family: Arial, Helvetica, sans-serif;
    }

</style>

<body>
    <!-- Star Header -->
    <header>
        <div class="head">
            <div class="logo">
                <img src="../image/Logo.png" alt="">
            </div>
            <div class="menu">
                <div class="menu-con"><a class="page" href="index.html">Trang chủ</a></div>
                <div class="menu-con"><a class="page" href="">Giới thiệu</a></div>
                <div class="menu-con"><a class="page" href="detail.html">Tour du lịch</a></div>
                <div class="menu-con"><a class="page" href="">Tin tức</a></div>
                <div class="menu-con"><a class="page" href="">Liên hệ</a></div>
            </div>
            <div class="icon-header">
                <img class="icon-head" src="../image/loupe.png" alt="">
                <img class="icon-head" src="../image/user.png" alt="">
                <a href="signup.html"><img class="icon-head" src="../image/headphones.png" alt=""></a>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Star Mid -->
    <div class="containe">
        <main>
            <!-- Tiêu đề -->
            <section class="title-section">
                <h1>Hà Nội</h>
                <div class="rating">★★★★★</div>
            </section>
            <!-- Nội dung chính -->
            <section class="main-content">
                <div class="image-gallery">
                    <img src="../image/Ảnh-3.png" alt="Hình ảnh Hà Nội chính">
                    <div class="thumbnail-gallery">
                        <img src="../image/Ảnh.png" alt="Thumbnail 1">
                        <img src="../image/Ảnh-1.png" alt="Thumbnail 2">
                        <img src="../image/HN3.png" alt="Thumbnail 3">
                        <img src="../image/Ảnh-2.png" alt="Thumbnail 4">
                    </div>
                </div>
                <div class="info">
                    <h3>Giá: 4.000.000 - 6.000.000 VNĐ</h3>
                    <div class="options">
                        <label>Dịch vụ kèm theo:</label>
                        <input type="checkbox">Hướng dẫn viên
                        <input type="checkbox">Khách sạn
                    </div>
                    <div class="quantity">
                        <label for="adults">Người lớn:</label>
                        <input type="number" id="adults" value="1" min="1">
                        <label for="children">Trẻ em:</label>
                        <input type="number" id="children" value="0" min="0">
                    </div>
                    <button class="btn">Đặt ngay</button>
                </div>
            </section>
            <section class="description">
                <h2 class="section-title">Mô tả</h2>
                <p>
                    Hà Nội là thủ đô của nước ta, nằm ở phía Bắc đất nước, bên bờ sông Hồng. Đây là trung tâm chính trị,
                    văn hóa, giáo dục và kinh tế quan trọng nhất của Việt Nam, với bề dày lịch sử hơn 1.000 năm. Hà Nội
                    nổi tiếng với sự kết hợp độc đáo giữa kiến trúc cổ kính và hiện đại, phản ánh sự phát triển lâu đời
                    của thành phố qua nhiều thời kỳ lịch sử.
                </p>
                <p>
                    Hà Nội có lịch sử phong phú, được thành lập vào năm 1010 dưới triều đại Lý Công Uẩn, ban đầu được
                    gọi là Thăng Long. Trải qua nhiều giai đoạn, tên gọi Hà Nội xuất hiện từ thế kỷ 19, khi vua Minh
                    Mạng đặt tên vào năm 1831. Hà Nội là cái nôi của nhiều giá trị văn hóa truyền thống Việt Nam. Những
                    di sản như Văn Miếu - Quốc Tử Giám, và nhiều công trình văn hóa và di sản đã được UNESCO công nhận,
                    trong đó có Hoàng thành Thăng Long - một quần thể kiến trúc quan trọng của lịch sử Việt Nam.
                </p>
            </section>

            <section class="itinerary">
                <h2 class="section-title">Tham khảo lịch trình chi tiết dưới đây!</h2>
                <ul>
                    <li>Bay thẳng Vietjet Air</li>
                    <li>Check in Khu phố cổ Hà Nội</li>
                    <li>Giao lưu văn hóa tại Văn Miếu - Quốc Tử Giám</li>
                    <li>Trải nghiệm kiến trúc độc đáo Chùa Một Cột</li>
                    <li>Chủ đề: Văn hóa, Khám phá, Ẩm thực</li>
                </ul>
            </section>

            <div class="image-gallery">
                <img src="../image/Group 83.png" alt="Hà Nội về đêm">
                <img src="../image/Group 87.png" alt="Phong cảnh Hà Nội">
                <img src="../image/Group 88.png" alt="Hồ Gươm">
            </div>

        </main>
    </div>

    <div class="locations">
        <!-- 1 -->
        <div class="location">
            <img src="../image/vungtau.png" alt="">
            <div class="content">
                <h2>Vũng Tàu</h2>
                <p>"Vũng Tàu, thành phố ven biển nổi tiếng của Việt Nam, là điểm nhấn 
                    trong chuyến đi 6 ngày 5 đêm của tôi. Nổi bật với những bãi biển 
                    xanh mát và cảnh quan tuyệt đẹp, Vũng Tàu mang đến...</p>
                <p><i class="fe-star">4,5</i>                    
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>
                </p>
                <p class="clock">
                    <img src="../image/clock.png" alt="">
                    <a>6 ngày, 5 đêm</a>
                </p>
                <p class="x-money">
                    <a class="money">4.500.000 - 6.500.000</a>
                    <a class="vnd">VNĐ</a>
                </p>
            </div>
        </div>

        <!-- 2 -->
        <div class="location">
            <img src="../image/hanoi.png" alt="">
            <div class="content">
                <h2>Hà Nội</h2>
                <p>"Hà Nội, thủ đô nhộn nhịp của Việt Nam, là điểm nhấn trong chuyến đi 
                    4 ngày 3 đêm của tôi. Với lịch sử phong phú và văn hóa sôi động, 
                    Hà Nội mang đến sự pha trộn độc đáo giữa cái cũ và cái mới... </p>
                <p><i class="fe-star">4,5</i>                    
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>
                </p>
                <p class="clock">
                    <img src="../image/clock.png" alt="">
                    <a>6 ngày, 5 đêm</a>
                </p>
                <p class="x-money">
                    <a class="money">4.500.000 - 6.500.000</a>
                    <a class="vnd">VNĐ</a>
                </p>
            </div>
        </div>

        <!-- 3 -->
        <div class="location">
            <img src="../image/phuquoc.png" alt="">
            <div class="content">
                <h2>Phú Quốc</h2>
                <p>"Phú Quốc, thiên đường nhiệt đới ở miền Nam Việt Nam, là điểm nhấn 
                    trong chuyến đi 7 ngày 6 đêm của tôi. Những bãi biển cát trắng và 
                    nước biển trong xanh là nơi lý tưởng để bơi lội và lặn ngắm san hô...</p>
                <p><i class="fe-star">4,5</i>                    
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>
                </p>
                <p class="clock">
                    <img src="../image/clock.png" alt="">
                    <a>6 ngày, 5 đêm</a>
                </p>
                <p class="x-money">
                    <a class="money">4.500.000 - 6.500.000</a>
                    <a class="vnd">VNĐ</a>
                </p>
            </div>
        </div>

        <!-- 4 -->
        <div class="location">
            <img src="../image/dalat.png" alt="">
            <div class="content">
                <h2>Đà Lạt</h2>
                <p>"Đà Lạt, thành phố quyến rũ ở cao nguyên miền Trung Việt Nam, là điểm nhấn 
                    trong chuyến đi 5 ngày 4 đêm của tôi. Nổi tiếng với khí hậu mát mẻ và cảnh 
                    quan lãng mạn, Đà Lạt mang đến tầm nhìn tuyệt đẹp... </p>
                <p><i class="fe-star">4,5</i>                    
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>
                </p>
                <p class="clock">
                    <img src="../image/clock.png" alt="">
                    <a>6 ngày, 5 đêm</a>
                </p>
                <p class="x-money">
                    <a class="money">4.500.000 - 6.500.000</a>
                    <a class="vnd">VNĐ</a>
                </p>
            </div>
        </div>
    </div>
    <!-- End Mid -->

    <!-- Star Footer -->
    <footer>
        <div class="mail">
            <h1>Theo dõi và cập nhật tin tức mới nhất</h1>
            <p>Vinh hạnh của chúng tôi là mang đến cho bạn những chuyến đi đáng nhớ. Mang đến cho bạn những chuyến đi đầy
                cảm hứng. Khám phá những vùng đất mới. Tự do khám phá cùng chúng tôi.</p>
            <div class="enter">
                <input class="enter-your-email" type="text" placeholder="Nhập email của bạn">
                <div class="follow-email"><a class="follow" href="">Theo dõi</a></div>
            </div>
        </div>
        <div class="section">
            <!-- 1 -->
            <div class="cot1 lienhe">
                <h2>Thông tin liên hệ</h2>
                <p>
                    <a href="" class="chudam">Địa chỉ</a><br>
                    abc, phường xyz, quận OKX, Thành phố BCD
                </p>
                <p>
                    <a href="" class="chudam">Email</a><br>
                    support@onlychill.com
                </p>
                <p>
                    <a href="" class="chudam">Hotline</a><br>
                    1900 1899
                </p>
                <p>
                    <a href="" class="chudam">Thời gian hỗ trợ</a><br>
                    08:30 - 21:30 các ngày trong tuần
                </p>
            </div>
            <!-- 2 -->
            <div class="cot1 huongdan">
                <h2>Hướng dẫn</h2>
                <p><a href="index.html">Trang chủ</a></p>
                <p><a href="">Giới thiệu</a></p>
                <p></p><a href="">Tour du lịch</a></p>
                <p><a href="">Tin tức</a></p>
                <p><a href="">Liên hệ</a></p>
            </div>
            <!-- 3 -->
            <div class="cot1 canbiet">
                <h2>Thông tin cần biết</h2>
                <p><a href="">Về chúng tôi</a></p>
                <p><a href="">Câu hỏi thường gặp</a></p>
                <p></p><a href="">Điều kiện, điều khoản</a></p>
                <p><a href="">Quy chế hoạt động</a></p>
                <p><a href="">Liên hệ</a></p>
            </div>
            <!-- 4 -->
            <div class="cot1 ketnoi">
                <h2>Kết nối</h2>
                <div class="icon-mxh">
                    <img src="../image/facebook.png" alt="">
                    <img src="../image/youtube.png" alt="">
                    <img src="../image/twitter.png" alt="">
                    <img src="../image/instagram.png" alt="">
                    <img src="../image/google.png" alt="">
                </div>
                <br>
                <h2>Tải ứng dụng Onlychill</h2>
                <div class="icon-dowload">
                    <img src="../image/ios.png" alt="">
                    <img src="../image/android.png" alt="">
                </div>
                <br>
                <h2>Thanh toán</h2>
                <div class="icon-pay">
                    <img src="../image/vnpay.png" alt="">
                    <img src="../image/jcb.png" alt="">
                    <img src="../image/visa.png" alt="">
                    <img src="../image/shoppepay.png" alt="">
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
</body>

</html>