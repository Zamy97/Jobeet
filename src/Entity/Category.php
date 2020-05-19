namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

<!-- that will describe how our objects will be stored in the database -->

/**
 * @ORM\Entity()
 * @ORM\Table(name="categories")
 */

class Category {

  /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
  private $id;


  /**
     * @var string
     *
     * @ORM\Column(type="string", length=100)
     */
   private $name

  /**
     * @var Job[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Job", mappedBy="category")
     */
    private $jobs;

  /**
     * @var Affiliate[]|ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Affiliate", mappedBy="categories")
     */
    private $affiliates;
}
