<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('student', function (Blueprint $table) {

            $table->unsignedBigInteger('class_id')->required()->after('nis');

                     $table->foreign('class_id')->references('id')->on('class')->ondelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student', function (Blueprint $table) {
            $table->dropForeign(['class_id']);

            $table->dropColumn('class_id');
        });
    }
};

// {
//     Schema::table('student', function (Blueprint $table) {
//         $table->unsignedBigInteger('class_id')->required()->after('nis');

//         $table->foreign('class_id')->references('id')->on('class')->ondelete('cascade');
//     });
// }

// /**
//  * Reverse the migrations.
//  */
// public function down(): void
// {
//     Schema::table('student', function (Blueprint $table) {
//         $table->dropForeign(['class_id']);

//         $table->dropColumn('class_id');
//     });
