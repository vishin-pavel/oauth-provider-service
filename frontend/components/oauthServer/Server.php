<?php
/**
 * 
 * @author Vishin Pavel
 * @date 29.04.15
 * @time 14:45
 */

namespace frontend\components\oauthServer;


use OAuth2\ClientAssertionType\ClientAssertionTypeInterface;
use OAuth2\ScopeInterface;
use OAuth2\TokenType\TokenTypeInterface;
use yii\base\Configurable;

class Server extends \OAuth2\Server implements Configurable{
    public $storage             = [];
    public $_config              = [];
    public $_grantTypes          = [];
    public $_responseTypes       = [];
    public $_tokenType           = null;
    public $_scopeUtil           = null;
    public $_clientAssertionType = null;

    public function __construct($storage = array(), array $config = array(), array $grantTypes = array(), array $responseTypes = array(), TokenTypeInterface $tokenType = null, ScopeInterface $scopeUtil = null, ClientAssertionTypeInterface $clientAssertionType = null)
    {
        parent::__construct(
            $this->storage,
            $this->_config, 
            $this->_grantTypes,
            $this->_responseTypes, 
            $this->_tokenType, 
            $this->_scopeUtil, 
            $this->_clientAssertionType);
    }
}