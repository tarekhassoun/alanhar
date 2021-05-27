<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\CategoryContract;

class CategoryController extends Controller
{
    protected $category_repository;

    public function __construct(CategoryContract $category_repository)
    {
        $this->category_repository = $category_repository;
    }

    public function show($slug)
    {
        $category = $this->category_repository->findBySlug($slug);
        return view('site.pages.category', compact('category'));
    }
}
