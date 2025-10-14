<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

 public function run(): void
    {
        // Tạo tài khoản admin
        User::create([
            'name' => 'Admin HT Store',
            'email' => 'admin@htstore.vn',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'phone' => '0901234567',
            'address' => '01 Đường Nguyễn Trãi, quận Hà Đông, TP.Hà Nội',
        ]);

        // Tạo tài khoản khách hàng mẫu
        User::create([
            'name' => 'Nguyễn Tuấn Thành',
            'email' => 'tuanthanh365bt@gmail.com',
            'password' => Hash::make('03062005'),
            'role' => 'customer',
            'phone' => '0365951188',
            'address' => 'TT.Bô Thời,xã Hồng Tiến, huyện Khoái Châu, tỉnh Hưng Yên',
        ]);

        User::create([
            'name' => 'Nguyễn Huy Hoàng',
            'email' => 'hoang20052810@gmail.com',
            'password' => Hash::make('28102005'),
            'role' => 'customer',
            'phone' => '0838573798',
            'address' => '2/141 đường Phan Đình Phùng,phường Trần Hưng Đạo, TP.Nam Định',
        ]);

        // Tạo thêm 15 khách hàng ngẫu nhiên
        $vietnameseNames = [
            'Đặng Đắc Tú',
            'Bùi Thanh Tuân',
            'Nguyễn Đăng Nhật',
            'Bùi Thu Hiền',
            'Nguyễn Thùy Nhung',
            'Nguyễn Thị Thùy Liên',
            'Đặng Thanh Uyên',
            'Lý Thị Nga',
            'Trịnh Văn Long',
            'Phan Thị Oanh',
            'Đinh Minh Phúc',
            'Tô Thị Quỳnh',
            'Lưu Văn Sơn',
            'Chu Thị Tâm',
            'Võ Minh Vũ'
        ];

        foreach ($vietnameseNames as $index => $name) {
            User::create([
                'name' => $name,
                'email' => 'user' . ($index + 4) . '@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'customer',
                'phone' => '09' . str_pad($index + 45678901, 8, '0', STR_PAD_LEFT),
                'address' => (100 + $index) . ' Đường ' . ['Hai Bà Trưng', 'Điện Biên Phủ', 'Cách Mạng Tháng 8', 'Nguyễn Thị Minh Khai'][rand(0, 3)] . ', Quận ' . rand(1, 12) . ', TP.HCM',
            ]);
        }

        $this->command->info('Đã tạo xong tài khoản người dùng!');
    }
}
