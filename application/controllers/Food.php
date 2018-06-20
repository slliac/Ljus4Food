<?php

/**
 * Class Food
 *
 * designed for food component making
 */
class Food
{

    private $var;
    private $figure;
    private $recipe = array();
    private $image = array();

    /**
     * set variable function
     * @param $variable mutator
     *
     */
    public function setVar($variable)
    {
        $var = $variable;
    }

    /**
     *
     * set the link => mutator
     * @param $fig figure that want to set
     *
     *
     */
    public function setFigure($fig)
    {
        $figure = $fig;
    }


    /**
     *
     * accessor of image
     * @return array the image of link
     *
     *
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     *
     * mutator of image
     * @param $Image mutator setting of image
     *
     *
     */
    public function setImage($Image)
    {
        for ($i = 0; $i < count($Image); $i++) {
            array_push($this->image, $Image[$i]);
        }
    }

    /**
     *
     * accessor of recipe
     * @return array accessor of the image
     *
     */
    public function getRec()
    {
        return $this->recipe;
    }

    /**
     *
     * mutator of recipe
     * @param $recipe2
     *
     *
     */
    public function setRecipe($recipe2)
    {
        for ($i = 0; $i < count($recipe2); $i++) {
            array_push($this->recipe, $recipe2[$i]);
        }
    }

    /**
     *
     * detail of variable
     * @param $variable
     *
     *
     */
    public function detail($variable)
    {
        echo $variable;
    }

}
