<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perm0 = new Permission();
        $perm0->name = 'super_admin'; // for super admin
        $perm0->display_name = 'Super Admin';
        $perm0->description = 'all kind of access for superadmin';
        $perm0->save();

        $perm1 = new Permission();
        $perm1->name = 'manage_admin'; // for staff
        $perm1->display_name = 'Manage Admin';
        $perm1->description = 'Can create, edit or delete an admin';
        $perm1->save();

        $perm2 = new Permission();
        $perm2->name = 'manage_staff'; // for staff
        $perm2->display_name = 'Manage Staff';
        $perm2->description = 'Can create, edit or delete an staff';
        $perm2->save();

        $perm3 = new Permission();
        $perm3->name = 'manage_settings'; // for admin
        $perm3->display_name = 'Manage';
        $perm3->description = 'Can manage settings';
        $perm3->save();

        $perm4 = new Permission();
        $perm4->name = 'manage_account';
        $perm4->display_name = 'Manage Account';
        $perm4->description = 'Can manage account';
        $perm4->save();

    }
}
