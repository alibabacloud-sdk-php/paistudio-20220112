<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupRequest\tag;

class GetResourceGroupRequest extends Model
{
    /**
     * @var bool
     */
    public $isAIWorkspaceDataEnabled;
    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'isAIWorkspaceDataEnabled' => 'IsAIWorkspaceDataEnabled',
        'tag'                      => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isAIWorkspaceDataEnabled) {
            $res['IsAIWorkspaceDataEnabled'] = $this->isAIWorkspaceDataEnabled;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsAIWorkspaceDataEnabled'])) {
            $model->isAIWorkspaceDataEnabled = $map['IsAIWorkspaceDataEnabled'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
