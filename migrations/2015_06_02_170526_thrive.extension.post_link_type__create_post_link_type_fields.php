<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionPostLinkTypeCreatePostLinkTypeFields
 *
 * @link          http://thrivehub.com.au/
 * @author        Thrive Hub <sam@thrivehub.com.au>
 */
class ThriveExtensionPostLinkTypeCreatePostLinkTypeFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title'       => 'anomaly.field_type.text',
        'post'        => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'mode'    => 'lookup',
                'related' => 'Anomaly\PostsModule\Post\PostModel',
            ],
        ],
        'description' => 'anomaly.field_type.textarea',
    ];

}
