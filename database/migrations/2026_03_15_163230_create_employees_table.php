<?php

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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            
            // Foreign Key to users table
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Personal Information
            $table->string('first_name');
            $table->string('last_name');
            $table->string('full_name')->virtualAs("CONCAT(first_name, ' ', last_name)");
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('national_id')->unique()->nullable();
            $table->string('passport_number')->nullable();
            
            // Contact Information
            $table->string('personal_email')->nullable();
            $table->string('personal_phone')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('emergency_contact_relation')->nullable();
            
            // Address
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('country')->default('Bangladesh');
            
            // Employment Details
            $table->string('employee_code')->unique();
            $table->string('department');
            $table->string('designation');
            $table->string('reporting_to')->nullable();
            $table->date('joining_date');
            $table->date('confirmation_date')->nullable();
            $table->date('termination_date')->nullable();
            $table->enum('employment_type', ['full_time', 'part_time', 'contract', 'intern', 'probation'])->default('full_time');
            $table->enum('employment_status', ['active', 'on_leave', 'suspended', 'terminated', 'resigned'])->default('active');
            
            // Compensation (encrypted at application level)
            $table->decimal('basic_salary', 10, 2)->nullable();
            $table->string('salary_currency')->default('BDT');
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_branch')->nullable();
            
            // Documents
            $table->string('profile_photo')->nullable();
            $table->string('signature')->nullable();
            $table->string('cv_file')->nullable();
            $table->string('nid_file')->nullable();
            $table->string('photo_id')->nullable();
            
            // System Fields
            $table->boolean('is_verified')->default(false);
            $table->boolean('has_access')->default(true);
            $table->text('notes')->nullable();
            $table->json('custom_fields')->nullable();
            
            // Timestamps & Soft Deletes
            $table->timestamps();
            $table->softDeletes();
            
            // Indexes for performance
            $table->index('employee_code');
            $table->index('department');
            $table->index('designation');
            $table->index('employment_status');
            $table->index('joining_date');
            $table->index(['department', 'employment_status']);
            
            // Full-text search support
            $table->fullText(['first_name', 'last_name', 'employee_code', 'department']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
