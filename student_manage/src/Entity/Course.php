<?php

namespace App\Entity;

use App\Repository\CourseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CourseRepository::class)]
class Course
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $description;

    #[ORM\Column(type: 'string', length: 255)]
    private $duration;

    #[ORM\ManyToMany(targetEntity: StudentClass::class, mappedBy: 'courses')]
    private $studentClasses;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    public function __construct()
    {
        $this->studentClasses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return Collection|StudentClass[]
     */
    public function getStudentClasses(): Collection
    {
        return $this->studentClasses;
    }

    public function addStudentClass(StudentClass $studentClass): self
    {
        if (!$this->studentClasses->contains($studentClass)) {
            $this->studentClasses[] = $studentClass;
            $studentClass->addCourse($this);
        }

        return $this;
    }

    public function removeStudentClass(StudentClass $studentClass): self
    {
        if ($this->studentClasses->removeElement($studentClass)) {
            $studentClass->removeCourse($this);
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
