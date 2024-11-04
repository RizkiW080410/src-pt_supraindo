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
                'title' => 'about_create',
            ],
            [
                'id'    => 29,
                'title' => 'about_edit',
            ],
            [
                'id'    => 30,
                'title' => 'about_show',
            ],
            [
                'id'    => 31,
                'title' => 'about_delete',
            ],
            [
                'id'    => 32,
                'title' => 'about_access',
            ],
            [
                'id'    => 33,
                'title' => 'gallery_create',
            ],
            [
                'id'    => 34,
                'title' => 'gallery_edit',
            ],
            [
                'id'    => 35,
                'title' => 'gallery_show',
            ],
            [
                'id'    => 36,
                'title' => 'gallery_delete',
            ],
            [
                'id'    => 37,
                'title' => 'gallery_access',
            ],
            [
                'id'    => 38,
                'title' => 'productmanaj_access',
            ],
            [
                'id'    => 39,
                'title' => 'product_create',
            ],
            [
                'id'    => 40,
                'title' => 'product_edit',
            ],
            [
                'id'    => 41,
                'title' => 'product_show',
            ],
            [
                'id'    => 42,
                'title' => 'product_delete',
            ],
            [
                'id'    => 43,
                'title' => 'product_access',
            ],
            [
                'id'    => 44,
                'title' => 'homeinterface_access',
            ],
            [
                'id'    => 45,
                'title' => 'herosection_create',
            ],
            [
                'id'    => 46,
                'title' => 'herosection_edit',
            ],
            [
                'id'    => 47,
                'title' => 'herosection_show',
            ],
            [
                'id'    => 48,
                'title' => 'herosection_delete',
            ],
            [
                'id'    => 49,
                'title' => 'herosection_access',
            ],
            [
                'id'    => 50,
                'title' => 'capabilitie_create',
            ],
            [
                'id'    => 51,
                'title' => 'capabilitie_edit',
            ],
            [
                'id'    => 52,
                'title' => 'capabilitie_show',
            ],
            [
                'id'    => 53,
                'title' => 'capabilitie_delete',
            ],
            [
                'id'    => 54,
                'title' => 'capabilitie_access',
            ],
            [
                'id'    => 55,
                'title' => 'otomotive_create',
            ],
            [
                'id'    => 56,
                'title' => 'otomotive_edit',
            ],
            [
                'id'    => 57,
                'title' => 'otomotive_show',
            ],
            [
                'id'    => 58,
                'title' => 'otomotive_delete',
            ],
            [
                'id'    => 59,
                'title' => 'otomotive_access',
            ],
            [
                'id'    => 60,
                'title' => 'trading_create',
            ],
            [
                'id'    => 61,
                'title' => 'trading_edit',
            ],
            [
                'id'    => 62,
                'title' => 'trading_show',
            ],
            [
                'id'    => 63,
                'title' => 'trading_delete',
            ],
            [
                'id'    => 64,
                'title' => 'trading_access',
            ],
            [
                'id'    => 65,
                'title' => 'contactperson_create',
            ],
            [
                'id'    => 66,
                'title' => 'contactperson_edit',
            ],
            [
                'id'    => 67,
                'title' => 'contactperson_show',
            ],
            [
                'id'    => 68,
                'title' => 'contactperson_delete',
            ],
            [
                'id'    => 69,
                'title' => 'contactperson_access',
            ],
            [
                'id'    => 70,
                'title' => 'aboutinterface_access',
            ],
            [
                'id'    => 71,
                'title' => 'vision_create',
            ],
            [
                'id'    => 72,
                'title' => 'vision_edit',
            ],
            [
                'id'    => 73,
                'title' => 'vision_show',
            ],
            [
                'id'    => 74,
                'title' => 'vision_delete',
            ],
            [
                'id'    => 75,
                'title' => 'vision_access',
            ],
            [
                'id'    => 76,
                'title' => 'mission_create',
            ],
            [
                'id'    => 77,
                'title' => 'mission_edit',
            ],
            [
                'id'    => 78,
                'title' => 'mission_show',
            ],
            [
                'id'    => 79,
                'title' => 'mission_delete',
            ],
            [
                'id'    => 80,
                'title' => 'mission_access',
            ],
            [
                'id'    => 81,
                'title' => 'legalitas_create',
            ],
            [
                'id'    => 82,
                'title' => 'legalitas_edit',
            ],
            [
                'id'    => 83,
                'title' => 'legalitas_show',
            ],
            [
                'id'    => 84,
                'title' => 'legalitas_delete',
            ],
            [
                'id'    => 85,
                'title' => 'legalitas_access',
            ],
            [
                'id'    => 86,
                'title' => 'testimoni_create',
            ],
            [
                'id'    => 87,
                'title' => 'testimoni_edit',
            ],
            [
                'id'    => 88,
                'title' => 'testimoni_show',
            ],
            [
                'id'    => 89,
                'title' => 'testimoni_delete',
            ],
            [
                'id'    => 90,
                'title' => 'testimoni_access',
            ],
            [
                'id'    => 91,
                'title' => 'sertifikat_create',
            ],
            [
                'id'    => 92,
                'title' => 'sertifikat_edit',
            ],
            [
                'id'    => 93,
                'title' => 'sertifikat_show',
            ],
            [
                'id'    => 94,
                'title' => 'sertifikat_delete',
            ],
            [
                'id'    => 95,
                'title' => 'sertifikat_access',
            ],
            [
                'id'    => 96,
                'title' => 'achievement_access',
            ],
            [
                'id'    => 97,
                'title' => 'contactuse_create',
            ],
            [
                'id'    => 98,
                'title' => 'contactuse_edit',
            ],
            [
                'id'    => 99,
                'title' => 'contactuse_show',
            ],
            [
                'id'    => 100,
                'title' => 'contactuse_delete',
            ],
            [
                'id'    => 101,
                'title' => 'contactuse_access',
            ],
            [
                'id'    => 102,
                'title' => 'manajclient_access',
            ],
            [
                'id'    => 103,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
