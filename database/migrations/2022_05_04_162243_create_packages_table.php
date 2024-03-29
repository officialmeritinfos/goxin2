<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('minAmount',100);
            $table->string('maxAmount',100)->nullable();
            $table->string('roi',50);
            $table->string('numberOfReturns',50);
            $table->string('returnType',100);
            $table->string('Duration',100);
            $table->integer('status')->default(2);
            $table->integer('isUnlimited')->default(2);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
