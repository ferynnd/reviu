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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->text('caption')->nullable();
            $table->tinyinteger('content_type')->default(0); // 0: feed, 1: carausel, 2: story, 3: reel
            $table->tinyinteger('status')->default(0); // 0: draft, 1: published, 2: revision
            $table->json('hashtag')->nullable();
            $table->dateTime('published_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Jika hanya ingin hapus kolom deleted_at (soft delete)
        if (Schema::hasTable('posts')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropSoftDeletes(); // hapus kolom deleted_at
            });
        }

        // Lalu hapus tabelnya
        Schema::dropIfExists('posts');
    }
};
