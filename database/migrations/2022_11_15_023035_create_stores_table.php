<?php

use App\Models\Address;
use App\Models\Image;
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
        Schema::disableForeignKeyConstraints();
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->foreignIdFor(Image::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();

            $table->foreignIdFor(Address::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->boolean('isAdmin');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('stores');
    }
};
