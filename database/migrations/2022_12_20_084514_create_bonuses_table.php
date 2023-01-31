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
        Schema::create('bonuses', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->enum('type', ['daily', 'monthly', 'weekly']);
            $table->integer('min_point');
            $table->integer('max_point');
            $table->integer('fix_tl');
            $table->integer('min_tl');
            $table->integer('bonus_tl');
            $table->integer('multiplier');
            $table->date('start_date');
            $table->date('end_date')->nullable()->default(null);
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
        Schema::dropIfExists('bonuses');
    }
};
