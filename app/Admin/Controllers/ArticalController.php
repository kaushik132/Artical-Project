<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Artical;
use \App\Models\ArticalCategory;
use Illuminate\Support\Str;

class ArticalController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Artical';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Artical());

        $grid->column('id', __('Id'));
        $grid->column('articalcategory.name', __('Artical Category Name'));
        $grid->column('image', __('Image'))->image('/uploads/', '80', '80');
        $grid->column('title', __('Title'));
        $grid->column('writer_name', __('Writer name'));

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
        $show = new Show(Artical::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('artical_category_id', __('Artical category id'));
        $show->field('image', __('Image'));
        $show->field('alt', __('Alt'));
        $show->field('title', __('Title'));
        $show->field('writer_name', __('Writer name'));
        $show->field('content', __('Content'));
        $show->field('seo_title', __('Seo title'));
        $show->field('seo_des', __('Seo des'));
        $show->field('seo_key', __('Seo key'));
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
        $form = new Form(new Artical());

        $form->select('artical_category_id', __('Artical category id'))->options(ArticalCategory::all()->pluck('name', 'id'));
        $form->image('image', __('Image'));
        $form->text('alt', __('Alt'));
        $form->text('title', __('Title'));
             $form->hidden('slug', __('Slug'));
   $form->saving(function (Form $form) {
    if ($form->title) {
        $form->slug = Str::slug($form->title);
    }
});

        $form->text('writer_name', __('Writer name'));
        $form->textarea('content', __('Content'));
        $form->textarea('seo_title', __('Seo title'));
        $form->textarea('seo_des', __('Seo des'));
        $form->textarea('seo_key', __('Seo key'));

        $form->switch('is_active', 'Is Active')->default(1);


        return $form;
    }
}
