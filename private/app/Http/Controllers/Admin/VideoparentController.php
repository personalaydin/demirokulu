<?php

namespace App\Http\Controllers\Admin;

use App\Models\Entities\Page;
use App\Models\Entities\Videoparent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VideoparentController extends AdminController
{

    protected $pageMeta = [
        'title' => 'Video Kategori',
        'desc' => 'Ekle, düzenle, kategorile, sırala, sil',
    ];

    protected $modelMeta = [
        'name' => 'videoparent',
        'singularTitle' => 'Video Kategori',
        'pluralTitle' => 'Video Kategoriler',
        'deleteTitle' => 'Video Kategoriyi',
    ];


    public function process(Request $request, string $type, $id = null)
    {
        if ($type == 'store') {
            $row = new Videoparent;
        } else {
            $row = Videoparent::withTrashed()->withDepth()->findOrFail($id);
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

        return $this->processAfter($row, $type);
    }

    public function index($rows = null)
    {
        $rows = Videoparent::withDepth()->defaultOrder()->get();

        return parent::index($rows);
    }

    public function sort($rows = null)
    {
        $rows = Videoparent::withDepth()->defaultOrder()->get()->toTree();

        return parent::sort($rows);
    }

    public function rebuildTree(Request $request)
    {
        $nestedSet = json_decode($request->nestable_list, true);

        Videoparent::rebuildTree($nestedSet);

        $this->generateFlashMessage('success', 'Sıralamalar ve alt öğeler güncellendi!');

        return redirect()->route('admin.'.$this->modelMeta['name'].'.sort');
    }

    public function trash($rows = null)
    {
        $rows = Videoparent::onlyTrashed()->withDepth()->defaultOrder()->get();

        return parent::trash($rows);
    }

    public function create($row = null)
    {
        $row = new Videoparent;

        return parent::create($row);
    }

    public function store(Request $request)
    {
        return $this->process($request, 'store');
    }

    public function edit($id)
    {
        $row = Videoparent::withTrashed()->findOrFail($id);

        return parent::edit($row);
    }

    public function update(Request $request, $id)
    {
        return $this->process($request, 'update', $id);
    }

    public function deleteConfirmation($id)
    {
        $row = Videoparent::findOrFail($id);

        return parent::deleteConfirmation($row);
    }

    public function destroy($id)
    {
        $row = Videoparent::findOrFail($id);

        return parent::destroy($row);
    }

    public function hardDeleteConfirmation($id)
    {
        $row = Videoparent::withTrashed()->findOrFail($id);

        return parent::hardDeleteConfirmation($row);
    }

    public function hardDelete($id)
    {
        $row = Videoparent::withTrashed()->findOrFail($id);

        return parent::hardDelete($row);
    }

    public function restoreConfirmation($id)
    {
        $row = Videoparent::withTrashed()->findOrFail($id);

        return parent::restoreConfirmation($row);
    }

    public function restore($id)
    {
        $row = Videoparent::withTrashed()->findOrFail($id);

        return parent::restore($row);
    }
}
