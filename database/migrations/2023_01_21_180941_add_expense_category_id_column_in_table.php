<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExpenseCategoryIdColumnInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->integer('expensecategory_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->dropColumn('expensecategory_id');
        });
    }
}
