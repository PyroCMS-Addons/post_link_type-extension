<?php namespace Thrive\PostLinkTypeExtension\Contract;

use Anomaly\PostsModule\Post\Contract\PostInterface;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;


interface PostLinkTypeInterface extends EntryInterface
{

    /**
     * Get the post.
     *
     * @return PostInterface
     */
    public function getPost();

}
