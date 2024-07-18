<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'frontend_access',
            ],
            [
                'id'    => 18,
                'title' => 'sosial_medium_create',
            ],
            [
                'id'    => 19,
                'title' => 'sosial_medium_edit',
            ],
            [
                'id'    => 20,
                'title' => 'sosial_medium_show',
            ],
            [
                'id'    => 21,
                'title' => 'sosial_medium_delete',
            ],
            [
                'id'    => 22,
                'title' => 'sosial_medium_access',
            ],
            [
                'id'    => 23,
                'title' => 'footer_create',
            ],
            [
                'id'    => 24,
                'title' => 'footer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'footer_show',
            ],
            [
                'id'    => 26,
                'title' => 'footer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'footer_access',
            ],
            [
                'id'    => 28,
                'title' => 'profile_create',
            ],
            [
                'id'    => 29,
                'title' => 'profile_edit',
            ],
            [
                'id'    => 30,
                'title' => 'profile_show',
            ],
            [
                'id'    => 31,
                'title' => 'profile_delete',
            ],
            [
                'id'    => 32,
                'title' => 'customer_create',
            ],
            [
                'id'    => 33,
                'title' => 'customer_edit',
            ],
            [
                'id'    => 34,
                'title' => 'customer_show',
            ],
            [
                'id'    => 35,
                'title' => 'customer_delete',
            ],
            [
                'id'    => 36,
                'title' => 'customer_access',
            ],
            [
                'id'    => 37,
                'title' => 'about_create',
            ],
            [
                'id'    => 38,
                'title' => 'about_edit',
            ],
            [
                'id'    => 39,
                'title' => 'about_show',
            ],
            [
                'id'    => 40,
                'title' => 'about_delete',
            ],
            [
                'id'    => 41,
                'title' => 'about_access',
            ],
            [
                'id'    => 42,
                'title' => 'gallery_create',
            ],
            [
                'id'    => 43,
                'title' => 'gallery_edit',
            ],
            [
                'id'    => 44,
                'title' => 'gallery_show',
            ],
            [
                'id'    => 45,
                'title' => 'gallery_delete',
            ],
            [
                'id'    => 46,
                'title' => 'gallery_access',
            ],
            [
                'id'    => 47,
                'title' => 'tim_create',
            ],
            [
                'id'    => 48,
                'title' => 'tim_edit',
            ],
            [
                'id'    => 49,
                'title' => 'tim_show',
            ],
            [
                'id'    => 50,
                'title' => 'tim_delete',
            ],
            [
                'id'    => 51,
                'title' => 'tim_access',
            ],
            [
                'id'    => 52,
                'title' => 'blog_create',
            ],
            [
                'id'    => 53,
                'title' => 'blog_edit',
            ],
            [
                'id'    => 54,
                'title' => 'blog_show',
            ],
            [
                'id'    => 55,
                'title' => 'blog_delete',
            ],
            [
                'id'    => 56,
                'title' => 'blog_access',
            ],
            [
                'id'    => 57,
                'title' => 'daftar_layanan_create',
            ],
            [
                'id'    => 58,
                'title' => 'daftar_layanan_edit',
            ],
            [
                'id'    => 59,
                'title' => 'daftar_layanan_show',
            ],
            [
                'id'    => 60,
                'title' => 'daftar_layanan_delete',
            ],
            [
                'id'    => 61,
                'title' => 'daftar_layanan_access',
            ],
            [
                'id'    => 62,
                'title' => 'fn_b_access',
            ],
            [
                'id'    => 63,
                'title' => 'table_create',
            ],
            [
                'id'    => 64,
                'title' => 'table_edit',
            ],
            [
                'id'    => 65,
                'title' => 'table_show',
            ],
            [
                'id'    => 67,
                'title' => 'table_delete',
            ],
            [
                'id'    => 68,
                'title' => 'table_access',
            ],
            [
                'id'    => 69,
                'title' => 'booking_create',
            ],
            [
                'id'    => 70,
                'title' => 'booking_edit',
            ],
            [
                'id'    => 72,
                'title' => 'booking_show',
            ],
            [
                'id'    => 73,
                'title' => 'booking_delete',
            ],
            [
                'id'    => 74,
                'title' => 'booking_access',
            ],
            [
                'id'    => 75,
                'title' => 'price_create',
            ],
            [
                'id'    => 76,
                'title' => 'price_edit',
            ],
            [
                'id'    => 77,
                'title' => 'price_show',
            ],
            [
                'id'    => 78,
                'title' => 'price_delete',
            ],
            [
                'id'    => 79,
                'title' => 'price_access',
            ],
            [
                'id'    => 80,
                'title' => 'product_create',
            ],
            [
                'id'    => 81,
                'title' => 'product_edit',
            ],
            [
                'id'    => 82,
                'title' => 'product_show',
            ],
            [
                'id'    => 83,
                'title' => 'product_delete',
            ],
            [
                'id'    => 84,
                'title' => 'product_access',
            ],
            [
                'id'    => 85,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 86,
                'title' => 'home_create',
            ],
            [
                'id'    => 87,
                'title' => 'home_edit',
            ],
            [
                'id'    => 88,
                'title' => 'home_show',
            ],
            [
                'id'    => 89,
                'title' => 'home_delete',
            ],
            [
                'id'    => 90,
                'title' => 'home_access',
            ],
            [
                'id'    => 91,
                'title' => 'service_create',
            ],
            [
                'id'    => 92,
                'title' => 'service_edit',
            ],
            [
                'id'    => 93,
                'title' => 'service_show',
            ],
            [
                'id'    => 94,
                'title' => 'service_delete',
            ],
            [
                'id'    => 95,
                'title' => 'service_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
