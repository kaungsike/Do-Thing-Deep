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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string("name")->default("apple");
            $table->text("description")->comment("about items");
            // $table->integer("age")->comment("about item release");
            // $table->bigInteger("views")->nullable();
            // $table->float("rating");
            $table->unsignedBigInteger("quantity");
            $table->integer("price")->default(100);
            // $table->date("published_at");
            // $table->boolean("is_active")->default(true);
            // $table->enum("gender",["male","female"]);
            // $table->json("options");
            // $table->binary("data");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
