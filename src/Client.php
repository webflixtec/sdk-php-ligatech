<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Ligatech;

use Exception;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Ligatech\Core\LigatechController;
use Ligatech\Exceptions\LigatechException;

/**
 * Description of Customer
 *
 * @author weslley
 */
class Client extends LigatechController{
    
    public function create(array $data){        
        try{
            $response = $this->http->post('clients/create', [
                "json" => $data,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            
            throw LigatechException::fromGuzzleException($ex);
                        
        } catch (ClientException $ex) {
            
            throw LigatechException::fromGuzzleException($ex);
            
        } catch (BadResponseException $ex) {
            
            throw LigatechException::fromGuzzleException($ex);
            
        } catch (Exception $ex) {
            throw new LigatechException($ex);
        }
    }
    
    public function createSerialToken(array $data){        
        try{
            $response = $this->http->post('serial_tokens/create', [
                "json" => $data,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            
            throw LigatechException::fromGuzzleException($ex);
                        
        } catch (ClientException $ex) {
            
            throw LigatechException::fromGuzzleException($ex);
            
        } catch (BadResponseException $ex) {
            
            throw LigatechException::fromGuzzleException($ex);
            
        } catch (Exception $ex) {
            throw new LigatechException($ex);
        }
    }
    
}
