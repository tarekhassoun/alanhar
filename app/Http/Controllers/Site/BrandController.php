<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\BrandContract;

class BrandController extends Controller
{
    protected $brand_repository;

    public function __construct(BrandContract $brand_repository)
    {
        $this->brand_repository = $brand_repository;
    }

    public function show($slug)
    {
        $brand = $this->brand_repository->findBySlug($slug);
        return view('site.pages.brand', compact('brand'));
    }
}
