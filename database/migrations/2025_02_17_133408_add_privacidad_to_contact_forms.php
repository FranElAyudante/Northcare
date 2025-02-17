<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            $table->boolean('privacidad')->default(false)->after('localidad');
        });
    }

    public function down()
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            $table->dropColumn('privacidad');
        });
    }
};

