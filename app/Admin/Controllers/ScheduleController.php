<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Admin\Extensions\Tools\ScheduleAdd;
use App\Schedule;
use App\Workout;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

use URL;

class ScheduleController extends Controller
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

            $content->header('Schedule List');
            $content->description('You can manage schedule list in this page.');

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

            $content->header('Edit Schedule');
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

            $content->header('New Schedule');
            $content->description('Please fill the below fields and click \"Submit\" button.');

            $content->body($this->form());
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function showCreateSchedules()
    {
        return Admin::content(function (Content $content) {

            $content->header('New Schedules');
            $content->description('Please fill the below fields and click \"Submit\" button.');

            $content->body($this->create_form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Schedule::class, function (Grid $grid) {

            //$grid->id('ID')->sortable();
            $grid->workout_id('Workout ID')->sortable();
            $grid->date('Date')->sortable();
            $grid->description('Description')->sortable();

            $grid->filter(function ($filter) {
                $filter->useModal();

                $filter->disableIdFilter();
                $filter->like('workout_id', 'Workout ID');
                $filter->like('date', 'Date');
                $filter->like('description', 'Description');
            });
            $grid->tools(function ($tools) {
                $tools->append(new ScheduleAdd());
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function create_form()
    {
        return Admin::form(Schedule::class, function (Form $form) {
            $form->select('workout_id', 'Workout ID')->options(Workout::all()->pluck('workout_id', 'workout_id'));
//            $form->date('date', 'Date');
            $form->dateRange('start_date', 'end_date', 'Date Range');
            $form->text('description', 'Description')->rules('required|min:3');
//            $form->disableSubmit();
            $form->setAction('./create_schedules');
            $form->saving(function (Form $form) {

                return response($form->date);
            });

        });
    }

    public function createSchedules(Request $request)
    {
        $start_date = $request->get('start_date');
        $end_date = $request->get('end_date');

        while ($start_date <= $end_date) {

            $schedule = new Schedule();
            $schedule->date = $start_date;
            $schedule->workout_id = $request->get('workout_id');
            $schedule->description = $request->get('description');

            echo $schedule;
            $schedule->save();

            $start_date = date ("Y-m-d", strtotime("+1 day", strtotime($start_date)));
        }
        return redirect('./admin/schedules');
    }

    /**
     * Make a form builder
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Schedule::class, function (Form $form) {
            $form->select('workout_id', 'Workout ID')->options(Workout::all()->pluck('workout_id', 'workout_id'));
            $form->date('date', 'Date');
            $form->text('description', 'Description')->rules('required|min:3');

//            $form->display('created_at', 'Created At');
//            $form->display('updated_at', 'Updated At');
        });
    }
}
