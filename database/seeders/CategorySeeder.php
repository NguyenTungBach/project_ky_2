<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Thực phẩm khô',
                'description' => 'Thực phẩm sấy khô là phương pháp thay thế gần nhất với chế độ ăn thực phẩm sống. Những thực phẩm này thường được chế biến thành các hình dạng như viên, dẹt… Thực phẩm sấy khô thường được ngâm nước trước khi sử dụng hoặc cho ăn trực tiếp.',
                'status'=>1,
                'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'id' => 2,
                'name' => 'Rau củ',
                'description' => 'Rau sạch hay còn gọi là rau an toàn là loại rau được sản xuất theo quy trình kỹ thuật bảo đảm được tiêu chuẩn sau: Hạn chế đến mức thấp nhất việc sử dụng phân hóa học, thuốc trừ sâu, thuốc kích thích... nhằm giảm tối đa lượng độc tố tồn đọng trong rau như nitrat, thuốc trừ sâu, kim loại nặng và vi sinh vật gây bệnh.',
                'status'=>1,
                'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'id' => 3,
                'name' => 'Nước ép trái cây',
                'description' => 'Nước ép trái cây là thức uống được làm từ các loại hoa quả có trong tự nhiên bằng phương pháp ép, chắt lọc bỏ bã và chỉ lấy nước. Mỗi loại trái cây đều có lượng vitamin và dưỡng chất dồi dào mang lại những lợi ích khác nhau cho sức khỏe.',
                'status'=>1,
                'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'id' => 4,
                'name' => 'Hoa quả',
                'description' => 'trái cây sạch là các loại trái cây thu được từ chăm bón, nuôi trồng những vẫn sử dụng các “đầu vào” là hóa chất như thuốc trừ sâu, chất hóa học tổng hợp.',
                'status'=>1,
                'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
            ],

        ]);
//        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
