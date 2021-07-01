<?php

namespace App\Entity;

use App\Repository\HasRolesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HasRolesRepository::class)
 */
class HasRoles
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private integer $id;

    /**
     * @ORM\Column(type="integer")
     */
    private integer $userId;

    /**
     * @ORM\Column(type="integer")
     */
    private integer $roleId;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserid(): int
    {
        return $this->userId;
    }

    public function setUserid(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getRoleId(): int
    {
        return $this->roleId;
    }

    public function setRoleid(int $roleId): self
    {
        $this->roleId = $roleId;

        return $this;
    }
}
