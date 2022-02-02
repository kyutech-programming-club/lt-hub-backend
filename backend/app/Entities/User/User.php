<?php

namespace App\Entities\User;

class User
{
    protected int $id;
    protected string $publicId;
    protected string $name;
    protected string $email;
    protected string $avatarUrl;
    protected string $firebaseId;

    public function __construct(object $user)
    {
        if(isset($user->id)) $this->id = $user->id;
        if(isset($user->public_id)) $this->publicId = $user->public_id;
        if(isset($user->name)) $this->name = $user->name;
        if(isset($user->email)) $this->email = $user->email;
        if(isset($user->avatar_url)) $this->avararUrl = $user->avatar_url;
        if(isset($user->firebase_id)) $this->firebaseId = $user->firebase_id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPublicId()
    {
        return $this->publicId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }

    public function getFirebaseId()
    {
        return $this->firebaseId;
    }
}
