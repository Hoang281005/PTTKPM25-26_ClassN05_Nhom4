<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('vi_VN');
        
        // Thêm mới một hình ảnh mặc định cho sản phẩm

        $imageMap = [
    
    //
'Địa Lý 12' => 'products/sgk1.webp',
'Hóa Học 11' => 'products/sgk2.webp',
'Hóa Học 12' => 'products/sgk3.webp',
'Lịch sử 12' => 'products/sgk4.webp',
'Ngữ Văn 12' => 'products/sgk5.webp',
'Sinh Học 11' => 'products/sgk6.webp',
'Sinh Học 12' => 'products/sgk7.webp',
'Tiếng Anh 11' => 'products/sgk8.webp',
'Tin Học 12' => 'products/sgk9.webp',
'Toán Học 11' => 'products/sgk10.webp',
'Toán Học 12' => 'products/sgk11.webp',
'Vật Lý 12' => 'products/sgk12.webp',

'10 Vạn Câu Hỏi Vì Sao?' => 'products/stn1.webp',
'Các Ngôi Sao & Các Hành Tinh' => 'products/stn2.webp',
'Danh Nhân Thế Giới: Edison' => 'products/stn3.webp',
'Hoàng Tử Bé' => 'products/stn4.webp',
'Kính Vạn Hoa' => 'products/stn5.webp',
'Kỉ Niệm 70 Năm Chiến Thắng Điện Biên Phủ' => 'products/stn6.webp',
'Nhật Ký Của Chú Bé Nhút Nhát' => 'products/stn7.webp',
'Những Người Anh Hùng Trẻ Tuổi - Kim Đồng' => 'products/stn8.webp',
'Rèn Nhân Cách Luyện Tài Năng - Bác Hồ' => 'products/stn9.webp',
'Sự Tích Bánh Trưng - Bánh Dày' => 'products/stn10.webp',
'Sự Tích Qủa Dưa Hấu' => 'products/stn11.webp',
'Tý Quậy' => 'products/stn12.webp',

'Mãi Mãi Tuổi 20' => 'products/vh1.webp',
'Mưa Đỏ' => 'products/vh2.webp',
'Nếu Biết Trăm Năm Là Hữu Hạn' => 'products/vh3.webp',
'Nhà Gỉa Kim' => 'products/vh4.webp',
'Nhật Ký Đặng Thúy Trâm' => 'products/vh5.webp',
'Nhật Ký Trong Tù' => 'products/vh6.webp',
'Tấm Lòng Cao Cả' => 'products/vh7.webp',
'Thần Thoại Hy Lạp' => 'products/vh8.webp',
'Thép Đã Tôi Thế Đấy' => 'products/vh9.webp',
'Thơ Xuân Diệu' => 'products/vh10.webp',
'Tri Thức & Trưởng Thành' => 'products/vh11.webp',
'Vợ Nhặt' => 'products/vh12.webp',

'Bút Bi Thiên Long' => 'products/ddht1.webp',
'Bút Chì Gỗ 2B' => 'products/ddht2.webp',
'Giấy Note Phân Trang' => 'products/ddht3.webp',
'Gọt Bút Chì' => 'products/ddht4.webp',
'Gọt Bút Chì Pulse' => 'products/ddht5.webp',
'Tẩy Campus' => 'products/ddht6.webp',
'Tẩy Strive' => 'products/ddht7.webp',
'Thước Đo Độ' => 'products/ddht8.webp',
'Thước Hình Học' => 'products/ddht9.webp',
'Thước Kẻ 20cm' => 'products/ddht10.webp',
'Thước Dẻo 15cm' => 'products/ddht11.webp',
'Thước Kẻ Màu 30cm' => 'products/ddht12.webp',

'Đèn Led Chống Cận' => 'products/dln1.webp',
'Gương Tròn Mini' => 'products/dln2.webp',
'Mô Hình Thần Tài Mini' => 'products/dln3.webp',
'Pin Đồng Tiền' => 'products/dln4.webp',
'Pin Con Thỏ' => 'products/dln5.webp',
'Túi Vải Conan' => 'products/dln6.webp',

];



        // Lấy tất cả categories
        $categories = Category::all();
        
        if ($categories->isEmpty()) {
            $this->command->error('Không có danh mục nào. Vui lòng chạy CategorySeeder trước.');
            return;
        }

        // Dữ liệu sản phẩm thực tế từ thị trường Việt Nam
        $productTemplates = [
            'Sách Giáo Khoa' => [
                ['name' => 'Địa Lý 12', 'price' => 16000],
                ['name' => 'Hóa Học 11', 'price' => 23500],
                ['name' => 'Hóa Học 12', 'price' => 16950],
                ['name' => 'Lịch sử 12', 'price' => 25500],
                ['name' => 'Ngữ Văn 12', 'price' => 25000],
                ['name' => 'Sinh Học 11', 'price' => 14900],
                ['name' => 'Sinh Học 12', 'price' => 39000],
                ['name' => 'Tiếng Anh 11', 'price' => 28900],
                ['name' => 'Tin Học 12', 'price' => 23500],
                ['name' => 'Toán Học 11', 'price' => 24500],
                ['name' => 'Toán Học 12', 'price' => 18500],
                ['name' => 'Vật Lý 12', 'price' => 17500],

            ],

            'Sách Thiếu Nhi' => [
                ['name' => '10 Vạn Câu Hỏi Vì Sao?', 'price' => 15990],
                ['name' => 'Các Ngôi Sao & Các Hành Tinh', 'price' => 13490],
                ['name' => 'Danh Nhân Thế Giới: Edison', 'price' => 39000],
                ['name' => 'Hoàng Tử Bé', 'price' => 65000],
                ['name' => 'Kính Vạn Hoa', 'price' => 27990],
                ['name' => 'Kỉ Niệm 70 Năm Chiến Thắng Điện Biên Phủ', 'price' => 17800],
                ['name' => 'Nhật Ký Của Chú Bé Nhút Nhát', 'price' => 26900],
                ['name' => 'Những Người Anh Hùng Trẻ Tuổi - Kim Đồng', 'price' => 12990],
                ['name' => 'Rèn Nhân Cách Luyện Tài Năng - Bác Hồ', 'price' => 21450],
                ['name' => 'Sự Tích Bánh Trưng - Bánh Dày', 'price' => 12500],
                ['name' => 'Sự Tích Qủa Dưa Hấu', 'price' => 105000],
                ['name' => 'Tý Quậy', 'price' => 37990],
                
            ],

            'Sách Văn Học' => [
                ['name' => 'Mãi Mãi Tuổi 20', 'price' => 26990],
                ['name' => 'Mưa Đỏ', 'price' => 20990],
                ['name' => 'Nếu Biết Trăm Năm Là Hữu Hạn', 'price' => 14990],
                ['name' => 'Nhà Gỉa Kim', 'price' => 10990],
                ['name' => 'Nhật Ký Đặng Thúy Trâm', 'price' => 12990],
                ['name' => 'Nhật Ký Trong Tù', 'price' => 24990],
                ['name' => 'Tấm Lòng Cao Cả', 'price' => 19990],
                ['name' => 'Thần Thoại Hy Lạp', 'price' => 15990],
                ['name' => 'Thép Đã Tôi Thế Đấy', 'price' => 11990],
                ['name' => 'Thơ Xuân Diệu', 'price' => 89900],
                ['name' => 'Tri Thức & Trưởng Thành', 'price' => 89900],
                ['name' => 'Vợ Nhặt', 'price' => 99900],
                
            ],
        
            'Thiết Bị Học Tập' => [
                ['name' => 'Bút Bi Thiên Long', 'price' => 15900],
                ['name' => 'Bút Chì Gỗ 2B', 'price' => 2990],
                ['name' => 'Giấy Note Phân Trang', 'price' => 29900],
                ['name' => 'Gọt Bút Chì', 'price' => 7990],
                ['name' => 'Gọt Bút Chì Pulse', 'price' => 7990],
                ['name' => 'Tẩy Campus', 'price' => 2990],
                ['name' => 'Tẩy Strive', 'price' => 2490],
                ['name' => 'Thước Đo Độ', 'price' => 2490],
                ['name' => 'Thước Hình Học', 'price' => 12900],
                ['name' => 'Thước Kẻ 20cm', 'price' => 11900],
                ['name' => 'Thước Dẻo 15cm', 'price' => 49000],
                ['name' => 'Thước Kẻ Màu 30cm', 'price' => 39000],
                
            ],

            'Vật Phẩm & Lưu Niệm' => [
                ['name' => 'Đèn Led Chống Cận', 'price' => 24900],
                ['name' => 'Gương Tròn Mini', 'price' => 19900],
                ['name' => 'Mô Hình Thần Tài Mini', 'price' => 9900],
                ['name' => 'Pin Đồng Tiền', 'price' => 10900],
                ['name' => 'Pin Con Thỏ', 'price' => 12900],
                ['name' => 'Túi Vải Conan', 'price' => 14900],
                
            ]
        ];

        foreach ($categories as $category) {
            $categoryName = $category->category_name;
            $templates = $productTemplates[$categoryName] ?? [];

            foreach ($templates as $template) {

$image = $imageMap[$template['name']] ?? null;


                Product::create([
                    'name' => $template['name'],
                    'description' => $this->generateDescription($template['name'], $categoryName, $faker),
                    'price' => $template['price'],
                    'stock_quantity' => $faker->numberBetween(10, 100),
                    'category_id' => $category->category_id,
      //              'image_url' => null,
                    'image_url' => $image,
                ]);
            }
            
            $this->command->info("Đã tạo " . count($templates) . " sản phẩm cho danh mục: {$categoryName}");
        }
        
        $this->command->info('Đã tạo xong tất cả sản phẩm!');
    }

    private function generateDescription($productName, $categoryName, $faker)
    {
        $descriptions = [
            'Sách Giáo Khoa' => [
                'Nhà cung cấp: Nhà xuất bản Giáo Dục',
                'Nhà xuất bản: Giáo Dục Việt Nam',
                'Tác giả: Nhiều Tác Giả',
                'Hình thức bìa: Bìa Mềm'
            ],
            'Sách Thiếu Nhi' => [
                'Nhà cung cấp: Nhà Xuất Bản Kim Đồng',
                'Nhà xuất bản: Kim Đồng',
                'Tác giả: Sơn Tùng',
                'Độ tuổi: 11 - 15',
            ],
            'Sách Văn Học' => [
                'Nhà cung cấp: Cty Tri Thức Văn Hóa Sách VN',
                'Nhà xuất bản: Quân Đội Nhân Dân',
                'Tác giả: Chu Lai',
                'Hình thức bìa: Bìa cứng',
            ],
            'Thiết Bị Học Tập' => [
                'Nhà cung cấp: Thiên Long',
                'Xuất xứ: Việt Nam',
                'Phụ kiện chính hãng với chất lượng cao, thiết kế tinh tế.',
                'Phụ kiện thông minh giúp nâng cao trải nghiệm.',
            ]
        ];

        $categoryDescriptions = $descriptions[$categoryName] ?? $descriptions['Thiết Bị Học Tập'];
        $baseDescription = $faker->randomElement($categoryDescriptions);
        
        $details = [
            "✅ Bảo hành chính hãng",
            "✅ Giao hàng miễn phí toàn quốc",
            "✅ Đổi trả trong 7 ngày",
            "✅ Tư vấn 24/7"
        ];
        
        return $baseDescription . "\n\n" . implode("\n", $faker->randomElements($details, 3));
    }
}
