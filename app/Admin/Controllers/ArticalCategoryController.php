<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\ArticalCategory;
use \Str;

class ArticalCategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ArticalCategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ArticalCategory());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
          $grid->column('is_active', 'Is Active')->switch();

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
        $show = new Show(ArticalCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('slug', __('Slug'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ArticalCategory());

        $form->text('name', __('Name'));


        $form->hidden('slug', __('Slug'));
        $form->saving(function (Form $form) {
            $form->slug = Str::slug($form->name);
        });
        $form->switch('is_active', 'Is Active')->default(1);


        return $form;
    }
}
