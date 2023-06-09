<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\HomeInterface;
use App\Http\Traits\AllAdsTrait;
use App\Http\Traits\ShowDepartmentTrait;
use App\Http\Traits\EndUser\ProfileTrait;
use App\Models\Ads;
use App\Models\Category;
use App\Models\Department;
use App\Models\Profile;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class HomeRepository implements HomeInterface
{

    use AllAdsTrait , ShowDepartmentTrait , ProfileTrait;

    private $department;
    private $ad;
    private $category;
    private $profile;

    public function __construct(Department $department, Ads $ad, Category $category , Profile $profile)
    {
        $this->department = $department;
        $this->ad = $ad;
        $this->category = $category;
        $this->profile = $profile;
    }

    public function index():View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $ads = $this->getAllAds(8);
        $our_Recommend_ads = $this->getAllAds(4);
        $departments = $this->topCategoriesByAds();
        $our_city= $this->getTopCity();
        $popularTrendingAds = $this->getPopularTrendingAds(8);
        $profile = $this->getCurrentProfile();
//        dd($profile);
        return view('index', compact('our_Recommend_ads', 'ads', 'departments','popularTrendingAds','our_city', 'profile'));

    }

    private function topCategoriesByAds()
    {
        $departments = $this->department->with('categories')->get();
        $departments = $this->mappingDepartmentAndCategoryToAddAddsCount($departments);
        return $departments;
    }
    private function mappingDepartmentAndCategoryToAddAddsCount($departments)
    {
        $departments->map(function ($department) {
            // get all ads for each category that has relation with ads
            $department->categories->map(function ($category) {
                // get all ads count for each category
                $category->ads_count = $category->ads->count();
            });
            // get all ads count for each department
            $department->ads_count = $department->categories->sum('ads_count');
        });
        return $departments;
    }
}
