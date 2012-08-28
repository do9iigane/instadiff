<?php
/**
 * 
 */
 
 require_once 'instagram/Instagram.php';
 
class instagramClass extends Instagram {

    /**
     * OAuth token
     * @var string
     */
    protected $_oauthToken = null;
	
    /**
     * Retrieves the authorization code to be used in every request
     * @return string. The JSON encoded OAuth token
     */
    public function _setOauthToken() {
        $this->_initHttpClient($this->_endpointUrls['access_token'], CurlHttpClient::POST);
        $this->_httpClient->setPostParam('client_id', $this->_config['client_id']);
        $this->_httpClient->setPostParam('client_secret', $this->_config['client_secret']);
        $this->_httpClient->setPostParam('grant_type', $this->_config['grant_type']);
        $this->_httpClient->setPostParam('redirect_uri', $this->_config['redirect_uri']);
        $this->_httpClient->setPostParam('code', $this->getAccessCode());

        $this->_oauthToken = $this->_getHttpClientResponse();
    }

    /**
     * Return the decoded plain access token value
     * from the OAuth JSON encoded token.
     * @return string
     */
    public function getAccessToken() {
    	if(isset($_SESSION['InstagramAccessToken'])){
    		return $_SESSION['InstagramAccessToken'];
    	}
		
        if ($this->_accessToken == null) {

            if ($this->_oauthToken == null) {
                $this->_setOauthToken();
            }

            $this->_accessToken = json_decode($this->_oauthToken)->access_token;
        }

        return $this->_accessToken;
    }
	
    /**
     * Gets the code param received during the authorization step
     */
    public function getAccessCode() {
    	$r = $_GET[self::RESPONSE_CODE_PARAM];
        return $r;
    }
}
