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
        Schema::create('arham', function (Blueprint $table) {
            $table->id("std_id");
            $table->string("name", 50);
            $table->string("email", 50);
            $table->enum("gender",["M","F", "O"])->nullable();
            $table->date("dob");
            $table->text("address");
            $table->boolean("status")->default(1);
            $table->integer("point")->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arham');
    }
};
