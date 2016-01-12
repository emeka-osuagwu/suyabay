<?php

namespace Suyabay\Http\Repository;

use Suyabay\Episode;

class EpisodeRepository
{

    /**
    * Return all episode from the database
    */
    public function getAllEpisodes()
    {
        return Episode::all();
    }

    /**
    * Find episode by id
    */
    public function findEpisodeById($id)
    {
        return Episode::find($id);
    }

    /**
    * Find episode via field = value
    */
    public function findEpisodeWhere($field, $value)
    {
        return Episode::where($field, $value);
    }

    /**
    * Return active episode from the database
    */
    public function getActiveEpisodes()
    {
        return $this->getAllEpisodes()->where('status', 1);
    }

    /**
    * Return pending episode from the database
    */
    public function getPendingEpisodes()
    {
        return $this->getAllEpisodes()->where('status', 1);
    }
}