<?php

namespace Depotwarehouse\OAuth2\Client\Provider;

use Depotwarehouse\OAuth2\Client\Entity\WowAccount;
use Depotwarehouse\OAuth2\Client\Entity\WowCharacter;
use Depotwarehouse\OAuth2\Client\Entity\WowProfile;
use Depotwarehouse\OAuth2\Client\Entity\WowUser;

use League\OAuth2\Client\Token\AccessToken;

class WowProvider extends BattleNet
{

    protected $game = "wow";

    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        return "https://{$this->region}.api.blizzard.com/profile/user/wow?namespace=profile-us&locale=en_US&access_token={$token}";
    }

    protected function createResourceOwner(array $response, AccessToken $token)
    {
        $response = (array)($response['characters']);

        $user = new WowUser($response, $this->region);

        return $user;
    }

    protected function makeRequest($endPoint, $token)
    {
        $url = $this->getUrl($endPoint, $token);

        $request = $this->getAuthenticatedRequest(self::METHOD_GET, $url, $token);

        $response = $this->getParsedResponse($request);

        if (false === is_array($response)) {
            throw new \UnexpectedValueException(
                'Invalid response received from Authorization Server. Expected JSON.'
            );
        }

        return $response;
    }

    public function getProfile(AccessToken $token)
    {
        $response = $this->makeRequest('/profile/user/wow', $token);

        if ($response) {
            $accounts = [];
            $data = json_decode($response, true);
            foreach ($data['wow_accounts'] as $account) {
                $characters = [];
                foreach ($account['characters'] as $character) {
                    $characters[] = (new WowCharacter([
                        'id'        => $character['id'],
                        'name'      => $character['name'],
                        'realmId'   => $character['realm']['id'],
                        'realmName' => $character['realm']['name']['en_US'],
                        'realmSlug' => $character['realm']['slug'],
                        'gender'    => $character['gender']['name']['en_US'],
                        'faction'   => $character['faction']['name']['en_US'],
                        'raceId'    => $character['playable_race']['id'],
                        'raceName'  => $character['playable_race']['name']['en_US'],
                        'classId'   => $character['playable_class']['id'],
                        'className' => $character['playable_class']['name']['en_US'],
                        'level'     => $character['level'],
                    ]));
                }
                $accounts[] = (new WowAccount($account['id'], $characters));
            }

            $profile = (new WowProfile($data['id'], $accounts));

            return $profile;
        }

        throw new \UnexpectedValueException(
            'Unexpected empty response from Server'
        );
    }
}
