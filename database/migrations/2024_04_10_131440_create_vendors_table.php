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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->nullable();
            $table->string('companyName')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('pincode')->nullable();
            $table->string('firmType')->nullable();
            $table->string('businessType')->nullable();
            $table->string('contactPerson')->nullable();
            $table->string('mobileNumber')->nullable();
            $table->string('landlineNumber')->nullable();
            $table->string('contactEmail')->nullable();
            $table->string('unitServing')->nullable();

            // Statutory Information
            $table->boolean('gstRegistered')->nullable();
            $table->string('gstNumber')->unique()->nullable();
            $table->string('gstPayerStatus')->nullable();
            $table->string('panNumber')->unique()->nullable();
            $table->boolean('msmeRegistered')->nullable();
            $table->text('drugLicenseNumber')->nullable();

            // Bank Information
            $table->string('bankName')->nullable();
            $table->string('branch')->nullable();
            $table->string('cityTown')->nullable();
            $table->string('accountHolderName')->nullable();
            $table->string('accountNumber')->nullable();
            $table->string('accountType')->nullable();
            $table->string('ifscCode')->nullable();

            // Business Information
            $table->string('vendorCategory')->nullable();
            $table->text('productsServices')->nullable();
            $table->text('documentListing')->nullable();

            // Confirmation
            $table->text('remarks')->nullable();
            $table->boolean('declaration')->nullable();

            // Manual Vendors Fields
            $table->string('supplierType')->nullable();
            $table->string('productServiceType')->nullable();
            $table->string('vendorType')->nullable();
            $table->string('requestingDepartment')->nullable();
            $table->string('requestedName')->nullable();
            $table->string('employeeId')->nullable();
            $table->json('meta')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
