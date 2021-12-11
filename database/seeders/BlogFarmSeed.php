<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogFarmSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('blog_farms')->truncate();
        DB::table('blog_farms')->insert([
            [
                'id' => 1,
                'title' => 'Bắp cái của Trang trại hữu cơ Nông sản ngon',
                'farm_id'=>1,
                'url' => 'http://127.0.0.1:8000/product/1',
                'thumbnail' =>'https://res.cloudinary.com/hoangkien0601/image/upload/v1639220963/1414120845-rau-cai-bap_bpgyke.jpg,https://res.cloudinary.com/hoangkien0601/image/upload/v1639220984/1434395523-pkhxbap_cai_7_nowy_jstgmn.jpg,https://res.cloudinary.com/hoangkien0601/image/upload/v1639221071/bap-cai-1614210952737_eosjja.jpg',
                'description' => 'Sản phẩm bắp cải trắng này thuộc  trang trại hữu cơ Nông sản ngon, nơi đây đã dùng nhiều công nghệ tiên tiến để có thể trồng được những chiếc bắp cái xanh ngon như này',
                'status' =>1,
                'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')
            ],
            [
                'id' => 2,
                'title' => 'Súp lơ xanh của Trang trại hữu cơ V-Organic',
                'farm_id'=>2,
                'url' => 'http://127.0.0.1:8000/product/2',
                'thumbnail' =>'https://res.cloudinary.com/hoangkien0601/image/upload/v1639221095/0-1200x676-30_viagu5.jpg,https://res.cloudinary.com/hoangkien0601/image/upload/v1639221127/sup-lo-xanh_hglz0b.jpg,https://res.cloudinary.com/hoangkien0601/image/upload/v1639221181/r-8-nk-24-bmc-mg-sib-5-z-wkk-qk-w-97080-1605881798031_m6a8et.jpg',
                'description' => 'Sản phẩm súp lơ xanh được thu hoạch từ trang trại hữu cơ V-Organic, với chất lượng đã được các các nhà kiểm nhận nước ngoài cũng như những phần đánh giá nhận xét của khách hàng thì súp lơ của trang trại được đánh giá tốt bất nhất tại Viêt Nam',
                'status' =>1,
                'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')
            ],
            [
                'id' => 3,
                'title' => 'Ớt chuông của hợp tác xã rau sạch Vân Hội',
                'farm_id'=>3,
                'url' => 'http://127.0.0.1:8000/product/3',
                'thumbnail' =>'https://res.cloudinary.com/hoangkien0601/image/upload/v1639221238/7-cong-dung-cua-ot-chuong-doi-voi-suc-khoe-va-mot-_sskjqb.jpg,https://res.cloudinary.com/hoangkien0601/image/upload/v1639221253/20210125_135158_925673_ot-chuong.max-1800x1800_hxdrpg.jpg,https://res.cloudinary.com/hoangkien0601/image/upload/v1639221270/thoi-vu-de-trong-ot-ngot_bzgvqo.jpg',
                'description' => 'ớt chuông là sản phẩm của hợp tác xã rau sạch Vân Hội trồng trọt và đưa ra ngoài thị trường, ớt chuông ở đây được mọi người đánh giá rất cao về chất lượng cũng như giá thành sản phẩm',
                'status' =>1,
                'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')
            ],
            [
                'id' => 4,
                'title' => 'Dâu Tây của Đà Lạt GAP',
                'farm_id'=>4,
                'url' => 'http://127.0.0.1:8000/product/4',
                'thumbnail' =>'https://res.cloudinary.com/hoangkien0601/image/upload/v1639221287/vuon-dau-tay-dulichdalat-1_sjchby.jpg,https://res.cloudinary.com/hoangkien0601/image/upload/v1639221304/images_rqdd6s.jpg,https://res.cloudinary.com/hoangkien0601/image/upload/v1639221323/vuon-dau-da-lat-1024x576_nmuxja.jpg',
                'description' => 'Dâu tây được vườn Đà Lạt GAP trồng, Đà Lạt cũng là nơi đánh giá là trong những thành phố trồng dâu tây sạch và ngon nhất, những quả dâu tây được thu hoạch và bán ra thị trường với giá cả phải chăng và chất lượng đã được kiểm chứng',
                'status' =>1,
                'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')
            ]
        ]);
        //
    }
}
