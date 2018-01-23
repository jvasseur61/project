<?php
namespace Entity;
/**
 * @Entity 
 * @Table(name="SousCategory")
 **/
class SousCategorie
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
     * Eleveur linked to this Categorie
     *
     * @ManyToOne(targetEntity="Entity\Categorie", inversedBy="subCategory")
     */
    private $category;

    /**
     * Eleveur linked to this Animal
     *
     * @OneToMany(targetEntity="Entity\Animal", mappedBy="subCategory")
     */
    private $animal;

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

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getAnimal()
    {
        return $this->animal;
    }

    public function setAnimal($animal)
    {
        $this->animal = $animal;
    }
}
