<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('post_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')
                ->constrained('posts')
                ->cascadeOnDelete();
            $table->string('locale')->index();
            $table->string('title');
            $table->string('content');
            $table->string('smallDesc');
            $table->timestamps();
            $table->softDeletes();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('post_translations');
    }
};
