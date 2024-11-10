<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Seller;
use App\Models\Ticket;
use App\Services\FrontService;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    protected $frontService;

    public function __construct(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }

    public function index() 
    {
        $data = $this->frontService->getFrontPageData();
        // dd($data);
        return view('front.index', $data);
    }
    public function details(Ticket $ticket) 
    {
        // dd($ticket);
        return view('front.details', compact('ticket'));
    }

    public function category(Category $category) 
    {
        // dd($category);
        return view('front.category', compact('category'));
    }
    
    public function explore(Seller $seller) 
    {
        // dd($category);
        return view('front.seller', compact('seller'));
    }
}
