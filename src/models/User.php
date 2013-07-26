<?php

/**
 * PAris model to represent a user
 */
class User extends Model 
{
    /**
     * Helper to get the list of propositions posted by the user
     * @return Proposition Paris Model
     */
    public function propositions()
    {
        return $this->has_many('Proposition');
    }

    /**
     * Helper to get the list of comments posted by the user
     * @return Comment Paris Model
     */
    public function comments()
    {
        return $this->has_many('Comment');
    }
}
