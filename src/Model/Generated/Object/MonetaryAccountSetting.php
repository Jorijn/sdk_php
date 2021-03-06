<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class MonetaryAccountSetting extends BunqModel
{
    /**
     * The color chosen for the MonetaryAccount.
     *
     * @var string
     */
    protected $color;

    /**
     * The status of the avatar. Can be either AVATAR_DEFAULT, AVATAR_CUSTOM or
     * AVATAR_UNDETERMINED.
     *
     * @var string
     */
    protected $defaultAvatarStatus;

    /**
     * The chat restriction. Possible values are ALLOW_INCOMING or
     * BLOCK_INCOMING
     *
     * @var string
     */
    protected $restrictionChat;

    /**
     * @param string|null $color               The color chosen for the MonetaryAccount in
     *                                         hexadecimal format.
     * @param string|null $defaultAvatarStatus The status of the avatar. Cannot
     *                                         be updated directly.
     * @param string|null $restrictionChat     The chat restriction. Possible values
     *                                         are ALLOW_INCOMING or BLOCK_INCOMING
     */
    public function __construct(
        string $color = null,
        string $defaultAvatarStatus = null,
        string $restrictionChat = null
    ) {
        $this->color = $color;
        $this->defaultAvatarStatus = $defaultAvatarStatus;
        $this->restrictionChat = $restrictionChat;
    }

    /**
     * The color chosen for the MonetaryAccount.
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * The status of the avatar. Can be either AVATAR_DEFAULT, AVATAR_CUSTOM or
     * AVATAR_UNDETERMINED.
     *
     * @return string
     */
    public function getDefaultAvatarStatus()
    {
        return $this->defaultAvatarStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $defaultAvatarStatus
     */
    public function setDefaultAvatarStatus($defaultAvatarStatus)
    {
        $this->defaultAvatarStatus = $defaultAvatarStatus;
    }

    /**
     * The chat restriction. Possible values are ALLOW_INCOMING or
     * BLOCK_INCOMING
     *
     * @return string
     */
    public function getRestrictionChat()
    {
        return $this->restrictionChat;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $restrictionChat
     */
    public function setRestrictionChat($restrictionChat)
    {
        $this->restrictionChat = $restrictionChat;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->color)) {
            return false;
        }

        if (!is_null($this->defaultAvatarStatus)) {
            return false;
        }

        if (!is_null($this->restrictionChat)) {
            return false;
        }

        return true;
    }
}
