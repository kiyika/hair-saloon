<?php

namespace App\Http\Controllers\Publics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Lang;
use App\Models\Publics\ProductsModel;

class SitemapController extends Controller
{

    private $mail;

    public function index()
    {
        $productsModel = new ProductsModel();
        $products = $productsModel->getAllProducts();
        return view('publics.sitemap', [
            'products' => $products,
            'cartProducts' => $this->products,
            'head_title' => Lang::get('seo.title_contacts'),
            'head_description' => Lang::get('soe.descr_contacts')
        ]);
    }
}
