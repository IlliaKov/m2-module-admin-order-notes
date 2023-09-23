<?php

declare(strict_types=1);

namespace IlliaNova\AdminOrderNotes\Plugin\Adminhtml;

use Magento\Backend\Model\Auth\Session;
use Magento\Sales\Model\Order;

class AddAdminNameToComment
{
    public function __construct(
        private readonly Session $authSession
    ) {
    }

    /**
     * Add admin name to comment
     *
     * @param Order $subject
     * @param string $comment
     * @param bool|string $status
     * @param bool $isVisibleOnFront
     * @return array
     */
    public function beforeAddCommentToStatusHistory(
        Order $subject,
        string $comment,
        bool|string $status,
        bool $isVisibleOnFront
    ): array {
        $userName = sprintf('%s %s | %s',
            $this->authSession->getUser()->getFirstName(),
            $this->authSession->getUser()->getLastName(),
            $this->authSession->getUser()->getUserName()
        );

        $comment .= sprintf('<span> (By %s)</span>', $userName);

        return [$comment, $status, $isVisibleOnFront];
    }
}
