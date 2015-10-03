<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 16:28
 */

interface Provider {
    public function getAuthorizationUrl();
}

abstract class AbstractProvider {

    protected function related();
}

class FacebookProvider implements  Provider {

    protected function getAuthorizationUrl(){
        return '';
    }
}
/* Les interfícies són alguna cosa així com una declaració del que ha d'implementar una classe.
*Tindran informació dels mètodes ( exclusivament ) que s'han d'implementar . Les classes abstractes
*contenen atributs i mètodes , alguns poden estar implementats i altres poden ser al seu torn abstractes.
*/