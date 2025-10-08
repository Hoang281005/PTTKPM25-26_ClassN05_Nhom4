<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductVariant;
use App\Models\Product;

class ProductVariantSeeder extends Seeder
{
    public function run(): void
    {
        // Địa Lý 12
        $ĐịaLý12 = Product::where('name', 'Địa Lý 12')->first();
        if ($ĐịaLý12) {
            ProductVariant::create([
                'product_id' => $ĐịaLý12->product_id,
                'variant_name' => 'Địa Lý 12 - Tập 1',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $ĐịaLý12->product_id,
                'variant_name' => 'Địa Lý 12 - Tập 2',
                'additional_price' => 0,
                'stock_quantity' => 12,
            ]);
            ProductVariant::create([
                'product_id' => $ĐịaLý12->product_id,
                'variant_name' => 'BT Địa Lý',
                'additional_price' => 4900,
                'stock_quantity' => 8,
            ]);
        }

        // Hóa Học 11
        $HóaHọc11 = Product::where('name', 'Hóa Học 11')->first();
        if ($HóaHọc11) {
            ProductVariant::create([
                'product_id' => $HóaHọc11->product_id,
                'variant_name' => 'Hóa Học 11 - Tập 1',
                'additional_price' => 0,
                'stock_quantity' => 20,
            ]);
            ProductVariant::create([
                'product_id' => $HóaHọc11->product_id,
                'variant_name' => 'Hóa Học 11 - Tập 2',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $HóaHọc11->product_id,
                'variant_name' => 'BT Hóa Học',
                'additional_price' => 4900,
                'stock_quantity' => 0,
            ]);
        }

        // Lịch sử 12
        $Lịchsử12 = Product::where('name', 'Lịch sử 12')->first();
        if ($Lịchsử12) {
            ProductVariant::create([
                'product_id' => $Lịchsử12->product_id,
                'variant_name' => 'Lịch sử 12 - Tập 1',
                'additional_price' => 0,
                'stock_quantity' => 0,
            ]);
            ProductVariant::create([
                'product_id' => $Lịchsử12->product_id,
                'variant_name' => 'Lịch sử 12 - Tập 2',
                'additional_price' => 0,
                'stock_quantity' => 12,
            ]);
            ProductVariant::create([
                'product_id' => $Lịchsử12->product_id,
                'variant_name' => 'BT Lịch sử',
                'additional_price' => 4900,
                'stock_quantity' => 15,
            ]);
        }

        // Các Ngôi Sao & Các Hành Tinh
        $CácNgôiSaoCácHànhTinh = Product::where('name', 'Các Ngôi Sao & Các Hành Tinh')->first();
        if ($CácNgôiSaoCácHànhTinh) {
            ProductVariant::create([
                'product_id' => $CácNgôiSaoCácHànhTinh->product_id,
                'variant_name' => 'Bản tiêu chuẩn',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $CácNgôiSaoCácHànhTinh->product_id,
                'variant_name' => 'Bản đầy đủ',
                'additional_price' => 5900,
                'stock_quantity' => 12,
            ]);
        }

        // Hoàng Tử Bé
        $HoàngTửBé = Product::where('name', 'Hoàng Tử Bé')->first();
        if ($HoàngTửBé) {
            ProductVariant::create([
                'product_id' => $HoàngTửBé->product_id,
                'variant_name' => 'Bản tiêu chuẩn',
                'additional_price' => 0,
                'stock_quantity' => 0,
            ]);
            ProductVariant::create([
                'product_id' => $HoàngTửBé->product_id,
                'variant_name' => 'Bản đầy đủ',
                'additional_price' => 5900,
                'stock_quantity' => 12,
            ]);
        }

        // Kỉ Niệm 70 Năm Chiến Thắng Điện Biên Phủ
        $KỉNiệm70NămChiếnThắngĐiệnBiênPhủ = Product::where('name', 'Kỉ Niệm 70 Năm Chiến Thắng Điện Biên Phủ')->first();
        if ($KỉNiệm70NămChiếnThắngĐiệnBiênPhủ) {
            ProductVariant::create([
                'product_id' => $KỉNiệm70NămChiếnThắngĐiệnBiênPhủ->product_id,
                'variant_name' => 'Bản tiêu chuẩn',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $KỉNiệm70NămChiếnThắngĐiệnBiênPhủ->product_id,
                'variant_name' => 'Bản đầy đủ',
                'additional_price' => 7900,
                'stock_quantity' => 12,
            ]);
        }

        // Mưa Đỏ
       $MưaĐỏ = Product::where('name', 'Mưa Đỏ')->first();
        if ($MưaĐỏ) {
            ProductVariant::create([
                'product_id' => $MưaĐỏ->product_id,
                'variant_name' => 'Bản tiêu chuẩn',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $MưaĐỏ->product_id,
                'variant_name' => 'Bản đầy đủ',
                'additional_price' => 9000,
                'stock_quantity' => 12,
            ]);
        }

        // Nếu Biết Trăm Năm Là Hữu Hạn
        $NếuBiếtTrămNămLàHữuHạn = Product::where('name', 'Nếu Biết Trăm Năm Là Hữu Hạn')->first();
        if ($NếuBiếtTrămNămLàHữuHạn) {
            ProductVariant::create([
                'product_id' => $NếuBiếtTrămNămLàHữuHạn->product_id,
                'variant_name' => 'Bản tiêu chuẩn',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $NếuBiếtTrămNămLàHữuHạn->product_id,
                'variant_name' => 'Bản đầy đủ',
                'additional_price' => 4900,
                'stock_quantity' => 12,
            ]);
        }

        // Nhà Gỉa Kim
        $NhàGỉaKim = Product::where('name', 'Nhà Gỉa Kim')->first();
        if ($NhàGỉaKim) {
            ProductVariant::create([
                'product_id' => $NhàGỉaKim->product_id,
                'variant_name' => 'Bản rút gọn',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $NhàGỉaKim->product_id,
                'variant_name' => 'Bản tiêu chuẩn',
                'additional_price' => 0,
                'stock_quantity' => 12,
            ]);
            ProductVariant::create([
                'product_id' => $NhàGỉaKim->product_id,
                'variant_name' => 'Bản đầy đủ',
                'additional_price' => 7900,
                'stock_quantity' => 8,
            ]);
        }

        // Ngữ Văn 12
        $NgữVăn12 = Product::where('name', 'Ngữ Văn 12')->first();
        if ($NgữVăn12) {
            ProductVariant::create([
                'product_id' => $NgữVăn12->product_id,
                'variant_name' => 'Ngữ Văn 12 - Tập 1',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $NgữVăn12->product_id,
                'variant_name' => 'Ngữ Văn 12 - Tập 2',
                'additional_price' => 0,
                'stock_quantity' => 12,
            ]);
            ProductVariant::create([
                'product_id' => $NgữVăn12->product_id,
                'variant_name' => 'BT Ngữ Văn',
                'additional_price' => 4900,
                'stock_quantity' => 8,
            ]);
        }

        // Nhật Ký Của Chú Bé Nhút Nhát
        $NhậtKýCủaChúBéNhútNhát = Product::where('name', 'Nhật Ký Của Chú Bé Nhút Nhát')->first();
        if ($NhậtKýCủaChúBéNhútNhát) {
            ProductVariant::create([
                'product_id' => $NhậtKýCủaChúBéNhútNhát->product_id,
                'variant_name' => 'Bản tiêu chuẩn',
                'additional_price' => 0,
                'stock_quantity' => 0,
            ]);
            ProductVariant::create([
                'product_id' => $NhậtKýCủaChúBéNhútNhát->product_id,
                'variant_name' => 'Bản đầy đủ',
                'additional_price' => 3600,
                'stock_quantity' => 16,
            ]);
        }

        // Nhật Ký Trong Tù
        $NhậtKýTrongTù = Product::where('name', 'Nhật Ký Trong Tù')->first();
        if ($NhậtKýTrongTù) {
            ProductVariant::create([
                'product_id' => $NhậtKýTrongTù->product_id,
                'variant_name' => 'Bản rút gọn',
                'additional_price' => 0,
                'stock_quantity' => 15,
            ]);
            ProductVariant::create([
                'product_id' => $NhậtKýTrongTù->product_id,
                'variant_name' => 'Bản tiêu chuẩn',
                'additional_price' => 0,
                'stock_quantity' => 10,
            ]);
            ProductVariant::create([
                'product_id' => $NhậtKýTrongTù->product_id,
                'variant_name' => 'Bản đầy đủ',
                'additional_price' => 4900,
                'stock_quantity' => 8,
            ]);
        }

        $this->command->info('Đã tạo xong các biến thể sản phẩm!');
    }
}


/*
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductVariant;

class ProductVariantSeeder extends Seeder
{
    public function run(): void
    {
        $file = database_path('seeders/data/product_variants.json');

        if (!file_exists($file)) {
            $this->command->error('❌ Không tìm thấy file product_variants.json');
            return;
        }

        $data = json_decode(file_get_contents($file), true);

        foreach ($data as $variant) {
            unset($variant['variant_id']); // hoặc 'id' nếu bạn dùng id mặc định
            ProductVariant::create($variant);
        }

        $this->command->info('✅ Đã import biến thể sản phẩm từ JSON!');
    }
}
    */