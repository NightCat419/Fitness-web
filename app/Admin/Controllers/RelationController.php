<?php

namespace App\Admin\Controllers;

use App\Relations;
use App\Workout;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class RelationController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Relation List');
            $content->description('You can manage relations between workouts in this page.');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('Edit Relation');
            $content->description('Please fill the below fields and click \"Submit\" button.');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('New Relation');
            $content->description('Please fill the below fields and click \"Submit\" button.');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Relations::class, function (Grid $grid) {

            // $grid->id('ID')->sortable();
            
            $grid->workout_id('Workout ID')->sortable();
            $grid->relation_id('Relation ID')->sortable();
            $grid->relation_name('Relation Name')->sortable();
            $grid->has_tutorial('Has Tutorial')->sortable();
            
            $grid->filter(function ($filter) {
                $filter->useModal();
                
                $filter->disableIdFilter();
                $filter->like('workout_id', 'Workout ID');
                $filter->like('relation_id', 'Relation ID');
                $filter->like('relation_name', 'Relation Name');                
            });
            
            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Relations::class, function (Form $form) {

            // $form->display('id', 'ID');

            $form->select('workout_id', 'Workout ID')->options(Workout::all()->pluck('workout_id', 'workout_id'));
            $form->select('relation_id', 'Relation ID')->options(Workout::all()->pluck('workout_id', 'workout_id'));
            $form->text('relation_name', 'Relation Name')->rules('required|min:3');
            
            $states = [
                'on'  => ['value' => 1, 'text' => 'Yes', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'No', 'color' => 'danger'],
            ];

            $form->switch('has_tutorial', 'Has Tutorial')->states($states);

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
