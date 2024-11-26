@extends('frontend.layouts.master')

@section('content')
<x-breadcrumb />

    <div class="page-content">
        <div class="container">
            <div class="row clearfix">
                <section class="col-lg-9">
                    <div class="row product-detail in-stock" data-attributes="[]" data-attributes-data="[]">
                        <div class="col-md-5 col-sm-12 col-xs-12 img-product">
                            <div class="relative d-inline-b qv-preview" data-zoom="1">
                                <a data-fancybox="gallery" data-number="0"
                                    href="https://media.loveitopcdn.com/39908/thumb/033906-may-sieu-am-sonoscape-m22.jpg"
                                    class="img-main-href">
                                    <img class="img-main-detail"
                                        src="https://media.loveitopcdn.com/39908/thumb/033906-may-sieu-am-sonoscape-m22.jpg"
                                        alt="Máy siêu âm 5D SonoScape M22" aria-label="Máy siêu âm 5D SonoScape M22" />
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a data-fancybox="gallery" data-number="1"
                                    href="https://media.loveitopcdn.com/39908/thumb/may-sieu-am-5d-sonoscape-m22.jpg"
                                    class="img-main-href">
                                    <img class="img-main-detail"
                                        src="https://media.loveitopcdn.com/39908/thumb/may-sieu-am-5d-sonoscape-m22.jpg"
                                        alt="Máy siêu âm 5D SonoScape M22" aria-label="Máy siêu âm 5D SonoScape M22" />
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a data-fancybox="gallery" data-number="2"
                                    href="https://media.loveitopcdn.com/39908/thumb/171114-may-sieu-am-sonoscape-m22.jpg"
                                    class="img-main-href">
                                    <img class="img-main-detail"
                                        src="https://media.loveitopcdn.com/39908/thumb/171114-may-sieu-am-sonoscape-m22.jpg"
                                        alt="Máy siêu âm 5D SonoScape M22" aria-label="Máy siêu âm 5D SonoScape M22" />
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a data-fancybox="gallery" data-number="3"
                                    href="https://media.loveitopcdn.com/39908/thumb/171029-may-sieu-am-sonoscape.jpg"
                                    class="img-main-href">
                                    <img class="img-main-detail"
                                        src="https://media.loveitopcdn.com/39908/thumb/171029-may-sieu-am-sonoscape.jpg"
                                        alt="Máy siêu âm 5D SonoScape M22" aria-label="Máy siêu âm 5D SonoScape M22" />
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a data-fancybox="gallery" data-number="4"
                                    href="https://media.loveitopcdn.com/39908/thumb/sonoscape-m22.jpg"
                                    class="img-main-href">
                                    <img class="img-main-detail"
                                        src="https://media.loveitopcdn.com/39908/thumb/sonoscape-m22.jpg"
                                        alt="Máy siêu âm 5D SonoScape M22" aria-label="Máy siêu âm 5D SonoScape M22" />
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>

                            <div class="relative qv-carousel-wrap">
                                <div id="product-detail-carousel" class="owl-carousel d-carousel product-detail-carousel"
                                    data-nav="true" data-margin="15" data-responsive-0="4" data-responsive-576="4"
                                    data-responsive-768="4" data-responsive-992="4" onclick="changeImageOnClick(event)">
                                    <div>
                                        <a class="d-block text-center"
                                            style="
                        background-image: url(https://media.loveitopcdn.com/39908/thumb/033906-may-sieu-am-sonoscape-m22.jpg);
                      ">
                                            <img class="owl-lazy" data-number="0"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                data-src="https://media.loveitopcdn.com/39908/thumb/033906-may-sieu-am-sonoscape-m22.jpg"
                                                alt />
                                        </a>
                                    </div>
                                    <div>
                                        <a class="d-block text-center"
                                            style="
                        background-image: url(https://media.loveitopcdn.com/39908/thumb/may-sieu-am-5d-sonoscape-m22.jpg);
                      ">
                                            <img class="owl-lazy" data-number="1"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                data-src="https://media.loveitopcdn.com/39908/thumb/may-sieu-am-5d-sonoscape-m22.jpg"
                                                alt />
                                        </a>
                                    </div>
                                    <div>
                                        <a class="d-block text-center"
                                            style="
                        background-image: url(https://media.loveitopcdn.com/39908/thumb/171114-may-sieu-am-sonoscape-m22.jpg);
                      ">
                                            <img class="owl-lazy" data-number="2"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                data-src="https://media.loveitopcdn.com/39908/thumb/171114-may-sieu-am-sonoscape-m22.jpg"
                                                alt />
                                        </a>
                                    </div>
                                    <div>
                                        <a class="d-block text-center"
                                            style="
                        background-image: url(https://media.loveitopcdn.com/39908/thumb/171029-may-sieu-am-sonoscape.jpg);
                      ">
                                            <img class="owl-lazy" data-number="3"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                data-src="https://media.loveitopcdn.com/39908/thumb/171029-may-sieu-am-sonoscape.jpg"
                                                alt />
                                        </a>
                                    </div>
                                    <div>
                                        <a class="d-block text-center"
                                            style="
                        background-image: url(https://media.loveitopcdn.com/39908/thumb/sonoscape-m22.jpg);
                      ">
                                            <img class="owl-lazy" data-number="4"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                data-src="https://media.loveitopcdn.com/39908/thumb/sonoscape-m22.jpg"
                                                alt />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 detail-product">
                            <form class="add-to-cart" method="GET"
                                action="https://maysieuamsonoscape.com/api/v2/add-to-cart/419/vi">
                                <input type="hidden" name="is_detail" value="true" />
                                <div class="detail-info">
                                    <div class="product-title">
                                        <h1 class="product-detail-title">
                                            Máy siêu âm 5D SonoScape M22
                                        </h1>
                                    </div>
                                    <input type="hidden" name="product_title" value="Máy siêu âm 5D SonoScape M22" />
                                    <!-- Giá -->
                                    <div class="product-price">
                                        <input type="hidden" name="product_price" value="0" />
                                        <input type="hidden" name="product_sale_price" value="0" />
                                    </div>
                                    <hr class="divider" />
                                    <!-- Thông tin -->
                                    <div class="product-infor"></div>
                                    <div class="product-content-des">
                                        <h2>
                                            <strong><span style="color: #ff0000">Giá: Liên Hệ</span></strong>
                                        </h2>

                                        <p>
                                            <br />
                                            Nguồn gốc: Chính hãng<br />
                                            Hãng sản xuất: <strong>SonoScape</strong><br />
                                            Công nghệ: Đức<br />
                                            Model: <strong>M22</strong><br />
                                            Tình trạng : Mới 100%<br />
                                            Bảo hành: 24 tháng<br />
                                            Giá chỉ từ: 215.000.000 vnđ (Tùy cấu hình giá có thể
                                            thay đổi)
                                        </p>
                                    </div>
                                    <hr class="divider" />
                                    <!-- Thuộc tính -->
                                    <div class="product-infor">
                                        <div class="row desc info-extra inventory">
                                            <!-- Tình trạng -->
                                            <div class="col-4 no-padding-right">
                                                <label>Tình trạng:&nbsp;</label>
                                            </div>
                                            <div class="col-8 pl-1">
                                                <span class="color edit_speciality_color wb-stock-status">Còn hàng</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Nút đặt mua -->
                                    <div class="product-oder row">
                                        <div class="col-sm-6 order-now">
                                            <a href="https://maysieuamsonoscape.com/lien-he-phu-viet-medical.html?product_code=&product_title=M%C3%A1y+si%C3%AAu+%C3%A2m+5D+SonoScape+M22"
                                                rel="nofollow"
                                                class="btn btn--l btn-primary btn-order wb-main-order btn-item buy_now"
                                                title="Máy siêu âm 5D SonoScape M22"><i class="fa fa-phone-alt"
                                                    aria-hidden="true"></i>
                                                Liên hệ</a>
                                        </div>
                                    </div>
                                    <hr class="divider" />
                                </div>
                            </form>
                            <div class="share-container" style="margin-top: 20px">
                                <p class="d-inline-middle">Chia sẻ:</p>
                                <div class="d-inline-middle addthis-widget-container">
                                    <ul class="clearfix horizontal-list social-icons">
                                        <li class="relative">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://maysieuamsonoscape.com/may-sieu-am-4d-5d-sonoscape/may-sieu-am-4d-sonoscape-m22.html"
                                                rel="nofollow" target="_blank" class="f-size-ex-large textAlign-center">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="relative">
                                            <a href="https://twitter.com/intent/tweet?url=https://maysieuamsonoscape.com/may-sieu-am-4d-5d-sonoscape/may-sieu-am-4d-sonoscape-m22.html"
                                                rel="nofollow" target="_blank" class="f-size-ex-large textAlign-center">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="relative">
                                            <a class="f-size-ex-large textAlign-center" rel="nofollow"
                                                href="https://www.linkedin.com/sharing/share-offsite/?url=https://maysieuamsonoscape.com/may-sieu-am-4d-5d-sonoscape/may-sieu-am-4d-sonoscape-m22.html"
                                                target="_blank" aria-label="Linkedin">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li class="relative">
                                            <a href="http://pinterest.com/pin/create/link/?url=https://maysieuamsonoscape.com/may-sieu-am-4d-5d-sonoscape/may-sieu-am-4d-sonoscape-m22.html&media=https://media.loveitopcdn.com/39908/thumb/033906-may-sieu-am-sonoscape-m22.jpg"
                                                rel="nofollow" target="_blank" class="f-size-ex-large textAlign-center">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li class="relative">
                                            <a href="https://www.tumblr.com/share/link?url=https://maysieuamsonoscape.com/may-sieu-am-4d-5d-sonoscape/may-sieu-am-4d-sonoscape-m22.html"
                                                rel="nofollow" target="_blank" class="f-size-ex-large textAlign-center">
                                                <i class="fab fa-tumblr"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail-tabs">
                        <!-- Nav tabs -->
                        <div class="tab-detail">
                            <ul class="nav nav-tabs tab_list">
                                <li>
                                    <a href="#tab-mo-ta" class="title-tab tab-item active" data-toggle="tab"
                                        aria-expanded="true">
                                        <span class="border-style7"></span>
                                        Mô tả
                                    </a>
                                </li>

                                <li>
                                    <a href="#tab-comment" class="title-tab tab-item" data-toggle="tab"
                                        aria-expanded="true">
                                        <span class="border-style7"></span>
                                        Bình luận
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content col-xs-12">
                            <div class="pro-info-tab tab-pane active show" id="tab-mo-ta">
                                <div class="detail-descript wb-content ck_editor_content" data-collapse="">
                                    <h2>
                                        <strong>Tổng quan về máy siêu âm Sonoscape M22</strong>
                                    </h2>

                                    <p>
                                        <strong>Máy siêu âm màu&nbsp;Sonoscape M22</strong> mà
                                        phiên bản nâng cấp của máy siêu âm
                                        <strong>SonoScape S22</strong> trước đây,&nbsp;là một
                                        trong những máy siêu âm 5D cho hình ảnh chuẩn đoán tốt
                                        nhất hiện nay trong phân khúc giá rẻ, được thiết kế để
                                        đáp ứng nhu cầu chẩn đoán hình ảnh trong y học hiện đại.
                                    </p>

                                    <p>
                                        - Với công nghệ tiên tiến và các tính năng vượt trội,
                                        máy siêu âm màu Sonoscape M22 đã trở thành sự lựa chọn
                                        hàng đầu của nhiều phòng khám với phân khúc giá rẻ mà
                                        chất lượng.
                                    </p>

                                    <p style="text-align: center">
                                        <img alt="máy siêu âm màu 4D"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-isrc="https://media.loveitopcdn.com/39908/003128-may-sieu-am-4d.jpg"
                                            style="height: 514px; width: 400px" title="máy siêu âm màu 4D" />
                                    </p>

                                    <p>
                                        <strong>- Máy siêu âm 5D SonoScape M22</strong> được
                                        thiết kế tiện ích, linh hoạt, dễ điều khiển. Máy
                                        được&nbsp; trang bị với 4 cổng cắm đầu dò hoạt động đồng
                                        thời. Mà ở phân khúc các dòng máy khác chỉ thường có 2
                                        hoặc 3 cổng cắm
                                    </p>

                                    <p style="text-align: center">
                                        <img alt="máy siêu âm 4d 5d sonoscape M22"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-isrc="https://media.loveitopcdn.com/39908/may-sieu-am-4d-5d-sonoscape.png"
                                            style="height: 321px; width: 500px" title="máy siêu âm 4d 5d sonoscape M22" />
                                    </p>

                                    <p>&nbsp;</p>

                                    <p>
                                        <strong>- Máy siêu âm 5D SonoScape M22</strong> cho màn
                                        hình LED lớn với kích thước là 18,5” cho độ phân giả
                                        cao, kết hợp với khớp nối cánh tay dễ dàng di chuyển
                                        theo 4 hướng.Và có màn hình cảm ứng 8” cho người vận
                                        hành 1 cách đơn giản và thông minh cùng Bàn phím dễ sử
                                        dụng với với đèn sang ở các nút
                                    </p>

                                    <p>
                                        <strong>- Máy siêu âm 5D SonoScape</strong> là một trong
                                        những dòng máy siêu âm trực quan bằng hình ảnh, dễ thao
                                        tác khi vận hành bởi các chương trình riêng cho từng
                                        chức nằm. Giúp cho bác sĩ vận hành một cách nhanh chóng.
                                        Cùng với đó là số lượng chấn tử lên đến 256, nhiều hơn
                                        các dòng máy trong tầm giá thường 186 chân tử
                                    </p>

                                    <p style="text-align: center">
                                        <img alt="SonoScape M22"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-isrc="https://media.loveitopcdn.com/39908/224614-sonoscape-m22.png"
                                            style="height: 335px; width: 500px" title="SonoScape M22" />
                                    </p>

                                    <p>&nbsp;</p>

                                    <h2>
                                        <strong>Công nghệ tích hợp trên máy siêu âm Sonoscape
                                            M22</strong>
                                    </h2>

                                    <p>
                                        <strong>Với bảy chế độ hiển thị hình ảnh của thai nhi</strong>
                                    </p>

                                    <p style="text-align: center">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-isrc="https://media.loveitopcdn.com/39908/sonoscape-m22.png" />
                                    </p>

                                    <p style="text-align: center">&nbsp;</p>

                                    <p style="text-align: center">
                                        <strong>- Máy siêu âm 5D SonoScape M22</strong> với
                                        OB/GYN &nbsp; Real time 3D/4D : Với công nghệ
                                        <strong>S-Live</strong>
                                    </p>

                                    <p style="text-align: center">
                                        <img alt="máy siêu âm 5D"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-isrc="https://media.loveitopcdn.com/39908/may-sieu-am-5d.png"
                                            title="máy siêu âm 4d 5d sonoscape M22" />
                                    </p>

                                    <p>
                                        <strong>S-Live</strong> là một công nghệ dựng hình giúp
                                        cung cấp một màn hình hiển thị sống động hơn của 4D hình
                                        ảnh thai nhi, dựng hình 4D với màu da sống động hơn, và
                                        giúp bác sĩ có quan sát tốt hơn thai nhi.
                                    </p>

                                    <p>
                                        <strong>- S-Depth</strong> có thể hiển khuôn mặt gần-xa
                                        từ đầu dò đến mục tiêu, được biểu thị bằng mã màu.
                                    </p>

                                    <p style="text-align: center">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-isrc="https://media.loveitopcdn.com/39908/may-sieu-am-doppler-mau.png" />
                                    </p>

                                    <p>&nbsp;</p>

                                    <p>&nbsp;</p>

                                    <p>
                                        - Công nghệ đàn hồi mô hỗ chuẩn đoán ung thư sớm
                                        <strong>(Elastography)</strong>
                                    </p>

                                    <p style="text-align: center">
                                        <img alt="đàn hồi mô" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-isrc="https://media.loveitopcdn.com/39908/dan-hoi-mo.png"
                                            title="đàn hồi mô" />
                                    </p>

                                    <p>&nbsp;</p>

                                    <p>Hình ảnh toàn cảnh thời gian thực</p>

                                    <p>
                                        <strong>- Máy siêu âm 5D SonoScape M22</strong> với
                                        nhiều chế độ hiển thị hình ảnh : B, M, THI/PHI, CFM, CW,
                                        PW, TDI...&nbsp;
                                    </p>

                                    <p>&nbsp;</p>

                                    <p>
                                        - Chế độ <strong>M mode</strong> &amp;
                                        <strong>Color M mode</strong>
                                    </p>

                                    <p style="text-align: center">
                                        <img alt="máy siêu âm 4d M22"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-isrc="https://media.loveitopcdn.com/39908/may-sieu-am-4d.png"
                                            style="height: 421px; width: 485px" title="máy siêu âm 4d M22" />
                                    </p>

                                    <p>&nbsp;</p>

                                    <p>
                                        <strong>-TDI </strong>trên M22 cho phép đo định lượng
                                        chức năng cơ tim khu vực có độ nhạy cao cả khi nghỉ ngơi
                                        và khi gắng sức.
                                    </p>

                                    <p>
                                        -&nbsp;<strong>M-tunning</strong> để đạt được sự tối ưu
                                        hóa hình ảnh nhanh chóng. Nó có thể thay đổi nhiều tham
                                        số, chẳng hạn như Gain ở chế độ B, PRF và đường cơ sở ở
                                        chế độ màu và pw.
                                    </p>

                                    <p style="text-align: center">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-isrc="https://media.loveitopcdn.com/39908/2024-06-02-151836.png" />
                                    </p>

                                    <p>&nbsp;</p>

                                    <p>
                                        Hãy liên hệ với chúng tôi để nhận được mức giá ưu đãi
                                        nhất cho quí khách hàng
                                    </p>

                                    <h2>
                                        <strong>Hình ảnh thực tế trên máy siêu âm 5D SonoScape
                                            M22</strong>
                                    </h2>

                                    <p style="text-align: center">
                                        <img alt="máy siêu âm SonoScape M22"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-isrc="https://media.loveitopcdn.com/39908/may-sieu-am-sonoscape-m22.png"
                                            title="máy siêu âm SonoScape M22" />
                                    </p>

                                    <p>&nbsp;</p>

                                    <p style="text-align: center">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-isrc="https://media.loveitopcdn.com/39908/003503-may-sieu-am-sonoscape-m22.png" />
                                    </p>

                                    <p style="text-align: center">
                                        <img alt="máy siêu âm SonoScape M22"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-isrc="https://media.loveitopcdn.com/39908/003609-may-sieu-am-sonoscape-s22.png"
                                            title="máy siêu âm SonoScape M22" />
                                    </p>

                                    <p>&nbsp;</p>

                                    <p style="text-align: center">
                                        <img alt="Máy siêu âm SonoScape"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-isrc="https://media.loveitopcdn.com/39908/may-sieuam-sonoscape.png"
                                            title="Máy siêu âm SonoScape" />
                                    </p>

                                    <p>&nbsp;</p>
                                </div>
                            </div>

                            <div class="pro-info-tab tab-pane" id="tab-comment">
                                <div class="wb-comment">
                                    <div id="system_comments" data-commentable_type="product" data-commentable_id="419"
                                        data-censorship="1">
                                        <div class="row">
                                            <div id="data-comments">
                                                <ul id="comments-list" class="comments-list col-md-12 comment-container">
                                                </ul>
                                                <p
                                                    style="
                            width: 100%;
                            text-align: center;
                            margin-bottom: 20px;
                          ">
                                                    <a class="more_comment" style="display: none" href="#">Xem
                                                        thêm</a>
                                                </p>
                                            </div>
                                            <div class="comment-form comment-main col-md-12">
                                                <form action="/submit-comment" method="POST"
                                                    class="formcomment width-100">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <div class="half-column">
                                                                <input type="text" required name="name"
                                                                    class="form-control width-100" placeholder="Họ tên*"
                                                                    value="" />
                                                            </div>
                                                            <input type="hidden" name="parent_id" value="0" />
                                                            <input type="hidden" name="parent_name"
                                                                value="comment-main" />
                                                        </li>
                                                        <li>
                                                            <div>
                                                                <textarea name="content" required class="form-control width-100" placeholder="Bình luận*"></textarea>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div style="display: flow-root">
                                                                <div class="text-right float-right">
                                                                    <button type="submit"
                                                                        class="btn-item btn btn--l btn-primary">
                                                                        Gửi
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="reply-template" style="display: none">
                                        <div class="comment-footer comment-reply">
                                            <form class="formcomment comment-form width-100">
                                                <ul>
                                                    <li class="clearfix"></li>
                                                    <li class="clearfix">
                                                        <div class="half-column">
                                                            <input type="text" required name="name"
                                                                class="form-control" placeholder="Họ tên*"
                                                                value="" />
                                                        </div>
                                                        <div class="half-column">
                                                            <input type="email" required name="email form-email"
                                                                class="form-control" placeholder="Email*"
                                                                value="" />
                                                        </div>
                                                        <input type="hidden" name="parent_id" class="parent_id" />
                                                        <input type="hidden" name="parent_name" value="comment-reply" />
                                                    </li>

                                                    <li>
                                                        <div>
                                                            <textarea name="content" required class="form-control" placeholder="Bình luận*"></textarea>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="text-right">
                                                            <button type="submit"
                                                                class="btn-item btn btn--l btn-primary">
                                                                Gửi
                                                            </button>
                                                            <button type="button"
                                                                class="btn-item btn btn--l btn-default comment_reply_close">
                                                                Đóng
                                                            </button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                    <script>
                                        var comment_avatar =
                                            "https://static.loveitopcdn.com/themes/base1/images/avatar/avatar.png";
                                        var comment_avatar_admin =
                                            "https://static.loveitopcdn.com/themes/base1/images/avatar/avatar.png";
                                        var trans_reply = "Trả lời";
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_heading">
                        <h2 class="heading">Sản phẩm liên quan</h2>
                        <div class="line-hg"><span></span></div>
                        <div class="svg-wrap">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="125.656px"
                                height="125.655px" viewBox="0 0 125.656 125.655"
                                style="enable-background: new 0 0 125.656 125.655" xml:space="preserve">
                                <g>
                                    <path
                                        d="M88.947,67.734c0,1.544-1.252,2.802-2.801,2.802H68.989c-1.401,0-2.583-1.028-2.763-2.419l-3.033-21.769l-6.123,56.013    c-0.147,1.319-1.216,2.375-2.561,2.474c-0.079,0.005-0.145,0.013-0.229,0.013c-1.251,0-2.354-0.822-2.685-2.043l-9.126-32.46    l-8.988,17.078c-0.539,1.028-1.667,1.653-2.813,1.479c-1.159-0.139-2.101-0.976-2.388-2.101l-4.375-17.49H2.803    C1.262,69.312,0,68.052,0,66.51c0-1.549,1.262-2.802,2.803-2.802h23.285c1.284,0,2.412,0.875,2.72,2.123l3.124,12.487l8.843-16.789    c0.528-1.023,1.631-1.638,2.764-1.488c1.137,0.121,2.089,0.925,2.412,2.024l7.117,25.319l7.018-64.09    c0.149-1.401,1.321-2.465,2.743-2.487c1.576,0.134,2.617,1.026,2.813,2.426l5.79,41.699h14.719    C87.695,64.933,88.947,66.192,88.947,67.734z M103.771,64.933h-8.862c-1.54,0-2.802,1.26-2.802,2.802    c0,1.544,1.262,2.802,2.802,2.802h8.862c1.537,0,2.802-1.258,2.802-2.802C106.573,66.192,105.308,64.933,103.771,64.933z    M122.854,64.933h-9.431c-1.537,0-2.802,1.26-2.802,2.802c0,1.544,1.265,2.802,2.802,2.802h9.431c1.536,0,2.802-1.258,2.802-2.802    C125.656,66.192,124.39,64.933,122.854,64.933z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="product-view related-article">
                        <article class="blog-item product-grid-view" data-wow-delay="0.25s">
                            <div class="row">
                                <div class="item col-6 col-sm-4 col-md-4 col-lg-3">
                                    <div class="product-item relative" data-id="420"
                                        action="https://maysieuamsonoscape.com/api/v2/add-to-cart/420">
                                        <figure class="photoframe relative">
                                            <div class="relative img-product">
                                                <a href="https://maysieuamsonoscape.com/may-sieu-am-4d-5d-sonoscape/may-sieu-am-5d-sonoscape-p25.html"
                                                    class="d-block relative">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                        width="100%" height="100%"
                                                        data-isrc="https://media.loveitopcdn.com/39908/thumb/260x300/may-sieu-am-5d-sonoscape-p25.jpg?zc=1"
                                                        class="lazyload" alt="Máy siêu âm 5D SonoScape P25"
                                                        aria-label="Máy siêu âm 5D SonoScape P25" />
                                                </a>
                                                <a href="https://maysieuamsonoscape.com/lien-he-phu-viet-medical.html?product_code=&product_title=M%C3%A1y+si%C3%AAu+%C3%A2m+5D+SonoScape+P25"
                                                    rel="nofollow" class="btn btn--m btn-primary btn-item"
                                                    title="Máy siêu âm 5D SonoScape P25"><i class="fa fa-phone-alt"
                                                        aria-hidden="true"></i>
                                                    Liên hệ</a>
                                            </div>
                                            <figcaption class="infor-product">
                                                <h3 class="wrap-two-lines product-title">
                                                    <a href="https://maysieuamsonoscape.com/may-sieu-am-4d-5d-sonoscape/may-sieu-am-5d-sonoscape-p25.html"
                                                        class="two-lines" aria-label="Máy siêu âm 5D SonoScape P25">Máy
                                                        siêu âm 5D SonoScape P25</a>
                                                </h3>
                                                <div class="btn-purchased">
                                                    <a href="https://maysieuamsonoscape.com/lien-he-phu-viet-medical.html?product_code=&product_title=M%C3%A1y+si%C3%AAu+%C3%A2m+5D+SonoScape+P25"
                                                        rel="nofollow" class="btn btn--m btn-primary btn-item"
                                                        title="Máy siêu âm 5D SonoScape P25"><i class="fa fa-phone-alt"
                                                            aria-hidden="true"></i>
                                                        Liên hệ</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="item col-6 col-sm-4 col-md-4 col-lg-3">
                                    <div class="product-item relative" data-id="421"
                                        action="https://maysieuamsonoscape.com/api/v2/add-to-cart/421">
                                        <figure class="photoframe relative">
                                            <div class="relative img-product">
                                                <a href="https://maysieuamsonoscape.com/may-sieu-am-4d-5d-sonoscape/may-sieu-am-sonoscape-p25-pro.html"
                                                    class="d-block relative">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                        width="100%" height="100%"
                                                        data-isrc="https://media.loveitopcdn.com/39908/thumb/260x300/may-sieu-am-mau-5d-sonoscape-p25-pro.jpg?zc=1"
                                                        class="lazyload" alt="Máy siêu âm 5D SonoScape P25 Pro"
                                                        aria-label="Máy siêu âm 5D SonoScape P25 Pro" />
                                                </a>
                                                <a href="https://maysieuamsonoscape.com/lien-he-phu-viet-medical.html?product_code=&product_title=M%C3%A1y+si%C3%AAu+%C3%A2m+5D+SonoScape+P25+Pro"
                                                    rel="nofollow" class="btn btn--m btn-primary btn-item"
                                                    title="Máy siêu âm 5D SonoScape P25 Pro"><i class="fa fa-phone-alt"
                                                        aria-hidden="true"></i>
                                                    Liên hệ</a>
                                            </div>
                                            <figcaption class="infor-product">
                                                <h3 class="wrap-two-lines product-title">
                                                    <a href="https://maysieuamsonoscape.com/may-sieu-am-4d-5d-sonoscape/may-sieu-am-sonoscape-p25-pro.html"
                                                        class="two-lines"
                                                        aria-label="Máy siêu âm 5D SonoScape P25 Pro">Máy siêu âm 5D
                                                        SonoScape P25 Pro</a>
                                                </h3>
                                                <div class="btn-purchased">
                                                    <a href="https://maysieuamsonoscape.com/lien-he-phu-viet-medical.html?product_code=&product_title=M%C3%A1y+si%C3%AAu+%C3%A2m+5D+SonoScape+P25+Pro"
                                                        rel="nofollow" class="btn btn--m btn-primary btn-item"
                                                        title="Máy siêu âm 5D SonoScape P25 Pro"><i
                                                            class="fa fa-phone-alt" aria-hidden="true"></i>
                                                        Liên hệ</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="item col-6 col-sm-4 col-md-4 col-lg-3">
                                    <div class="product-item relative" data-id="422"
                                        action="https://maysieuamsonoscape.com/api/v2/add-to-cart/422">
                                        <figure class="photoframe relative">
                                            <div class="relative img-product">
                                                <a href="https://maysieuamsonoscape.com/may-sieu-am-4d-5d-sonoscape/may-sieu-am-4d-sonoscape-s22.html"
                                                    class="d-block relative">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                        width="100%" height="100%"
                                                        data-isrc="https://media.loveitopcdn.com/39908/thumb/260x300/164845-may-sieu-am-sonoscape-s22.jpg?zc=1"
                                                        class="lazyload" alt="Máy siêu âm 5D SonoScape S22"
                                                        aria-label="Máy siêu âm 5D SonoScape S22" />
                                                </a>
                                                <a href="https://maysieuamsonoscape.com/lien-he-phu-viet-medical.html?product_code=&product_title=M%C3%A1y+si%C3%AAu+%C3%A2m+5D+SonoScape+S22"
                                                    rel="nofollow" class="btn btn--m btn-primary btn-item"
                                                    title="Máy siêu âm 5D SonoScape S22"><i class="fa fa-phone-alt"
                                                        aria-hidden="true"></i>
                                                    Liên hệ</a>
                                            </div>
                                            <figcaption class="infor-product">
                                                <h3 class="wrap-two-lines product-title">
                                                    <a href="https://maysieuamsonoscape.com/may-sieu-am-4d-5d-sonoscape/may-sieu-am-4d-sonoscape-s22.html"
                                                        class="two-lines" aria-label="Máy siêu âm 5D SonoScape S22">Máy
                                                        siêu âm 5D SonoScape S22</a>
                                                </h3>
                                                <div class="btn-purchased">
                                                    <a href="https://maysieuamsonoscape.com/lien-he-phu-viet-medical.html?product_code=&product_title=M%C3%A1y+si%C3%AAu+%C3%A2m+5D+SonoScape+S22"
                                                        rel="nofollow" class="btn btn--m btn-primary btn-item"
                                                        title="Máy siêu âm 5D SonoScape S22"><i class="fa fa-phone-alt"
                                                            aria-hidden="true"></i>
                                                        Liên hệ</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="item col-6 col-sm-4 col-md-4 col-lg-3">
                                    <div class="product-item relative" data-id="423"
                                        action="https://maysieuamsonoscape.com/api/v2/add-to-cart/423">
                                        <figure class="photoframe relative">
                                            <div class="relative img-product">
                                                <a href="https://maysieuamsonoscape.com/may-sieu-am-4d-5d-sonoscape/may-sieu-am-sonoscape-p20.html"
                                                    class="d-block relative">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                        width="100%" height="100%"
                                                        data-isrc="https://media.loveitopcdn.com/39908/thumb/260x300/034618-may-sieu-am-sonoscape-p20.jpg?zc=1"
                                                        class="lazyload" alt="Máy siêu âm 5D SonoScape P20"
                                                        aria-label="Máy siêu âm 5D SonoScape P20" />
                                                </a>
                                                <a href="https://maysieuamsonoscape.com/lien-he-phu-viet-medical.html?product_code=&product_title=M%C3%A1y+si%C3%AAu+%C3%A2m+5D+SonoScape+P20"
                                                    rel="nofollow" class="btn btn--m btn-primary btn-item"
                                                    title="Máy siêu âm 5D SonoScape P20"><i class="fa fa-phone-alt"
                                                        aria-hidden="true"></i>
                                                    Liên hệ</a>
                                            </div>
                                            <figcaption class="infor-product">
                                                <h3 class="wrap-two-lines product-title">
                                                    <a href="https://maysieuamsonoscape.com/may-sieu-am-4d-5d-sonoscape/may-sieu-am-sonoscape-p20.html"
                                                        class="two-lines" aria-label="Máy siêu âm 5D SonoScape P20">Máy
                                                        siêu âm 5D SonoScape P20</a>
                                                </h3>
                                                <div class="btn-purchased">
                                                    <a href="https://maysieuamsonoscape.com/lien-he-phu-viet-medical.html?product_code=&product_title=M%C3%A1y+si%C3%AAu+%C3%A2m+5D+SonoScape+P20"
                                                        rel="nofollow" class="btn btn--m btn-primary btn-item"
                                                        title="Máy siêu âm 5D SonoScape P20"><i class="fa fa-phone-alt"
                                                            aria-hidden="true"></i>
                                                        Liên hệ</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="item col-6 col-sm-4 col-md-4 col-lg-3">
                                    <div class="product-item relative" data-id="424"
                                        action="https://maysieuamsonoscape.com/api/v2/add-to-cart/424">
                                        <figure class="photoframe relative">
                                            <div class="relative img-product">
                                                <a href="https://maysieuamsonoscape.com/may-sieu-am-4d-5d-sonoscape/may-sieu-am-sonoscape-s12.html"
                                                    class="d-block relative">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                        width="100%" height="100%"
                                                        data-isrc="https://media.loveitopcdn.com/39908/thumb/260x300/may-sieu-am-sonoscape-s12.jpg?zc=1"
                                                        class="lazyload" alt="Máy siêu âm 4D SonoScape S12"
                                                        aria-label="Máy siêu âm 4D SonoScape S12" />
                                                </a>
                                                <a href="https://maysieuamsonoscape.com/lien-he-phu-viet-medical.html?product_code=&product_title=M%C3%A1y+si%C3%AAu+%C3%A2m+4D+SonoScape+S12"
                                                    rel="nofollow" class="btn btn--m btn-primary btn-item"
                                                    title="Máy siêu âm 4D SonoScape S12"><i class="fa fa-phone-alt"
                                                        aria-hidden="true"></i>
                                                    Liên hệ</a>
                                            </div>
                                            <figcaption class="infor-product">
                                                <h3 class="wrap-two-lines product-title">
                                                    <a href="https://maysieuamsonoscape.com/may-sieu-am-4d-5d-sonoscape/may-sieu-am-sonoscape-s12.html"
                                                        class="two-lines" aria-label="Máy siêu âm 4D SonoScape S12">Máy
                                                        siêu âm 4D SonoScape S12</a>
                                                </h3>
                                                <div class="btn-purchased">
                                                    <a href="https://maysieuamsonoscape.com/lien-he-phu-viet-medical.html?product_code=&product_title=M%C3%A1y+si%C3%AAu+%C3%A2m+4D+SonoScape+S12"
                                                        rel="nofollow" class="btn btn--m btn-primary btn-item"
                                                        title="Máy siêu âm 4D SonoScape S12"><i class="fa fa-phone-alt"
                                                            aria-hidden="true"></i>
                                                        Liên hệ</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <x-sidebar />

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="assets/plugins/elevatezoom-3.0.8/jquery.elevatezoom.min.js"></script>
@endpush

