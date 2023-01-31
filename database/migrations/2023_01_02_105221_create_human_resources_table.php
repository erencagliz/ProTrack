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
        Schema::create('human_resources', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->enum('source', ['facebook', 'instagram', 'whatsapp', 'career', 'sms', 'referer', 'billboard', 'phone', 'google_form', 'google_ads', 'facebook_evomiles_potential', 'facebook_triooz_potential', 'facebook_evomiles_messenger', 'facebook_triooz_messenger']);
            $table->date('source_date');
            $table->enum('language_level', ['no', 'a1-a2', 'b1-b2', 'c1-c2', 'native']);
            $table->enum('position', ['positive', 'negative', 'neutral']);
            $table->enum('position_condition', ['work_hours','sgk','salary','home_office','distance_and_service','out_of_city','language_insufficient','doesent_speak_german','black_list','didnt_attend','just_recieved_information','not_thinking_of_sales'])->nullable();
            $table->integer('added_by');
            $table->integer('owner_id')->nullable();
            $table->json('notes')->nullable();
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
        Schema::dropIfExists('human_resources');
    }
};
