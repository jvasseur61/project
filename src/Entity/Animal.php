<?php
namespace Entity;
/**
 * @Entity 
 * @Table(name="Animal")
 **/
class Animal
{
    /**
     * @Id ()
     * @Column(type="integer")
     * @GeneratedValue()
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $name;

    /**
     * Eleveur linked to this Ad
     *
     * @OneToMany(targetEntity="Entity\Ad", mappedBy="category")
     */
    private $ad;

    /**
     * Animal linked to this SubCategory
     *
     * @ManyToOne(targetEntity="Entity\SubCategory", inversedBy="animal")
     */
    private $subCategory;
 

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAd()
    {
        return $this->ad;
    }

    public function setAd($ad)
    {
        $this->ad = $ad;
    }

    public function getSubCategory()
    {
        return $this->subCategory;
    }
 
    public function setSubCategory($subCategory)
    {
        $this->subCategory = $subCategory;
    }
 
   
}
