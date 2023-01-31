<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offdays', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->enum('type', ['date', 'datetime']);
            $table->enum('date_type', ['yearly', 'marriage', 'death', 'free', 'birth'])->nullable();
            $table->date('date');
            $table->text('movements')->nullable();
            $table->integer('day')->nullable();
            $table->time('time')->nullable();
            $table->enum('status', ['active', 'pending', 'passive'])->default('pending');
            $table->text('custom')->nullable()->default(null);
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->nullable()->default(null)->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offdays');
    }
};
