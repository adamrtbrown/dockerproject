<?php
declare(strict_types=1);

namespace Rebates;
class User {
    
    private authenticator: Authentocator;

    /**
     * Should return whether or not this user is authorized.
     */

    public function isAuthorized(): boolean {
        return $this->getAuthenticator()
                    ->isAuthorized();
    }

    public function setAuthenticator(Authenticator $auth): void {
        $this->authenticator = $auth;
    }

    private getAuthenticator(): Authenticator {
        if (is_null($this->authenticator)) {
            $this->setAuthenticator(new Authenticator());
        }
        return $this-authenticator;
    }

}
