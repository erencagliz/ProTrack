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
        Schema::create('calendars', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['event', 'interview', 'meeting', 'working_day', 'other']);
            $table->text('users'); // {"users":{"from":"1,2,3,4,5","to":"all veya 1,2,3,4,5"}}
            $table->text('title')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->text('location')->nullable()->default(null);
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_time')->nullable()->default(null);
            $table->time('end_time')->nullable()->default(null);
            $table->text('color')->nullable()->default(null);
            $table->text('text_color')->nullable()->default(null);
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
        Schema::dropIfExists('calendars');
    }
};
