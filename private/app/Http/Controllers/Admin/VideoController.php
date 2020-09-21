<?php

namespace App\Http\Controllers\Admin;

use App\Models\Entities\Page;
use App\Models\Entities\Video;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
// use Illuminate\View\View;
use App\Models\Entities\Videoparent;
use View;

class VideoController extends AdminController
{

    protected $pageMeta = [
        'title' => 'Videos',
        'desc' => 'Ekle, düzenle, kategorile, sırala, sil',
    ];

    protected $modelMeta = [
        'name' => 'video',
        'singularTitle' => 'Video',
        'pluralTitle' => 'Videos',
        'deleteTitle' => 'Video',
    ];


    public function process(Request $request, string $type, $id = null)
    {
        if ($type == 'store') {
            $row = new Video;
        } else {
            $row = Video::withTrashed()->withDepth()->findOrFail($id);
        }

        // Set Fields
        $row->fill($request->all());
        $row->redirect_first_child = (bool) $request->get('redirect_first_child');

        // Set Images
        if ($row->imageAttributes) {
            foreach ($row->imageAttributes as $imageKey => $imageAttributes) {
                $row->setImage($request, $imageKey);
            }
        }

        // return $this->processAfter($row, $type);
        if ($type == 'store') {
            $row->save();
        } else {
            $row->update();
        }

        $row->parents()->sync(is_null($request->input('categories')) ? [] : $request->input('categories'));

        // Set status
        $this->generateFlashMessagePage($type);

        if ($type == 'store') {
            $redirect = redirect()->route('admin.'.$this->modelMeta['name'].'.edit', $row);
        } else {
            $redirect = redirect()->back();
        }

        return $redirect;
    }

    public function index($rows = null)
    {
        $rows = Video::withDepth()->defaultOrder()->get();

        return parent::index($rows);
    }

    public function sort($rows = null)
    {
        $rows = Video::withDepth()->defaultOrder()->get()->toTree();

        return parent::sort($rows);
    }

    public function rebuildTree(Request $request)
    {
        $nestedSet = json_decode($request->nestable_list, true);

        Video::rebuildTree($nestedSet);

        $this->generateFlashMessage('success', 'Sıralamalar ve alt öğeler güncellendi!');

        return redirect()->route('admin.'.$this->modelMeta['name'].'.sort');
    }

    public function trash($rows = null)
    {
        $rows = Video::onlyTrashed()->withDepth()->defaultOrder()->get();

        return parent::trash($rows);
    }

    public function create($row = null)
    {
        $row = new Video;

        // Generate checkbox inputs and share this all view
        $categories = Videoparent::all();
        $categoriesInputs = [];
        $i = 0;
        foreach ($categories as $category) {
            $categoriesInputs[$i]['name'] = 'categories[]';
            $categoriesInputs[$i]['value'] = $category->id;
            $categoriesInputs[$i]['label'] = $category->getTitle();
            $categoriesInputs[$i]['class'] = 'col-xs-12 col-sm-6 col-md-4';
            $i++;
        }
        View::share('categoriesInputs', $categoriesInputs);

        return parent::create($row);
    }

    public function store(Request $request)
    {
        return $this->process($request, 'store');
    }

    public function edit($id)
    {
        $row = Video::withTrashed()->findOrFail($id);

        // Generate checkbox inputs and share this all view
        $categories = Videoparent::all();
        $categoriesInputs = [];
        $i = 0;
        foreach ($categories as $category) {
            $categoriesInputs[$i]['name'] = 'categories[]';
            $categoriesInputs[$i]['value'] = $category->id;
            $categoriesInputs[$i]['label'] = $category->getTitle();
            $categoriesInputs[$i]['class'] = 'col-xs-12 col-sm-6 col-md-4';
            $categoriesInputs[$i]['checked'] = (isset($row) ? $row->parents->contains($category) : false);
            $i++;
        }
        View::share('categoriesInputs', $categoriesInputs);


        return parent::edit($row);
    }

    public function update(Request $request, $id)
    {
        return $this->process($request, 'update', $id);
    }

    public function deleteConfirmation($id)
    {
        $row = Video::findOrFail($id);

        return parent::deleteConfirmation($row);
    }

    public function destroy($id)
    {
        $row = Video::findOrFail($id);

        return parent::destroy($row);
    }

    public function hardDeleteConfirmation($id)
    {
        $row = Video::withTrashed()->findOrFail($id);

        return parent::hardDeleteConfirmation($row);
    }

    public function hardDelete($id)
    {
        $row = Video::withTrashed()->findOrFail($id);

        return parent::hardDelete($row);
    }

    public function restoreConfirmation($id)
    {
        $row = Video::withTrashed()->findOrFail($id);

        return parent::restoreConfirmation($row);
    }

    public function restore($id)
    {
        $row = Video::withTrashed()->findOrFail($id);

        return parent::restore($row);
    }
}
