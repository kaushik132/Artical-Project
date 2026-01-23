<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\TravelClip;
use \App\Models\TravelClipCategory;
use Illuminate\Support\Str;


class TravelClipController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'TravelClip';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TravelClip());

        $grid->column('id', __('Id'));
        $grid->column('travelclipcategory.name', __('Travel Category Name'));
        // $grid->column('time_duration', __('Time duration'));
        $grid->column('thumbnail', __('Thumbnail'))->image('/uploads/',50,50);

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(TravelClip::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('travel_clip_id', __('Travel clip id'));
        $show->field('video_link', __('Video link'));
        $show->field('time_duration', __('Time duration'));
        $show->field('thumbnail', __('Thumbnail'));
        $show->field('alt', __('Alt'));
        $show->field('short_content', __('Short content'));
        $show->field('is_active', __('Is active'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new TravelClip());

        $form->select('travel_clip_id', __('Travel clip id'))->options(TravelClipCategory::where('is_active',1)->pluck('name','id'));
        $form->url('video_link', __('Video link'));
        $form->text('time_duration', __('Time duration'));
        $form->image('thumbnail', __('Thumbnail'));
        $form->text('alt', __('Alt'));
        $form->text('short_content', __('Short content'));
        $form->switch('is_active', __('Is active'))->default(1);

        return $form;
    }
}
