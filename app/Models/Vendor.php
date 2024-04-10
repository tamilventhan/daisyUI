<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'companyName',
        'address',
        'city',
        'state',
        'country',
        'pincode',
        'firmType',
        'businessType',
        'contactPerson',
        'mobileNumber',
        'landlineNumber',
        'contactEmail',
        'unitServing',
        'gstRegistered',
        'gstNumber',
        'gstPayerStatus',
        'panNumber',
        'msmeRegistered',
        'drugLicenseNumber',
        'bankName',
        'branch',
        'cityTown',
        'accountHolderName',
        'accountNumber',
        'accountType',
        'ifscCode',
        'vendorCategory',
        'productsServices',
        'documentListing',
        'remarks',
        'declaration',
        'supplierType',
        'productServiceType',
        'vendorType',
        'requestingDepartment',
        'requestedName',
        'employeeId',
        'meta',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

        /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'meta' => 'array',
    ];

    /**
     * Get the user that created the vendor.
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Get the user that updated the vendor.
     */
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * Get the user that deleted the vendor.
     */
    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
}