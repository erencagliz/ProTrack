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
        Schema::create('targets', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['team', 'project', 'user']);
            $table->integer('office_id')->nullable();
            $table->integer('project_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->enum('target_type', ['point', 'quantity']);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('target');
            $table->enum('target_status', ['completed', 'not_completed', 'continues', 'not_started']);
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
        Schema::dropIfExists('targets');
    }
};
