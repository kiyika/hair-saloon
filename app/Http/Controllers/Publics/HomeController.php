<?php

namespace App\Http\Controllers\Publics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publics\ProductsModel;
use Lang;

class HomeController extends Controller
{

    public function index()
    {
        $productsModel = new ProductsModel();
        $mostSelledProducts = $productsModel->getMostSelledProducts();
        return view('publics.home', [
            'mostSelledProducts' => $mostSelledProducts,
            'cartProducts' => $this->products,
            'head_title' => Lang::get('seo.title_home'),
            'head_description' => Lang::get('seo.descr_home')
        ]);
    }

}
