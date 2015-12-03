<?php

    function cate_parent ($data, $parent = 0, $str = "--", $select = 0){
        foreach($data as $category){
            //echo "<option class='' value=".$category['id'].">".$category['cate_name']."</option>";
            $id          = $category['id'];
            $cate_name   = $category['cate_name'];
            if($category['parent_id'] == $parent){
                if ($select != 0 && $id == $select) {
                    echo "<option class='' value='$id' selected='selected'>$str $cate_name</option>";
                } else {
                    echo "<option class='' value='$id'>$str $cate_name</option>";
                }
                cate_parent ($data, $id, $str."--");
            }
        }
    }


    function menu_cate($data,$parent = 0){
        foreach($data as $cate){
            $slug = $cate['slug'];
            $cate_name = $cate['cate_name'];
            if($cate['parent_id'] == $parent){
                echo "<li class='sub-menu first active'><a href='.$slug.' >".$cate_name."</a>
                    <ul class='mega_menu megamenu_col1 clearfix'>
                        <li class='col'>
                            <ol>
                ";
            } else{
                echo "
                        <li class='active'><a href='.$slug.' >".$cate_name."</a></li>

                    ";
            }
        }
        echo "</ol>
                        </li>
                    </ul><!-- //MEGA MENU -->";
    }

//namespace my_namespace;

use Illuminate\Pagination\BootstrapThreePresenter;
use Illuminate\Contracts\Pagination\Paginator;


class ZurbFoundation extends BootstrapThreePresenter implements Illuminate\Contracts\Pagination\Presenter{

    /** * Convert the URL window into Zurb Foundation HTML.
     *
     * @return string
     */

    public function render()
    {
        if( ! $this->hasPages()) return '';

        return sprintf(
            '<ul class="pagination" aria-label="Pagination">%s %s %s</ul></div>',
            $this->getPreviousButton(),
            $this->getLinks(),
            $this->getNextButton()
        );
    }

    /** * Get HTML wrapper for disabled text. *
     * @param string $text * @return string */

    protected function getDisabledTextWrapper($text)
    {
        return '<li class="unavailable" aria-disabled="true">'.$text.'</li>';
    }

    /** * Get HTML wrapper for active text. *
     * @param string $text
     * @return string
     */

    protected function getActivePageWrapper($text)
    {
        return '<li class="current">'.$text.'</li>';
    }

    /** * Get a pagination “dot" element. *
     * @return string
     */
    protected function getDots()
    {
        return $this->getDisabledTextWrapper('…');
    }
}
