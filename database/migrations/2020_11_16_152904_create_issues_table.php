<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('legal_status', ['مدعي', 'مدعي عليه','مستأنف ','مستانف ضده'])->default('مدعي');
            $table->enum('paid_type', ['مبلغ مقطوع','بالساعه'])->default('بالساعه');
            $table->string('zone');
            $table->string('turnNo_at_court');
            $table->text('description');
            $table->string('file_no');
            // $table->unsignedBigInteger('court_id')->nullable();
            // $table->foreign('court_id')->references('id')->on('courts')->onDelete('set null')
            // ->onUpdate('cascade');
            $table->string('issueNo_at_court');
            $table->enum('issue_type', ['قضائية', 'جنائية','اموال عامة '])->default('جنائية');
            $table->string('issueNo_at_police');
            $table->string('issueNo_at_public');
            $table->string('hallNo_at_public');
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
        Schema::dropIfExists('issues');
    }
}
