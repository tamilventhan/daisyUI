<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vendor>
 */
class VendorFactory extends Factory
{
    protected $model = Vendor::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'email' => $this->faker->unique()->safeEmail,
            'companyName' => $this->faker->company,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'pincode' => $this->faker->postcode,
            'firmType' => $this->faker->randomElement(['Sole Proprietorship', 'Partnership', 'Limited Liability Company', 'Corporation']),
            'businessType' => $this->faker->randomElement(['Manufacturing', 'Retail', 'Wholesale', 'Service Provider']),
            'contactPerson' => $this->faker->name,
            'mobileNumber' => $this->faker->phoneNumber,
            'landlineNumber' => $this->faker->phoneNumber,
            'contactEmail' => $this->faker->email,
            'unitServing' => $this->faker->sentence,
            'gstRegistered' => $this->faker->boolean,
            'gstNumber' => $this->faker->unique()->randomNumber(9),
            'gstPayerStatus' => $this->faker->randomElement(['Regular', 'Composition', 'Consumer', 'Unregistered']),
            'panNumber' => $this->faker->unique()->randomNumber(9),
            'msmeRegistered' => $this->faker->boolean,
            'drugLicenseNumber' => $this->faker->sentence,
            'bankName' => $this->faker->company,
            'branch' => $this->faker->companySuffix,
            'cityTown' => $this->faker->city,
            'accountHolderName' => $this->faker->name,
            'accountNumber' => $this->faker->bankAccountNumber,
            'accountType' => $this->faker->randomElement(['Savings', 'Current']),
            'ifscCode' => $this->faker->swiftBicNumber,
            'vendorCategory' => $this->faker->randomElement(['Raw Material', 'Services', 'Equipment']),
            'productsServices' => $this->faker->paragraph,
            'documentListing' => $this->faker->paragraph,
            'remarks' => $this->faker->paragraph,
            'declaration' => $this->faker->boolean,
            'supplierType' => $this->faker->randomElement(['Manufacturer', 'Distributor', 'Supplier']),
            'productServiceType' => $this->faker->randomElement(['Product', 'Service']),
            'vendorType' => $this->faker->randomElement(['Regular', 'Premium', 'Gold', 'Silver']),
            'requestingDepartment' => $this->faker->randomElement(['Procurement', 'IT', 'Finance']),
            'requestedName' => $this->faker->name,
            'employeeId' => $this->faker->unique()->randomNumber(6),
            'meta' => [],
            'created_by' => User::factory()->create()->id,
            'updated_by' => User::factory()->create()->id,
            'deleted_by' => null,
        ];
    }
}
