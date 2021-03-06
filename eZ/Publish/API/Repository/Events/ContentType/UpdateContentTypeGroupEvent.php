<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace eZ\Publish\API\Repository\Events\ContentType;

use eZ\Publish\API\Repository\Values\ContentType\ContentTypeGroup;
use eZ\Publish\API\Repository\Values\ContentType\ContentTypeGroupUpdateStruct;
use eZ\Publish\SPI\Repository\Event\AfterEvent;

final class UpdateContentTypeGroupEvent extends AfterEvent
{
    /** @var \eZ\Publish\API\Repository\Values\ContentType\ContentTypeGroup */
    private $contentTypeGroup;

    /** @var \eZ\Publish\API\Repository\Values\ContentType\ContentTypeGroupUpdateStruct */
    private $contentTypeGroupUpdateStruct;

    public function __construct(
        ContentTypeGroup $contentTypeGroup,
        ContentTypeGroupUpdateStruct $contentTypeGroupUpdateStruct
    ) {
        $this->contentTypeGroup = $contentTypeGroup;
        $this->contentTypeGroupUpdateStruct = $contentTypeGroupUpdateStruct;
    }

    public function getContentTypeGroup(): ContentTypeGroup
    {
        return $this->contentTypeGroup;
    }

    public function getContentTypeGroupUpdateStruct(): ContentTypeGroupUpdateStruct
    {
        return $this->contentTypeGroupUpdateStruct;
    }
}
