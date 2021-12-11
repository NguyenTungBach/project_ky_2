<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FarmSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('farms')->truncate();
        DB::table('farms')->insert([
            [
                'id' => 1,
                'name' => 'Trang trại hữu cơ Nông sản ngon',
                'address' => '224 Hoàng Ngân, Trung Hoà, Cầu Giấy, Hà Nội',
                'email' => ' hotro@nongsanngon.com.vn',
                'phone' => '02438568888',
                'thumbnail' => 'https://res.cloudinary.com/hoangkien0601/image/upload/v1639220877/trang-trai-huu-co-nong-san-ngon-484040_idtp8t.jpg',
                'description' => 'Điểm đặc biệt là quý khách có thể đến tham quan trang trại rau hữu cơ của Nông sản ngon để xem tận mắt quy trình trồng trọt và thu hoạch các loại rau của quả nơi đây và mua sắm tại chỗ. Nhưng nếu bạn đến cửa hàng để mua sắm, hẳn bạn cũng sẽ rất hài lòng vì cửa hàng bài trí xinh xắn, gọn gàng, rau của quả tươi, đều và đẹp mắt, thái độ nhân viên lịch sự, niềm nở. Tuy nhiên, rau củ quả chưa thực sự đa dạng về chủng loại.
Cửa hàng thực phẩm sạch Nông Sản Ngon là siêu thị thương mại điện tử chuyên cung cấp các loại thực phẩm sạch hàng ngày, đảm bảo tươi, ngon và an toàn đến tận nhà khách hàng. Nông Sản Ngon chỉ hợp tác với các nhà cung cấp uy tín về thực phẩm sạch để mang lại sự đảm bảo cao về chất lượng sản phẩm, cửa hàng bán nhiều loại rau an toàn, rau mầm, rau hữu cơ, nấm,... cho bạn lựa chọn.',
                'status' => 1,
                'created_at' =>Carbon::create(1995,10,12),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
            ],
            [
                'id' => 2,
                'name' => 'Trang trại hữu cơ V-Organic',
                'address' => 'Lạc Dương, Đà Lạt',
                'email' => ' huong.nt@orgencorp.vn',
                'phone' => '19006981',
                'thumbnail' => 'https://res.cloudinary.com/hoangkien0601/image/upload/v1639220897/img_7502_grande_3545fa025ae742a3b0802330d8d56d7e_grande_wxzpzd.jpg',
                'description' => 'Đất trồng phải đảm bảo không sử dụng chất cấm ít nhất 3 năm trước khi canh tác; độ màu mỡ của đất và chất dinh dưỡng cho cây trồng phải được cung cấp thông qua quá trình làm đất, canh tác, luân canh, xen canh, phân bón hữu cơ từ vật nuôi và cây trồng khác, các nguyên liệu tổng hợp trong danh mục cho phép; dùng các biện pháp vật lý, cơ học, sinh học để xử lý sâu hại, cỏ dại và bệnh cho cây trồng, chỉ khi các biện pháp trên không đủ mạnh mới dùng đến các loại sinh vật, thảo mộc hay chất tổng hợp có trong danh mục cho phép; chỉ sử dụng hạt giống hữu cơ; cấm dùng các thành phần biến đổi gen, bức xạ và bùn thải.',
                'status' => 1,
                'created_at' => Carbon::create(2014,2,27),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
            ],
            [
                'id' => 3,
                'name' => 'Hợp tác xã rau sạch Vân Nội',
                'address' => 'Xóm Đầm, Vân Nội,Đông Anh, Hà Nội',
                'email' => ' htxvannoi@gmail.com',
                'phone' => '0913886333',
                'thumbnail' => 'https://res.cloudinary.com/hoangkien0601/image/upload/v1639220913/rau_20an_20toan_1_mu04mv.jpg',
                'description' => 'Được thành lập từ năm 1997 đến nay, Rau sạch Vân Nội đã có hơn 20 năm hoạt động trong lĩnh vực sản xuất, tiêu thụ và chế biến các loại rau củ quả an toàn. Vân Nội chuyên cung cấp các sản phẩm rau uy tín chất lượng tại thành phố Hà Nội. Trang trại này áp dụng những thành tựu khoa học và những ứng dụng công nghệ hiện đại để đưa vào canh tác và sản xuất. Những sản phẩm của Vân Nội đều đảm bảo an toàn thực phẩm được kiểm duyệt trước khi mang đến tay người tiêu dùng.',
                'status' => 1,
                'created_at' => Carbon::create(1997,3,18),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
            ],
            [
                'id' => 4,
                'name' => 'Đà Lạt GAP',
                'address' => 'Thành phố Đà Lạt',
                'email' => ' cs@dalatgapstore.com',
                'phone' => '0838202720',
                'thumbnail' => 'https://res.cloudinary.com/hoangkien0601/image/upload/v1639220937/images2258300_hinh_3_1_lbf6jy.jpg',
                'description' => 'Công ty Đà Lạt GAP được thành lập năm 1997, hơn 20 năm phát triển công ty vẫn luôn giữ vững mục tiêu là dẫn đầu trong thị trường rau sạch tại Việt Nam. Năm 2009 trang trại Đà Lạt GAP nhận giấy chứng nhận Global GAP đầu tiên tại Việt Nam – chứng nhận tiêu chuẩn toàn cầu và bắt đầu phát triển mạnh xuất khẩu sang các nước Châu Âu, Nhật Bản, Nga… Trang trại Đà Lạt GAP là trang trại ứng dụng Công Nghệ Cao vào Nông Nghiệp đầu tiên tại Việt Nam, tăng năng suất gấp 3 lần so với kỹ thuật thông thường. Và vào năm 2011, Bộ Nông Nghiệp đã cấp chứng nhận cho Đà Lạt GAP là công ty đầu tiên về Nông Nghiệp ứng dụng Công Nghệ Cao tại Việt Nam.',
                'status' => 1,
                'created_at' => Carbon::create(1997,9,20),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
            ]
        ]);
    }
}
