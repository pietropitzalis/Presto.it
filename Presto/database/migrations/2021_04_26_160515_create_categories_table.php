<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default(1);
            $table->timestamps();
        });

        $categories=['Auto', 'Informatica' ,'Elettrodomestici', 'Lavoro' , 'Immobili', 'Abbigliamento' , 'Strumenti musicali' , 'Libri', 'Fai da te', 'Cucina' ];
        foreach ($categories as $category) {
            $cat= new Category();
            $cat->name=$category;
            $cat->save();

        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
