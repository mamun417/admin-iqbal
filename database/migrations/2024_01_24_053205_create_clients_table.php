<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('district_id');
            $table->foreignId('agent_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->date('dob')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('nid_no')->nullable();
            $table->string('address')->nullable();
            $table->mediumText('note')->nullable();
            $table->longText('description')->nullable();
            $table->string('status')
                ->nullable()
                ->default('Processing')
                ->constraint(function($table) {
                    $table->checkConstraint('status IN (\'Processing\', \'Success\', \'Failed\')');
                });
            $table->integer('contract_price');
            $table->integer('paid')->nullable();
            $table->integer('due')->nullable();
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
}
