<?php namespace Thrive\PostLinkTypeExtension;

use Anomaly\NavigationModule\Link\Contract\LinkInterface;
use Anomaly\NavigationModule\Link\Type\Contract\LinkTypeInterface;
use Anomaly\NavigationModule\Link\Type\LinkTypeExtension;
use Thrive\PostLinkTypeExtension\Form\PostLinkTypeFormBuilder;
use Anomaly\PostsModule\Post\Contract\PostInterface;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;


class PostLinkTypeExtension extends LinkTypeExtension implements LinkTypeInterface
{


    protected $provides = 'anomaly.module.navigation::link_type.post';

    /**
     * Return the entry URL.
     *
     * @param  LinkInterface $link
     * @return string
     */
    public function url(LinkInterface $link)
    {  

        if (!$entry = $link->getEntry()) {
            return url('#');
        }

        if (!$post = $entry->getPost()) {
            return url('#');
        }
        return url($post->route('view'));

    }

    /**
     * Return the entry title.
     *
     * @param  LinkInterface $link
     * @return string
     */
    public function title(LinkInterface $link)
    {
        /* @var PostLinkTypeModel $entry */
        if (!$entry = $link->getEntry()) {
            return '[Broken Link]';
        }

        if (!$post = $entry->getPost()) {
            return '[Broken Link]';
        }

        return $entry->getTitle() ?: $post->getTitle();
    }

    /**
     * Return if the link exists or not.
     *
     * @param  LinkInterface $link
     * @return bool
     */
    public function exists(LinkInterface $link)
    {
        /* @var PostLinkTypeModel $entry */
        if (!$entry = $link->getEntry()) {
            return false;
        }

        return (bool)$entry->getPost();
    }

    /**
     * Return if the link is enabled or not.
     *
     * @param  LinkInterface $link
     * @return bool
     */
    public function enabled(LinkInterface $link)
    {
        /* @var PostLinkTypeModel $entry */
        if (!$entry = $link->getEntry()) {
            return false;
        }

        /* @var PostInterface $post */
        if (!$post = $entry->getPost()) {
            return false;
        }

        return $post->isEnabled();
    }

    /**
     * Return the form builder for
     * the link type entry.
     *
     * @return FormBuilder
     */
    public function builder()
    {
        return app(PostLinkTypeFormBuilder::class);
    }
}
