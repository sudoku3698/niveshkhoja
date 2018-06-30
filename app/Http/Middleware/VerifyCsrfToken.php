<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
       '/bankdetails',
       'postbrokersubbroker',
       'postcfacategory',
       'postinsurance',
       '/postloan',
       '/postmutual_fund',
       '/postoffice',
       '/postinvestment_advisors',
       '/postresearch_analyst',
       '/updatebankdetails',
       '/updatebrokersubbroker',
       '/updatecfacategory',
       '/updatepostinsurance',
       '/updateLoan',
       '/updatepostmutual_fund',
       '/updatepostoffice',
       'updatepostresearch_analyst',
       'updatepostinvestment_advisors',
       'postlogin',
       '/searchkeyword',
       '/get_services',
       '/get_service_list',
       '/get_list_detail',
       '/searchServices',
       '/add_city_filter',
       '/add_cat_filter',
       '/add_listing',
       '/set_review_status'
    ];
}
