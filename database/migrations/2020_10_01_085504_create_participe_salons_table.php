<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipeSalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participe_salons', function (Blueprint $table) {
            $table->integer("user_id");
            $table->integer("salon_id");
            $table->boolean("moderateur");
            $table->integer("statut");
            $table->timestamps();
            $table->primary(["user_id", "salon_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participe_salons');
    }
}
