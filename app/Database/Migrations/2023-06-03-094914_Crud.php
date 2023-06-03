<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Crud extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type" => "INT",
                "constraint" => 5,
                "auto_increment" => true
            ],
            "nama_tugas" => [
                "type" => "vARCHAR",
                "constraint" => 255,
            ],
            "deskripsi_tugas" => [
                "type" => "VARCHAR",
                "constraint" => 255
            ]
        ];
        $this->forge->addField($fields);
        $this->forge->addKey("id", true);
        $this->forge->createTable("tugas");
    }

    public function down()
    {
        $this->forge->dropTable("tugas", true);
    }
}
