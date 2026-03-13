<?php
// database/migrations/2024_01_01_000001_create_users_table.php

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            
            // Authentication
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            
            // Employee Information
            $table->string('employee_id')->unique()->nullable();
            $table->string('department')->nullable();
            $table->string('position')->nullable();
            $table->string('phone')->nullable();
            $table->string('avatar')->nullable();
            
            // Role & Status
            $table->enum('role', ['admin', 'manager', 'employee'])->default('employee');
            $table->enum('status', ['active', 'inactive', 'suspended'])->default('active');
            
            // Employment Details
            $table->date('joining_date')->nullable();
            $table->date('termination_date')->nullable();
            
            // Activity Tracking
            $table->timestamp('last_login')->nullable();
            $table->timestamp('password_changed_at')->nullable();
            
            // Preferences (JSON)
            $table->json('preferences')->nullable();
            
            // Soft Deletes
            $table->softDeletes();
            
            // Timestamps
            $table->timestamps();
            
            // Indexes for performance
            $table->index('email');
            $table->index('employee_id');
            $table->index('role');
            $table->index('status');
            $table->index('department');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};