<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class ThriveExtensionPostLinkTypeCreatePostLinksStream
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class ThriveExtensionPostLinkTypeCreatePostLinksStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'posts',
        'title_column' => 'title',
        'translatable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'title'       => [
            'translatable' => true,
        ],
        'post'        => [
            'required' => true,
        ],
        'description' => [
            'translatable' => true,
        ],
    ];

}
