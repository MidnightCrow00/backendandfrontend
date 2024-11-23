<?php

use App\Models\Virag;
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
        Schema::create('viragok', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->text('leiras');
            $table->integer('ar');
            $table->smallInteger('db')->default(1);
            $table->timestamps();
        });

        Virag::create([
            'nev'=>'Liliom',
            'leiras'=>'Évelő, hagymás növény a hagymája pikkelyes. A viráglepel hat sziromból áll. A lapos mag háromélű toktermésben fejlődik, és csak rövid ideig csíraképes.',
            'ar'=>'2000',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viragok');
    }
};
