<?php
use App\Models\User;
use App\Models\Brand;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('slug');
            $table->boolean('isNew');
            $table->string('position');
            $table->boolean('isFeatured');
            $table->double('unit_price');
            $table->bigInteger('stock_quantity');
            $table->boolean('nature');

            $table->foreignIdFor(User::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();

            $table->foreignIdFor(Brand::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
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
        Schema::dropIfExists('products');
    }
};
