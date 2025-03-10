<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_admins_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();               // Auto-incrementing ID
            $table->string('user_id');   // Admin user identifier
            $table->string('email')->unique();   // Email address
            $table->string('password');  // Hashed password
            $table->timestamp('login_time')->nullable();  // Timestamp for last login
            $table->timestamps();       // Created at & Updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
