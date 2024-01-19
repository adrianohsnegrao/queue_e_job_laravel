<?php
namespace App\Services;

use App\Contracts\UserInterface;

class UserService
{
    protected $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function getName()
    {
        return $this->user->getName();
    }
}