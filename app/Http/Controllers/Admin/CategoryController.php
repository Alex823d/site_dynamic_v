<?php
/**
 *  app/Http/Controllers/Admin/CategoryController.php
 *
 * Date-Time: 07.06.21
 * Time: 17:02
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\Eloquent\CategoryRepository;
use Illuminate\Http\Request;

/**
 * Class CategoryController
 * @package App\Http\Controllers\Admin
 */
class CategoryController extends Controller
{

    /**
     * @var \App\Repositories\CategoryRepositoryInterface
     */
    private $categoryRepository;

    /**
     * CategoryController constructor.
     *
     * @param \App\Repositories\CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        // Initialize categoryRepository
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(CategoryRequest $request)
    {
        return view('admin.pages.category.index', [
            'categories' => $this->categoryRepository->getData($request, ['languages']),
            'languages' => $this->activeLanguages()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $category = $this->categoryRepository->model;

        $url = locale_route('category.store', [], false);
        $method = 'POST';

        return view('admin.pages.category.form', [
            'category' => $category,
            'url' => $url,
            'method' => $method,
            'languages' => $this->activeLanguages()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Admin\CategoryRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CategoryRequest $request)
    {
        $data = [
            'slug' => $request['slug'],
            'position' => $request['position'],
            'status' => (bool)$request['status'],
            'title' => $request['title'],
            'description' => $request['description'],
            'languages' => $this->activeLanguages()
        ];

        $category = $this->categoryRepository->create($data);

        return redirect(locale_route('category.show', $category->id))->with('success', 'Category created.');

    }

    /**
     * Display the specified resource.
     *
     * @param string $locale
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $locale, int $id)
    {
        $category = $this->categoryRepository->findOrFail($id);

        return view('admin.pages.category.show', [
            'category' => $category,
            'languages' => $this->activeLanguages()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $locale
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(string $locale, int $id)
    {
        $category = $this->categoryRepository->findOrFail($id);

        $url = locale_route('category.update', $id, false);
        $method = 'PUT';

        return view('admin.pages.category.form', [
            'category' => $category,
            'url' => $url,
            'method' => $method,
            'languages' => $this->activeLanguages()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param string $locale
     * @param int $id
     *
     * @param \App\Http\Requests\Admin\CategoryRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(string $locale, int $id, CategoryRequest $request)
    {
        $data = [
            'slug' => $request['slug'],
            'position' => $request['position'],
            'status' => (bool)$request['status'],
            'title' => $request['title'],
            'description' => $request['description'],
            'languages' => $this->activeLanguages()
        ];

        $this->categoryRepository->update($id, $data);

        return redirect(locale_route('category.show', $id))->with('success', 'Category Updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $locale
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(string $locale, int $id)
    {
        if (!$this->categoryRepository->delete($id)) {
            return redirect(locale_route('category.show', $id))->with('danger', 'Category not deleted.');
        }
        return redirect(locale_route('category.index'))->with('success', 'Category Deleted.');
    }
}
