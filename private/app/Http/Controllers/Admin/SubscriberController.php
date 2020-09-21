<?php

namespace App\Http\Controllers\Admin;

use App\Models\Entities\Subscriber;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SubscriberController extends AdminController
{
    /**
     * Set page meta values
     * @var array
     */
    protected $pageMeta = [
        'title' => 'Abonelik Formu',
        'desc' => 'formları görüntüle, sil',
    ];

    /**
     * Set model localizations
     */
    protected $modelMeta = [
        'name' => 'subscriber',
        'singularTitle' => 'Form',
        'pluralTitle' => 'Formlar',
        'deleteTitle' => 'Formu',
    ];

    /**
     * Display of the resource.
     *
     * @param null $id
     * @return View
     */
    public function show($id)
    {
        $row = Subscriber::findOrFail($id);

        return parent::show($row);
    }

    /**
     * Display a listing of the resource.
     *
     * @param null $rows
     * @return View
     */
    public function index($rows = null)
    {
        $rows = Subscriber::latest()->get();

        return parent::index($rows);
    }

    /**
     * Soft Delete confirm the specified resource from storage.
     *
     * @param  int  $id
     * @return View
     */
    public function deleteConfirmation($id)
    {
        $row = Subscriber::findOrFail($id);

        return parent::deleteConfirmation($row);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $row = Subscriber::findOrFail($id);

        return parent::destroy($row);
    }

    /**
     * Hard Delete confirm the specified resource from storage.
     *
     * @param  int  $id
     * @return View
     */
    public function hardDeleteConfirmation($id)
    {
        $row = Subscriber::findOrFail($id);

        return parent::hardDeleteConfirmation($row);
    }
}
