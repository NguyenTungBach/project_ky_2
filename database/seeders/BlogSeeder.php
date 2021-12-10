<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('blogs')->truncate();
        DB::table('blogs')->insert([
            [
                'id' => 1,
                'title' => 'Những kinh nghiệm kinh doanh rau sạch quý giá bạn cần nhớ',
                'description' => 'Thực phẩm bẩn đang là nỗi ám ảnh về an toàn sức khỏe cho toàn xã hội. Bởi vậy dịch vụ kinh doanh rau sạch bắt đầu phát triển nhiều hơn trên các tỉnh/Thành phố lớn',
                'content' => '<h2 style="text-align: justify;">1. Tại sao kinh doanh rau sạch là 1 hướng đi thông minh?</h2>

<p style="text-align: justify;"><span style="font-weight: 400;">Nhìn bề ngoài, ít người tiêu dùng nào biết được rằng những mớ rau xanh mướt kia có phải là rau quả phun kích thích, không an toàn hay không? Nỗi lo của người tiêu dùng khiến họ ngần ngại trước bất cứ lựa chọn nào liên quan đến thực phẩm. </span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">Gần như, quyết định mua thực phẩm của họ giờ đây tuỳ thuộc vào niềm tin với người bán, chứ không có một quy chuẩn nào cụ thể cả. Đó vừa là cái khó, vừa là cái dễ đối với những người muốn kinh doanh cửa hàng rau sạch.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">Dễ ở chỗ, khoảng hơn 80% số người tiêu dùng được hỏi sẽ mua rau tại cửa hàng kinh doanh rau sạch nếu họ tin rau đảm bảo an toàn và sẵn sàng trả giá gấp 1,5 &ndash; 2 lần để được tiêu dùng rau sạch. Do vậy, kinh doanh cửa hàng rau sạch chẳng lo thua lỗ nếu bạn bán sản phẩm đúng chất lượng và được khách hàng tin dùng.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">Khó ở chỗ khi mới mở cửa hàng bán rau sạch bạn cần mất khoảng thời gian từ 6 tháng &ndash; 1 năm để xây dựng niềm tin ở khách hàng. Điều đó đồng nghĩa với việc bạn sẽ phải cung cấp 1 dịch vụ kinh doanh rau sạch với dịch vụ chăm sóc khách hàng tốt nhất để chiến thắng các đối thủ cạnh tranh khác và chiếm được lòng tin ở khách hàng. Việc lấy được sự tin tưởng của người tiêu dùng thì không đơn giản phải không?</span></p>

<p style="text-align: center;">Vậy để mở cửa hàng rau sạch cần những gì? Bạn hãy theo dõi tiếp bài viết nhé!</p>',
                'thumbnail' => 'https://blog.dktcdn.net/files/kinh-nghiem-tim-nha-cung-cap-rau-sach-1-1.jpg',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'id' => 2,
                'title' => 'Bật Mí Kinh Nghiệm Kinh Doanh Rau Sạch Hiệu Quả',
                'description' => 'Sản phẩm nông nghiệp với lượng tồn dư các chất hoá học là những sản phẩm không còn sạch sẽ và có khả năng gây hại cho cơ thể con người. Để tránh những tác hại trước mắt và lâu dài, rất nhiều nơi trên nước ta hiện nay đang tiến hành sản xuất: Nông nghiệp sạch. Từ đó ngành kinh doanh rau sạch cũng được tạo ra và phát triển nhanh vượt bậc.',
                'content' => '<h2 id="kinh-doanh-rau-sach-1"><strong>1. Tìm nguồn hàng đảm bảo chất lượng để bán</strong></h2>
<p>Rau quê là nguồn hàng rất dễ tìm kiếm, bạn có thể đến vườn rau tại các vùng quê để nhập với số lượng lớn. Cách này không những đảm bảo về chất lượng mà nguồn rau cũng phong phú, giá thu hoạch tại vườn cũng rẻ hơn.</p>
<p style="text-align: center;"><img class="aligncenter size-full wp-image-13228" src="https://www.uplevo.com/blog/wp-content/uploads/2019/07/tim-nguon-hang-chat-luong-dam-bao.jpg" alt="tìm nguồn hàng chất lượng đảm bảo" width="876" height="477" srcset="https://www.uplevo.com/blog/wp-content/uploads/2019/07/tim-nguon-hang-chat-luong-dam-bao.jpg 876w, https://www.uplevo.com/blog/wp-content/uploads/2019/07/tim-nguon-hang-chat-luong-dam-bao-150x82.jpg 150w, https://www.uplevo.com/blog/wp-content/uploads/2019/07/tim-nguon-hang-chat-luong-dam-bao-360x196.jpg 360w, https://www.uplevo.com/blog/wp-content/uploads/2019/07/tim-nguon-hang-chat-luong-dam-bao-768x418.jpg 768w" sizes="(max-width: 876px) 100vw, 876px" /></p>
<p>Tuy nhiên, để chắc chắn nguồn rau có chất lượng nhất giữa bạn và người nông dân phải có những cam kết ngay từ đầu. Đồng thời bạn cũng nên thường xuyên trực tiếp xuống thăm vườn để tiện theo dõi và kiểm định sản phẩm.</p>
<p>Ngoài cách thu mua từ vườn của người khác, bạn cũng có thể tự xây dựng hệ thống sản xuất để cung cấp cho hoạt động kinh doanh rau sạch của mình. Điều này sẽ đảm bảo được 100% nguồn rau sạch do bạn tự trồng. Với cách trên bạn cần phải có nguồn vốn đầu tư lớn hơn cũng như phải dành nhiều thời gian để chăm sóc.</p>
<h2 id="kinh-doanh-rau-sach-2"><strong>2. Cách thức kinh doanh rau sạch</strong></h2>
<p>Cùng với sự phát triển của thương mại điện tử, cửa hàng kinh doanh rau củ quả sạch có nhiều hơn một hình thức bàn hàng. Cụ thể là hai hình thức mở cửa hàng hoặc bán hàng online.</p>
<h3>Mở cửa hàng</h3>
<p>Nếu là mở cửa hàng, mặt bằng kinh doanh không tốn quá nhiều diện tích nên tiền thuê địa điểm hoặc xây dựng cũng khá tiết kiệm. Thêm nữa, khách hàng có thể đến tận nơi lựa chọn cho mình những sản phẩm ngon nhất.</p>
<p style="text-align: center;"><img class="aligncenter size-full wp-image-13229" src="https://www.uplevo.com/blog/wp-content/uploads/2019/07/mo-cua-hang-kinh-doanh-rau-sach.jpg" alt="mở cửa hàng kinh doanh rau sạch" width="876" height="426" srcset="https://www.uplevo.com/blog/wp-content/uploads/2019/07/mo-cua-hang-kinh-doanh-rau-sach.jpg 876w, https://www.uplevo.com/blog/wp-content/uploads/2019/07/mo-cua-hang-kinh-doanh-rau-sach-150x73.jpg 150w, https://www.uplevo.com/blog/wp-content/uploads/2019/07/mo-cua-hang-kinh-doanh-rau-sach-360x175.jpg 360w, https://www.uplevo.com/blog/wp-content/uploads/2019/07/mo-cua-hang-kinh-doanh-rau-sach-768x373.jpg 768w" sizes="(max-width: 876px) 100vw, 876px" /></p>
<p>Kéo theo đó sự tiếp xúc trực tiếp với nhiều mặt hàng sẽ kích thích nhu cầu mua hàng của họ.</p>
<h3>Kinh doanh online</h3>
<p>Còn với hình thức <a href="http://www.uplevo.com/designbox/kinh-doanh-online-hieu-qua" target="_blank" rel="noopener noreferrer">kinh doanh online</a>, hàng hoá của bạn sẽ được tiếp cận với nhiều người tiêu dùng ở khắp mọi nơi. Cũng không mất chi phí mặt bằng hay thuê nhận viện. Hoạt động kinh doanh trở nên linh hoạt hơn.</p>
<p>Tuy vậy, loại hình kinh doanh nào cũng sẽ tồn tại những rủi ro riêng phụ thuộc vào cách bạn xây dựng và sự phù hợp với thị trường.</p>
<p><img class="aligncenter size-full wp-image-13230" src="https://www.uplevo.com/blog/wp-content/uploads/2019/07/kinh-doanh-rau-sach-online.jpg" alt="kinh doanh rau sạch online" width="876" height="463" srcset="https://www.uplevo.com/blog/wp-content/uploads/2019/07/kinh-doanh-rau-sach-online.jpg 876w, https://www.uplevo.com/blog/wp-content/uploads/2019/07/kinh-doanh-rau-sach-online-150x79.jpg 150w, https://www.uplevo.com/blog/wp-content/uploads/2019/07/kinh-doanh-rau-sach-online-360x190.jpg 360w, https://www.uplevo.com/blog/wp-content/uploads/2019/07/kinh-doanh-rau-sach-online-768x406.jpg 768w" sizes="(max-width: 876px) 100vw, 876px" /></p>
<p>Bên cạnh đó, để phát triển quy mô kinh doanh rau sạch, đáp ứng được đầy đủ yêu cầu của người tiêu dùng. Ngoài hoạt động chính là bán lẻ bạn cũng nên phát triển các hình thức khác. Ví dụ như bán nguyên hộp, nguyên thùng cho giá sỉ, bán combo rau củ theo thực đơn dinh dưỡng. Đặc biệt là bán thêm giống rau tốt, chậu, đất trồng, phân bón,…</p>',
                'thumbnail' => 'https://www.uplevo.com/blog/wp-content/uploads/2019/07/kinh-nghiem-kinh-doanh-rau-sach.jpg',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'id' => 3,
                'title' => 'Vườn rau trên sân thượng quá "đỉnh" khiến dân tình nức nở ước ao, đủ loại rau củ đề huề chẳng thua gì siêu thị',
                'description' => 'Giữa mùa dịch khó mua rau củ, khu vườn tại gia này thực sự là cõi thần tiên.  ',
                'content' => '<p>Mới đây, tài khoản Facebook Ánh Minh đã chia sẻ hình ảnh khu vườn rau trên sân thượng của gia đình. Bài đăng nhanh chóng thu về lượt tương tác khủng, tận hơn 15.000 lượt tương tác với hàng trăm bình luận, ai nấy đều khen ngợi vẻ đẹp của khu vườn và độ mát tay của chủ nhà. Không chỉ có rau, khu vườn này còn có rất nhiều loại hoa củ quả, loại nào cũng cho ra thành phẩm làm "mát lòng người hâm mộ". Cùng ngắm những hình ảnh của khu vườn xanh ngát ngay giữa lòng thành phố nhé!</p>
<p>Khu trồng dưa nổi bật chiếm một khoảng diện tích lớn. Có khá nhiều loại dưa khác nhau được gieo trồng như dưa lưới, dưa vàng, dưa lê sữa, dưa hấu, dưa leo...&nbsp;Chị Ánh Minh chia sẻ trồng dưa tốt nhất là vào mùa nắng, tầm tháng 3 đến tháng 8 tùy thời tiết, ngoài ra cần tối thiếu 6 tiếng nắng 1 ngày mới tốt cho dưa.</p>',
                'thumbnail' => 'https://blog.dktcdn.net/files/kinh-doanh-rau-sach-4.jpg',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'id' => 4,
                'title' => 'Ý tưởng kinh doanh rau sạch độc đáo có “1 – 0 – 2”',
                'description' => 'Hiện nay, vấn đề an toàn vệ sinh thực phẩm trở nên nóng hơn bao giờ hết. Vậy nên ý tưởng kinh doanh rau sạch được coi là ý tưởng độc đáo và hiệu quả. Sau đây Onshop sẽ gợi ý cho bạn những kinh nghiệm cần thiết để thành công khi triển khai ý tưởng kinh doanh rau sạch này.',
                'content' => '<h2 style="text-align: justify;"><span style="font-weight: 400;">2. Kinh nghiệm kinh doanh cửa hàng rau sạch</span></h2>

<h3 style="text-align: justify;">2.1. Mở cửa hàng rau sạch cần lưu ý về bao gói, bao bì, nhãn hiệu sản phẩm</h3>

<p style="text-align: justify;"><span style="font-weight: 400;">Tất cả sản phẩm rau sẽ được đóng gói bằng túi nilon đóng kín. Trên bao bì bạn cần cung cấp những thông tin sau cho người tiêu dùng:</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">Về tính chất thương hiệu của sản phẩm gồm: nơi giám sát sản phẩm, quy trình sản xuất rau củ, nơi sản xuất sản phẩm, ngày đóng gói, tên cửa hàng, điện thoại hotline,&hellip;</span><span style="font-weight: 400;">Rau được đóng gói với các mức khối lượng khác nhau (300g, 500g, 800g/gói) để người tiêu dùng tuỳ chọn.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">Về đặc điểm sản phẩm: Sản phẩm được hình thành và chỉ đạo giám sát bởi các bên: Cơ quan chỉ đạo giám sát (Chi cục bảo vệ thực vật Hà Nội), người sản xuất và nhà phân phối.&nbsp;</span><span style="font-weight: 400;">Dán tem sản phẩm đã được kiểm duyệt và đảm bảo chất lượng.&nbsp;</span></p>

<h3 style="text-align: justify;">2.2. Xin giấy chứng nhận chất lượng cho sản phẩm của cửa hàng rau sạch</h3>

<p style="text-align: justify;"><span style="font-weight: 400;">Bước đầu tiên để lấy lòng tin khách hàng là bạn cần có giấy chứng nhận chất lượng cho nơi sản xuất rau sạch cho cửa hàng kinh doanh của bạn nhé. Thủ tục công bố tiêu chuẩn chất lượng sản phẩm hàng hóa tại cơ quan nhà nước có thẩm quyền được Bộ Y tế phân cấp quy định, bảo đảm tiêu chuẩn công bố áp dụng đáp ứng các quy định bắt buộc áp dụng đối với sản phẩm.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">Trong thời gian đầu kinh doanh rau quả sạch có thể có nhiều người còn nghi ngại về chất lượng sản phẩm của bạn, hãy mời cán bộ của Chi cục bảo vệ thực vật Hà Nội, tổ chức bảo vệ người tiêu dùng tới kiểm tra chất lượng vào những lúc đông khách, đồng thời thông báo công khai kết quả ngay tại chỗ và trên bản tin của phường. Như vậy uy tín của bạn sẽ nhanh chóng được xây dựng, giúp cho việc kinh doanh rau quả sạch thuận lợi hơn.</span></p>

<p style="text-align: center;"><img alt="giấy chứng nhận rau sạch" src="https://vinaucare.com/wp-content/uploads/2017/10/Gi%E1%BA%A5y-ch%E1%BB%A9ng-nh%E1%BA%ADn-VietGAP-VinaUcare.jpg" /></p>

<p style="text-align: center;"><em>Giấy chứng nhận xuất xứ và tiêu chuẩn sản xuất cần có khi kinh doanh thực phẩm</em></p>

<h3 style="text-align: justify;"><span style="font-weight: 400;">2.3. Bày bán sản phẩm của cửa hàng rau sạch thế nào?</span></h3>

<p style="text-align: justify;"><span style="font-weight: 400;">Muốn thực hiện dự án kinh doanh rau sạch tốt, bạn phải nắm được các nguyên tắc về bố trí sản phẩm trong cửa hàng. Với cửa hàng rau sạch, các sản phẩm có một đặc trưng chung là nhanh hỏng và dễ dập, nát nhất là với loại rau ăn thân lá. Kinh nghiệm bày bán sản phẩm cho cửa hàng rau sạch rau rất quan trọng, vì vậy khi mở cửa hàng rau sạch bạn cần đặc biệt lưu ý hai điểm sau:</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">Rau ăn thân lá được bày bán trên hệ thống giá đựng rau ba tầng, theo từng loại riêng rẽ. Ví dụ: Rau cải xoong, cải canh, cải đông dư, cải tím được xếp cùng một ngăn để người tiêu dùng dễ tìm, dễ lựa chọn.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">Rau lấy củ, lấy quả để dưới cùng để không bị lăn, rơi khi di chuyển. Hơn nữa, các loại rau lấy quả như bầu, bí thường có có kích thước lớn, cồng kềnh lên giá trên sẽ chiếm diện tích.&nbsp;</span><span style="font-weight: 400;">Hệ thống các dàn đựng rau sẽ được xếp theo hình chữ U, nhìn từ ngoài vào, ở giữa bày bán các loại rau củ, rau thơm, rau sống,&hellip;</span></p>

<p style="text-align: center;"><img alt="siêu thị rau sạch" src="https://toplist.vn/images/800px/cua-hang-rau-sach-bac-tom-283351.jpg" /></p>

<p style="text-align: center;"><em>Cách bày bán sản phẩm trong cửa hàng, siêu thị rau sạch</em></p>

<h3 style="text-align: justify;"><span style="font-weight: 400;">2.4. Cách thức kinh doanh rau sạch</span></h3>

<p style="text-align: justify;"><span style="font-weight: 400;">Cùng với sự phát triển của thương mại điện tử, cửa hàng kinh doanh rau củ quả sạch có nhiều hơn một hình thức bán hàng. Ngoài việc mở cửa hàng kinh doanh rau sạch. Bạn có thể lựa chọn <strong>kinh doanh rau sạch online</strong>. Trong quá trình bán hàng tại cửa hàng rau sạch bạn cần lưu ý một số điểm sau nhé:</span></p>',
                'thumbnail' => 'https://blog.onshop.asia/wp-content/uploads/2021/02/y-tuong-kinh-doanh-rau-sach-1-1-1170x611.png',
                'status' => 1,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ]
        ]);
//        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
