<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class MainTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->index()->unsigned();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments('id')->index()->unsigned();
            $table->string('nombre');
            $table->string('raza');
            $table->integer('edad');
            $table->timestamps();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
        // insert admin
        DB::table('users')->insert(
            array(
                'email' => 'admin',
                'name' => 'admin',
                'password' => '$2y$10$TsngRwCmQltbI9cuHpLtMu7LLRm8yPntRhh4doTNbv8jJ4aWKnhwi'
            )
        );
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('mascotas');
        Schema::dropIfExists('password_resets');
    }
}