<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('souvenirs', function($table){
            // $table->dropForeignIfExist(['id_kategori']);
            $table->foreign('id_kategori')->references('id')->on('kategoris');
        });
        Schema::table('users', function($table){
            // $table->dropForeignIfExist(['id_undangan']);
            // $table->dropForeignIfExist(['id_souvenir']);

            $table->foreign('id_undangan')->references('id')->on('undangans');
            $table->foreign('id_souvenir')->references('id')->on('souvenirs');
        });
        Schema::table('undangans', function($table){
            // $table->dropForeignIfExist(['id_desain']);

            $table->foreign('id_desain')->references('id')->on('undangan_details');
        });    
        Schema::table('undangan_details', function($table){
            // $table->dropForeignIfExist(['id_desain']);

            $table->foreign('id_kertas')->references('id')->on('kertas_desains');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $foreignKeys = $this->listTableForeignKeys('souvenirs');
        // print_r($foreignKeys);
        if(in_array('id_kategori', $foreignKeys)) $table->dropForeign('id_kategori');
        // Schema::dropForeign(['client_id']);
        // Schema::dropForeign(['id_undangan,id_souvenir']);
        // Schema::dropForeign(['id_desain']);
        // Schema::drop('users');
        // Schema::drop('undangans');


        // Schema::table('souvenirs', function (Blueprint $table) {
        //     //
        //     // $table->dropForeign(['client_id']);
        //     $table->dropForeign(['id_kategori']);
        // });
        // Schema::table('users', function (Blueprint $table) {
        //     //
        //     $table->dropForeign(['id_undangan','id_souvenir']);
        //     // $table->dropForeign();
        // });
        // Schema::table('undangans', function (Blueprint $table) {
        //     //
        //     $table->dropForeign(['id_desain']);
        // });
    }
}
