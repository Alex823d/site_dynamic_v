<?php
/**
 *  app/Http/Controllers/Admin/ProductController.php
 *
 * Date-Time: 10.06.21
 * Time: 15:05
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\FeatureRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class ProductController
 * @package App\Http\Controllers\Admin
 */
class ProductController extends Controller
{

    /**
     * @var \App\Repositories\ProductRepositoryInterface
     */
    private $productRepository;
    /**
     * @var \App\Repositories\CategoryRepositoryInterface
     */
    private $categoryRepository;
    /**
     * @var \App\Repositories\FeatureRepositoryInterface
     */
    private $featureRepository;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        CategoryRepositoryInterface $categoryRepository,
        FeatureRepositoryInterface $featureRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->featureRepository = $featureRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(ProductRequest $request)
    {
        return view('admin.pages.product.index', [
            'products' => $this->productRepository->getData($request, ['category']),
            'languages' => $this->activeLanguages()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $product = $this->productRepository->model;

        $url = locale_route('product.store', [], false);
        $method = 'POST';

        return view('admin.pages.product.form', [
            'product' => $product,
            'url' => $url,
            'method' => $method,
            'languages' => $this->activeLanguages(),
            'categories' => $this->categoryRepository->all(),
            'features' => $this->featureRepository->all(['*'],['answers'])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(ProductRequest $request)
    {
        $data = [
            'city_id' => $request['city_id'],
            'status' => (bool)$request['status'],
            'title' => $request['title'],
            'languages' => $this->activeLanguages(),
        ];

        $project = $this->productRepository->create($data);

        // Save Files
        if ($request->hasFile('images')) {
            $project = $this->productRepository->saveFiles($project->id, $request);
        }

        return redirect(locale_route('project.show', $project->id))->with('success', 'Product created.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}